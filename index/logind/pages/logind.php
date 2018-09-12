<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 13:13
 */
?>
<div class="row" style="height: 300px">
    <div class="col pb-2 d-flex justify-content-center align-items-end">
        <h2 class="font-weight-bold">Logind <i class="fas fa-book-reader "></i></h2>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-3 pt-1 border rounded bg-light">
        <form>
            <div class="form-group">
                <small id="info" class="form-text text-muted">We'll never share your data with anyone else.</small>
                <label for="exampleInputEmail1">Email address</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-at fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadioInline1">Student</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Instructor</label>
            </div>
            <div class="form-group pt-2 d-flex justify-content-between">
                <a href="index.php?page=register">Registration <i class="fas fa-user-plus fa-lg"></i></a>
                <button type="submit" class="btn btn-primary">Log ind</button>
            </div>
        </form>