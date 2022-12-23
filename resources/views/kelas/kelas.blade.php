@extends('layout.mainlayout')

@section('title', 'Class')
@section('kls', 'active')
@section('ickls', 'active-icon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-100 main">
                    <div class="row">
                        <h4 class="mb-5">Class Room's</h4>
                        <div class="col-12 text-end">
                            <a href="/kelas/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add Class</a>
                        </div>
                    </div>
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td class="d-flex">
                                    <a href="/jurusan/detail/{{ $data->id }}"><i class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                    <a href="/jurusan/{{$data->id}}/edit"><i class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                                    <button class="border-0 bg-transparent" type="submit"><i class='bx bx-trash fs-5 mx-1 text-gray'></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

    