<?php

namespace Konsulting\Laravel\MaintenanceMode\Tests\Commands;

use Konsulting\Laravel\MaintenanceMode\MaintenanceMode;
use Konsulting\Laravel\MaintenanceMode\MaintenanceModeProvider;
use Konsulting\Laravel\MaintenanceMode\Tests\TestCase;

class CommandTestCase extends TestCase
{
    /** @var MaintenanceMode */
    protected $maintenanceMode;

    protected function setUp()
    {
        parent::setUp();

        $this->maintenanceMode = app(MaintenanceMode::class);
    }

    public function getPackageProviders($app)
    {
        return [MaintenanceModeProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('maintenance_mode.driver', 'cache');
    }
}
