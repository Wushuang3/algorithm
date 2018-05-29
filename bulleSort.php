<?php
   $arr=array(1,43,54,62,21,66,32,78,36,76,39);
   /**
   * 冒泡排序 
   * 1.比较相邻的元素。如果第一个比第二个大，就交换他们两个。
   * 2.对每一对相邻元素作同样的工作，从开始第一对到结尾的最后一对。在这一点，最后的元素应该会是最大的数。
   * 3.针对所有的元素重复以上的步骤，除了最后一个。
   * 4.持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
   */
   function bulleSort($arr){
        $len = count($arr);
        for($i = 1; $i < $len ; $i++){
            for($k = 0 ; $k<$len-$i;$k++){
                if($arr[$k] > $arr[$k+1]){
                    $tmp = $arr[$k+1];
                    $arr[$k+1] = $arr[$k];
                    $arr[$k] = $tmp;
                }
            }
        }
        return $arr ;
   }  
  echo '<pre>';
  print_r(bulleSort($arr))  ;
   

?>