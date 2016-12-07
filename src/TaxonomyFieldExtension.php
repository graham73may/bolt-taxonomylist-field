<?php

namespace Bolt\Extension\Soapbox\TaxonomyField;

use Bolt\Extension\Soapbox\TaxonomyField\Field\TaxonomyFieldType;
use Bolt\Extension\SimpleExtension;

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

    public function registerFields()
    {

        return [
            new TaxonomyFieldType(),
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
