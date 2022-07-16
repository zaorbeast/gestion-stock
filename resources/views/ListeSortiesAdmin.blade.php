@extends('admin.layout.admin_dash_layout')
@section('content')
<div class="card">
        <div class="card-head">
            <h1>Liste des sorties</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-primary table-striped">
                <thead>
                    <tr>
                        <th>Id entre</th>
                        <th>Nom Produit</th>
                        <th>Quantite</th>
                        <th>Prix</th>
                        <th>Date </th>
                        <th>Total</th>
                        <th>action</th>
                    </tr>
                    @foreach ($entre as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->NomProd}}</td>
                        <td>{{$item->Quantite}}</td>
                        <td>{{$item->Prix}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->Quantite*$item->Prix}}</td>
                        <td>
                            <a href="{{url('/editSorte/'.$item->id)}}" class="btn btn-primary">modifier l'entre</a>
                            <a href="{{url('/deleteSortie/'.$item->id)}}" class="btn btn-danger">suprimer l'entre</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </thead>
            </table>
            <div class="input-group input-group-outline">
              <form action="{{url('/rechercheSortie')}}">
                <div class="col-md-8 mb-3">
                    <label for="debut">debut de periode</label>
                    <input type="date" name="debut">                   
                </div>
                <div class="col-md-8 mb-3">
                    <label for="fin">fin de la periode</label>
                    <input type="date" name="fin">
                </div>
                <input type="submit" value="rechercher" class="btn btn-primary">
              </form>
             
            </div>
        </div>
        </div>
    </div> <div class="card">
        <div class="card-head">
            @yield('content')
           
@endsection