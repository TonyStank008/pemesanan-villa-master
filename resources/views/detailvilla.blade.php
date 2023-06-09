@extends('layout.layout')

@section('title', 'Detail Villa - ' . $villa->name)

@section('content')
    @include('components.vila-detail.detail')
    @include('components.vila-detail.form-booking')
    @include('components.vila-detail.review')
@stop
