@extends('layouts.office.default')
@section('content')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Marques</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('marques')}}">Marques</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter marque</li>
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
                <form method="post" action="{{route('marque_store')}}" enctype="multipart/form-data">
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">ajouter une marque</h6>
                    <div class="pl-lg-4">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Nom</label>
                                    <input id="input-address" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="nom de la marque" type="text">
                                    @error('nom')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFileLang">logo</label>
                                        <input name="logo" type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="customFileLang" lang="fr">
                                        @error('logo')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <small class="text-muted">Largeur minimum :900, Longueur minimum:900</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4"/>
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-default">soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
