<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/floating-labels.css" rel="stylesheet">

    <title><?php echo $judul; ?> </title>
</head>

<body OnLoad="tanggal()" OnUnload="tutup()">
    <SCRIPT LANGUAGE="JavaScript">
        // Hide from browsers that do not understand Javascript
        function tanggal() {
            alert("Silakan masukan username dan password anda sebelum login ke Admin MTs N Pemalang");
        }

        //	end hiding 
    </SCRIPT>

    </center>
    
    <form name="g" class="form-signin" method="post" action="<?= base_url('login/login_aksi'); ?>">
    
        <div class="text-center mb-4">
            <img class="mb-1" src="https://ppdb.mtsn1tegal.sch.id/_assets/images/logo.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Login MTs N Pemalang</h1>
            <p>Silakan masukan username dan password anda sebelum login ke Admin MTs N Pemalang</p>
        </div>

        <div class="form-label-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="username">Username</label>
            <small><span class="text-danger"><?= form_error('username'); ?></span></small>

        </div>

        <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="password">Password</label>
            <small><span class="text-danger"><?= form_error('password'); ?></span></small>

        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>" class="text"> kembali</a>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-<?= date('Y') ?> By Teknik Informatika PHB Tegal</p>
    </form>
</body>

</html>