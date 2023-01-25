@extends('layout.authlayout')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        {{-- <div class="w-50 bg-slate-200">
            <p>sha384awdawdawdawdaaaaaaaaaaaaaaaa</p>
        </div> --}}
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card mx-4">
                <div class="card-body mx-4">
                    <h2>Login</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="">
                            <label class="mb-1 label-input">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                        </div>
                        <div class="mt-3">
                            <label class="mb-1 label-input">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class='bx bx-lock-alt'></i></span>
                                <input name="password" type="text" class="form-control" id="inputPassword">
                                <span class="input-group-text" onclick="password_show_hide()">
                                    <i class="bi bi-eye" id="showEye"></i>
                                    <i class="bi bi-eye-slash d-none" id="hideEye"></i>
                                </span>
                                {{-- <button class="input-group-text"><i class="bi bi-eye"></i></button> --}}
                              </div>
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