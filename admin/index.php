<?php
include_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>LOGIN ADMIN</title>

</head>



<body>
    <div class="container">
        <div class="row">
            <div class="tengah">
                <div class="head-depan tengah">
                    <div class="row">
                        <div class="col-md-1">
                            <img class="img-responsive margin-b10" src="img/logo-logo.png" width="100" height="100" alt="Logo SMA Karangan" />
                        </div>
                        <div class="col-md-11">
                            <h1 class="judul-head">Sistem Informasi Geografis Pemetaan Fasilitas Kesehatan di Kecamatan Lowokwaru Malang</h1>
                            <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat lokasi Fasilitas Kesehatan di Kecamatan Lowokwaru Malang</p>
                        </div>
                    </div>
                    <hr class="hr1 margin-b-10" />
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-b70">
        <nav class="navbar navbar-default navbar-utama" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Status</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info panel-dashboard">
                        <div class="panel-heading centered">
                            <h2 class="panel tittle"><strong> - LOGIN ADMIN - </strong></h2>
                        </div>
                        <div class="panel-body">
                            <form action="aksi-login.php" method="POST" onSubmit="return validasi()">
                                <div class="row-md-3">
                                    <label for="formGroupExampleInput" class="form-label col-md-12">USERNAME</label>
                                    <input class="form-control" type="text" placeholder="username" name="username" id="username">
                                </div>
                                <div class="row-md-3">
                                    <label for="formGroupExampleInput" class="form-label col-md-12">PASSWORD</label>
                                    <input class="form-control" type="password" placeholder="password" name="password" id="password">
                                </div>
                                <div class="row-md-10 centered">
                                    <button class="btn btn-primary" type="submit" value="login">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            </section>
            <?php
            include_once "footer.php"
            ?>

            <script type="text/javascript">
                function validasi() {
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;
                    if (username != "" && password != "") {
                        return true;
                    } else {
                        alert('Username dan Password harus di isi !');
                        return false;
                    }
                }
            </script>
</body>

</html>