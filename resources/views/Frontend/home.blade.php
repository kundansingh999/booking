@include('Frontend.bin.header')
<!----------------------------------Slider---------------------------------------->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height:500px;">
            <img class="d-block w-100" src="{{asset('assets\img\music.avif')}}" alt="First slide" height="600px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets\img\music.avif')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets\img\music.avif')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!----------------------------Card tittle(event booking)------------------------------>

<div class="container p-4">
    <div class="container w-50">
        <hr style="color:green;">
        <h1 style="color:green;" class="text-center"><i class="fa-solid fa-music"></i> Booking Event <i
                class="fa-solid fa-music"></i></h1>
        <hr style="color:green;">
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data as $data)
        <div class="col">
            <div class="card text-center">
                <img src="{{asset('assets\events_photo'.'/'. $data->events_photo)}}" class="card-img-top"
                    style="height:300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$data->events_name}}</h5>
                    <h4>Ticket price - {{$data->Amount}}</h4>
                    <a href="{{url('book-ticket-now').'/'.$data->id}}" class="btn btn-success btn-lg">Book Now<i
                            class="fa-solid fa-music"></i></a>

                    <a href="{{url('events-details').'/'.$data->id}}" class="btn btn-success btn-lg">Details<i
                            class="fa-solid fa-music"></i></a>


                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-----------------------------Event information--------------------------------->

<div class="container text-center p-4">
    <h1 style="color:green;"><i class="fa-solid fa-blog"></i> Events Information <i class="fa-solid fa-blog"></i>
    </h1>
    <br>
    <div class="row ">
        @foreach($blog as $blog)
        <div class="col border border-2 p-4">
            <img src="{{asset('assets\img\blog2.jpg')}}" class="card-img-top" alt="...">
            <p>
                {{$blog->blog_name}}
            </p>
            <button type="button" class="btn btn-lg btn-outline-warning">View Event</button>
        </div>
        @endforeach
    </div>
</div>

<!---------------------Membership--------------------->


<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container p-4 text-center">
    <h1 style="color:green;"><i class="fa-solid fa-video"></i> Subscription tiers at a glance <i
            class="fa-solid fa-video"></i></h1>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($membership as $membership)

        <div class="col">
            <div class="card">
                <img src="{{asset('assets\img\member.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$membership->user_id}}</h5>
                    <h2 style="color:green;">Ammount. {{$membership->paid_payment}}</h2>
                    <p class="card-text">FRee Notification</p>
                    <p class="card-text">profile security</p>
                    <p class="card-text">Life time validity</p>
                    <button type="button" class="btn btn-success text-white btn-lg" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Pay Now <i class="fa-solid fa-cart-shopping"></i>
                    </button>


                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pay Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{asset('assets\img\QR.png')}}" class="card-img-top " style="height:400px" alt="...">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!---------------------------------Footer----------------------------------------------->

@include('Frontend.bin.footer')