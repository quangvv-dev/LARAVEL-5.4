@extends('masterpage')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
                        <form method="POST" action="/teams/{{$detail->id}}" accept-charset="utf-8">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <input name="_method" type="hidden" value="PUT">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{{$detail->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="txtDes" placeholder="Please Enter Password" value="{{$detail->description}}" />
                            </div>
                            <div class="form-group">
                            <label>Logo</label>
                                <input type="file" name="txtLogo">
                            </div>
                            <div class="form-group">
                                <label>Leader</label>
                                <textarea name="txtLeader" class="form-control" id="article-ckeditor" rows="3"">{{$detail->leader}}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Update</button>
                        </form>
                    </div>
@endsection