<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-18
 * Time: 09:11
 */
?>


<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col-4">
            <h2>Create Flex code</h2>
        </div>
        <div class="col-4">
            <h2>Edit Flex code</h2>
        </div>
        <div class="col-2">
            <h2>del Flex code</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form>
                <div class="mb-1">
                    <input type="text" class="form-control" placeholder="Flex Name">
                </div>
                <div class="mb-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </div>
            </form>
        </div>
        <div class="col-4">
            <form>
                <div class="mb-1">
                    <select class="form-control">
                        <option>test</option>
                    </select>
                </div>
                <div class="mb-1">
                    <input type="text" class="form-control" placeholder="Flex Name">
                </div>
                <div class="mb-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </div>
            </form>
        </div>
        <div class="col-2">
            <form class="needs-validation" action="index.php?page=report" method="post">
                <select class="form-control">
                    <option>test</option>
                </select>
                <button class="btn btn-primary btn-block mt-1" type="submit">(user del)</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="border-bottom pb-2">Flex codes</h2>
            <div class="table-responsive">
                <table id="dtFlexCode" class="table table-striped table-sm">
                    <?php include_once '../../includes/instructor/functions/php/getFlexCodeTableList.inc.php'?>
                </table>
            </div>
        </div>
    </div>
</div>