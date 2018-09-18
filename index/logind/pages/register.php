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
        <form action="../../includes/logind/functions/signup.inc.php" method="post">
            <label>Name</label>
            <div class="form-row">
                <div class="form-group col-6">
                    <input type="text" name="fname" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col-6">
                    <input type="text" name="lname" class="form-control" placeholder="Last name">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="uni" class="form-control" placeholder="Uni">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-at fa-lg"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="password" name="pwd" class="form-control" placeholder="Create a password">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
                <div class="input-group pt-2">
                    <input type="password" name="pwdr" class="form-control" placeholder="Repeat password">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                    </div>
                </div>
                <small class="form-text text-muted">We'll never share your data with anyone else.</small>
            </div>

            <div class="form-group d-flex justify-content-between">
                <a href="index.php"> <i class="fas fa-arrow-left fa-lg"></i> Back</a>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>