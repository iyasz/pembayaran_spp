@extends('layout.mainlayout')

@section('title', 'Admin')
@section('adm', 'active')
@section('icadm', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-5">Admin Room's</h4>
                        <a href="admin/create" class="btn btn-primary mb-3 "><i class='bx bx-plus'></i> Add Admin</a>
                    </div>
                </div>

                        <table id="table" class="table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Password</th>
                                    <th>No Telp</th>
                                    <th class="text-center"></th>
                                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>
                            <a href=""><i class='bx bx-info-circle'></i></a>
                            <a href=""><i class='bx bx-edit-alt'></i></a>
                            <a href=""><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection