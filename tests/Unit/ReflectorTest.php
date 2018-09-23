<?php namespace Tests\Unit;

/**
 * Iyooci - PHP DIC (Dependency Injection Container)
 *
 * @package     Timino
 * @author      Lotfio Lakehal <lotfiolakehal@gmail.com>
 * @copyright   2016 Lotfio Lakehal
 * @license     MIT
 * @link        https://github.com/lotfio-lakehal/iyooci
 *
 *
 */
use PHPUnit\Framework\TestCase;

class ReflectorTest extends TestCase
{
    /**
     * Reflector
     * 
     * @var Object
     */
    public $reflector;

    /**
     * 
     */
    public function setUp()
    {
        $this->reflector = new \Iyooci\Reflector;
    }
    /**
     * @test
     */
    public function testGetClassMethod()
    {
        // get nedded class dependency
        $cls = $this->reflector->getClass(\Iyooci\Container::class)->name;
        // assert exact class
        $this->assertEquals(\Iyooci\Container::class, $cls);
    }
}