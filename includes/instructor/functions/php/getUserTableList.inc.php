<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-20
 * Time: 12:27
 */

//include_once '../../../dbh.inc.php';

//$sql = "SELECT `user_uni`, `user_first`, `user_last`, `user_email`, `user_tlfnr` FROM `users` WHERE `user_access` >= 5;";
$sql = "CALL SELECT_User_List(5);";
$result = $conn->query($sql);

echo '<thead><tr><th>Uni</th><th>Fristname</th><th>Lastname</th><th>Tlfnr</th><th>Email</th></tr></thead><tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
        $uni = utf8_encode($row->user_uni);
        $fname = utf8_encode($row->user_first);
        $lname = utf8_encode($row->user_last);
        $tlf = $row->user_tlfnr;
        $email = $row->user_email;

        echo "<tr><td>$uni</td>";
        echo "<td>$fname</td>";
        echo "<td>$lname</td>";
        echo "<td>$tlf</td>";
        echo "<td>$email</td></tr>";
    }
};

echo '</tbody><tfoot></tfoot>';