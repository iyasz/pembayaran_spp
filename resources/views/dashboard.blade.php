@extends('layout.mainlayout')
@section('title', 'Dashboard')
@section('dsh', 'active')
@section('icdsh', 'active-icon')


@section('content')
    <div class="row">
        <div class="col-12">

            <div class="height-100 main">
                <h4>Your Dashboard</h4>
                <div class="swiper mx-5">
                    <div class="swiper-wrapper">
                        <div id="slide1" class="swiper-slide ">
                            <p>Jumlah Admin</p>
                        </div>
                        <div id="slide2" class="swiper-slide">Slide 2</div>                       
                    </div>
                </div>
                <h4 class="mb-4">Monthly Statistics</h4>
                <div class="cotainer">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-8 col-12">
                            <canvas id="myChart" class="rounded-3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
