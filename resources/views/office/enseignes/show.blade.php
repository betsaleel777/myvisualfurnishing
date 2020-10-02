@extends('layouts.office.default')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Détails</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('enseignes')}}">enseignes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$enseigne->nom}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Détails {{$enseigne->nom}}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('magasin_add',$enseigne)}}" class="btn btn-sm btn-primary">Ajouter magasin</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action "><b>Enseigne:</b> {{$enseigne->nom}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Contact:</b> {{$enseigne->contact}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Email:</b> {{$enseigne->email}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Site:</b> {{$enseigne->site}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Siège:</b> {{$enseigne->siege}}</a>
                    </div>
                </div>
                <hr class="my-4" />
                <!-- Liste magasins -->
                <div class="container">
                    <div class="row">
                        @foreach ($magasins as $magasin)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src=" {{asset('web/assets/img/theme/img-1-1000x600.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$magasin->nom_magasin}}</h5>
                                    <p class="card-text">{{$magasin->lieu}}</p>
                                    <buttons-mag :magasin="{{$magasin->id}}"></buttons-mag>
                                    {{-- la suppression va être gérer par vuejs --}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
