@extends('admin.layout.mainlayout')

@section('title', 'Detail Villa')

@section('content')

<h3 class="mt-2">Detail Villa</h3>
<div class="mt-3">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $villa->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $villa->summary }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ $villa->description }}</td>
            </tr>
            <tr>
                <th>Main Picture</th>
                <td><img src="{{ asset('storage/path/'.$villa->path) }}" alt="" width="400px" height="200px"></td>
            </tr>
            <tr>
                <th>Facility</th>
                <td>
                @foreach ($villa->facility as $facility)
                    <div class="m-2">
                        <img src="{{ asset('storage/facility/'.$facility->path) }}" alt="" width="400px" height="200px">
                    </div>
                @endforeach
                </td>
            </tr>
        </tbody>
    </table>
@endsection

