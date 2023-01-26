@extends('layout.authlayout')

@section('title', 'Login')

@section('content')
@if (SESSION('authFailed'))
<script>
    iziToast.show({
        icon: "fa-solid fa-xmark",
        message: "{{SESSION('authFailed')}}",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "red",
        iconUrl: null,
        timeout: 4100,
    });
</script>
@endif
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card mx-lg-4 mx-md-0 mx-0">
                <div class="card-body mx-3">
                    <h4 class="title-login mt-3">Welcome To Our Website <span>Payment !</span></h4>
                    <p class="p-login mt-3">Silahkan Login Terlebih Dahulu Untuk Memverifikasi Diri Anda Dan Hati Hati Pencurian Akun</p>
                    <form action="/auth/login" method="post">
                        @csrf
                        <div class="">
                            <label class="mb-1 label-input">Email</label>
                            <div class="input-group ">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="" name="email" aria-describedby="basic-addon1">
                              </div>
                              @error('email') <p class="alert-auth text-danger mb-0">{{$message}}</p>@enderror
                        </div>
                        <div class="my-2">
                            <label class="mb-1 label-input">Password</label>
                            <div class="input-group ">
                                <span class="input-group-text"><i class='bx bx-lock-alt'></i></span>
                                <input name="password" type="text" class="form-control" id="inputPassword">
                                <span class="input-group-text" onclick="password_show_hide()">
                                    <i class="bi bi-eye" id="showEye"></i>
                                    <i class="bi bi-eye-slash d-none" id="hideEye"></i>
                                </span>
                              </div>
                              @error('password')<p class="alert-auth text-danger mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="text-end">
                                <a class="forgotPW text-decoration-none" href="">Forgot Password?</a>
                            </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection