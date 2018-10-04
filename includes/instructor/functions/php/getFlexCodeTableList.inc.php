<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-21
 * Time: 13:24
 */

//$sql = "SELECT `id`, `flex_name`, `flex_description` FROM `flex_code` WHERE 1;";
$sql = "CALL SELECT_FlexCode_List;";
$result = $conn->query($sql);

echo '<thead><tr><th>FlexCode</th><th>FlexName</th><th>FlexDescription</th></tr></thead><tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $fcode = $row->id;
        $fname = utf8_encode($row->flex_name);
        $des = utf8_encode($row->flex_description);

        echo "<tr><td>$fcode</td>";
        echo "<td>$fname</td>";
        echo "<td>$des</td></tr>";
    }
};

echo '</tbody><tfoot></tfoot>';