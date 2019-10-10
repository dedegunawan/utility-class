<?php
/**
 * Created by PhpStorm.
 * User: tik_squad
 * Date: 10/10/19
 * Time: 10:56 AM
 */

namespace DedeGunawan\UtilityClass;


abstract class BaseCollection extends MyCollection
{
    /**
     * @return string
     */
    abstract public static function getCollectionType();

    public static function build(array $datas) {
        $object = call_user_func_array([get_called_class(), 'getCollectionType'], []);
        foreach ($datas as $key => $data) {
            $datas[$key] = call_user_func_array([$object, 'build'], [$data]);
        }
        $class = new \ReflectionClass(get_called_class());
        return $class->newInstanceArgs([$datas]);
    }




}