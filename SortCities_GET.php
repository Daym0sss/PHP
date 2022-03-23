<?php
    $cities=array();

    foreach ($_GET as $city)
    {
        $exist=0;
        foreach ($cities as $town)
        {
            if ($town==$city)
            {
                $exist=1;
            }
        }
        if ($exist==0)
        {
               array_push($cities,$city);
        }
    }
    asort($cities);
    foreach ($cities as $city)
    {

        echo $city . "</br>";
    }
?>