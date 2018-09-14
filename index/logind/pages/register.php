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
                <small class="form-text text-muted">We'll never share your data with anyone else.</small>
                <label>Name</label>
                <input type="name" class="form-control mb-1" placeholder="First name">
                <input type="name" class="form-control mb-1" placeholder="Last name">
                <div class="input-group">
                    <input type="name" class="form-control" placeholder="Uni">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option>-Uddannelseslinje-</option>
                    <option>Datateknik/Programmering</option>
                    <option>Datateknik/Infrastruktur</option>
                    <option>It-supporter</option>
                </select>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter email">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-at fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Create a password">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
                <div class="input-group pt-2">
                    <input type="password" class="form-control" placeholder="Repeat password">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <a href="index.php"> <i class="fas fa-arrow-left fa-lg"></i> Back</a>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>