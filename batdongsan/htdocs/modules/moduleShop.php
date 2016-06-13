<?php

class Shop extends Generals
{
    function index()
    {
        $this->general();
        global $smarty , $lang;

        $sql = "SELECT * FROM tbl_page";
        $query = $this->query($sql);

        while($value = $this->fetch_array($query))
        {
            $list[] = $value;
        }
        $webroot = WEBROOT;
        $smarty->assign('list',$list);
        $smarty->assign('webroot',$webroot);
        $smarty->display(WAPFULL_LAYOUT);



    }
}
