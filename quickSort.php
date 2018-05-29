<?php
   $arr=array(1,43,54,62,21,66,32,78,36,76,39);
   /**
    *从数列中挑出一个元素，称为 “基准”（pivot），
    *重新排序数列，所有元素比基准值小的摆放在基准前面，所有元素比基准值大的摆在基准的后面（相同的数可以到任一边）。
    *在这个分区退出之后，该基准就处于数列的中间位置。这个称为分区（partition）操作。
    *递归地（recursive）把小于基准值元素的子数列和大于基准值元素的子数列排序。
    */
    function quickSort($arr){
        //判断参数是否是一个数组
        if(!is_array($arr)) return false;
        //递归出口:数组长度为1，直接返回数组
        $length = count($arr);
        if($length<=1) return $arr;
        //数组元素有多个,则定义两个空数组
        $left = $right = array();
        //使用for循环进行遍历，把第一个元素当做比较的对象
        for($i=1; $i<$length; $i++){
            //判断当前元素的大小
            if($arr[$i]<$arr[0]){
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        }
        //递归调用
        $left= quickSort($left);
        $right= quickSort($right);
        //将所有的结果合并
        return array_merge($left,array($arr[0]),$right);
    }
   

  echo '<pre>';
  print_r(quickSort($arr))  ;
   

?>