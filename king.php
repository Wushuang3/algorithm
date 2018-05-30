<?php


    // 方案二，使用数学方法解决
    function josephus($n,$m){
        $r = 0;
        for ($i=2; $i <= $n ; $i++) {
            $r = ($r + $m) % $i;
        }

        return $r+1;
    }
    // 测试
    print_r(josephus(10,3));
    
    


    
    function getLastOne($n,$m){
        $arr=range(1,$n);         
        $i= 0;
        while(count($arr)!=1){
            
            if(($i+1)%$m==0){
                unset($arr[$i]);
            }else{ 
                $arr[]=$arr[$i];  //array_push()也是调用这个
                unset($arr[$i]);
            }
            $i++;
        } 
        return $arr[$i];
    }
        echo getLastOne(10,3); 
    
?>