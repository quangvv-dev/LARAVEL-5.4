@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">THÔNG BÁO</div>

                <div class="panel-body" style="color:red">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @lang('message.albert')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
