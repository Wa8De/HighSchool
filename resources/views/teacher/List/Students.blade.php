@extends('layouts.app')

@section('content')
    <h1>Students</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class &nbsp &nbsp</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }} &nbsp &nbsp</td> 
                    <td>{{ $user->email }}&nbsp &nbsp</td>
                    <td>{{  $user->classes->first()->NameClass}}</td> 
                    <td>     
                        <a href='/Students/{{$user->id}}/edit' class='btn btn-primary'>Edit</a></button>
                       <form action='/Students/{{$user->id}}' method='POST' style='display:inline'>
                         @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Delete</button>       
                       </form>
                     
                    </td>
                </tr>
       
            @endforeach
        </tbody>
    </table>
@endsection
