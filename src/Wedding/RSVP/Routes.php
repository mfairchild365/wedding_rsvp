<?php 
class Wedding_RSVP_Routes extends RegExpRouter\RoutesInterface
{
    public static function getGetRoutes()
    {
        return array();
    }
    
    public static function getPostRoutes() 
    {
        return array('/^RSVP$/i' => 'Edit');
    }
    
    public static function getDeleteRoutes()
    {
        return array();
    }
    
    public static function getPutRoutes()
    {
        return array();
    }
}