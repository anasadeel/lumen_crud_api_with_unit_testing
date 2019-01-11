<?php

use Faker\Factory;

abstract class TestCase extends Laravel\Lumen\Testing\TestCase {

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    protected $faker;

    public function createApplication() {
        return require __DIR__ . '/../bootstrap/app.php';
    }

    public function setUp() {
        parent::setUp();
        $this->faker = Factory::create();
    }

}
