<?php namespace Dukle\WHMAPI;

class WHMAPIFacade extends  \Illuminate\Support\Facades\Facade {

	    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'WHMAPI'; }
}