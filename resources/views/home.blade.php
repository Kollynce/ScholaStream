@extends('layouts.app')

@section('content')
    <div class="message-header">
        <div class="content container">
            <div class="banner">
                <h3 class="text-center lead"> Messages</h3>
                <h2 class="text-center text-light"> Please reply your messages</h2>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($message as $messages)
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="" src="http://via.placeholder.com/300x180" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Message from <b>{{$messages->name}}</b> on the topic <b>{{$messages->course->title}}</b></h4>
                            <p class="card-text">{{$messages->message}}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated {{$messages->created_at}}</small>
                        <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-5 pull-right" data-toggle="modal" data-target="#reply"><i class="fa fa-envelope" aria-hidden="true"></i> Reply</button>
                    </div>
                </div>
            </div>
        </div>

            <div class="modal fade" id="reply" tabindex="-1" role="dialog" aria-labelledby="reply" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reply Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/message')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" name="name" class="form-control" id="title" aria-describedby="title" placeholder="Enter Your Name">
                                    <input type="text" hidden value="{{Auth::user()->id}}" name="user_id" >
                                    <input type="text" hidden value="{{Auth::user()->roles}}" name="sender_role" >
                                    <input type="text" hidden value="{{$messages->courses_id}}" name="courses_id" >
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
        @endforeach
    </div>
    <div class="mt-5">
        @include('includes.footer')
    </div>
@endsection

