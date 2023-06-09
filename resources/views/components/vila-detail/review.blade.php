<section class="container pt-2 px-5">
    <div class="col">
        <h4>Review</h4>
        <div class="carousel-review col-12">
            @foreach ($review as $key => $row)
                <div class="carousel-review-item card  p-3">
                    <span class="fw-bold">{{ $row->name }}</span>
                    <hr>
                    <span class="">{{ $row->reviewContent }}</span>

                    <div class="col ">
                        <div class="rating-box mt-2">
                            <div class="stars">
                                @for ($i = 0; $i < (int) $row->reviewRate; $i++)
                                    <i class="fa-solid fa-star" style="color: #ffb851;"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

           
        </div>
    </div>
</section>
