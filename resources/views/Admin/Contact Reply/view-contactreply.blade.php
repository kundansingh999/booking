@include('Admin.bin.header')
 

    <!----------------------------------View Contactreply-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">View contactreply</h1>
        <a href="{{url('admin/post-contactreply')}}" class="btn btn-primary m-2">Add Event</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>Event Name:- Muzaffarpur Event</p>
                        <p>Event Date:- 24/09/2024</p>
                        <p>Event Address:- Bhagwanpur, muzaffarpur</p>
                        <p>Event price:- 200/-</p>
                        <p>Event Start date:- 24/09/2024</p>
                        <button class="btn btn-info text-white">Edit</button>
                        <button class="btn btn-danger text-white">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>Event Name:- Muzaffarpur Event</p>
                        <p>Event Date:- 24/09/2024</p>
                        <p>Event Address:- Bhagwanpur, muzaffarpur</p>
                        <p>Event price:- 200/-</p>
                        <p>Event Start date:- 24/09/2024</p>
                        <button class="btn btn-info text-white">Edit</button>
                        <button class="btn btn-danger text-white">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <p>Event Name:- Muzaffarpur Event</p>
                        <p>Event Date:- 24/09/2024</p>
                        <p>Event Address:- Bhagwanpur, muzaffarpur</p>
                        <p>Event price:- 200/-</p>
                        <p>Event Start date:- 24/09/2024</p>
                        <button class="btn btn-info text-white">Edit</button>
                        <button class="btn btn-danger text-white">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
