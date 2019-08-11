<?php

namespace Tests\Unit\FileManager;

use Servidor\FileManager\FileManager;
use Tests\TestCase;

class FileManagerTest extends TestCase
{
    /**
     * @var FileManager
     */
    private $manager;

    public function setUp()
    {
        $this->manager = new FileManager;
    }

    /** @test */
    public function list()
    {
        $list = $this->manager->list('/var/servidor');

        $this->assertIsArray($list);
        $this->assertNotCount(0, $list);

        $item = $list[0];

        $this->assertArrayHasKey('filename', $list[0]);
        $this->assertArrayHasKey('isDir', $list[0]);
        $this->assertArrayHasKey('isFile', $list[0]);
        $this->assertArrayHasKey('owner', $list[0]);
        $this->assertArrayHasKey('group', $list[0]);
        $this->assertArrayHasKey('perms', $list[0]);
    }
}
