<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 12:59
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col" style="height: 200px">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h2 class="">Userlist</h2>
            <div class="table-responsive">
                <table id="dtUserList" class="table table-striped table-sm">
                    <?php include_once '../../includes/instructor/functions/php/getUserList.inc.php'?>
                </table>
            </div>
        </div>
        <div class="col-6">
            <h2 class="border-bottom pb-2">Flex log</h2>
            <div class="table-responsive">
                <table id="dtFlexLog" class="table table-striped table-sm" data-order='[[ 3, "desc" ]]'>
                    <thead>
                    <tr>
                        <th>UserName</th>
                        <th>Name</th>
                        <th>FlexCode</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //include_once '../../includes/instructor/functions/php/getFlexLog.inc.php'?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>