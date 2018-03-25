<?php

namespace Test\Newsflow\WP\Template;

use Newsflow\WP\Helper\Template;

class BasicTemplateTest extends \WP_UnitTestCase
{

    public function testTemplateSample()
    {
        $headline = 'This is the Headline';
        $body = 'This is the body';
        $notInRender = 'This string should not appear in the render content';

        $output = Template::render('test/sample', [
            'headline' => $headline,
            'body' => $body,
            'nothing' => $notInRender,
        ]);

        $valid = strpos($output, $headline);
        $this->assertTrue($valid > 0);

        $valid = strpos($output, $body);
        $this->assertTrue($valid > 0);

        $valid = strpos($output, $notInRender);
        $this->assertFalse($valid);
    }

    public function testAdminPageRender()
    {
        $output = Template::render('admin/menu/settings', [
        ]);

        $valid = strpos($output, 'newsflow-settings');
        $this->assertTrue($valid > 0);
    }

}
