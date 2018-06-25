<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 25/06/2018
 * Time: 10:54
 */

namespace App\Serializer;

class CircularHandlerFactory
{
    /**
     * @return \Closure
     */
    public static function getId()
    {
        return function ($object) {
            return $object->getId();
        };
    }
}