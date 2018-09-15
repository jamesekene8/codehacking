@extends('layouts.admin')



@section('content')

<h1>Create Posts</h1>

<div class="row">

{!! Form::open(['method' => 'Post', 'action' => 'AdminPostsController@store', 'files' => true]) !!}
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category_id', [1 => 'front-end', 2 => 'backend'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Photo', 'Upload Photo:') !!}
    {!! Form::file('photo_id', null, ['class' => 'form-control-file']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>

<div class="row">

@include('includes.form_error');

</div>


@stop