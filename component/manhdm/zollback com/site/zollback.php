<?php
echo "Tên tôi là mạnh <br>";

$db = JFactory::getDbo();
$query = $db->getQuery(true);

/*$query
    ->select( array('*', 'COUNT(*)') )
    ->from($db->quoteName('#__content'))
    ->group($db->quoteName('catid'));

$db->setQuery($query);
$result = $db->loadResult();

echo $result."<br>";

$row = $db->loadRow();

print_r($row);*/

$query
	->select("*")
	->from("#__content")
	->where('catId=9');

$db->setQuery($query);

print_r($db->loadRow());
?>