<?php
class Wedding_Controller extends \Epoch\Controller
{
    public static $email = "";

    function __construct($options = array())
    {
        parent::__construct($options);
    }
    
    /**
     * Handle data that is POST'ed to the controller.
     *
     * @return void
     */
    function handlePost()
    {
        if (!isset($_POST['_class'])) {
            // Nothing to do here
            return;
        }
        
        $class = new $_POST['_class']($this->options);
        
        if (isset($_POST['action']) && $_POST['action'] == 'delete') {
            $class->handleDelete($_POST);
        } else {
            $class->handlePost($_POST);
        }
    }
}
