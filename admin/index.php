<?php
include_once "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOGIN ADMIN</title>

</head>



<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="aksi-login.php" method="post">
                                <h3 class="mb-5">LOGIN ADMIN</h3>
                                <form action="aksi-login.php" method="POST">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="username" />
                                        <label class="form-label" for="typeEmailX-2">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="typePasswordX-2">Password</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-start mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                                    </div>

                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>