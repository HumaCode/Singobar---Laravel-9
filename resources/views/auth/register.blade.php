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
    <div class="auth-content ">
        <div class="text-center">
            <img src="{{ asset('backend') }}/assets//images/logo.png" alt="" class="img-fluid mb-4">
        </div>
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400 text-center">Register Akun</h4>
                        <hr>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                                    id="nama" placeholder="Nama">
                                @error('name')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="form-group mb-3">
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    placeholder="Username">
                                @error('username')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="input-group mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn  btn-primary" type="button" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="feather icon-info"></i></button>
                                </div>
                                @error('email')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="Password"
                                    placeholder="Password">
                                @error('password')
                                <span class="text-danger mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Ulangi Password">
                            </div>


                            <button type="submit" class="btn btn-block btn-primary mb-4">Daftar</button>

                            <hr>
                            <p class="mb-0 text-muted text-center">Sudah punya akun? <a href="{{ route('login') }}"
                                    class="f-w-400">Login Sekarang</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="exampleModalCenter" class="modal fade" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Perhatian </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4 class="mb-0 text-danger">Gunakan email yang aktif...!!</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('backend') }}/assets//js/vendor-all.min.js"></script>
<script src="{{ asset('backend') }}/assets//js/plugins/bootstrap.min.js"></script>


</body>

</html>