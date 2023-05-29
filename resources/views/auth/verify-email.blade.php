<!DOCTYPE html>
<html lang="en">

<head>

    <title>Email Verifikasi</title>

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
                        <h4 class="mb-3 f-w-400">Verifikasi Email</h4>
                        <hr>

                        <p>Terima kasih telah mendaftar! Sebelum memulai, dapatkah Anda memverifikasi alamat email Anda
                            dengan mengeklik tautan yang baru saja kami kirimkan melalui email kepada Anda?</p>

                        <p>Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkan email lain
                            kepada Anda.</p>

                        @if (session('status') == 'verification-link-sent')

                        <span class="text-danger">Tautan verifikasi baru telah dikirim ke alamat email yang Anda
                            berikan saat pendaftaran.</span>

                        @endif


                        <form method="POST" action="{{ route('verification.send') }}" class="mb-3">
                            @csrf


                            <button type="submit" class="btn btn-primary btn-md">Kirim Ulang Email Verifikasi</button>

                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>

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