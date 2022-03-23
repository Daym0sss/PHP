<?php
  foreach ($_GET as $num)
  {
    if (is_numeric($num))
    {
        echo '<table border="2" style="margin: auto; width: 50%; text-align: center; font-size: 20px">';
        $i=1;
        while ($num!=0)
        {
            echo '<tr>';
            echo '<td style="background-color: red">';
            echo '<td style="background-color: red">';
            echo " $i";
            $i=$i+1;
            $num=$num-1;
        }
    }
    else
    {
        echo 'Check input';
    }
  }
?>