<?php
class Wedding_RSVP_RecordList extends \Epoch\RecordList
{
    function __construct($options = array())
    {
        parent::__construct($options);
    }
    
    function getDefaultOptions()
    {
        $options = array();
        $options['itemClass'] = 'Wedding_RSVP_Record';
        $options['listClass'] = 'Wedding_RSVP_RecordList';
        
        return $options;
    }
    
    public static function getAll($options = array())
    {
        $options = $options + self::getDefaultOptions();
        $options['sql'] = "SELECT id FROM rsvps ORDER BY name DESC";
        return self::getBySql($options);
    }
}