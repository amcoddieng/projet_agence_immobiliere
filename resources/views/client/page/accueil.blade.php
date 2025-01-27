@extends('welcome')

@section('title')

@section('content')
{{-- @dd($villa) --}}
    @include('client.search.search')
    @include('client.page.section_accueil.villa')
    @include('client.page.section_accueil.app')
    @include('client.page.section_accueil.bureaux')
    @include('client.page.section_accueil.avis')

@endsection

