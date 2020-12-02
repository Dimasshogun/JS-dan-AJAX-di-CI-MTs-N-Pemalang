    <section id="" class="">
        <div class="container">
            <center>
                <table border="1">
                    <h1>
                        <p>Biodata Diri</p>
                    </h1>
                    <thead>
                        <tr>
                            <td>DATA DIRI</td>
                            <td>KETERANGAN</td>
                            <td>FOTO</td>
                        </tr>
                    </thead>

                    <tr>
                        <td>Nama</td>
                        <td>Dimas Shofa Gunarso</td>
                        <td rowspan="8"><img class="gambar" height="350" width="500" src="gambar/dimas.jpg"> <br /></td>
                    </tr>

                    <tr>
                        <td>TTL</td>
                        <td>Pemalang, 31 Januari 2001</td>

                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>Laki-Laki</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>Jl.gumareh rt/rw 02 Widuri Pemalang</td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>Islam</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>Mahasiswa</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>dimas.gunarso@gmail</td>
                    </tr>

                    <tr>
                        <td>Telpon</td>
                        <td>082314111199</td>
                    </tr>
                </table>
            </center>
            
            <SCRIPT LANGUAGE="JavaScript">
                function warna(pilihan) {
                    alert("Anda Memilih Warna " + pilihan);

                    document.bgColor = pilihan;
                }
            </SCRIPT>


            <hr width="500" color="black" noshade>

            <h3 align="center">Pilih warna favorit anda.</h3>
            <CENTER>
                <FORM>
                    <INPUT TYPE="button" VALUE="Biru" onClick="warna('lightblue')">
                    <INPUT TYPE="button" VALUE="Pink" onClick="warna('pink')">
                    <INPUT TYPE="button" VALUE="Coklat" onClick="warna('burlywood')">
                    <INPUT TYPE="button" VALUE="Kelabu" onClick="warna('darkgray')">
                    <INPUT TYPE="button" VALUE="Oranye" onClick="warna('peachpuff')">
                    <INPUT TYPE="button" VALUE="Putih" onClick="warna('white')">
                    <!-- <INPUT TYPE="button" VALUE="Kembali" onClick=""> -->
                </FORM>

            </CENTER>
            <hr width="500" color="black" noshade>
            <center>
                <form action="">
                    <h1 class="">youtube</h1>
                    <a class="" target="" href="https://www.youtube.com/channel/UCDKSY7Je8y3NRzp3-EsB_5g?view_as=subscriber">Klik disini</a>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a href="<?= base_url(); ?>" class="btn btn-primary"> kembali</a>
                        </div>
                    </div>
                </form>
            </center>
            <hr width="500" color="black" noshade>
        </div>
    </section>