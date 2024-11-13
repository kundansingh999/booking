<div class="bg-success">
    <div class="container">
        <footer class="py-5 text-white">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Offer</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Event</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Membership</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Gallery</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Term & Condition</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Policy</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">

                    <img src="{{asset('assets\img\logo2.png')}}" alt="logo" style="height: 80px;width: 165px;">

                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <form> 
                                @csrf
                            <input id="newsletter1" type="text" class="form-control newslettermail" placeholder="Email address">
                            <button class="btn btn-primary xyz" type="button">Subscribe</button>

                            </form>

                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center d-flex flex-column flex-sm-row justify-content-between">
                <ul class="list-unstyled d-flex">
                    <p class="text-center">&copy; Development by ijor Kashyap and Kundan.</p>

                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a> <i class="fa-brands fa-facebook"></i> </li>

                    <li class="ms-3"><a class="link-dark" href="https://www.youtube.com/@IJOR03" target="_blank"><svg
                                class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg><i class="fa-brands fa-youtube" style="color:white"></i></a> </li>

                    <li class="ms-3"><a class="link-dark" href=""><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a><i class="fa-solid fa-g"></i></li>

                </ul>
            </div>
        </footer>
    </div>
</div>


 <script src="{{asset('assets/js/common.js')}}"></script>
</body>


</html>