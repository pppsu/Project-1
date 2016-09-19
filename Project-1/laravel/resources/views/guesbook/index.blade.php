


@extends("guestbook.template")
@section("content")


@foreach($comments as $com)
<!-- start comment -->
  <div class="row col-md-12 well">
      {!! nl2br("$com->comment") !!}
      <br/> <br/>

      @can('show',$com)
        <a href="edit/{{$com->id}}"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="delete/{{$com->id}}"><span class="glyphicon glyphicon-remove"></span></a>
      @endcan

      {{$com->updated_at}}

      <div class="pull-right">
          <strong>From: </strong>
            {{$com->user()->get()[0]['name']}} ::
            {{$com->ip}}
      </div>
  </div>
  <!-- stop comment -->
@endforeach

<div class="row col-md-12" align="center">
   {!! $comments->render() !!}
</div>

@if (!Auth::guest())

  <div class="row col-md-12">
    <!-- stories-->
      <hr>
      <div class="form-group well">
          {!! Form::open(['url' => 'guestbook/addComment']) !!}
          {!! Form::label('name','Name:') !!}
          {{  Auth::user()->name }} <br>
          {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5', 'required' => 'required']) !!}<br/>
          {!! Form::hidden('ip',Request::getClientIp(),['class' => 'form-control'])!!}
          {!! Form::submit('submit',['class' => 'btn btn-primary btn-sm']) !!}
          {!! Form::close() !!}
      </div>
      <!--/stories-->
  </div>

 @endif

</div>

@endsection