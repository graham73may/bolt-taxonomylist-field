<?php

namespace Bolt\Extension\Soapbox\TaxonomyField;

use Bolt\Extension\Soapbox\TaxonomyField\Field\TaxonomyFieldType;
use Bolt\Extension\Soapbox\TaxonomyField\Field\TaxonomyMultipleFieldType;
use Bolt\Extension\SimpleExtension;
use Bolt\Extension\Soapbox\TaxonomyField\Provider\TaxonomyFieldProvider;

/**
 * The main extension class.
 *
 * @author Graham May <graham.may@soapbox.co.uk>
 */
class TaxonomyFieldExtension extends SimpleExtension
{

    /**
     * Pretty extension name
     *
     * @return string
     */
    public function getDisplayName()
    {

        return 'Taxonomy List Field Type';
    }

    public function getServiceProviders()
    {

        return [
            $this,
            new TaxonomyFieldProvider()
        ];
    }

    public function registerFields()
    {

        return [
            new TaxonomyFieldType(),
            new TaxonomyMultipleFieldType(),
        ];
    }

    protected function registerTwigPaths()
    {

        return [
            'templates/bolt' => [
                'position'  => 'prepend',
                'namespace' => 'bolt'
            ]
        ];
    }
}
