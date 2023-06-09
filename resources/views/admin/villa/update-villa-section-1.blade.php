@extends('admin.layout.mainlayout')

@section('title', 'Update Villa')

@section('content')

<div class="mt-3 mb-3">
    <h3>Update Villa Section 1 - (Name, Summary, Description, Price)</h3>
</div>

<form action="" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $villa->name }}">
        @error('name')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="summary">Summary</label>
        <textarea type="text" name="summary" class="form-control" id="summary">{{ $villa->summary }}</textarea>
        @error('summary')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description">{{$villa->description}}</textarea>
        @error('description')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" id="price" value="{{ $villa->price }}">
        @error('price')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>

@endsection