<?php

namespace Newsflow\WP\Admin;

use Newsflow\WP\Helper\Template;

class Menu
{

    public static function render()
    {
        echo Template::render('admin/menu/page', [
            'headline' => __('Newsflow Main Page', 'newsflow'),
            'body' => __('Main page for Newsflow3', 'newsflow'),
        ]);
    }

}
