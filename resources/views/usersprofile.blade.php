@extends('admin.layout.admin_dash_layout')
@section('content')
<div class="card">
<div class="card-head">
<h1>Liste des utilisateur</h1>
</div>
<div class="card-body">
<table class="table table-bordered table-primary table-striped">
<thead>
<tr>
<th>Id</th>
<th>Nom</th>
<th>email</th>
<th>Password</th>
<th>Role</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($user as $item)

     <tr>
         <td>{{$item->id}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->email}}</td>
         <td>{{$item->password}}</td>
         @if ($item->role_as=='1')
                    <td>admin</td>
                @else
                    <td>user</td>
                @endif
        <td>
            @if ($item->role_as=='0')
            <a href="{{url('/grant/'.$item->id)}}" class="btn btn-success">Grant</a>
            @else
            <a href="{{url('/revoc/'.$item->id)}}" class="btn btn-danger">Revoque</a>
            @endif


        </td>
     </tr>

@endforeach
</tbody>

</table>
<a href="{{url('/createuser')}}" class="btn btn-primary mt-2">Créer un utilisateur</a>
</div>
</div>
@endsection
