<?php
class Wedding_Report_View
{
    public $total     = 0;
    public $wedding   = 0;
    public $reception = 0;
    
    function __construct()
    {
        $this->calculateRSVPs();
    }
    
    function calculateRSVPs()
    {
        $db = \Epoch\Controller::getDB();
        
        $sql = "SELECT * FROM rsvps";
        
        if (!$stmt = $db->query($sql)) {
            throw new \Exception("db error", 500);
        }
        
         while ($row = $stmt->fetch_assoc()){
             $this->total++;
             
             if ($row['wedding'] == 'yes') {
                 $this->wedding++;
                 if ($row['guest'] == 'yes') {
                     $this->wedding++;
                 }
             }
             
             if ($row['reception'] == 'yes') {
                 $this->reception++;
                 if ($row['guest'] == 'yes') {
                     $this->reception++;
                 }
             }
         }
        
        return true;
    }
}