@extends('layout.mainlayout')

@section('title', 'Update Student')
@section('swa', 'active')
@section('icswa', 'active-icon')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="h-100 main">
            <form action="/siswa/{{$siswa->id}}" method="POST">
                @csrf
                @method('put')
                <h4 class="mb-4">Update Student Room's</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Name</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="name" value="{{$siswa->name}}" type="text" class="form-control text-gray @error('name') is-invalid @enderror">
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('name') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">NIS</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="nis" type="text" value="{{$siswa->nis}}" class="form-control text-gray @error('nis') is-invalid @enderror">
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('nis') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Telpon</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="telp" type="text" value="{{$siswa->telp}}" class="form-control text-gray @error('telp') is-invalid @enderror">
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('telp') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Alamat</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="alamat" value="{{$siswa->alamat}}" type="text" class="form-control text-gray @error('alamat') is-invalid @enderror">
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('alamat') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <select name="kelas_id" class="form-select text-gray @error('kelas_id') is-invalid @enderror">
                                    <option disabled>Choose an option</option>
                                    @foreach ($kelas as $class)
                                    <option @if($class->id == $siswa->kelas_id) selected @endif value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('kelas_id') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <select name="jurusan_id" class="form-select text-gray @error('jurusan_id') is-invalid @enderror">
                                    <option selected disabled>Choose an option</option>
                                    @foreach ($jurusan as $jur)
                                    <option @if($jur->id == $siswa->jurusan_id) selected @endif value="{{$jur->id}}">{{$jur->name}}</option>
                                    @endforeach
                                </select>
                                <div class="alert-error text-danger">
                                    @foreach ($errors->get('jurusan_id') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                    </div>
                </div>
                <div class="mt-4 mb-5 text-end">
                    <a href="/siswa" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                    <button type="submit" name="updateStudent" value="save"
                        class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Update Siswa</button>

                    <button type="submit" name="updateStudent" value="save"
                        class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Update Siswa</button>
                    <a href="/siswa" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection