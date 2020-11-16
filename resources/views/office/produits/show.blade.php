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
                            <li class="breadcrumb-item"><a href="{{route('produits')}}">produits</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$produit->nom}}</li>
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
                            <h3 class="mb-0">Détails {{$produit->nom}}</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action "><b>Nom:</b> {{$produit->nom}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Prix de vente:</b> {{$produit->prix}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Prix de vente (solde):</b> {{$produit->prix_solde}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Marque:</b> {{$produit->marqueLinked->nom}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Magasin:</b> {{$produit->magasinLinked->nom_magasin}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Statut:</b> {{$produit->statut}}</a>
                        <a href="#" class="list-group-item list-group-item-action "><b>Livrable:</b> @if ($produit->livrable)
                          {{ 'oui'}}
                        @else
                           {{ 'non'}}
                        @endif
                        </a>
                    </div>
                </div>
                <hr class="my-4" />
                <!-- Liste magasins -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                @empty ($produit->shodai)
                                  <img class="card-img-top" src=" {{asset('web/assets/img/theme/img-1-1000x600.jpg')}}" alt="Card image cap">
                                @else
                                  <img class="card-img-top" src=" {{asset('web/images/produits/'.$produit->shodai)}}" alt="Card image cap">
                                @endempty
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                @empty ($produit->nidaime)
                                  <img class="card-img-top" src=" {{asset('web/assets/img/theme/img-1-1000x600.jpg')}}" alt="Card image cap">
                                @else
                                  <img class="card-img-top" src=" {{asset('web/images/produits/'.$produit->nidaime)}}" alt="Card image cap">
                                @endempty
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                @empty ($produit->sandaime)
                                  <img class="card-img-top" src=" {{asset('web/assets/img/theme/img-1-1000x600.jpg')}}" alt="Card image cap">
                                @else
                                  <img class="card-img-top" src=" {{asset('web/images/produits/'.$produit->sandaime)}}" alt="Card image cap">
                                @endempty
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
