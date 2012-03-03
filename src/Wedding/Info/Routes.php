<?php 
class Wedding_Info_Routes extends RegExpRouter\RoutesInterface
{
    public static function getGetRoutes()
    {
        return array('/^info$/i' => 'View');
    }
    
    public static function getPostRoutes() 
    {
        return array();
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