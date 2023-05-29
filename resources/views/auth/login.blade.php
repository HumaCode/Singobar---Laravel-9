<!DOCTYPE html>
<html lang="en">

<head>

    <title>Halaman Login</title>

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

    {{-- toaster --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="text-center">
            <img src="{{ asset('backend') }}/assets//images/logo.png" alt="" class="img-fluid mb-4 ">
        </div>

        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400 text-center">Login</h4>
                        <hr>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" name="login"
                                    class="form-control @error('login') is-invalid @enderror" id="login"
                                    placeholder="Nama/Username/Email" value="{{ old('login') }}">
                                @error('login')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password" class="form-control" id="Password"
                                    placeholder="Password">
                            </div>

                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" id="remember_me" class="custom-control-input" name="remember">
                                <label class="custom-control-label" for="remember_me">Remember me.</label>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Login</button>
                            <hr>
                            <p class="mb-2 text-muted text-center">Lupa password? <a
                                    href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted text-center">Belum punya akun? <a href="{{ route('register') }}"
                                    class="f-w-400">Daftar Sekarang</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('backend') }}/assets//js/vendor-all.min.js"></script>
<script src="{{ asset('backend') }}/assets//js/plugins/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
</script>



</body>

</html>