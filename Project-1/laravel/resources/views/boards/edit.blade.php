@extends('boards.template')
@section('content')

    <h1>Edit Board</h1>
    <hr/>

    {!! Form::model($board, [
        'method' => 'PATCH',
        'url' => ['boards', $board->id],
        'class' => 'form-horizontal'
    ]) !!}

                
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <br><br>
    {!! Form::label('body', 'Body: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
    <br>
    {!! Form::submit('Update') !!}
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
