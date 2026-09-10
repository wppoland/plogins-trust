<?php
/**
 * Uninstall cleanup for Trust.
 *
 * Removes the plugin's own options when it is deleted from wp-admin. Only the
 * options Trust creates are deleted; WooCommerce data is never touched.
 *
 * @package Trust
 */

declare(strict_types=1);

defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('trust_settings');
delete_option('trust_db_version');

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'trust_pro_banner_dismissed', '', true);
