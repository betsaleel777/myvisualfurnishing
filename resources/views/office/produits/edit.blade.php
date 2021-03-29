@extends('layouts.office.default')
@section('content')
   <!-- Header -->
   <!-- Header -->
   <div class="header bg-primary pb-6">
      <div class="container-fluid">
         <div class="header-body">
            <div class="row align-items-center py-4">
               <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Produits</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                     <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('produits') }}">Produits</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier {{ $produit->nom }}</li>
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
            <form method="post" action="{{ route('produit_update') }}" enctype="multipart/form-data">
               <!-- Address -->
               <h6 class="heading-small text-muted mb-4">Modifier {{ $produit->nom }}</h6>
               <div class="pl-lg-4">
                  @csrf
                  <input hidden name="produit" type="text" value="{{ $produit->id }}">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="input-address">Nom</label>
                           <input value="{{ $produit->nom }}" id="input-address" name="nom"
                              class="form-control @error('nom') is-invalid @enderror" placeholder="" type="text">
                           @error('nom')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="prix">Prix</label>
                           <input value="{{ $produit->prix }}" id="prix" name="prix"
                              class="form-control @error('prix') is-invalid @enderror" placeholder="prix de vente"
                              type="text">
                           @error('prix')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="prix_solde">Prix de solde</label>
                           <input value="{{ $produit->prix_solde }}" id="prix_solde" name="prix_solde"
                              class="form-control @error('prix_solde') is-invalid @enderror"
                              placeholder="prix en cas de solde" type="text">
                           @error('prix_solde')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="marque">Marque du produit</label>
                           <select id="marque" name="marque" class="form-control @error('marque') is-invalid @enderror"
                              placeholder="choisir une marque ..." type="text">
                              @foreach ($marques as $id => $nom)
                                 <option @php
                                    if (in_array($produit->marqueLinked->id, $marques)) {
                                        echo 'selected';
                                    }
                                 @endphp value="{{ $id }}">{{ $nom }}</option>
                              @endforeach
                           </select>
                           @error('marque') <div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="magasin">Magasin du produit</label>
                           <select id="magasin" name="magasin" class="form-control @error('magasin') is-invalid @enderror"
                              placeholder="choisir une magasin ..." type="text">
                              @foreach ($magasins as $id => $nom_magasin)
                                 <option @php
                                    if (in_array($produit->magasinLinked->id, $magasins)) {
                                        echo 'selected';
                                    }
                                 @endphp value="{{ $id }}">{{ $nom_magasin }}</option>
                              @endforeach
                           </select>
                           @error('magasin') <div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-control custom-checkbox">
                              <input @php
                                 if ($produit->livrable) {
                                     echo 'checked';
                                 }
                              @endphp name="livrable" type="checkbox" class="custom-control-input"
                                 id="livrable">
                              <label class="custom-control-label" for="livrable">Livrable</label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <a href="#" class="avatar avatar-lg rounded-circle" data-toggle="tooltip"
                              data-original-title="{{ $produit->main_image }}">
                              <img alt="" src="{{ asset('/storage') . '/' . $produit->main_image }}">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-file">
                              <label class="custom-file-label" for="customFileLang">Image principale</label>
                              <input name="main_image" type="file"
                                 class="custom-file-input @error('main_image') is-invalid @enderror" value=""
                                 id="customFileLang" lang="fr">
                              @error('main_image')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <small class="text-muted">Largeur minimum :900, Longueur minimum:900</small>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <a href="#" class="avatar avatar-lg rounded-circle" data-toggle="tooltip"
                              data-original-title="{{ $produit->shodai }}">
                              <img alt="" src="{{ asset('/storage') . '/' . $produit->shodai }}">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-file">
                              <label class="custom-file-label" for="shodai">Image 1</label>
                              <input name="shodai" type="file"
                                 class="custom-file-input @error('shodai') is-invalid @enderror" value="" id="shodai"
                                 lang="fr">
                              @error('shodai')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <small class="text-muted">Largeur minimum :900, Longueur minimum:900</small>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <a href="#" class="avatar avatar-lg rounded-circle" data-toggle="tooltip"
                              data-original-title="{{ $produit->nidaime }}">
                              <img alt="" src="{{ asset('/storage') . '/' . $produit->nidaime }}">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-file">
                              <label class="custom-file-label" for="nidaime">Image 2</label>
                              <input name="nidaime" type="file"
                                 class="custom-file-input @error('nidaime') is-invalid @enderror"
                                 value="{{ old('nidaime') }}" id="nidaime" lang="fr">
                              @error('nidaime')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <small class="text-muted">Largeur minimum :900, Longueur minimum:900</small>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <a href="#" class="avatar avatar-lg rounded-circle" data-toggle="tooltip"
                              data-original-title="{{ $produit->sandaime }}">
                              <img alt="" src="{{ asset('/storage') . '/' . $produit->sandaime }}">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-file">
                              <label class="custom-file-label" for="sandaime">Image 3</label>
                              <input name="sandaime" type="file"
                                 class="custom-file-input @error('sandaime') is-invalid @enderror"
                                 value="{{ old('sandaime') }}" id="sandaime" lang="fr">
                              @error('sandaime')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <small class="text-muted">Largeur minimum :900, Longueur minimum:900</small>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="description">Description</label>
                           <textarea name="description" class="form-control" id="description"
                              rows="5">{{ $produit->description }}</textarea>
                           @error('description')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
               <hr class="my-4" />
               <div style="text-align: right">
                  <button type="submit" class="btn btn-default">soumettre</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
