<?php

namespace Simphotonics\Dom\Tests;

use Simphotonics\Dom\HtmlLeaf;
use Simphotonics\Dom\HtmlNode;
use Simphotonics\Dom\HtmlTrace;

/**
 * @author D Reschner <d.reschner@simphotonics.com>
 * @copyright 2016 Simphotonics
 * Description: Tests Simphotonics\HtmlTrace.
 */
class HtmlTraceTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $prefix = 'https://simphotonics.com/';
        $anchors = [
        'Welcome' => $prefix.'home',
        'Services' => $prefix.'services',
        'Software Development' => $prefix.'software-development'
        ];

        $trace = new HtmlTrace($anchors);
        $this->assertEquals('<div><a href="https://simphotonics.com/home">Welcome</a><span class="gt"> &gt; </span><a href="https://simphotonics.com/home https://simphotonics.com/services">Services</a><span class="gt"> &gt; </span><a href="https://simphotonics.com/home https://simphotonics.com/software-development">Software Development</a></div>', "$trace");
    }
}
