@extends('layout.mainlayout')

@section('title', 'Create Guru')
@section('guru', 'active')
@section('icguru', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/guru/store" method="POST">
                    @csrf
                    <h4 class="my-4">Create Guru Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Nama Guru</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <input autocomplete="off" value="{{ old('name') }}" name="name" type="text"
                                        class="form-control text-gray @error('name') is-invalid @enderror">
                                        @error('name')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Status Wali</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <select name="is_hometeacher"
                                        class="form-select text-gray @error('is_hometeacher') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        <option @if(old('is_hometeacher') == 1) selected @endif value="1">Benar</option>
                                        <option @if(old('is_hometeacher') == 2) selected @endif value="2">Bukan</option>
                                    </select>
                                    @error('is_hometeacher')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Kelas</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <select name="kelas_id"
                                        class="form-select text-gray @error('kelas_id') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        @foreach ($kelas as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kelas_id')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Jurusan</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12 h-10">
                                    <select name="jurusan_id"
                                        class="form-select text-gray @error('jurusan_id') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        @foreach ($jurusan as $jur)
                                            <option value="{{ $jur->id }}">{{ $jur->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('jurusan_id')<div class="alert-error text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                        </div>
                    </div>
                    <div class="mt-4 mb-5 text-end">
                        <a href="/guru" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                        <button type="submit" name="addGuru" value="save"
                            class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Buat Guru</button>

                        <button type="submit" name="addGuru" value="save"
                            class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Buat Guru</button>
                        <a href="/guru" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
