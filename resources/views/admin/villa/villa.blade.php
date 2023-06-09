@extends('admin.layout.mainlayout')

@section('Villa', 'Dashboard')

@section('content')
<div class="mt-3">
    <a href="add-villa" class="btn btn-success"> Add Villa </a>
</div>
<h3 class="mt-2">List Villa</h3>
<div class="mt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Summary</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if (count($villa) == 0)
            <tr>
                <td class="text-center p-3" colspan="5">No Data</td>
            </tr>

        @else
            @foreach ($villa as $villa)
                <tr>
                 <td>{{ $villa->name }}</td>
                 <td>{{ substr($villa->summary,0,30).'...' }}</td>
                 <td>{{ substr($villa->description,0,50).'...' }}</td>
                 <td>{{ $villa->price }}</td>
                 <td>
                    <!-- Button trigger modal -->
                    <a href="/villa/{{ $villa->id }}" style="text-decoration:none">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Detail 
                        </button>
                    </a>
                    {{-- Modal Trigger Update --}}
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{ $villa->id }}">
                        Update
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="updateModal{{ $villa->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Update Villa ({{ $villa->name }})</h5>
                            </div>
                            <div class="modal-body">
                                <a href="/villa-update-section-1/{{ $villa->id }}" style="text-decoration:none">
                                    <Button class="btn btn-primary">Section 1</Button>
                                </a>
                                <a href="/villa-update-section-2/{{ $villa->id }}" style="text-decoration:none">
                                    <Button class="btn btn-primary">Section 2</Button>
                                </a>
                                <a href="/villa-update-section-3/{{ $villa->id }}" style="text-decoration:none">
                                    <Button class="btn btn-primary">Section 3</Button>
                                </a>
                               
                             
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    {{-- Modal Trigger --}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $villa->id }}">
                        Delete
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $villa->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Villa</h5>
                            </div>
                            <div class="modal-body">
                                Do you want to delete this villa? (<b>{{ $villa->name }}</b>)
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <form action="/villa/{{ $villa->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>

                 </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    
    

</div>
@endsection