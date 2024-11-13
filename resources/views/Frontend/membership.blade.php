@include('Frontend.bin.header')
 
<!-----------------------------------Membership--------------->
    <div class="container p-4 text-center">
        <h1>Membership</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <h2>Ammount.399</h2>
                        <p class="card-text">FRee Notification</p>
                        <p class="card-text">profile security</p>
                        <p class="card-text">6 months validity</p>
                        <button class="btn btn-info text-white">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Sliver</h5>
                        <h2>Ammount.499</h2>
                        <p class="card-text">FRee Notification</p>
                        <p class="card-text">profile security</p>
                        <p class="card-text">1 Year validity</p>
                        <button class="btn btn-info text-white">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Gold</h5>
                        <h2>Ammount.999</h2>
                        <p class="card-text">FRee Notification</p>
                        <p class="card-text">profile security</p>
                        <p class="card-text">Life time validity</p>
                        <button class="btn btn-info text-white">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------------------Footer------------------------------->
    @include('Frontend.bin.footer')