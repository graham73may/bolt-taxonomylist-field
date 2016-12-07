<?php
namespace Bolt\Extension\Soapbox\TaxonomyField\Field;

use Bolt\Storage\Field\FieldInterface;

/**
 * This class extends the base field type and looks after serializing and hydrating the field
 * on save and load.
 *
 * @author Graham May <graham.may@soapbox.co.uk>
 */
class TaxonomyFieldType implements FieldInterface
{

    public function getName()
    {

        return 'taxonomylist';
    }

    public function getTemplate()
    {

        return '_taxonomylist.twig';
    }

    public function getStorageType()
    {

        return 'text';
    }

    public function getStorageOptions()
    {

        return [
            'default' => ''
        ];
    }

}
