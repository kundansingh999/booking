@include('Admin.bin.header')

    <!----------------------------------View Gallery-------------------------->

    <div class="container p-4">
        <h1 style="color:black;" class="text-center">View gallery</h1>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <a href="{{url('admin/post-Gallery')}}" class="btn btn-primary m-2">Add Gallery</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $data)
            <div class="col">
                <div class="card">
                     <div class="card-body">
                        <p>photo:- {{$data->photo}}</p>
                        <p>photo_description:- {{$data->photo_description}}</p>
                        <p>photo_title:- {{$data->photo_title}}</p>
 
                        <a href="{{ url('admin/gallery-edit'). '/' . $data->id }}
                        " class="btn btn-info text-white">Edit</a>
                        <a href="{{ url('gallery-delete'). '/' . $data->id }}
                        " class="btn btn-danger text-white">Delete</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!---------------------------------Footer----------------------------------------------->

    @include('Admin.bin.footer')
