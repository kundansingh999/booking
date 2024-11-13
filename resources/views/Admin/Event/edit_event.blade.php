@include('Admin.bin.header')


    <!----------------------------------Edit Event--------------------------------------------------------->

    <div class="container text-center p-4">
        <h2 style="color:black;">Edit Event Post</h2>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('update-events-post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_name" value="{{$data->events_name}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event Description</label>
                                <textarea type="text" class="form-control" id="exampleInputPassword1"
                                    name="events_description">{{$data->events_description}} </textarea>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Events_time</label>
                                <input type="time" class="form-control" id="exampleInputPassword1" name="events_time"
                                    value="{{$data->events_time}}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="amount"
                                    value="{{$data->Amount}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event Title </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_title" value="{{$data->events_title}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Event Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="events_date"
                                    value="{{$data->events_date}}">
                            </div>
                        </div>
                        
                        <input type="text" value="{{$data->id}}" name="id" hidden >
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Booking Started</p>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="start_booking_date" value="{{$data->start_booking_date}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Booking End</label>
                                <input type="date" class="form-control" id="exampleInputPassword1"
                                    name="end_booking_date" value="{{$data->end_booking_date}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Event Photo</p>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="events_photo">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selected> select </option>
                                    <option value="1">active</option>
                                    <option value="2">inactive</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
