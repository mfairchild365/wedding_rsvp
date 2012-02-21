<?php
class Wedding_RSVP_Edit extends Wedding_RSVP_Record
{
    function handlePost($post = array()) {
        if (!isset($post['name']) || empty($post['name'])) {
            throw new Exception("RSVP has not been saved!  No name was provided", 400);
        }
        
        $this->synchronizeWithArray($post);
        $this->save();
        
        \Epoch\Controller::redirect(Wedding_Controller::$url . "success");
    }
}