@extends('admin.layout.mainlayout')

@section('Villa', 'Dashboard')

@section('content')

<h3 class="mt-2">List User</h3>
<div class="mt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if (count($user) == 0)
            <tr>
                <td class="text-center p-3" colspan="5">No Data</td>
            </tr>

        @else
            @foreach ($user as $user)
                <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $user->name }}</td>
                 <td>{{ $user->email }}</td>
                 <td>{{ $user->telephone }}</td>
                 <td>
                    <!-- Button trigger modal -->
                    <a href="/user/{{ $user->id }}" style="text-decoration:none">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Detail 
                        </button>
                    </a>
                 </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

</div>
@endsection