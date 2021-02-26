@extends('layouts.office.default')
@section('content')
   <!-- Header -->
   <!-- Header -->
   <div class="header bg-primary pb-6">
      <div class="container-fluid">
         <div class="header-body">
            <div class="row align-items-center py-4">
               <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Enseignes</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                     <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('enseignes') }}">enseignes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $enseigne->nom }}</li>
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
            <form method="post" action="{{ route('enseigne_update') }}" enctype="multipart/form-data">
               <!-- Address -->
               <h6 class="heading-small text-muted mb-4">Modifier enseigne</h6>
               <div class="pl-lg-4">
                  @csrf
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input hidden type="text" name="enseigne" value="{{ $enseigne->id }}">
                           <label class="form-control-label" for="nom">Nom</label>
                           <input value="{{ $enseigne->nom }}" id="nom" name="nom"
                              class="form-control form-control-sm @error('nom') is-invalid @enderror" type="text">
                           @error('nom')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="contact">Contact</label>
                           <input value="{{ $enseigne->contact }}" id="contact" name="contact"
                              class="form-control form-control-sm @error('contact') is-invalid @enderror" type="text">
                           @error('contact')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="site">Lien du site web</label>
                           <input value="{{ $enseigne->site }}" id="site" name="site"
                              class="form-control form-control-sm @error('site') is-invalid @enderror" type="text">
                           @error('site')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="email">Email</label>
                           <input value="{{ $enseigne->email }}" id="email" name="email"
                              class="form-control form-control-sm @error('email') is-invalid @enderror" type="text">
                           @error('email')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="form-control-label" for="siege">Siege</label>
                           <input value="{{ $enseigne->siege }}" id="siege" name="siege"
                              class="form-control form-control-sm @error('siege') is-invalid @enderror" type="text">
                           @error('siege')
                              <div class="text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           @empty($enseigne->logo)
                              <a href="#" class="avatar rounded-circle mr-3">
                                 <img alt="default" src="{{ asset('web/images/marques/default.png') }}">
                              </a>
                           @else
                              <a href="#" class="avatar rounded-circle mr-3">
                                 <img alt="{{ $enseigne->nom }}"
                                    src="{{ asset('web/images/marques') . '/' . $enseigne->logo }}">
                              </a>
                           @endempty
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="custom-file">
                              <label class="custom-file-label" for="customFileLang">Logo</label>
                              <input name="logo" type="file" class="custom-file-input @error('logo') is-invalid @enderror"
                                 id="customFileLang" lang="fr">
                              @error('logo')
                                 <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <small class="text-muted">Largeur:900, Longueur:900</small>
                        </div>
                     </div>
                  </div>
               </div>
               <hr class="my-4" />
               <div style="text-align: right">
                  <button type="submit" class="btn btn-default">enregistrer</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
