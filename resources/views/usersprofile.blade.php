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
     </tr>
 
@endforeach
</tbody>
 
</table>    
</div>    
</div>    
@endsection