<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-12
 * Time: 14:21
 */
?>

<!-- Content -->
<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col">
            <h2>Flex</h2>
            <div class="alert alert-secondary" role="alert">
                <h4>WIP</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form action="" method="post">
                <div class="invisible">
                    <input type="text" name="user" value="<?php echo $_SESSION['u_id']?>">
                </div>
                <small class="form-text text-muted">We'll never share your data with anyone else. WIP</small>

                <div class="form-row">
                    <div class="form-group col-6">
                        <select name="flex" class="form-control" required>
                            <?php include_once '../../includes/student/functions/php/getFlexCode.inc.php'?>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <div id="datetimepicker" class="input-append date form_datetime">
                            <div class="input-group">
                                <input type="text" name="date" class="form-control" value="" readonly placeholder="Date" required>
                                <div class="input-group-append">
                                    <span class="input-group-text add-on"><i class="icon-remove fas fa-times"></i></span>
                                    <span class="input-group-text add-on"><i class="icon-th far fa-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Hours free" required>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group pt-2 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" name="check" class="form-check-input" required>
                        <label class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Content -->