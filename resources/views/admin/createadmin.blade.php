@extends('layout.mainlayout')

@section('title', 'Create Admin')
@section('adm', 'active')
@section('icadm', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/admin/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="my-4">Create Admin Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" name="name" value="{{old('name')}}" type="text"
                                        class="form-control text-gray @error('name') is-invalid @enderror">
                                   @error('name') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Username</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" value="{{old('username')}}" name="username" type="text"
                                        class="form-control text-gray @error('username') is-invalid @enderror">
                                   @error('username') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Email</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" value="{{old('email')}}" name="email" type="text"
                                        class="form-control text-gray @error('email') is-invalid @enderror">
                                   @error('email') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Password</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" name="password" value="{{ old('password') }}" type="text"
                                        class="form-control text-gray @error('password') is-invalid @enderror">
                                        @error('password') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Gender</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <select name="gender"
                                        class="form-select text-gray @error('gender') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        <option @if(old('gender') == "M") selected  @endif value="M">Laki Laki</option>
                                        <option @if(old('gender') == "W") selected  @endif value="W">Perempuan</option>
                                    </select>
                                    @error('gender') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Telepon</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" value="{{old('telp')}}" name="telp" type="number"
                                        class="form-control text-gray @error('telp') is-invalid @enderror" maxlength="20">
                                        @error('telp') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Photo Profil</label>
                                </div>
                                <div style="height: 160px;" class="col-lg-8 col-md-9 col-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-10">
                                            <input name="photo" type="file" class="dropify" data-height="130" data-allowed-file-extensions="jpeg jpg png" />
                                            @error('photo') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                        </div>
                                    </div>
                                    {{-- <input autocomplete="off" name="photo" value="" type="file"
                                        class="form-control text-gray @error('photo') is-invalid @enderror"> --}}
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Alamat</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <textarea autocomplete="off" name="alamat" type="text"
                                        class="form-control text-gray @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea>
                                        @error('alamat') <div class="alert-error text-danger">{{$message}}</div> @enderror
                                </div>
                            </div>
                            <hr class="mt-5 mb-4">
                            <input type="hidden" name="created_at" class="form-control text-gray"
                                value="{{ now()->setTimezone('7')->format('Y-m-d H:i:s') }}">
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
