@extends('admin.layout.mainlayout')

@section('title', 'Dashboard')

@section('content')

<h3>Dashboard</h3>

<h5>Welcome {{ Auth::user()->name; }}</h5>
@endsection