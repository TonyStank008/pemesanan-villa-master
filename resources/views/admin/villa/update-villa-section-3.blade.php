@extends('admin.layout.mainlayout')

@section('title', 'Update Villa')

@section('content')

    <div class="mt-3 mb-3">
        <h3>Update Villa Section 3 - (Facility Picture)</h3>
        <h5 class="mt-5">{{ $villa->name }}</h5>
    </div>

    <form action="/villa-update-section-3-add/{{ $villa->id }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="facility">Add Image Facility</label>
            <div class="input-group">
                <input type="file" multiple class="form-control" id="facility" name="facility[]">
            </div>
            @error('facility')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            @error('facility.*')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button class="btn btn-success" type="submit">Add Facility Image</button>
        </div>
    </form>


    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Facility Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($villa->facility as $facility)
                    <tr>
                        <td>{{ $facility->id }}</td>
                        <td>
                            <img src="{{ asset('storage/facility/' . $facility->path) }}" alt="" width="300px"
                                height="150px">
                        </td>
                        <td>
                            {{-- Modal Trigger --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteFacilityModal{{ $facility->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteFacilityModal{{ $facility->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="deleteFacilityModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteFacilityModalLabel">Delete Villa</h5>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete this facility? (<b>{{ $facility->id }}</b>)
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Cancel</button>
                                            <form action="/villa-update-section-3-delete/{{ $facility->id }}"
                                                method="post">
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
            </tbody>
        </table>
    </div>

@endsection
