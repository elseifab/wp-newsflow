<?php

namespace Test\Newsflow\WP\Template;

use Newsflow\WP\Admin\Page;

class PagesTest extends \WP_UnitTestCase
{

    public function testAdminPages()
    {
        $adminPages = new Page();
        $pages = $adminPages->all();
        $this->assertTrue(is_array($pages));
        $this->assertTrue(sizeof($pages)>4);
        $this->assertTrue(isset($pages['feed']));
        $this->assertTrue(isset($pages['source']));
        $this->assertTrue(isset($pages['filter']));
        $this->assertTrue(isset($pages['view']));
        $this->assertTrue(isset($pages['setting']));
    }

}
