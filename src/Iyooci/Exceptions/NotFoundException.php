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

use Psr\Container\NotFoundExceptionInterface;
use Iyooci\Exceptions\ContainerException;

class NotFoundException extends ContainerException implements NotFoundExceptionInterface
{

}