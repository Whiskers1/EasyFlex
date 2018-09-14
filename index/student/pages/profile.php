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
            <h2>Profile</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
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
                    <label>Username</label>
                    <div class="input-group">
                        <input type="name" class="form-control" disabled>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <select class="form-control">
                        <option>-Uddannelseslinje-</option>
                        <option>Datateknik/Programmering</option>
                        <option>Datateknik/Infrastruktur</option>
                        <option>It-supporter</option>
                    </select>
                </div>

                <div>
                    <label>Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" disabled>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-at fa-lg"></i></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>telefon* <span class="text-muted">(Optional)</span></label>
                    <div class="input-group">
                        <input type="name" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
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
                <button class="btn btn-primary btn-lg btn-block" type="submit">Save changes</button>
            </form>
        </div>
        <!-- /.blog-sidebar -->
        <aside class="col-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About***</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="https://www.sde.dk">Syddansk Erhvervsskole</a></li>
                    <li><a href="https://www.praktikpladsen.dk">Praktikpladsen</a></li>
                    <li><a href="https://www.elevplan.dk">Elevplan</a></li>
                    <li><a href="https://www.github.com">GitHub</a></li>
                </ol>
            </div>
        </aside>
        <!-- /.blog-sidebar -->
    </div>
</div>
<!-- /Content -->