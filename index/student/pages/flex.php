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
        <div class="col-6">
            <form>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Uni</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Uni">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline1">Med løntræk*</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline pb-2">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Uden løntræk*</label>
                        </div>
                        <select class="form-control" disabled>
                            <option>Default select</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                    </div>
                    <div class="form-group col-6">
                        <div id="datetimepicker" class="input-append date form_datetime">
                            <label for="exampleInputPassword1">Name*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="" readonly placeholder="Date">
                                <div class="input-group-append">
                                    <span class="input-group-text add-on"><i class="icon-remove fas fa-times"></i></span>
                                    <span class="input-group-text add-on"><i class="icon-th far fa-calendar-alt"></i></span>
                                </div>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Test*</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Hours free">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group pt-2 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Content -->