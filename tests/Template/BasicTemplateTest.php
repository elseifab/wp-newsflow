<?php

namespace Test\Newsflow\WP\Template;

use Newsflow\WP\Helper\Template;

class BasicTemplateTest extends \WP_UnitTestCase
{

    public function testAdminPageRender()
    {
        $output = Template::render('admin/menu/settings', [
            'headline' => 'This is the Headline',
            'body' => 'This is the body',
        ]);

        $valid = strpos($output, 'This is the Headline');
        $this->assertTrue($valid > 0);

        $valid = strpos($output, 'This is the body');
        $this->assertTrue($valid > 0);
    }

}
