<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-18
 * Time: 09:39
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <h1>hej</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Uni</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Uni-login">
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

        <aside class="col-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">test</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Links</h4>
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
