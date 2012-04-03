<?php
class Wedding_RSVP_Edit extends Wedding_RSVP_Record
{
    function handlePost($post = array()) {
        if (!isset($post['name']) || empty($post['name'])) {
            throw new \Exception("RSVP has not been saved!  No name was provided", 400);
        }
        
        $this->synchronizeWithArray($post);
       
       if(!$result = $this->save()) {
         //throw new \Exception("Could not save!", 500);
       }
       
       \Epoch\Controller::redirect(Wedding_Controller::$url . "success");
    }
}
