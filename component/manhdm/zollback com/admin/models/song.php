<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class ZollbackModelSong extends JModelItem
{
        /**
         * @var string msg
         */
        protected $rows;
 
        /**
         * Get the message
         * @return string The message to be displayed to the user
         */
        public function getRows() 
        {
                $db = JFactory::getDbo();
                $query = $db->getQuery(true);

                $query
                        ->select("*")
                        ->from("#__zb_song");
                        //->where('catId=9');

                $db->setQuery($query);

                $this->rows = $db->loadRowList();
                return $this->rows;
        }
}


