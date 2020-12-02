<SCRIPT LANGUAGE="JavaScript">
    function masukannama()

    {
        if (document.f.nama.value == "")

        {
            alert("anda belum memasukkan nama");
        }
    }

    function masukannis()

    {
        if (document.f.nis.value == "") {
            alert("anda belum memasukkan nis");
        }

    }

    function masukanalamat()

    {
        if (document.f.alamat.value == "") {

            alert("anda belum memasukkan alamat");
        }
    }

    function terimakasih() {

        if ((document.f.nama.value != "") && (document.f.nis.value != "") && (document.f.ialamat.value != ""))

        {
            alert("Terima Kasih Telah mengisi Data");
        } else
            alert("Mohon Data Dilengkapi");

    }
</SCRIPT>

<section id="" class="">

    <div class="container">
        <div class="row mt-3">
            <div class="col md-6">

                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Siswa MTs Negeri Pemalang
                    </div>
                    <div class="card-body">

                        <!-- alert biar yang salah di kasih warna -->
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form name="f" action="" method="post">

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" onFocus="window.status='Silahkan Mengisi Nama Anda';" onBlur="masukannama()">
                            </div>

                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="number" name="nis" class="form-control" id="nis" onFocus="window.status='Silahkan Mengisi NIS Anda';" onBlur="masukannis()">
                            </div>


                            <div class="form-group">
                                <label for="jeniskelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" onFocus="window.status='Silahkan Mengisi Alamat Anda';" onBlur="masukanalamat()">
                            </div>

                            <button type="submit" name="tambah" class="btn btn-primary float-right" Onclick="terimakasih()">Tambah Data</button>
                            <input type="reset" value="Reset"></p>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <a href="<?= base_url(); ?>admin/siswa/index" class="btn btn-primary"> kembali</a>
                                </div>
                            </div>
                            <!-- float-right adalah biar tombol di kanan -->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- my css nggo about -->
<style>
    section {
        min-height: 750px;
    }
</style>