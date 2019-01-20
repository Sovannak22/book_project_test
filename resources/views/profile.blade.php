@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="jumbotron">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Click on <strong>your profile picture </strong>to change.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                {{-- {{$user->img}} --}}
                                
                                <form id="form-img" class=" image-upload" action="/updateprofile" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label for="profile-img">
                                            <img id="user-img" class="round-img d-flex justify-content-center" width="150px" height="150px" src="storage/profile_img/{{$user->img}}" alt="">
                                            <h2 class="d-flex justify-content-center" style="margin-top:25%" class="align-middle">{{$user->name}}</h2>
                                        </label><br>
                                        <input style="display:none" id="profile-img" name="profile-img" type="file" name="profile-img">
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <input type="submit" class="m-3 btn btn-primary" value="Submit">
                                        <input class="m-3 btn btn-danger" id="cancel-button" type="button" value="Cancel">
                                    </div>
                                </form>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
