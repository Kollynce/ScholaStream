@extends('layouts.app')

@section('content')
    <div style="background-color: #28104e" class="p-3">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3 class="text-light font-weight-bold">From Vue 2 to Vue 3</h3>
                </a>
            </div>
        </nav>
    </div>
    <div class="row nopadding">
        <div class="col-md-8 nopadding">
            <video width="900" height="540" controls>
                <source src="/storage/uploads/{{$course->video}}" type="video/mp4">
{{--                <source src="movie.ogg" type="video/ogg">--}}
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-4 nopadding">
           <div class="card text-center pb-2">
               <div class="card-body">
                   <a href="/storage/uploads/{{$course->video}}" class="btn btn-outline-primary rounded-pill mb-3" download><i class="fa fa-download" aria-hidden="true"></i> Download Video</a>
                   <br>
                   <a href="/share" class="rounded-pill nav-link pb-3"><i class="fa fa-share-alt" aria-hidden="true"></i> Share Lesson</a>
                   <hr>
                   <i class="fa fa-files-o fa-4x pb-2" aria-hidden="true"></i>
                   <h3><b>Lesson Resources</b></h3>
                   <ul class="list-group">
                       <a href="/storage/uploads/{{$course->file}}" class="rounded-pill nav-link pb-3">Get Lesson files</a>
                   </ul>
                   <hr>
                   <i class="fa fa-keyboard-o fa-4x pb-2" aria-hidden="true"></i>
                   <h3><b>Coding Challenge</b></h3>
                   <ul class="list-group">
                       <li class="list-inline-item p-2">Start the challenge</li>
                   </ul>
               </div>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="description col-md-8 container py-4">
            <h2>{{$course->title}}</h2>
            <p class="lead-p text-dark">
                {{$course->description}}
            </p>

        </div>
        <div class="col-md-4 nopadding">
            <div class="card mb-3 mt-5 text-center">
                <div class="card-body">
                    <h3>Send me a Message</h3>
                    <form action="{{url('/message')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" class="form-control" id="title" aria-describedby="title" placeholder="Enter Your Name">
                            <input type="text" hidden value="{{Auth::user()->id}}" name="user_id" >
                            <input type="text" hidden value="{{Auth::user()->roles}}" name="sender_role" >
                            <input type="text" hidden value="{{$course->id}}" name="courses_id" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Say Hi!" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary rounded-pill px-5 mb-3"><i class="fa fa-envelope" aria-hidden="true"></i> Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #28104e">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
               <div class="col-md-6">
                   <a class="navbar-brand" href="{{ url('/') }}">
                       <h3 class="text-light font-weight-bold">Previous</h3>
                   </a>
               </div>
                <div class="col-md-6">
                    <a class="navbar-brand pull-right" href="{{ url('/') }}">
                        <h3 class="text-light font-weight-bold">Next</h3>
                    </a>
                </div>
            </div>
        </nav>
    </div>
@include('includes.footer')
@endsection
