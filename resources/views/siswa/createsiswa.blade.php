@extends('layout.mainlayout')

@section('title', 'Create Student')
@section('swa', 'active')
@section('icswa', 'active-icon')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="h-100 main">
            <form action="/siswa/store" method="POST">
                @csrf
                <h4 class="mb-4">Create Student Room's</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Name</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="name" type="text" class="form-control text-gray">
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">NIS</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="nis" type="text" class="form-control text-gray">
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Telpon</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="telp" type="text" class="form-control text-gray">
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Alamat</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input autocomplete="off" name="alamat" type="text" class="form-control text-gray">
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <select name="kelas_id" class="form-select text-gray">
                                    <option selected disabled>Choose an option</option>
                                    @foreach ($kelas as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <select name="jurusan_id" class="form-select text-gray">
                                    <option selected disabled>Choose an option</option>
                                    @foreach ($jurusan as $jur)
                                    <option value="{{$jur->id}}">{{$jur->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Created At</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <input type="datetime-local" name="created_at" class="form-control text-gray">
                                <input type="hidden" name="updated_at" value="">
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
                <div class="mt-4 mb-5 text-end">
                    <a href="/kelas" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                    <button type="submit" name="addStudent" value="save"
                        class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Buat Siswa</button>

                    <button type="submit" name="addStudent" value="save"
                        class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Buat Siswa</button>
                    <a href="/kelas" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection