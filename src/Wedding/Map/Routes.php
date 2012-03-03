<?php 
class Wedding_Map_Routes extends RegExpRouter\RoutesInterface
{
    public static function getGetRoutes()
    {
        return array('/^map$/i' => 'View');
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