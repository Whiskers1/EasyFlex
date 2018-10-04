<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-10-04
 * Time: 09:14
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col-8">
            <form class="needs-validation" action="index.php?page=report" method="post">
                <div class="col-md-4">
                    <label>Check In</label>
                    <div id="datetimepicker" class="input-append date form_datetime mb-3">
                        <div class="input-group">
                            <input type="text" name="" class="form-control" value="" readonly placeholder="Date">
                            <div class="input-group-append">
                                <span class="input-group-text add-on"><i class="icon-remove fas fa-times"></i></span>
                                <span class="input-group-text add-on"><i class="icon-th far fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <small class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Check in</button>
                </div>
            </form>
        </div>
    </div>
</div>