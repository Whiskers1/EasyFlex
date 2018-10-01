<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-28
 * Time: 10:46
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col">
            <h2>Create User</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <form class="needs-validation">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>First name</label>
                        <input type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Last name</label>
                        <input type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>User info</label>
                    <select class="form-control">
                        <option>Begrænset bruger</option>
                        <option>Normal bruger</option>
                        <option>Admin</option>
                    </select>
                </div>

                <div class="mb-1">
                    <label>User info</label>
                    <div class="input-group">
                        <input type="name" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
                        </div>
                    </div>
                </div>

                <div class="mb-1">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-at fa-lg"></i></span>
                        </div>
                    </div>
                </div>

                <div class="mb-1">
                    <div class="input-group">
                        <input type="name" class="form-control" placeholder="Telefon (Optional)">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone fa-lg"></i></span>
                        </div>
                    </div>
                </div>

                <div class="mb-1">
                    <label>Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="New password" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Repeat password" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                        </div>
                    </div>
                    <small class="form-text text-muted">We'll never share your data with anyone else.</small>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Create User</button>
            </form>
        </div>
    </div>
</div>

