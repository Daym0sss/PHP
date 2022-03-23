<?php
    $max=0;
    $longest='';
    foreach ($_GET as $word)
    {
        $temp=strlen($word);
        if ($temp>$max)
        {
            $max=$temp;
            $longest=$word;
        }
    }
    echo "The longest word is: ";
    foreach ($_GET as $word)
    {
        $temp=strlen($word);
        if ($temp==$max)
        {
            echo " $word ";
        }
    }
    echo "</br>";
    echo "The length is: $max";
?>