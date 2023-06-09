@extends('admin.layout.mainlayout')

@section('title', 'Slider')

@section('content')




@if (count($slider) <= 2)
<div class="mt-5 mb-2">
    <form action="/slider" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
            <label for="slider">Add Slider Image</label>
            <div class="input-group">
            <input type="file" multiple class="form-control" id="slider" name="slider">    
        </div>
        @error('slider')
            <div class="alert alert-danger mt-2" >{{ $message }}</div>
        @enderror
    
        <div class="mt-2">
            <button class="btn btn-success" type="submit">Add Slider Image</button>
        </div>
    </form>
</div>
@endif


<div class="mt-3 mb-3">
    <h3>Slider halaman home</h3>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No. </th>
            <th>Gambar </th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @if (count($slider) == 0)
            <tr>
                <td class="text-center p-3" colspan="3">No Data</td>
            </tr>
        @endif
        @foreach ($slider as $slider)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/slider/'.$slider->path) }}" alt="" width="200px" height="100px" style="border-radius: 10px"></td>
                <td>    
                    
                    {{-- Modal Trigger --}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSliderModal{{ $slider->id }}">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteSliderModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteSliderModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="deleteSliderModalLabel">Delete Villa</h5>
                            </div>
                            <div class="modal-body">
                                Do you want to delete this slider? (<b>{{ $loop->iteration }}</b>)
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <form action="/slider/{{ $slider->id }}" method="post">
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

@endsection