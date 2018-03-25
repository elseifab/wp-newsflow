<?php

namespace Newsflow\WP\Admin;

use Newsflow\WP\Helper\Template;

class Page
{
    public function all() {
        return [
            'feed' => __('Feed','newsflow'),
            'source' => __('Sources','newsflow'),
            'filter' => __('Filters','newsflow'),
            'view' => __('Views','newsflow'),
            'setting' => __('Settings','newsflow'),
        ];
    }

    public static function feed()
    {
        echo Template::render('admin/menu/feed', [
        ]);
    }


    public static function filter()
    {
        echo Template::render('admin/menu/filters', [
            'headline' => __('Filters', 'newsflow'),
        ]);
    }

    public static function source()
    {
        echo Template::render('admin/menu/sources', [
            'headline' => __('Sources', 'newsflow'),
        ]);
    }

    public static function view()
    {
        echo Template::render('admin/menu/views', [
            'headline' => __('Views', 'newsflow'),
        ]);
    }

    public static function setting()
    {
        echo Template::render('admin/menu/settings', [
            'headline' => __('Settings', 'newsflow'),
            'body' => __('Settings specific for the plugin Newsflow3', 'newsflow'),
        ]);
    }

}
