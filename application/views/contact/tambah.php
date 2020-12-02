<section id="contact" class="contact mb-5">
    <div class="container">
        <div class="row text-center">
            <!-- pt-4 mb-4 untuk mengasih jarak -->
            <div class="col text-center pt-4 mb-4">
                <h2>Contact US</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3 text-center">
                    <!-- <div class="card-header">Header</div> -->
                    <div class="card-body">
                        <h5 class="card-title">Contact US</h5>
                        <p class="card-text">Selamat Datang</p>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Location</h2>
                    </li>
                    <li class="list-group-item">My Office</li>
                    <li class="list-group-item">Jl. Tentara Pelajar No.9, Mulyoharjo, Kec. Pemalang, Kabupaten Pemalang, Jawa Tengah 52313</li>
                    <li class="list-group-item">West Java, Indonesia</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <!-- alert biar yang salah di kasih warna -->
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="text" class="form-control" id="no_telp" placeholder="Masukan No telp.">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control"></textarea>
                    </div>
                    <div class="from-group">
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim Pesan!</button>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="<?= base_url(); ?>admin/contact/index" class="btn btn-primary"> kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- my css nggo about -->
<style>
    section {
        min-height: 650px;
    }
</style>