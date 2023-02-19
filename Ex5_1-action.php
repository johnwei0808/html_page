<?php

     $width = $_POST["width"];

     $height = $_POST["height"];

     $fields = $_POST["fields"];

     $columns = $_POST["columns"];

     echo "<table width='$width' border='1'>";

     echo "<caption><font size='5'> 萬用表格</font> </caption>";

        for ($i=0; $i<$columns; $i++) {

           echo "<tr>";

           for ($j=0; $j<$fields; $j++) {

              echo "<td height=$hright> </td>";

           }

           echo "</tr>";

    }

?>