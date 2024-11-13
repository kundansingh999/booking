@include('Frontend.bin.header')

 

    <div class="container text-center p-4">
        <h1 style="color:black;"> Signup</h1>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark">
                <img src="{{asset('assets/img/Signup.png')}}" alt="" style="height:430px;">
            </div>
            <div class="col border border-4 dark">
                <div class="container">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{url('user-register')}}" method="post" enctype=multipart/form-data>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="Password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Confirm Password</label>
                            <input type="Password" class="form-control" id="confirm-password" name="confirm_password"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-----------------------------------------Footer------------------------------->
    @include('Frontend.bin.footer')