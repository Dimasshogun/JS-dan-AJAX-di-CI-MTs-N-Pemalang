<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="<?= base_url("/assets/js/jquery-3.5.1.min.js") ?>"></script>
    <title><?= $title ?></title>
</head>

<body>
    <section id="" class="">

        <div class="container">

            <h1 class="text-center">Data Guru</h1>
            <!-- <a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('tambah')">Tambah Data</a> -->
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="targetData">

                </tbody>
            </table>

            <div class="modal fade" id="form" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Mahasiswa</h1>
                        </div>
                        <p id="pesan" class="text-danger text-center"></p>
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" placeholder="Isikan nama" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td><input type="number" name="nip" placeholder="Isikan NIP" class="form-control">
                                    <input type="hidden" name="id" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="Isikan Alamat" class="form-control">
                                    <input type="hidden" name="id" value="">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="tambahData()" class="btn btn-primary">Tambah</button>
                                    <button type="button" id="btn-ubah" onclick="ubahData()" class="btn btn-primary">Ubah</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-primary">Batal</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a href="#form" data-toggle="modal" class="btn btn-primary float-right" onclick="submit('tambah')">Tambah Data</a>
        </div>
    </section>

    <style>
        section {
            min-height: 700px;
        }
    </style>

    <script>
        ambilData();

        function ambilData() {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() . "index.php/page/ambildata" ?>',
                dataType: 'json',
                success: function(data) {
                    var baris = '';
                    for (var i = 0; i < data.length; i++) {
                        baris += '<tr>' +
                            '<td>' + (i + 1) + '</td>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].nip + ' </td>' +
                            '<td>' + data[i].jeniskelamin + '</td>' +
                            '<td>' + data[i].alamat + '</td>' +
                            '<td><a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit(' + data[i].id + ')">Ubah</a> <a onclick="hapusdata(' + data[i].id + ')" class="btn btn-danger">Hapus</a></td>' +
                            '</tr>';
                    }
                    $('#targetData').html(baris);
                }
            });
        }

        function tambahData() {
            var nama = $("[name='nama']").val();
            var nip = $("[name='nip']").val();
            var jeniskelamin = $("[name='jeniskelamin']").val();
            var alamat = $("[name='alamat']").val();

            $.ajax({
                type: 'POST',
                data: 'nama=' + nama + '&nip=' + nip + '&jeniskelamin=' + jeniskelamin + '&alamat=' + alamat,
                url: '<?= base_url() . "index.php/page/tambahdata" ?>',
                dataType: 'json',
                success: function(hasil) {
                    $("#pesan").html(hasil.pesan);

                    if (hasil.pesan == '') {
                        $("#form").modal('hide');
                        ambilData();
                        $("[name='nama']").val('');
                        $("[name='nip']").val('');
                        $("[name='jeniskelamin']").val('');
                        $("[name='alamat']").val('');
                    }
                }
            });
        }

        function submit(x) {
            if (x == 'tambah') {
                $('#btn-tambah').show();
                $('#btn-ubah').hide();
            } else {
                $('#btn-tambah').hide();
                $('#btn-ubah').show();

                $.ajax({
                    type: 'POST',
                    data: 'id=' + x,
                    url: '<?= base_url() . "index.php/page/ambilId" ?>',
                    dataType: 'json',
                    success: function(hasil) {
                        $("[name='id']").val(hasil[0].id);
                        $("[name='nama']").val(hasil[0].nama);
                        $("[name='nip']").val(hasil[0].nip);
                        $("[name='jeniskelamin']").val(hasil[0].jeniskelamin);
                        $("[name='alamat']").val(hasil[0].alamat);
                    }
                })
            }
        }

        function ubahData() {
            var id = $("[name='id']").val();
            var nama = $("[name='nama']").val();
            var nip = $("[name='nip']").val();
            var jeniskelamin = $("[name='jeniskelamin']").val();
            var alamat = $("[name='alamat']").val();
            $.ajax({
                type: 'POST',
                data: 'id=' + id + '&nama=' + nama + '&nip=' + nip + '&jeniskelamin=' + jeniskelamin + '&alamat=' + alamat,
                url: '<?= base_url() . "index.php/page/ubahdata" ?>',
                dataType: 'json',
                success: function(hasil) {
                    $("#pesan").html(hasil.pesan);

                    if (hasil.pesan == '') {
                        $("#form").modal('hide');
                        ambilData();
                        // $("[name='nim']").val('');
                        // $("[name='nama']").val('');
                    }
                }
            });
        }

        function hapusdata(id) {
            var tanya = confirm('Apakah Anda yakin akan menghapus data?');

            if (tanya) {
                $.ajax({
                    type: 'POST',
                    data: 'id=' + id,
                    url: '<?= base_url() . "index.php/page/hapusdata" ?>',
                    success: function() {
                        ambilData();
                    }
                });
            }
        }
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>