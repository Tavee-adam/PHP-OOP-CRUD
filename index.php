<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstarp.css">
    <link rel="stylesheet" href="bootstrap/datatables.css">

    <title>PHP-OOP CRUD Project using PDO-Mysql and Ajax </title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#"><i class="fab  fa-wolf-pack-battalion"></i>&nbsp;
                PHP-OOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center text-danger fw-bold my-3"> PHP-OOP CRUD Project using bootstrap 5 PDO-Mysql and Ajax </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h5 class="mt-2 text-primary ms-3 float-start">All users</h5>
            </div>
            <div class="col-lg-6">
                <button href="#" type="button" class="btn btn-primary mr-3 float-right">
                    <i class="fas fa-user-plus fa-lg mr-2"></i>Add new user</button>
                <a href="#" class="btn btn-success mr-3 float-right"><i class="fas fa-table fa-lg me-2"></i>Export to Excel</a>
            </div>

        </div>
        <hr class="my-3">


        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="showUser">
                    <table class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 101; $i++) : ?>
                                <tr class="text-center text-secondary">
                                    <td><?= $i ?></td>
                                    <td>Blabla <?= $i ?></td>
                                    <td>Okay <?= $i ?></td>
                                    <td>blabla<?= $i ?>@email.com</td>
                                    <td>095-0443223</td>
                                    <td><a href="#" class="text-success" title="View Details"><i class="fas fa-info-circle fa-lg mr-2"></i></a>
                                        <a href="#" class="text-primary" title="Edit"><i class="fas fa-edit  fa-lg mr-2"></i></a>
                                        <a href="#" class="text-danger" title="Delete"><i class="fas fa fa-trash fa-lg mr-2"></i></a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>












    <!--3th party library script-part -->

    <script src="js/popper.js"></script>
    <script src="js/slim.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("table").DataTable();
        });
    </script>
</body>

</html>