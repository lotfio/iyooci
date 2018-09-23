<?php namespace Iyooci\Exceptions;

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

use Psr\Container\ContainerExceptionInterface;
use Exception;

class ContainerException extends Exception implements ContainerExceptionInterface
{

}