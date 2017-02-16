@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">                 

                    <img src="/uploads/files/{{$user->photo}}" width="150px" height="150px" border-radius="50%">
                    <h2>{{$user->firstname." ".$user->lastname}} Profile</h2>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <input type="file" name="photo">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Submit" class="btn btn-sm btn primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
