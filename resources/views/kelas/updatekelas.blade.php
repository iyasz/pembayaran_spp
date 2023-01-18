@extends('layout.mainlayout')

@section('title', 'Update Class')
@section('kls', 'active')
@section('ickls', 'active-icon')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="h-100 main">
            <form action="/kelas/{{$kelas->id}}" method="POST">
                @csrf
                @method('put')
                <h4 class="my-4">Update Class Room's</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12 h-10">
                                <input autocomplete="off" value="{{$kelas->name}}" name="name" type="text" class="form-control text-gray @error('name') is-invalid @enderror">
                                @error('name')<div class="alert-error text-danger">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <hr class="mt-2 mb-4">
                    </div>
                </div>
                <div class="mt-4 mb-5 text-end">
                    <a href="/kelas" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                    <button type="submit" name="addClass" value="save"
                        class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Update Kelas</button>

                    <button type="submit" name="addClass" value="save"
                        class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Update Kelas</button>
                    <a href="/kelas" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection