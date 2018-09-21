<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-20
 * Time: 12:02
 */

//include_once '../../../dbh.inc.php';

$sql = "SELECT `id`, `flex_name` FROM `flex_code` WHERE 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = utf8_encode($row->flex_name);

        echo "<option value='$id'>$name</option>";
    }
};