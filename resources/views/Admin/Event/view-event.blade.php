@include('Admin.bin.header')


    <!----------------------------------View Event-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">View event</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <a href="{{url('admin/post-event')}}" class="btn btn-primary m-2">Add Event</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $data)
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>Event Name:- {{$data->events_name}}</p>
                        <p>Event amount:- {{$data->Amount}}</p>
                        <p>Event Date:- {{$data->events_date}}</p>
                        <p>Event Start Booking date:- {{$data->start_booking_date}}</p>
                        <p>Event End Booking date:- {{$data->end_booking_date}}</p>
                        <p>Event Description:- {{$data->events_description}}</p>

                        <a href="{{ url('admin/event-edit') . '/' . $data->id }}
                        " class="btn btn-info text-white">Edit</a>
                         <a href="{{ url('event-delete') . '/' . $data->id }}
                        " class="btn btn-danger text-white">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
