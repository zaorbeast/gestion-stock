@extends('layouts.user.userLayout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Welcome {{$user->name}}</h1>
        </div>
        <div class="card-body">
            <label for="name">user</label>
            <details>
                {{$user->name}}
                <br/>
                {{$user->email}}
                <br/>
                Role: User
                <br>

            </details>
        </div>
    </div>
@endsection