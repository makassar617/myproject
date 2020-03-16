<link href="<?= base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="<?= base_url('asset/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?= base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?= base_url('asset/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary text-center mt-5">Tabel</h1>
    <p class="mb-4 mt-3">DataTables adalah plugin pihak ketiga yang digunakan untuk menghasilkan tabel demo di bawah
        ini. Untuk informasi lebih lanjut tentang DataTables, silakan kunjungi <a target="_blank"
            href="https://datatables.net">webtek19@gmail.com</a>.</p>

    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"> Tambah data
            </a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-warning text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Kantor</th>
                            <th>Usia</th>
                            <th>Mulai tanggal</th>
                            <th>Gaji</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>


                        <?php foreach ($menu as $m) : ?>
                        <tr>
                            <td><?= $m['nama']; ?></td>
                            <td><?= $m['posisi']; ?></td>
                            <td><?= $m['kantor']; ?></td>
                            <td><?= $m['usia']; ?></td>
                            <td><?= $m['mulai_tanggal']; ?></td>
                            <td><?= $m['gaji']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/detail/'); ?>" class="badge badge-info" data-toggle="modal"
                                    data-target="#exampleModal">Detail</a>
                                <a href="<?= base_url('admin/delet/') . $m['id']; ?>" class="badge badge-danger"
                                    onclick="return confirm ('yakin');">Delete</a>
                            </td>

                        </tr>




                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="<?= base_url('admin/detail'); ?>" method="post">
                    <div class="card">
                        <?php foreach ($menu as $u) : ?>
                        <!-- <img src="<?= base_url('asset/'); ?>img/image/ci.jpg" class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title"> Nama : <?= $u['nama']; ?></h5>
                            <h5 class="card-title"> Posisi : <?= $u['posisi']; ?></h5>
                            <h5 class="card-title"> Kantor : <?= $u['kantor']; ?></h5>
                            <h5 class="card-title"> Usia : <?= $u['usia']; ?></h5>
                            <h5 class="card-title"> Tanggal Bergabung : <?= $u['mulai_tanggal']; ?></h5>
                            <h5 class="card-title"> Salery : <?= $u['gaji']; ?></h5>
                        </div>
                        <?php endforeach; ?>

                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</form>


<!-- MODAL -->

<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Form tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tabel'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Posisi">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kantor" name="kantor" placeholder="Kantor">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usia" name="usia" placeholder="Usia">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mulai_tanggal" name="mulai_tanggal"
                            placeholder="Tanggal bergabung">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Gaji">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>






<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>