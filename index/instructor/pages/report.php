<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-17
 * Time: 10:13
 */

$result = '';
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

    $sql = "";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $user_name = $row->user_name;
            $name = utf8_encode($row->name);
        }
    };
}

?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col-8">
            <div class="col">
                <form class="needs-validation" action="index.php?page=report" method="post">
                    <div class="mb-3">
                        <label>Username</label>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user-alt fa-lg"></i></span>
                            </div>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div id="datetimepickerstart" class="input-append date form_datetime">
                                <div class="input-group">
                                    <input type="text" name="" class="form-control" value="" readonly placeholder="Date">
                                    <div class="input-group-append">
                                        <span class="input-group-text add-on"><i class="icon-remove fas fa-times"></i></span>
                                        <span class="input-group-text add-on"><i class="icon-th far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div id="datetimepicker" class="input-append date form_datetime">
                                <div class="input-group">
                                    <input type="text" name="" class="form-control" value="" readonly placeholder="Date">
                                    <div class="input-group-append">
                                        <span class="input-group-text add-on"><i class="icon-remove fas fa-times"></i></span>
                                        <span class="input-group-text add-on"><i class="icon-th far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else. WIP</small>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Save changes</button>
                </form>
            </div>
            <div class="col">
                <h2 class="border-bottom pb-2">Flex saldo</h2>
                <div class="table-responsive">
                    <table id="dtFlexReport" class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>UserName</th>
                            <th>Name</th>
                            <th>FlexCode</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php include_once '../../includes/instructor/functions/php/getFlexSaldo.inc.php'?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <aside class="col-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">Export to PDF</a></li>
                    <li><a href="index.php?page=report">Report 1</a></li>
                    <li><a href="index.php?page=report">Report 2</a></li>
                    <li><a href="index.php?page=report">Report 3</a></li>
                    <li><a href="index.php?page=report">Report 4</a></li>
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
