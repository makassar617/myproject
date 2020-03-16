<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 font-weight-bold text-primary text-center"><?= $title; ?></h1>

    <!-- ***************************** Baru ******************************* -->


    <div class="">
        <div class="row">
            <div class="col-lg-12">



                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">@</th>
                            <th scope="col">Database</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($pengaturan as $p) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>

                            <td><?= $p['menu']; ?></td>

                            <td>
                                <a href="" class="badge badge-warning">edit</a>
                                <a href="" class="badge badge-info">delet</a>
                            </td>
                        </tr>

                        <?php $i++; ?>

                        <?php endforeach; ?>

                    </tbody>
                </table>

                <a href="" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalScrollable">Tambah
                    Laporan Baru</a>

            </div>
        </div>

    </div>




















    <!-- *************************************************************************** -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<!-- ************************** MODAL ***************************************** -->




<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Kota</label>
                            <!-- <input type="text" class="form-control" id="inputCity"> -->
                            <select name="" class="form-control" id="inputcity">
                                <option selected>Pilih</option>
                                <option>Makassar</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                                <option>Surabaya</option>
                                <option>Solo</option>
                                <option>Pekanbaru</option>
                                <option>Lampung</option>
                                <option>Bekasi</option>
                                <option>Banten</option>
                                <option>Yogyakarta</option>
                                <option>Semarang</option>
                                <option>Sukabumi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Negara</label>
                            <select id="inputState" class="form-control">
                                <option selected>Pilih</option>
                                <option>Indonesia</option>
                                <option>Singapura</option>
                                <option>Malaysa</option>
                                <option>Filipina</option>
                                <option>Australia</option>
                                <option>India</option>
                                <option>China</option>
                                <option>Japan</option>
                                <option>Italy</option>
                                <option>Amerika</option>
                                <option>Spanyol</option>
                                <option>Germany</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Kode Pos</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Ingat saya
                            </label>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>