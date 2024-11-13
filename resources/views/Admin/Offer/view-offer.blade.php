@include('Admin.bin.header')
 

    <!----------------------------------View Offer-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">View offer</h1>
        <a href="{{url('admin/post-offer')}}" class="btn btn-primary m-2">Add Offer</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $data)
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>coupon code :-{{$data->coupon_code}}</p>
                        <p>amount :-{{$data->amount}}</p>
                        <p>coupon expire :-{{$data->coupon_expire}}</p>
                        <p>admin id :-{{$data->admin_id}}</p>
                        <p>status:-{{$data->status}}</p>

                        <a href="{{ url('admin/offer-edit') . '/' . $data->id }}
                        " class="btn btn-info text-white">Edit</a>
                        <a href="{{ url('offer-delete') . '/' . $data->id }}
                        " class="btn btn-danger text-white">Delete</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
