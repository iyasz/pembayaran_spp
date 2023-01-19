@extends('layout.mainlayout')

@section('title', 'Admin')
@section('adm', 'active')
@section('icadm', 'active-icon')

@section('content')

    @if (SESSION('success'))
    <script>
        iziToast.show({
            icon: "fa-regular fa-circle-check",
            message: "{{SESSION('success')}}",
            position: "topCenter",
            drag: false,
            pauseOnHover: false,
            color: "green",
            iconUrl: null,
            timeout: 4100,
          });</script>
    @endif
    @if (SESSION('failed'))
    <script>
        iziToast.show({
            icon: "fa-solid fa-xmark",
            message: "{{SESSION('failed')}}",
            position: "topCenter",
            drag: false,
            pauseOnHover: false,
            color: "red",
            iconUrl: null,
            timeout: 4100,
        });
    </script>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row ">
                    <h4 class="mb-5 mt-4">Admin Room's</h4>
                    <div class="col-12 text-end">
                        <a href="/admin/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add Admin</a>
                    </div>
                </div>

                    <table id="table" class="table display responsive nowrap " width="100%">
                        <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>No Telp</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $data)
                        <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->password }}</td>
                                <td>{{ $data->telp }}</td>
                                <td class="d-flex ">
                                    <a href="/admin/detail/{{ $data->id }}"><i class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                    <a href="/admin/{{$data->id}}/update"><i class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                                    <form action="/admin/{{$data->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" value="delete" class="border-0 bg-transparent "><i class='bx bx-trash fs-5 mx-1 text-gray'></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
