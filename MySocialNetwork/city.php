<?php

require_once('choose_city.php');
 
if (isset($_GET['action']) && $_GET['action'] == 'getCity')
{
    if (isset($city[$_GET['region']]))
    {
        echo json_encode($city[$_GET['region']]); // возвращаем данные в JSON формате;
    }
    else
    {
        echo json_encode(array('Выберите город'));
    }
 
    exit;
}
 
?>