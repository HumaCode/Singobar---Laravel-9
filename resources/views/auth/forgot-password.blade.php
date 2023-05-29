<!DOCTYPE html>
<html lang="en">

<head>

    <title>Lupa Password</title>

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
                        <h4 class="mb-3 f-w-400">Lupa Password</h4>
                        <hr>

                        <p>lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimi
                            Anda tautan setel ulang kata sandi melalui email yang memungkinkan Anda memilih yang baru.
                        </p>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Masukan Email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Reset Password</button>
                        </form>

                        <hr>

                        <p class="mb-2 text-muted"> <a href="{{ route('login') }}" class="f-w-400">Kembali</a></p>

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