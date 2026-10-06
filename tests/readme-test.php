<?php
/**
 * BV-5: the wp.org description must not say the plugin is missing from wp.org.
 * Run: php tests/readme-test.php
 */

$readme = (string) file_get_contents(__DIR__ . '/../readme.txt');
assert(stripos($readme, 'not yet on the WordPress.org') === false, 'readme still claims it is not on wp.org');
echo "OK: readme has no not-on-wp.org claim\n";
