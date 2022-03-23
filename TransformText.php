<?php
    $str="";
    $count=1;
    $temp_str="";
    foreach($_GET as $str)
    {
        $i=0;
        while ($i<strlen($str))
        {
            if ($str[$i]==" ")
            {
                echo $str[$i];
                $i++;
            }
            else
            {
                $temp_count=1;
                while ($i<strlen($str) && $str[$i]!=" ")
                {
                    if ($count % 3==0)
                    {
                        if ($temp_count % 3 ==0)
                        {
                            $temp_str = "<font style='color: yellow'>$str[$i]</font>";
                            $temp_str=strtoupper($temp_str);
                            echo $temp_str;
                        }
                        else
                        {
                            $temp_str=$str[$i];
                            $temp_str=strtoupper($temp_str);
                            echo $temp_str;
                        }
                    }
                    else if ($temp_count % 3 ==0)
                    {
                        $temp_str = "<font style='color: yellow'>$str[$i]</font>";
                        echo $temp_str;
                    }
                    else
                    {
                        echo $str[$i];

                    }
                    $i++;
                    $temp_count++;
                }
                $count++;
            }
        }
    }

?>