@extends('layouts.office.default')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Magasins</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('enseignes')}}">Enseignes</a></li>
                            <li class="breadcrumb-item"><a href="{{route('enseigne_show',$enseigne)}}">{{$enseigne->nom}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ajouter magasin</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('magasin_store')}}">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">ajouter un magasin</h6>
                <div class="pl-lg-4">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input hidden type="text" name="enseigne" value="{{$enseigne->id}}">
                                <label class="form-control-label" for="nom_magasin">Nom</label>
                                <input value="{{old('nom_magasin')}}" id="nom_magasin" name="nom_magasin" class="form-control @error('nom_magasin') is-invalid @enderror" type="text">
                                @error('nom_magasin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input value="{{old('email')}}" id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="text">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="lieu">Localisation du magasin</label>
                                <input value="{{old('lieu')}}" id="lieu" name="lieu" class="form-control @error('lieu') is-invalid @enderror" type="text">
                                @error('lieu')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="password">Mot de passe</label>
                                <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" type="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="confirmation">Confirmation du mot de passe</label>
                                <input id="confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password">
                                @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: right">
                    <button type="submit" class="btn btn-default">soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
