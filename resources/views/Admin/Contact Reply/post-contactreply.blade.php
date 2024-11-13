@include('Admin.bin.header')
 

    <!----------------------------------Contact Reply------------------------------------------>

    <div class="container  text-center p-4">
        <h2 style="color:black;"> Contact Reply</h2>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>User id</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Admin id</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p> Message </p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                         
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
