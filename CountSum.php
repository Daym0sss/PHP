<?php
    foreach($_GET as $num)
    {
        $sum=0;
        for($i=0;$i<strlen($num);$i++)
        {
            if ($num[$i]=='0' || $num[$i]=='1' || $num[$i]=='2' || $num[$i]=='3' || $num[$i]=='4' || $num[$i]=='5' || $num[$i]=='6' || $num[$i]=='7' || $num[$i]=='8' || $num[$i]=='9')
            {
                $sum = $sum + $num[$i];
            }
        }
        echo $sum;
    }
?>