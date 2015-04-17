<?php

/**
 * @version     1.0.0
 * @package     com_ava
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Quang Nguyen <quangnguyen.nq@gmail.com> - http://facebook.com
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of Ava records.
 */
class AvaModelSchools extends JModelList {

    /**
     * Constructor.
     *
     * @param    array    An optional associative array of configuration settings.
     * @see        JController
     * @since    1.6
     */
    public function __construct($config = array()) {
        if (empty($config['filter_fields'])) {
            $config['filter_fields'] = array(
                                'id', 'a.id',
                'name', 'a.name',
                'address', 'a.address',
                'phone_number', 'a.phone_number',
                'fax', 'a.fax',
                'email', 'a.email',
                'website', 'a.website',
                'manager', 'a.manager',

            );
        }

        parent::__construct($config);
    }

    /**
     * Method to auto-populate the model state.
     *
     * Note. Calling getState in this method will result in recursion.
     */
    protected function populateState($ordering = null, $direction = null) {
        // Initialise variables.
        $app = JFactory::getApplication('administrator');

        // Load the filter state.
        $search = $app->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
        $this->setState('filter.search', $search);

        $published = $app->getUserStateFromRequest($this->context . '.filter.state', 'filter_published', '', 'string');
        $this->setState('filter.state', $published);

        
		//Filtering name
		$this->setState('filter.name', $app->getUserStateFromRequest($this->context.'.filter.name', 'filter_name', '', 'string'));

		//Filtering address
		$this->setState('filter.address', $app->getUserStateFromRequest($this->context.'.filter.address', 'filter_address', '', 'string'));

		//Filtering phone_number
		$this->setState('filter.phone_number', $app->getUserStateFromRequest($this->context.'.filter.phone_number', 'filter_phone_number', '', 'string'));

		//Filtering fax
		$this->setState('filter.fax', $app->getUserStateFromRequest($this->context.'.filter.fax', 'filter_fax', '', 'string'));

		//Filtering email
		$this->setState('filter.email', $app->getUserStateFromRequest($this->context.'.filter.email', 'filter_email', '', 'string'));

		//Filtering website
		$this->setState('filter.website', $app->getUserStateFromRequest($this->context.'.filter.website', 'filter_website', '', 'string'));

		//Filtering manager
		$this->setState('filter.manager', $app->getUserStateFromRequest($this->context.'.filter.manager', 'filter_manager', '', 'string'));


        // Load the parameters.
        $params = JComponentHelper::getParams('com_ava');
        $this->setState('params', $params);

        // List state information.
        parent::populateState('a.id', 'asc');
    }

    /**
     * Method to get a store id based on model configuration state.
     *
     * This is necessary because the model is used by the component and
     * different modules that might need different sets of data or different
     * ordering requirements.
     *
     * @param	string		$id	A prefix for the store id.
     * @return	string		A store id.
     * @since	1.6
     */
    protected function getStoreId($id = '') {
        // Compile the store id.
        $id.= ':' . $this->getState('filter.search');
        $id.= ':' . $this->getState('filter.state');

        return parent::getStoreId($id);
    }

    /**
     * Build an SQL query to load the list data.
     *
     * @return	JDatabaseQuery
     * @since	1.6
     */
    protected function getListQuery() {
        // Create a new query object.
        $db = $this->getDbo();
        $query = $db->getQuery(true);

        // Select the required fields from the table.
        $query->select(
                $this->getState(
                        'list.select', 'a.*'
                )
        );
        $query->from('`#__kc_school` AS a');

        

        

        // Filter by search in title
        $search = $this->getState('filter.search');
        if (!empty($search)) {
            if (stripos($search, 'id:') === 0) {
                $query->where('a.id = ' . (int) substr($search, 3));
            } else {
                $search = $db->Quote('%' . $db->escape($search, true) . '%');
                $query->where('( a.id LIKE '.$search.'  OR  a.name LIKE '.$search.'  OR  a.address LIKE '.$search.'  OR  a.phone_number LIKE '.$search.'  OR  a.fax LIKE '.$search.'  OR  a.email LIKE '.$search.'  OR  a.website LIKE '.$search.'  OR  a.manager LIKE '.$search.' )');
            }
        }

        

		//Filtering name

		//Filtering address

		//Filtering phone_number

		//Filtering fax

		//Filtering email

		//Filtering website

		//Filtering manager


        // Add the list ordering clause.
        $orderCol = $this->state->get('list.ordering');
        $orderDirn = $this->state->get('list.direction');
        if ($orderCol && $orderDirn) {
            $query->order($db->escape($orderCol . ' ' . $orderDirn));
        }

        return $query;
    }

    public function getItems() {
        $items = parent::getItems();
        
        return $items;
    }

}
