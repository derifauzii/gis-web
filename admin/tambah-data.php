<!DOCTYPE html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container py-5   h-100">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="title">Tambah Data</h2>
                    <form action="admin/aksi-tambah.php" method="POST">
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="NAME" name="nama_faskes">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="ALAMAT" name="alamat">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="NO TELEPON" name="telepon">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="LATITUDE" name="latitude">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="LONGTITUDE" name="longtitude">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->