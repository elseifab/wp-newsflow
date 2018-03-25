<?php

namespace Newsflow\WP\Setup;

class AdminMenuSetup implements SetupInterface
{

    public static function register()
    {

        add_action('admin_menu', function () {

            \add_menu_page(
                __('Newsflow', 'newsflow'),
                __('Newsflow', 'newsflow'),
                'manage_options',
                'wp-newsflow-admin',
                'Newsflow\WP\Admin\Menu::render',
                "dashicons-lightbulb",
                8
            );

            /*
            \add_submenu_page(
                'options-general.php',
                __('Story Engine', 'wp-story-engine'),
                __('Story Engine', 'wp-story-engine'),
                'manage_options',
                'wp-story-engine-settings',
                'Newsflow\WP\Setting\AdminMenu::render'
            );
            */

        });

    }

}
