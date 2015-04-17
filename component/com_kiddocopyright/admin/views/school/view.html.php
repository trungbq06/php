<?php

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class ManageschoolViewSchool extends JViewLegacy {

    function display($tpl = null) {
        $task = JRequest::getVar('task');

        switch ($task) {
            case 'add':
                $this->setLayout('add');
                break;
            case 'edit':
                $this->setLayout('edit');
                $this->taskEdit();
                break;
            case 'btnAdd':
                $this->taskAdd();
                $this->getAll();
                break;
            default :
                $this->getAll();
        }
        parent::display($tpl);
    }

    function getAll() {
        $model = $this->getModel();
        $schools = $model->getAll();
        $this->assignRef("schools", $schools);
    }

    function taskEdit() {
        $school_id = JRequest::getVar('school_id');
        $model = $this->getModel();
        $school = $model->getById($school_id);
        $this->assignRef("school", $school);
    }
    
    function taskAdd() {
        $name = JRequest::getVar('nameSchool');
        $address = JRequest::getVar('address');
        $phone_number = JRequest::getVar('phone');
        $fax = JRequest::getVar('fax');
        $email = JRequest::getVar('email');
        $website = JRequest::getVar('website');
        $manage = JRequest::getVar('schoolManage');       
        $model = $this->getModel();
        $school = $model->add($name, $address, $phone_number, $fax, $email, $website, $manage);
    }

}
