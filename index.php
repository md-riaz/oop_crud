<?php
require_once('./config/dbconfig.php');
$db = new operations();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Crud using OOP</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">Signup Form</h2>
                    </div>
                    <?php $db->store() ?>
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" class="form-control" type="text" name="last_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input id="username" class="form-control" type="text" name="username">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






















    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>