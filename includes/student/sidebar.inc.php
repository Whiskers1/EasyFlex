<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:57
 */
?>
<!-- Wrapper -->
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"><h4>EasyFlex Student</h4></a>
        </div>

        <ul class="list-unstyled components">
            <?php
                if (isset($_SESSION['u_acc'])) {
                    if ($_SESSION['u_acc'] == 10) {
                        echo '<div class="alert alert-info" role="alert">This user are a TempUser</div>';
                    }
                }

                if (isset($_SESSION['u_first']) && isset($_SESSION['u_last'])){
                    echo '<p><i class="far fa-user fa-2x"></i>&nbsp;&nbsp;'.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</p>';
                }
            ?>

            <li id="page_null" class="">
                <a href="index.php"><i class="fas fa-home fa-lg"></i> Home</a>
            </li>
            <?php
                if (isset($_SESSION['u_acc'])) {
                    if ($_SESSION['u_acc'] == 10) {

                    } else {
                        echo '
                            <li id="page_saldo" class="">
                                <a href="index.php?page=saldo"><i class="far fa-hourglass fa-lg"></i> Check saldo</a>
                            </li>
                            <li id="page_flex" class="">
                                <a href="index.php?page=flex"><i class="far fa-file fa-lg"></i> Request flex</a>
                            </li>
                            <li id="page_profile" class="">
                                <a href="index.php?page=profile"><i class="far fa-user fa-lg"></i> Profile</a>
                            </li>';
                    }
                }
            ?>

            <li>
                <a href="../../includes/logout.inc.php" name="submit" ><i class="fas fa-sign-out-alt fa-lg"></i> Logout</a>
            </li>
        </ul>
    </nav>
    <!-- /Sidebar -->

    <script>
        $(document).ready(function () {
            var tempUrl = window.location.href;
            var url = new URL(tempUrl);
            var page = url.searchParams.get('page');
            if (typeof page !== 'undefined') {
                page = "page_" + page;
                $("#" + page).attr("class", "active");
            } else {
                $("#page_null").attr("class", "active");
            }
        });
    </script>

    <!-- flex-column -->
    <div class="d-flex flex-column w-100 ">