<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-12
 * Time: 14:03
 */
?>

<div id="content" style="width: 100%; padding: 0px 50px; margin-top: 50px;">
    <div class="row">
        <div class="col">
            <h2>Saldo</h2>
            <div class="alert alert-secondary" role="alert">
                <h4>Your balance is <span class="badge badge-info">4</span> hours</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Flex log</h4>
            <div class="table-responsive">
                <table id="dtFlexLog" class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>FlexType</th>
                        <th>UsedHorus</th>
                    </thead>
                    <tbody>
                    <?php //include_once '../../includes/student/functions/php/getFlexLog.inc.php'?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
