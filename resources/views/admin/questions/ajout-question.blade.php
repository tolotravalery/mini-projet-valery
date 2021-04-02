@extends('admin.template')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset("back/css/custom.css") }}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout Question dans Page #{{ $page->nom }}</div>
                    <div class="card-body">
                        <p class="form-text text-danger text-left" id="error"></p>
                        <p class="form-text text-success text-left" id="success"></p>
                        <form id="form-ajouter-question">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <input type="hidden" value="{{ $page->id }}" name="id">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="libelle">
                            </div>
                            <label for="type">à choix</label>
                            <div class="input-group mb-3">
                                Multiple <input type="radio" class="form-control" name="type" value="multiple" checked>
                                Unique <input type="radio" class="form-control" name="type" value="unique">
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-question" onclick="ajouterQuestion('{{ route('soumettre-question') }}', '#form-ajouter-question')">
                                <div class="spinner-border spinner-border-sm mr-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Ajouter
                            </button>
                        </form>
                    </div>
                    <div class="card-header">Listes Question dans Page #{{ $page->nom }}</div>
                    <div class="card-body">
                        <div id="list-questions">
                            @include('admin.questions.list')
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
