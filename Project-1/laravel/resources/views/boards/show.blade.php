@extends('boards.template')
@section('content')

    <h1>Board</h1>
    <table border=1>
        <thead>
          <tr>
                <th>ID.</th> <th>Title</th><th>Body</th>
          </tr>
        </thead>
        <tbody>
           <tr>
           <td>{{ $board->id }}</td> <td> {{ $board->title }} </td><td> {{ $board->body }} </td>
            </tr>
        </tbody>    
    </table>

    <a href="{{url('/boards')}}"> Back </a>

@endsection
