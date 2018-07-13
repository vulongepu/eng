<?php
/**
 * Created by PhpStorm.
 * User: RIN
 * Date: 3/5/2018
 * Time: 4:16 PM
 */

function showCategories($categories, $parent_id = 0, $char = '', $select = 0)
{
    foreach ($categories as $key => $item)
    {
        if($select != 0 && $item['id'] == $select ){
            echo '<option value="'.$item['id'].'" selected>'.$item['name'].'</option>';
        }
        if ($item['parent_id'] == $parent_id)
        {
            echo '<option value="'.$item['id'].'">';
            echo $char . $item['name'];
            echo '</option>';
            unset($categories[$key]);
            showCategories($categories ,$item['id'], $char.'|---');
        }
    }
}

function vl($data){
    echo '<pre>';
    print_r($data);die();
}

function cc(){
    echo 'Done !!!';die;
}

?>