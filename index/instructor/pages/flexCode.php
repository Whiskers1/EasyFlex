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
        <h1>hej</h1>
    </div>
    <div class="row">
        <div class="col-4">
            <form>
                <div class="form-group">
                    <label>Add flex code</label>
                    <div class="input-group mb-1">
                        <input type="number" class="form-control" placeholder="Flex Code">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-sort-numeric-down fa-lg"></i></span>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Flex Name">

                    <small class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                    <small class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <div class="col">
            <h2 class="border-bottom pb-2">Flex codes</h2>
            <div class="table-responsive">
                <table id="dtFlexCode" class="table table-striped table-sm">
                    <?php include_once '../../includes/instructor/functions/php/getFlexCodeList.inc.php'?>
                </table>
            </div>
        </div>
    </div>
</div>