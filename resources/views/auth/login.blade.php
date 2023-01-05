@extends('layout.authlayout')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center">
        {{-- <div class="w-50 bg-slate-200">
            <p>sha384awdawdawdawdaaaaaaaaaaaaaaaa</p>
        </div> --}}
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h2>Login</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off">
                        </div>
                        <div class="mt-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" autocomplete="off">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection