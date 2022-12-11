<?php
$title = "Daftar Fasilitas Kesehatan";
include_once "header.php";
//include_once "koneksi.php"; 
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
                <h2 class="panel-title"><strong> - EDIT DATA - </strong></h2>
                <?php
                include_once "koneksi.php";
                $id_faskes = $_GET['id_faskes'];
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM faskes WHERE id_faskes= '$id_faskes' ");
                //$nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
            </div>
            <div class="panel-body">
                <form action="aksi-edit.php" method="POST">
                    <!-- <table class="table table-bordered table-striped table-admin"> -->
                    <div class="row-md-3">
                        <label for="formGroupExampleInput" class="form-label col-md-12">Nama Fasilitas Kesehatan</label>
                        <input type="hidden" name="id_faskes" value="<?php echo $data['id_faskes'] ?>">
                        <input class="form-control" type="text" placeholder="NAME" name="nama_faskes" value="<?php echo $data['nama_faskes'] ?>">
                    </div>
                    <div class="row-md-3">
                        <label for="formGroupExampleInput" class="form-label col-md-12">Alamat Fasilitas Kesehatan</label>
                        <input class="form-control" type="text" placeholder="ALAMAT" name="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                    <div class="row-md-3">
                        <label for="formGroupExampleInput" class="form-label col-md-12">Nomor Telepon Fasilitas Kesehatan</label>
                        <input class="form-control" type="text" placeholder="NO TELEPON" name="telepon" value="<?php echo $data['telepon'] ?>">
                    </div>
                    <div class="row-md-3">
                        <label for="formGroupExampleInput" class="form-label col-md-12">Lokasi Latitude Fasilitas Kesehatan</label>
                        <input class="form-control" type="text" placeholder="LATITUDE" name="latitude" value="<?php echo $data['latitude'] ?>">
                    </div>
                    <div class="row-md-3">
                        <label for="formGroupExampleInput" class="form-label col-md-12">Lokasi Latitude Fasilitas Kesehatan</label>
                        <input class="form-control" type="text" placeholder="LONGITUDE" name="longitude" value="<?php echo $data['longitude'] ?>">
                    </div>
                    <div class="row-md-10">
                        <button class="btn btn-primary" type="submit">Edit Data</button>
                    </div>
                    <!-- </table> -->
                </form>
            <?php } ?>
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