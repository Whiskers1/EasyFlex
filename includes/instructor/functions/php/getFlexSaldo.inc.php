<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-07
 * Time: 09:19
 */

//include_once '../../../dbh.inc.php';

$sql = "SELECT t2.`user_name`, t2.`name`, `saldo` FROM `flex_saldo` AS t1 INNER JOIN `users` AS t2 ON t1.user_id = t2.id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $user_name = $row->user_name;
        $name = utf8_encode($row->name);
        $saldo = $row->saldo;

        echo "<tr><td>$user_name</td>";
        echo "<td>$name</td>";
        echo "<td>$saldo</td></tr>";
    }
};

