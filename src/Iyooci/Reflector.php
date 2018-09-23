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

use ReflectionClass;

class Reflector
{
    /**
    *
    *
    * @param  [type] $class [description]
    * @return [type]        [description]
    */
    public function getClass($class)
    {
        return new ReflectionClass($class);
    }

    /**
     *
     *
     * @param  string $class [description]
     * @return [type]        [description]
     */
    public function getConstructorParams(string $class)
    {
        $constructor = $this->getClass($class)->getConstructor();

        $params = [];

        if (!empty($constructor->getParameters())) {

            foreach ($constructor->getParameters() as $param) {

                $params[$param->name] = is_object($param->getClass()) ? $param->getClass()->name : null;
            }
        }

        return !empty($params) ? $params : null;
    }

    /**
     * get all class methods method
     *
     * @return array
     */
    public function getmethods($class)
    {
        $classMethods = $this->getClass($class)->getMethods();
        $methods = array();

        if(is_array($classMethods) && count($classMethods) > 1)
        {
            foreach ($classMethods as $method) {
                
                $methods[] = $method; //->name;
            }
        }

        return $methods;

    }

    /**
     * get methods parameters
     * 
     * @param  class $class
     * @return         
     */
    public function getMethodsParams($class)
    {
        $params = array();

        foreach ($this->getMethods($class) as $method) {

            print_r($method->getParameters());
        }

        return $params;
    }

    /**
     *
     *
     * @param  [type] $interface [description]
     * @return [type]            [description]
     */
    public function getImplementation($interface)
    {
        if (interface_exists($interface)) {
            $implementation = array();

            foreach (get_declared_classes() as $class) {
                $reflect = $this->getClass($class);

                if ($reflect->implementsInterface($interface)) {
                    $implementation[] = $class;
                }
            }

            return $implementation;
        }

        throw new NotFoundException(' Interface ' . $interface . ' Not found ', 1);
    }
}
