<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 13:16
 */
?>
<div class="row" style="height: 300px">
    <div class="col pb-2 d-flex justify-content-center align-items-end">
        <h2 class="font-weight-bold">Registration <i class="fas fa-book-reader "></i></h2>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-3 pt-1 border rounded bg-light">
        <form>
            <div class="form-group">
                <small id="info" class="form-text text-muted">We'll never share your data with anyone else.</small>
                <label for="exampleFormControlInput1">Name</label>
                <div class="input-group">
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full name">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-user-alt fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>-Uddannelseslinje-</option>
                    <option>Datateknik/Programmering</option>
                    <option>Datateknik/Infrastruktur</option>
                    <option>It-supporter</option>
                </select>
            </div>
            <div class="form-group">
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
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Create a password">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
                <div class="input-group pt-2">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat password">
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>