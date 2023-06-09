@extends('admin.layout.mainlayout')

@section('title', 'Update Villa')

@section('content')


<div class="mt-3 mb-3">
    <h3>Update Villa Section 2 - (Main Picture)</h3>
    <h5 class="mt-5">{{ $villa->name }}</h5>
</div>
<img src="{{ asset('storage/path/'.$villa->path) }}" alt="" width="600px" height="300px">
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3 mt-3">
        <label for="path">New Main Picture</label>
        <div class="input-group">
            <input type="file" class="form-control" id="path" name="path">
        </div>
    </div>
    @error('path')
        <div class="alert alert-danger mt-2" >{{ $message }}</div>
    @enderror
    <div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>
@endsection