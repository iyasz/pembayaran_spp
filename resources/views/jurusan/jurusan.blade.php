@extends('layout.mainlayout')

@section('title', 'Jurusan')
@section('jrs', 'active')
@section('icjrs', 'active-icon')

@section('content')

@if (SESSION('createSuccess'))
<script>
    iziToast.show({
        icon: "fa-regular fa-circle-check",
        message: "Data Berhasil Disimpan!",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "green",
        iconUrl: null,
        timeout: 4100,
      });</script>
@endif
@if (SESSION('updateSuccess'))
<script>
    iziToast.show({
        icon: "fa-regular fa-circle-check",
        message: "Data Berhasil Diubah!",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "green",
        iconUrl: null,
        timeout: 4100,
      });</script>
@endif
@if (SESSION('deleteSuccess'))
<script>
    iziToast.show({
        icon: "fa-regular fa-circle-check",
        message: "Data Berhasil Dihapus!",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "green",
        iconUrl: null,
        timeout: 4100,
      });</script>
@endif

    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row">
                    <h4 class="mb-5 mt-4">Jurusan Room's</h4>
                    <div class="col-12 text-end">
                        <a href="/jurusan/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add Jurusan</a>
                    </div>
                </div>

                <div class="table-responsive">

                    <table id="table" class="table display responsive nowrap " width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Jurusan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $data)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td class="d-flex">
                                    <a href="/jurusan/detail/{{ $data->id }}"><i class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                    <a href="/jurusan/{{$data->id}}/edit"><i class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                                    <form action="/jurusan/{{$data->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="border-0 bg-transparent" type="submit"><i class='bx bx-trash fs-5 mx-1 text-gray'></i></button>
                                    </form>
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
