<?php

namespace Bolt\Extension\Soapbox\TaxonomyField\Provider;

use Bolt\Extension\Soapbox\TaxonomyField\Field\TaxonomyFieldType;
use Bolt\Extension\Soapbox\TaxonomyField\Field\TaxonomyMultipleFieldType;
use Bolt\Storage\FieldManager;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * This class extends the the service provider
 *
 * @author Robert Hunt <robert.hunt@soapbox.co.uk>
 */
class TaxonomyFieldProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {

        $app['storage.typemap']       = array_merge($app['storage.typemap'], [
            'taxonomylist' => TaxonomyFieldType::class,
            'taxonomylistmultiple' => TaxonomyMultipleFieldType::class,
        ]);
        $app['storage.field_manager'] = $app->share($app->extend('storage.field_manager', function (FieldManager $manager) {

            $manager->addFieldType('taxonomylist', new TaxonomyFieldType());
            $manager->addFieldType('taxonomylistmultple', new TaxonomyMultipleFieldType());

            return $manager;
        }));
    }

    public function boot(Application $app)
    {
    }
}
