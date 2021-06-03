<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="courses-header">
    @include('includes.nav')
    <div class="content container">
        <div class="banner">
            <h3 class="text-center lead"> Our Courses</h3>
            <p class="text-center text-light">Get the best learning materials here.</p>
            <a href="#" class="btn btn-outline-success rounded-pill px-3 py-2 mt-5 mx-1">Beginner</a>
            <a href="#" class="btn btn-outline-success rounded-pill px-3 py-2 mt-5 mx-1">Intermediate</a>
            <a href="#" class="btn btn-outline-success rounded-pill px-3 py-2 mt-5 mx-1">Advance</a>
        </div>
    </div>
</div>
<div style="background-color: #28104e" class="p-2">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/courses') }}">
                <h3 class="text-light font-weight-bold">Add a New Course</h3>
            </a>
            <ul class="navbar-nav ml-auto">
                @if(Auth::user()->roles == 'Teacher')
                    <li class="nav-item">
                        <a class="nav-link text-light btn btn-outline-dark rounded-pill m-2 button" data-toggle="modal" data-target="#exampleModalCenter" href="#">{{ __('Add New') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Your Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/courses')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter Video Title">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="video" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Upload your Video</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Attached Files</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Thumbnail Image</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Number of Lessons</label>
                            <input type="number" min="0" name="lesson" class="form-control" id="title" aria-describedby="title" placeholder="Enter Video Title">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" class="form-control" id="level">
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advance">Advance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Add Your Description</label>
                            <textarea class="form-control" name="description" id="summernote" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary rounded-pill m-2 button" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-dark rounded-pill m-2 button">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container py-3">
    @foreach($course as $courses)
        <div class="card m-3">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-center">
{{--                    href="/storage/uploads/{{$loanTerm->file}}"--}}
                    <img src="/storage/uploads/{{$courses->image}}" style="width: 300px; height: 200px" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="pt-2"><b>Price : Free</b></h4>
                        </div>
                        <div class="col-md-12">
                            <a href="/courses/{{$courses->id}}" class="stretched-link" style=" text-decoration: none !important">
                                <h2>{{$courses->title}}</h2>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li>{{$courses->lesson}} lessons</li>
                                <li>30 Hours</li>
                                <li>{{$courses->level}}</li>
                            </ul>
                        </div>
                        <div class="col-md-8 pb-3">
                            {{Str::limit($courses->description, 200)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="">
    @include('includes.footer')
</div>
