<?php
    function Exists($element)
    {
        global $temp;
        $result=false;
        foreach ($temp as $val)
        {
            if ($val==$element)
            {
                $result=true;
            }
        }
        return $result;
    }

    function printarr($arr)
    {
        global $temp;
        foreach ($arr as $element)
        {
            if (is_array($element))
            {
                printarr($element);
            }
            else
            {
                if (Exists($element)==false)
                {
                    array_push($temp,$element);
                    echo $element . "</br>";
                }
            }
        }
    }
    $arr=[[[2,3.14,"hello",3.14],[2.835,2.835]],[["goodbye"],["hello"]]];
    $temp=array();
    printarr($arr);
?>
