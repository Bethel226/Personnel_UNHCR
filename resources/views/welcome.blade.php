@extends('layout.main')
@section('contenu')
<marquee>
    <h2 class="text-center">Bienvenue dans Gestion du personnel UNHCR Burkina Faso</h2>
</marquee>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('Images/1.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Images/2.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Images/3.jpg') }}" style="height:530px" class="d-block w-100" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection