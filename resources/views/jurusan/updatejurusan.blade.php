@extends('layout.mainlayout')

@section('title', 'Update Jurusan')
@section('jrs', 'active')
@section('icjrs', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/jurusan/{{$find->id}}" method="POST">
                    @method('put')
                    @csrf
                    <h4 class="mb-4">Update Jurusan Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Nama Jurusan</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" value="{{$find->name}}" name="name" type="text" class="form-control text-gray">
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Updated At</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input type="datetime-local" name="updated_at" class="form-control text-gray">
                                    <input type="hidden" name="created_at" value="{{$find->created_at}}">
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                    <div class="mt-4 mb-5 text-end">
                        <a href="/jurusan" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                        <button type="submit" name="addJurusan" value="save"
                            class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Update Jurusan</button>

                        <button type="submit" name="addJurusan" value="save"
                            class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Update Jurusan</button>
                        <a href="/jurusan" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection