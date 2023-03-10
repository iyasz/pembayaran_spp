@extends('layout.mainlayout')

@section('title', 'Update Admin')
@section('adm', 'active')
@section('icadm', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/admin/{{$admin->id}}" method="POST">
                    @method('put')
                    @csrf
                    <h4 class="my-4">Update Admin Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input value="{{$admin->name}}" autocomplete="off" name="name" type="text" class="form-control text-gray @error('name') is-invalid @enderror">
                                    @error('name')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Username</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input value="{{$admin->username}}" autocomplete="off" name="username" type="text" class="form-control text-gray @error('username') is-invalid @enderror">
                                    @error('username')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Email</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input value="{{$admin->email}}" autocomplete="off" name="email" type="text" class="form-control text-gray @error('email') is-invalid @enderror">
                                    @error('email')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Password</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input value="{{$admin->password}}" autocomplete="off" name="password" type="text" class="form-control text-gray @error('password') is-invalid @enderror">
                                    @error('password')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Gender</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <select name="gender" class="form-select text-gray @error('gender') is-invalid @enderror">
                                        <option disabled>Choose an option</option>
                                        <option @if($admin->gender == "M") selected @endif value="M">Laki Laki</option>
                                        <option @if($admin->gender == "W") selected @endif value="W">Perempuan</option>
                                    </select>
                                    @error('gender')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Telepon</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input value="{{$admin->telp}}" autocomplete="off" name="telp" type="text" class="form-control text-gray @error('telp') is-invalid @enderror">
                                    @error('telp')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Photo Profil</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 ">
                                    {{-- @if(@isset($request->photo))<div class=""> <img width="150px" src=" {{asset('storage/admin-profil/'.$request->photo)}} " alt=""></div> @endif --}}

                                    <label class="mt-2 me-5 label-input"> @if(@isset($admin->img_profil)) <img width="150px" src=" {{asset('storage/admin-profil/'.$admin->img_profil)}} " alt=""> @else Tidak Ada @endif</label>

                                    {{-- <input autocomplete="off" name="photo" value="" type="file"
                                        class="form-control text-gray @error('photo') is-invalid @enderror">
                                        @error('photo') <div class="alert-error text-danger">{{$message}}</div> @enderror --}}
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Alamat</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <textarea autocomplete="off" name="alamat" type="text" class="form-control text-gray @error('alamat') is-invalid @enderror">{{$admin->alamat}}</textarea>
                                    @error('alamat')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-5 mb-4">
                        </div>
                    </div>
                    <div class="mt-4 mb-5 text-end">
                        <a href="/admin" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                        <button type="submit" name="addAdmin" value="save"
                            class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Update Admin</button>

                        <button type="submit" name="addAdmin" value="save"
                            class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Buat Admin</button>
                        <a href="/admin" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
