<div class="row justify-content-center form-booking-wrapper mb-5">
    <form method="post" class="col-md-6 p-5 form-booking-card" action="/booking-detail">
        {{ csrf_field() }}
        <h2>Booking Villa</h2>
        <input type="hidden" name="villa_id" value="{{ $villa->id }}">

        <div class="row mb-3">
            <div class="col-6">
                <label for="date" class="col-2 col-form-label">Checkin</label>
                <div class="col-12">
                    <div class="input-group date">
                        <input class="form-control" name="bookDateStart" id="date-checkin" required />
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label for="date" class="col-2 col-form-label">Checkout</label>
                <div class="col-12">
                    <div class="input-group date">
                        <input class="form-control" name="bookDateEnd" id="date-checkout" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Booking</button>
        </div>
    </form>
</div>

@section('datepickerScript')
    <script>
        Date.prototype.addDays = function(days) {
            var date = new Date(this.valueOf());
            date.setDate(date.getDate() + days);
            return date;
        }

        function isDateBefore(x, y) {
            return new Date(x).getTime() < new Date(y).getTime();
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/getBookingDate',
            dataType: 'json',
            type: 'POST',
            data: {
                id: `{{ $villa->id }}`
            },
            success: function(data) {
                var unavailableDates = [];
                data.forEach((x) => {
                    var dateArray = new Array();
                    var currentDate = new Date(x.bookDateStart);
                    var stopDate = new Date(x.bookDateEnd)
                    while (currentDate <= stopDate) {
                        var date = new Date(currentDate)
                        unavailableDates.push(date.getDate() + "-" + (date.getMonth() + 1) + "-" + date
                            .getFullYear());
                        currentDate = currentDate.addDays(1);
                    }

                });
                unavailableDates.push('1-1-2030')
                function unavailable(date) {
                    dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                    if ($.inArray(dmy, unavailableDates) == -1) {
                        return [true, ""];
                    } else {
                        return [false, "", "Unavailable"];
                    }
                }
                $("#date-checkin").datepicker({
                    changeYear: true,
                    changeMonth: true,
                    dateFormat: 'dd/mm/yy',
                    minDate: new Date(),
                    maxDate: '+1Y',
                    beforeShowDay: unavailable,
                    onSelect: function(date, datepicker) {

                        $('#date-checkout').datepicker('destroy');

                        var selected = new Date(date);
                        selected.setHours(0, 0, 0, 0);

                        var nearestDate = null;
                        var nearestDiff = Infinity;
                        for (var i = 0; i < unavailableDates.length; i++) {
                            var disabled = new Date(unavailableDates[i].split('-').reverse().join(
                                '/'));
                            disabled.setHours(0, 0, 0, 0);
                            var diff = Math.abs(selected - selected);
                            if (diff < nearestDiff) {
                                nearestDiff = diff;
                                nearestDate = disabled;
                            }
                        }
                        $("#date-checkout").datepicker({
                            changeYear: true,
                            changeMonth: true,
                            dateFormat: 'dd/mm/yy',
                            minDate: date,
                            maxDate: nearestDate,
                            beforeShowDay: unavailable
                        });
                    }
                });

                $("#date-checkout").datepicker("option", "disabled", true);
            }
        })
    </script>
@endsection
