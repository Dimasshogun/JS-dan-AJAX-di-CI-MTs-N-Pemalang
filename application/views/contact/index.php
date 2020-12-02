<section>
    <div class="container">
        <div class="row mt-3">
            <div class="col md-6">
                <h3>Daftar Siswa MTs Negeri Pemalang</h3>
                <ul class="list-group">
                    <center>
                        <table class="table" border="3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Telpon</th>
                                    <th scope="col">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($Contact as $dimas) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $dimas['nama']; ?></td>
                                        <td><?= $dimas['email']; ?></td>
                                        <td><?= $dimas['no_telp']; ?></td>
                                        <td><?= $dimas['pesan']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </center>
                </ul>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>admin/contact/tambah" class="btn btn-primary">Tambah Data Siswa</a>
            </div>
        </div>
    </div>
</section>

<style>
    section {
        min-height: 750px;
    }
</style>