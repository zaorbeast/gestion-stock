@extends('admin.layout.admin_dash_layout')
@section('content')
<div class="card">
        <div class="card-head">
            <h1>Liste de produit</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-primary table-striped">
                <thead>
                    <tr>
                        <th>Id Categorie</th>
                        <th>Nom de la categorie</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($categorie as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->NomCat}}</td>
                        <td>
                            <a href="{{url('/editCat/'.$item->id)}}" class="btn btn-primary">modifier la categorie</a>
                            <a href="{{url('/deleteCat/'.$item->id)}}" class="btn btn-danger">suprimer la categorie</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection