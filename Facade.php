<?php

namespace Tumenbayev\LaravelHtmlDomParser;

class Facade extends \Illuminate\Support\Facades\Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() {
        return 'HTMLDomParser';
    }
}
