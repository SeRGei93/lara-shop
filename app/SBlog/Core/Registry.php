<?php


namespace App\SBlog\Core;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    /**
     * @param $name
     * @param $value
     */
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @param $name
     * @return array
     */
    public static function getProperty($name)
    {
        if (isset(self::$properties[$name])){
            return self::$properties[$name];
        }

        return null;
    }

    /**
     * @return array
     */
    public static function getProperties(): array
    {
        return self::$properties;
    }

}