{{-- Pagina che si vede dopo il login --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">HomePage</h1>
        <ul>
            <li><a class="btn btn-link" href="{{route('admin.posts.index')}}">Vai alla gestione dei post</a></li>
            <li><a class="btn btn-link" href="{{route('admin.categories.index')}}">Vai alla gestione delle categorie</a></li>
        </ul>
    </div>
@endsection