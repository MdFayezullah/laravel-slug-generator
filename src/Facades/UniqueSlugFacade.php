<?php
namespace Fayez\UniqueSlugGenerator\Facades;

use Fayez\UniqueSlugGenerator\UniqueSlug;
use Illuminate\Support\Facades\Facade;

/**
 * @see UniqueSlug
 */
class UniqueSlugFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-unique-slug';
    }
}

