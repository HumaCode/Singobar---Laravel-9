<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Register</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend') }}/assets//images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets//css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="{{ asset('backend') }}/assets//images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Register Akun</h4>
                        <hr>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" id="nama" placeholder="Nama">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" id="Email"
                                    placeholder="Email address">
                            </div>

                            <div class="form-group mb-4">
                                <input type="password" name="password" class="form-control" id="Password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Ulangi Password">
                            </div>


                            <button type="submit" class="btn btn-block btn-primary mb-4">Daftar</button>

                            <hr>
                            <p class="mb-0 text-muted">Sudah punya akun? <a href="{{ route('login') }}"
                                    class="f-w-400">Login Sekarang</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('backend') }}/assets//js/vendor-all.min.js"></script>
<script src="{{ asset('backend') }}/assets//js/plugins/bootstrap.min.js"></script>


</body>

</html>