@extends('layouts.office.default')
@section('style')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Marques</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
      <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
            <div class="card">
               <!-- Card header -->
               <div class="card-header">
                  <div class="row align-items-center">
                     <div class="col-8">
                        <h3 class="mb-0">LISTE DES MARQUES</h3>
                     </div>
                     <div class="col-4 text-right">
                        <a href="{{ route('marque_add') }}" class="btn btn-sm btn-primary">Ajouter</a>
                     </div>
                  </div>
               </div>
               <!-- Light table -->
               <div class="table-responsive">
                  <table id="tableau" class="table align-items-center table-flush">
                     @empty($marques->all())
                        <tbody class="list">
                           <tr>
                              <div class="alert alert-secondary" role="alert">
                                 <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                                 <span class="alert-text"><strong>information!</strong> Liste des marques vide</span>
                              </div>
                           </tr>
                        </tbody>
                     @else
                        <thead class="thead-light">
                           <tr>
                              <th scope="col" class="sort" data-sort="name">Nom</th>
                              <th scope="col"></th>
                           </tr>
                        </thead>
                        <tbody class="list">
                           @foreach ($marques as $marque)
                              <tr>
                                 <th scope="row">
                                    <div class="media align-items-center">
                                       @empty($marque->logo)
                                          <a href="#" class="avatar rounded-circle mr-3">
                                             <img alt="{{ $marque->nom }}" src="{{ asset('/storage/default/default.png') }}">
                                          </a>
                                          <div class="media-body">
                                             <span class="name mb-0 text-sm">{{ $marque->nom }}</span>
                                          </div>
                                       @else
                                          <a href="#" class="avatar rounded-circle mr-3">
                                             <img alt="{{ $marque->nom }}" src="{{ url('/storage') . '/' . $marque->logo }}">
                                          </a>
                                          <div class="media-body">
                                             <span class="name mb-0 text-sm">{{ $marque->nom }}</span>
                                          </div>
                                       @endempty
                                    </div>
                                 </th>
                                 <td class="text-right">
                                    <a class="btn btn-outline-primary btn-sm"
                                       href="{{ route('marque_edit', $marque) }}">modifier</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                       href="{{ route('marque_delete', $marque) }}">supprimer</a>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     @endempty
                  </table>
               </div>
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
   @endsection
   @section('script')
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
      <script>
         $(document).ready(function() {
            $('#tableau').DataTable();
         });

      </script>
   @endsection
