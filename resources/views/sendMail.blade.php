@extends('masterpage')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
                        <h1> Gửi Mail </h1>
                        <form action="/mail" method="POST" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        
                            <div class="form-group">
                                <label>Người nhận</label>
                                <input class="form-control" name="txtTo" placeholder="Please Enter Email To" />
                            </div>
                            <div class="form-group">
                                <label>Chủ Đề </label>
                                <input class="form-control" name="txtSubject" placeholder="Please Enter Subject" />
                            </div>
                            <div class="form-group">
                            <label>File</label>
                            <input  type="file" name="up" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung </label>
                                <textarea name="txtContent" class="form-control" id="article-ckeditor" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">ADD</button>
                    
                        <form> 
            
</div>

@endsection