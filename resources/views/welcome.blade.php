@extends('layouts.app')
@section('content')
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img src="images/1.jpe" style="width:100%;height: 900px;"></div>
            <div class="item"><img src="images/1.jpe" style="width:100%;height: 900px;"></div>
            <div class="item"><img src="images/1.jpe" style="width:100%;height: 900px;"></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <img src="images/1.jpe" style="width:200px;height: 200px;" alt="..." class="img-rounded">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-circle">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-thumbnail">
        <img src="images/1.jpe" style="width:200px;height: 200px;" alt="..." class="img-rounded">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-circle">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-thumbnail">
        <img src="images/1.jpe" style="width:200px;height: 200px;" alt="..." class="img-rounded">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-circle">
        <img src="images/1.jpe" style="width:200px;height: 200px;" class="img-thumbnail">
@endsection