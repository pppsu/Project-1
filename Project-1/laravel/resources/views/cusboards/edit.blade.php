@extends('cusboards.template')
@section('content')

    <h1>Edit CusBoard</h1>
    <hr/>

    {!! Form::model($cusboard, [
        'method' => 'PATCH',
        'url' => ['cusboards', $cusboard->id],
        'class' => 'form-horizontal'
    ]) !!}

                
    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    <br><br>
    {!! Form::label('lastName', 'Lastname: ') !!}
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
    {!! $errors->first('lastName', '<p class="help-block">:message</p>') !!}
    <br>
    {!! Form::label('email', 'email: ') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    <br>
    {!! Form::label('phone', 'Phone: ') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    <br>
    {!! Form::label('address', 'Address: ') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
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
