<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-10
 * Time: 11:20
 */

//include_once '../../../dbh.inc.php';

$sql = "SELECT t2.`user_name`, t2.`name`, `flex_code`, `datetime` FROM `flex_log` AS t1 INNER JOIN `users` AS t2 ON t1.user_id = t2.id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $user_name = $row->user_name;
        $name = utf8_encode($row->name);
        $flex_code = $row->flex_code;
        $datetime = $row->datetime;
        $date = date_create($row->datetime)->format('d-m-Y H:i:s');//('d-m-Y H:i:s')
        $epoch = strtotime($datetime);

        echo "<tr><td>$user_name</td>";
        echo "<td>$name</td>";
        echo "<td>$flex_code</td>";
        echo "<td data-order=\"$epoch\">$date</td></tr>";
    }
};