<?php
    $str=$_POST["Text"];
    $i=0;
    $arr=array();
    while ($i<strlen($str))
    {
        if ($str[$i]==" ")
        {
            array_push($arr,$str[$i]);
            $i++;
        }
        else
        {
            $temp_str=" ";
            while($i<strlen($str) && $str[$i]!=" ")
            {
              $temp_str.= $str[$i];
              $i++;
            }
            array_push($arr,$temp_str);
        }
    }
    $arr=array_reverse($arr);
    foreach($arr as $val)
    {
        echo $val;
    }
?>