<section id="Layanan">
    <div class="container pt-5">
        <div class="row ">
            <div class="col-md-5 mb-5">
                <h1 style="font-weight: bold;">Rest Your Job And Start Your Holiday !</h1>
                <br>
                <p><span class="fw-bold" style="color: black;">Welcome! </span>We Provide best place to people who
                    wants take holiday!</p>
                <a href="{{ url('explore') }}" class="btn btn-primary">Explore!</a>

            </div>
            <div class="col-md-7">
                <div class="slider">
                    @foreach ($slider as $row)
                        <div style="border-radius: 10px; overflow: hidden;">
                            <img height="360px" src="{{ asset('storage/slider') . '/' . $row->path }}"
                                alt="Gambar liburan">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
