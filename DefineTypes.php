<?php
  foreach($_GET as $element)
  {
      if (preg_match_all('/^[+-]\d+\.[0-9]+$/',$element))
      {
        echo "float<br/>";
      }
      else if (is_numeric($element) && !(preg_match_all('/^\.|[+-]\d+\.$/',$element)))
      {
          echo "integer<br/>";
      }
      else if ($element=="true" || $element=="false")
      {
          echo "boolean<br/>";
      }
      else
      {
          echo "string<br/>";
      }
  }
?>