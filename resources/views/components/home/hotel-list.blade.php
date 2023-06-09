<section id="hotelList">
    <div class="container py-5">
        <h3 class="text-align-start font-weight-bold mb-5">Villa Premium dari Kami</h3>

        <div class="row mx-auto">
            @foreach ($villa as $row)
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex">
                    <a href="{{ url('detailvilla') . '/' . $row->id }}">
                        <div class="villa-card">
                            <span class="pricing">
                                <span>
                                    {{ number_format($row->price) }} <small>/ Hr</small>
                                </span>
                            </span>
                            <img src="{{ asset('storage/path') }}/{{ $row->path }}" alt="hotel-image" style="width: 280px; height: 500px;">
                            <div class="card-body">
                                <h4 class="my-2 mx-2">{{ $row->name }}</h4>
                                <p class="mb-4 mx-2">{{ $row->summary }}<br>
                                    <span class="text-success">Tersedia</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</section>
