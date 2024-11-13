@include('Admin.bin.header')


    <!----------------------------------Edit  Offer--------------------------------------------------------->

    <div class="container text-center p-4">
        <h2 style="color:black;"> Edit Offer</h2>
        <div class="row bg-info p-4">
            <div class="col border border-4 dark ">
                <div class="container p-4">
                    <form action="{{url('update-offer-post')}}" method="post">
                        @csrf>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Coupon code</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="coupon_code" value="{{$data->coupon_code}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Coupon expire</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="coupon_expire"
                                    value="{{$data->coupon_expire}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Amount </p>
                                <input type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="amount" value="{{$data->amount}}">
                            </div>
                        </div>
                        <input type="text" value="{{$data->id}}" name="id" hidden >
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <p>Admin_id</p>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="admin_id" value="{{$data->admin_id}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <select name="status" class="form-control" id="selEducation">
                                    @php
                                    $status = $data->status;
                                    @endphp
                                    <option value="1" {{$status == '1' ? 'selected' : ''}}>Active</option>
                                    <option value="2" {{$status == '2' ? 'selected' : ''}}>Inactive</option>
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
