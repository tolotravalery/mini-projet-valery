@extends('admin.template')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset("back/css/custom.css") }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout formulaire</div>
                    <div class="card-body">
                        <p class="form-text text-danger text-left" id="error"></p>
                        <p class="form-text text-success text-left" id="success"></p>
                        <form id="form-ajouter-formulaire">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nom">
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-formulaire" onclick="ajouterFormulaire('{{ route('soumettre-formulaire') }}', '#form-ajouter-formulaire')">
                                <div class="spinner-border spinner-border-sm mr-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Ajouter
                            </button>
                        </form>
                    </div>
                    <div class="card-header">Listes formulaire</div>
                    <div class="card-body">
                        <div id="list-formulaires">
                            @include('admin.formulaires.list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="{{ asset("back/js/custom.js") }}"></script>
@endsection
