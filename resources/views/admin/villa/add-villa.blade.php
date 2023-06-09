@extends('admin.layout.mainlayout')

@section('title', 'Add Villa')

@section('content')


<div class="mt-5  col-8 m-auto">
    <h3 class="mt-4">Add Villa</h3>
    <form action="villa" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger mt-2" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="summary">Summary</label>
            <textarea type="text" name="summary" class="form-control" id="summary">{{ old('summary') }}</textarea>
            @error('summary')
                <div class="alert alert-danger mt-2" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea type="text" name="description" class="form-control" id="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-2" >{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger mt-2" >{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="path">Path</label>
            <div class="input-group">
                <input type="file" class="form-control" id="path" name="path">
            </div>
        </div>
        @error('path')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="facility">Facility</label>
            <div class="input-group">
            <input type="file" multiple class="form-control" id="facility" name="facility[]" value="{{ old('facility') }}">    
        </div>
        @error('facility')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
        
        @error('facility.*')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
        </div>

        <div>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>

</div>

@endsection