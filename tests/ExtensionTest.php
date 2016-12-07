<?php

namespace Bolt\Extension\Soapbox\TaxonomyField\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extension\Soapbox\TaxonomyField\TaxonomyFieldExtension;

/**
 * ExtensionName testing class.
 *
 * @author Graham May <graham.may@soapbox.co.uk>
 */
class ExtensionTest extends BoltUnitTest
{
    /**
     * Ensure that the ExtensionName extension loads correctly.
     */
    public function testExtensionRegister()
    {
        $app = $this->getApp(false);
        $extension = new SpotlightFieldExtension($app);
        $app['extensions']->add($extension);

        $name = $extension->getName();
        $this->assertSame($name, 'ExtensionName');
        $this->assertInstanceOf('\Bolt\Extension\ExtensionInterface', $app['extensions']->get('ExtensionName'));
    }
}
