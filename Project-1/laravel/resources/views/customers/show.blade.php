@extends('customers.template')
@section('content')

    <h1>Customer</h1>
    
    <table border=1>
        <thead>
          <tr>
               <!-- <th>ID.</th> <th>Title</th><th>Body</th> -->
                <th> Id </th><th>Name</th><th>Lastname</th><th>E-mail</th><th>Phone</th><th>address</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
           <tr>
           <td>{{ $customer->id }}</td> <td> {{ $item->name }}</td><td>{{ $item->lastName }}</td><td>{{ $item->email }}</td><td>{{ $item->phone }}</td><td>{{ $item->address }}</td>
            </tr>
        </tbody>    
    </table>

    <a href="{{url('/customers')}}"> Back </a>

@endsection
