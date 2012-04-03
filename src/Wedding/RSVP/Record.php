<?php
/**
 * Account class.
 * 
 * user_type can be any of the following:
 *   admin     = globabl admin.  Full permissions on everything.  Not changeable.
 *   user      = standard paying user, in change of an org.
 *   employee  = employee of a user.
 *   guest     = global guest.  No permissions except to register.  Not changeable.
 * @author mike
 *
 */
class Wedding_RSVP_Record extends \Epoch\Record
{
    public $id;
    
    public $name;
    
    public $guest;
    
    public $reception;
    
    public $wedding;
    
    public static function getByID($id)
    {
        return self::getByAnyField('Wedding_RSVP_Record', 'id', (int)$id);
    }
    
    function keys()
    {
        return array('id');
    }
    
    public static function getTable()
    {
        return 'rsvps';
    }

    public function insert()
    {
        parent::insert();
        mail("mfairchild365@gmail.com", "RSVP", $this->name . " has RSVPd.  guest: " . $this->guest . ", reception: " . $this->reception . ", wedding: " . $this->wedding);
    }
}
