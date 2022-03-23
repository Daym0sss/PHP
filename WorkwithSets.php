<?php
    $arr1=preg_split("/[\s,]+/",$_POST['First']);
    $arr2=preg_split("/[\s,]+/",$_POST['Second']);
    $arr=array();
    foreach ($arr1 as $val)
    {
        array_push($arr,$val);
    }
    foreach ($arr2 as $val2)
    {
        $exist=0;
        foreach ($arr1 as $val1)
        {
            if ($val2==$val1)
            {
                $exist=1;
            }
        }
        if ($exist==0)
        {
            array_push($arr,$val2);
        }
    }
    foreach ($arr as $val)
    {
        echo "$val</br>";
    }
?>