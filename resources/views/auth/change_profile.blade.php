@extends('layouts.app')

@section('content')\
    $genders=array('male','female');
    <div>
        <img src="/profile_img/{{$user->img}}" alt="">
    </div>
    <div>
        {!! Form::open(['action' => 'booksController@store', 'method' => 'POST']) !!}
    
            <div class="form-group">
            {{-- TITLE --}}
            {!! Form::label('name', 'Name: ',['class' => 'form-label']) !!}
            {!! Form::text('name','{{$user->name}}',['class' => 'form-control']) !!}
            </div>
            {{-- AUTHOR --}}
            <div class="form-group">
            {!! Form::label('gender', 'author',['class' => 'form-label']) !!}
            {{ Form::select('gender', $warehouseList, null, array('class'=>'form-control', 'placeholder'=>'Please select gender')) }}
            </div>
            {{-- DESCRIPTION --}}
            <div class="form-group">
            {!! Form::label('description', 'Description',['class' => 'form-label']) !!}
            {!! Form::textarea('description','',['class' => 'form-control']) !!}
            </div>
            {{-- SUBMIT BUTTON --}}
            {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <script>
        $('#school').val("<?php echo($school) ?>");
    </script>
@endsection
