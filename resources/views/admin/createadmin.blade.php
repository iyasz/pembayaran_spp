@extends('layout.mainlayout')

@section('title', 'Create Admin')
@section('adm', 'active')
@section('icadm', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/admin/store" method="POST">
                    @csrf
                    <h4 class="mb-4">Create Admin Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="name" type="text" class="form-control text-gray @error('name') is-invalid @enderror">
                                    <div class="alert-error text-danger">@foreach ($errors->get('name') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Username</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="username" type="text" class="form-control text-gray @error('username') is-invalid @enderror">
                                    <div class="alert-error text-danger">@foreach ($errors->get('username') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Email</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="email" type="text" class="form-control text-gray @error('email') is-invalid @enderror">
                                    <div class="alert-error text-danger">@foreach ($errors->get('email') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Password</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="password" type="text" class="form-control text-gray @error('password') is-invalid @enderror">
                                    <div class="alert-error text-danger">@foreach ($errors->get('password') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Gender</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <select name="gender" class="form-select text-gray @error('gender') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        <option value="M">Laki Laki</option>
                                        <option value="W">Perempuan</option>
                                    </select>
                                    <div class="alert-error text-danger">@foreach ($errors->get('gender') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Telepon</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="telp" type="number" class="form-control text-gray @error('telp') is-invalid @enderror" maxlength="20">
                                    <div class="alert-error text-danger">@foreach ($errors->get('telp') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Alamat</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <textarea autocomplete="off" name="alamat" type="text" class="form-control text-gray @error('alamat') is-invalid @enderror"></textarea>
                                    <div class="alert-error text-danger">@foreach ($errors->get('alamat') as $err) {{$err}} @endforeach</div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            {{-- <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Created At</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12"> --}}
                                    <input type="hidden" name="created_at" class="form-control text-gray" value="{{ now()->setTimezone('7')->format('Y-m-d H:i:s') }}">
                                    <input type="hidden" name="updated_at" value="">
                                {{-- </div>
                            </div>
                            <hr class="mt-4 mb-4"> --}}
                        </div>
                    </div>
                    <div class="mt-4 mb-5 text-end">
                        <a href="/admin" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                        <button type="submit" name="addAdmin" value="save"
                            class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Buat Admin</button>

                        <button type="submit" name="addAdmin" value="save"
                            class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Buat Admin</button>
                        <a href="/admin" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
