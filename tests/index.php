<?php
/**
 * Created by PhpStorm.
 * User: tik_squad
 * Date: 8/26/19
 * Time: 11:31 AM
 */

require_once '../vendor/autoload.php';

$data = new \DedeGunawan\UtilityClass\DataStructure(['hallo' => 'test', 'hai' => 'hai']);

//$collection = new \DedeGunawan\UtilityClass\MyCollection(array('hallo', 'hheheh'));

var_dump($data->except(['hallo']));die();