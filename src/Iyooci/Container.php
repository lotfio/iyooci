<?php namespace Iyooci;

/**
 * Iyooci - PHP DIC (Dependency Injection Container)
 *
 * @package     Iyooci
 * @author      Lotfio Lakehal <lotfiolakehal@gmail.com>
 * @copyright   2016 Lotfio Lakehal
 * @license     MIT
 * @link        https://github.com/lotfio-lakehal/iyooci
 *
 */

use Psr\Container\ContainerInterface;
use Iyooci\Exceptions\NotFoundException;


class Container implements ContainerInterface
{   
    public $name;

    /**
     * dependencies
     * 
     * @var array
     */
    private $dependencies = array();

    /**
     * reflector object
     * @var [type]
     */
    private $reflector;


    public function __construct()
    {
        $this->reflector = new Reflector;
    }

    /**
     *
     * 
     * @return [type]
     */
    public function init(string $class)
    {
        //print_r($this->reflector->getConstructorParams($class)); //TODO on null returns error
        //var_dump($this->reflector->getMethodsParams($class));
        print_r($this->reflector->getMethodsParams($class));
    }
    /**
     * 
     * @return boolean 
     */
    public function has($id)
    {

    }


    /**
     *      
     * @return [type]
     */
    public function get($id)
    {

    }

}