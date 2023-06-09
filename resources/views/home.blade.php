@extends('layout.layout')

@section('title', 'Beranda')

@section('content')

    @include('components.home.layanan')
    @include('components.home.hotel-list')

@endsection
