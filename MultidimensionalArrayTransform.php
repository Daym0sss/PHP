<?php
    function printarr($arr)
    {
        foreach ($arr as $element) {
            if (is_array($element)) {
                printarr($element);
            } else {
                if (preg_match_all('/^[+-]\d+\.[0-9]+$/', $element)) {
                    printf("%.2f", $element);
                } else if (is_numeric($element) && !(preg_match_all('/^\.|[+-]\d+\.$/', $element))) {
                    $element = $element * 2;
                    echo $element . " ";
                } else {
                    $element = strtoupper($element);
                    echo $element . " ";
                }

            }
        }
    }
    $arr=[[[2,3.14,"hello"],[2.835]],[["goodbye"]]];
    printarr($arr);
?>