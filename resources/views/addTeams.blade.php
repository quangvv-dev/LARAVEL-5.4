@extends('masterpage')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
<h1>ADD TEAMS</h1>
                        <form action="/teams" method="POST" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="txtDes" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                            <label>Logo</label>
                                <input type="file" name="txtLogo">
                            </div>
                            <div class="form-group">
                                <label>Leader</label>
                                <textarea name="txtLeader" class="form-control" id="article-ckeditor" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">ADD</button>
                    
                        <form>
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
@endsection