@include('Frontend.bin.header')
 

    <!----------------------------------Post Blog--------------------------------------------------------->

    <div class="container text-center p-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h3 style="color:black;"> Blog</h3>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('add-blog-post')}}" method="post">
                        @csrf>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Blog Name</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Blog Description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    name="blog_description">
                                </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p> Blog Title </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="blog_title">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="publish_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Keyword</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="keyword">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    <div class="bg-success">
        <div class="container">
            <footer class="py-5 text-white">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>