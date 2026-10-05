<?php
/**
 * BV-6: uninstall.php removes both options on every site of a network.
 * Run: php tests/uninstall-multisite-test.php
 */

define('WP_UNINSTALL_PLUGIN', 'badgevo/badgevo.php');

$current = 1;
$options = [];
foreach ([1, 2, 3] as $id) {
    $options[$id] = ['trust_settings' => [], 'trust_db_version' => '1'];
}

function is_multisite(): bool { return true; }
function get_sites(array $args): array { return [1, 2, 3]; }
function switch_to_blog(int $id): void { $GLOBALS['current'] = $id; }
function restore_current_blog(): void { $GLOBALS['current'] = 1; }
function delete_option(string $k): void { unset($GLOBALS['options'][$GLOBALS['current']][$k]); }
function delete_metadata(...$a): void {}

require __DIR__ . '/../uninstall.php';

foreach ($options as $id => $left) {
    assert($left === [], "site $id still has: " . implode(', ', array_keys($left)));
}
echo "OK: options removed on all 3 sites\n";
