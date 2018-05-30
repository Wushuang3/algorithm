<?php
//二维数组排序，$arr是数据，$keys是排序的健值，$order是排序规则，1是降序，0是升序
function arraySort($arr,$keys,$order=0){
    if(!is_array($arr)){
        return false;
    }
    $keysvalue=array();
    foreach($arr as $key => $val){
        $keysvalue[$key] = $val[$keys];
    }
    if($order == 0){
        asort($keysvalue);
    }else{
        arsort($keysvalue);
    }
    reset($keysvalue);
    foreach($keysvalue as $key => $vals){
        $keysort[$key] = $key;
    }
    $new_array=array();
    foreach($keysort as $key=> $val){
        $new_array[$key]=$arr[$val];
    }
    return $new_array;
}
//测试
$person=array(
    array('id'=>2,'name'=>'zhangsan','age'=>23),
    array('id'=>5,'name'=>'lisi','age'=>28),
    array('id'=>3,'name'=>'apple','age'=>17)
);
$result = arraySort($person,'id',0);
print_r($result);
?>