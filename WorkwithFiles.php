<?php
    $arr=array();
    foreach ($_GET as $val)
    {
        if (file_exists($val)==true)
        {
            $file=fopen("$val",'r');
            while (!feof($file))
            {
                $str=fgets($file);
                array_push($arr,$str);
            }
            asort($arr);
            foreach($arr as $val)
            {
                echo $val . "</br>";
            }
            $bool=fclose($file);
        }
        else
        {
            echo "Failed to open";
        }

    }
?>