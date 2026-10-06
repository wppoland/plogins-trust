// BV-1 + BV-2, against a running site with Badgevo active.
// Usage: PW=<path to playwright/index.mjs> node tests/live-settings-shortcode.mjs <base url> <path of a page holding [trust_badges]>
// Needs admin/password. Restores "Enable trust badges" to on before it exits.
const { chromium } = await import(process.env.PW || 'playwright');
const [BASE, PAGE] = process.argv.slice(2);
const browser = await chromium.launch({ headless: true, executablePath: process.env.BROWSER || undefined });
const page = await browser.newPage();
const fails = [];
const check = (ok, msg) => { console.log(`${ok ? 'OK  ' : 'FAIL'} ${msg}`); if (!ok) fails.push(msg); };

await page.goto(`${BASE}/wp-login.php`);
await page.fill('#user_login', 'admin');
await page.fill('#user_pass', 'password');
await Promise.all([page.waitForNavigation(), page.click('#wp-submit')]);

async function save(enabled) {
  await page.goto(`${BASE}/wp-admin/admin.php?page=trust-settings`);
  await page.setChecked('#trust_enabled', enabled);
  await Promise.all([page.waitForNavigation(), page.click('#submit')]);
  return (await page.content()).includes('Settings saved.');
}

try {
  check(await save(false), 'BV-2: "Settings saved." shown after save');
  await page.goto(BASE + PAGE);
  const off = await page.content();
  check(!off.includes('[trust_badges]'), 'BV-1: disabled plugin prints no raw [trust_badges]');
  check(!off.includes('trust-badges-css'), 'BV-1: disabled plugin loads no stylesheet');
} finally {
  await save(true);
}
await page.goto(BASE + PAGE);
check((await page.content()).includes('class="trust-badges"'), 'enabled plugin renders the shortcode row');
await browser.close();
process.exit(fails.length ? 1 : 0);
