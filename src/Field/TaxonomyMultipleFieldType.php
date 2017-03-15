<?php

namespace Bolt\Extension\Soapbox\TaxonomyField\Field;

use Bolt\Storage\Field\Type\FieldTypeBase;
use Doctrine\DBAL\Types\Type;

/**
 * This class extends the base field type and looks after serializing and hydrating the field
 * on save and load.
 *
 * @author Graham May <graham.may@soapbox.co.uk>
 */
class TaxonomyMultipleFieldType extends FieldTypeBase
{

    public function getName()
    {

        return 'taxonomylistmultiple';
    }

    public function getTemplate()
    {

        return '@bolt/_taxonomylist.twig';
    }

    public function getStorageType()
    {

        return Type::getType('json_array');
    }

    public function getStorageOptions()
    {

        return [];
    }

}
