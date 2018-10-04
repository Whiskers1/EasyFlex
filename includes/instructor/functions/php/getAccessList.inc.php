<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-10-01
 * Time: 08:39
 */

//include_once '../../../dbh.inc.php';

$sql = "SELECT `id`, `access_name` FROM `access` WHERE 1;";
//$sql = "CALL SELECT_User_List(5);";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = utf8_encode($row->access_name);

        echo '<option value="'.$id.'">'.$name.'</option>';
    }
};