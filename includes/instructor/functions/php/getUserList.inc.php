<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-10-01
 * Time: 09:00
 */

//include_once '../../../dbh.inc.php';

$sql = "SELECT `id`, `user_uni`, `user_access`, `user_saldo` FROM `users` WHERE 1;";
//$sql = "CALL SELECT_User_List(5);";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = utf8_encode($row->user_uni);
        $access = $row->access;
        $saldo = $row->saldo;

        echo '<option value="'.$id.'">'.$name.'</option>';
    }
};