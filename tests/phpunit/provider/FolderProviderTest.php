<?php

use brendt\stitcher\provider\FolderProvider;
use brendt\stitcher\Config;

class FolderProviderTest extends PHPUnit_Framework_TestCase {

    public function __construct() {
        parent::__construct();

        Config::load('./tests');
    }

    protected function createFolderProvider() {
        return new FolderProvider('./setup/data');
    }

    public function test_folder_provider_parse() {
        $provider = $this->createFolderProvider();

        $data = $provider->parse('churches/');

        $this->assertArrayHasKey('church-a', $data);
        $this->assertArrayHasKey('church-b', $data);
        $this->assertArrayHasKey('church-c', $data);
    }

}