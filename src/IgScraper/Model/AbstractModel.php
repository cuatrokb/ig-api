<?php

namespace IgScraper\Model;

use IgScraper\Traits\ArrayLikeTrait;
use IgScraper\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package InstagramScraper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}
