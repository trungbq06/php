<?php

class Home extends Generals{
	
	function index(){
		$this->general_admin();
		global $smarty;
		$number['invoice'] = $this->count_field('SELECT id FROM product_invoice');
		$number['invoice_new'] = $this->count_field('SELECT id FROM product_invoice WHERE active=0');
		
		$number['contact'] = $this->count_field('SELECT id FROM contact');
		$number['contact_new'] = $this->count_field('SELECT id FROM contact WHERE active=0');
		
		$smarty->assign('number', $number);
		
		$smarty->display(DEFAULT_LAYOUT);
	}
	
}