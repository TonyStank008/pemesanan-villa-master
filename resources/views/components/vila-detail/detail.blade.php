<section id="detailvilla">
    <div class="container">
        <div class="row villa-image mx-auto my-5">
            <img src="{{ asset('storage/path/' . $villa->path) }}" alt="villa-image" style="border-radius: 50px;
            ">
        </div>
    </div>
    <div class="container ">
        <h3 class="villa-name mb-4">{{ $villa->name }}</h3>

        <div class="">
            <p>
                {{ $villa->description }}

              <br><br><br>

            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3 style="text-align: start; font-weight: bold;">Fasilitas</h3>
            </div>
        </div>
        <div class="carousel-facility col-md-7">
            @foreach ($villa->facility as $key => $row)
                <div class="carousel-facility-item">
                    <img src="{{ asset('/storage/facility/' . $row->path) }}" alt="Gambar liburan" style="border-radius: 30px; width: 500px; height: 250px;">

                </div>
            @endforeach
        </div>
    </div>

</section>

@section('script')
    <script>
        $(document).ready(function() {
            $('.carousel-facility').slick({
                infinite: false,
                slidesToShow: 2,
                slidesToScroll: 2
            });
        });
        $(document).ready(function() {
            $('.carousel-review').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>
@endsection()
