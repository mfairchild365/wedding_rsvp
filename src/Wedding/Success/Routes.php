<?php 
class Wedding_Success_Routes extends RegExpRouter\RoutesInterface
{
    public static function getGetRoutes()
    {
        return array('/^success$/i' => 'View');
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