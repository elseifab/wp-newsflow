<?php

namespace Newsflow\WP\Setup;

class AdminSettingSetup implements SetupInterface
{

    public static function register()
    {

        add_action('admin_menu', function () {

            \add_submenu_page(
                'options-general.php',
                __('Newsflow', 'newsflow'),
                __('Newsflow', 'newsflow'),
                'manage_options',
                'wp-newsflow-settings',
                'Newsflow\WP\Admin\Setting::render'
            );

        });

    }

}
