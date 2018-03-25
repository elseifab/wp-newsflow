<?php

namespace Newsflow\WP\Admin;

use Newsflow\WP\Helper\Template;

class Setting
{

    public static function render()
    {
        echo Template::render('admin/settings/page', [
            'headline' => __('Newsflow Settings Page', 'newsflow'),
            'body' => __('Settings specific for the plugin Newsflow3', 'newsflow'),
        ]);
    }

}
