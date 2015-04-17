<?php

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');

class ManageschoolModelSchool extends JModelItem {

    protected $rows;

//    public function getRows() {
//        $db = JFactory::getDbo();
//        $query = $db->getQuery(true);
//        $query
//                ->select("*")
//                ->from("#__kc_school");
//        $db->setQuery($query);
//        $this->rows = $db->loadRowList();
//        return $this->rows;
//    }
//    
//    protected $row;
//
    public function getById($school_id) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
                ->select("*")
                ->from("#__kc_school")
                ->where("school_id = ".$school_id);
        $db->setQuery($query);
        return $db->loadRowList();
    }
    
    function getAll(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
                ->select("*")
                ->from("#__kc_school");
        $db->setQuery($query);
        return $db->loadRowList();
    }
    
    function add($name, $address, $phone_number, $fax, $email, $website, $manage) {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query
                ->insert("#__kc_school")
                ->set("name = '".$name."'")
                ->set("address = '".$address."'")
                ->set("phone_number = '".$phone_number."'")
                ->set("fax = '".$fax."'")
                ->set("email = '".$email."'")
                ->set("website = '".$website."'")
                ->set("manager = '".$manage."'");
        $db->setQuery($query);
        return $db->loadRowList();
    }

}
