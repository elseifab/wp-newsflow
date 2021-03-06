<?php

namespace Newsflow\WP\Setup;

use Newsflow\WP\Admin\Page;

class AdminSetup implements SetupInterface
{

    public static function register()
    {

        add_action("admin_enqueue_scripts", function ($hook) {
            if (!strpos($hook, '_wp-newsflow-')) {
                return;
            }
            wp_enqueue_script('newsflow3-js', plugins_url("/dist/application.js", dirname(__DIR__)), [], uniqid(), true);
        });

        add_action('admin_menu', function () {

            $adminPages = new Page();
            $pages = $adminPages->all();

            \add_menu_page(
                'Newsflow3',
                'Newsflow',
                'manage_options',
                'wp-newsflow-feed',
                'Newsflow\WP\Admin\Page::feed',
                "dashicons-lightbulb",
                8
            );

            foreach ($pages as $key => $page) {
                \add_submenu_page(
                    'wp-newsflow-feed',
                    $pages[$key],
                    $pages[$key],
                    'manage_options',
                    'wp-newsflow-' . $key,
                    'Newsflow\WP\Admin\Page::' . $key
                );
            }

        });

    }

}
