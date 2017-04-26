<?php

namespace Bolt\Extension\Soapbox\TaxonomyField\Field;

use Bolt\Storage\Field\FieldInterface;
use Bolt\Storage\Field\Type\FieldTypeBase;
use Doctrine\DBAL\Types\Type;

/**
 * This class extends the base field type and looks after serializing and hydrating the field
 * on save and load.
 */
class TaxonomyFieldType extends FieldTypeBase
{

    public function getName()
    {

        return 'taxonomylist';
    }

    public function getStorageType()
    {

        return Type::getType('text');
    }

    public function getStorageOptions()
    {

        return [
            'default' => ''
        ];
    }
}
