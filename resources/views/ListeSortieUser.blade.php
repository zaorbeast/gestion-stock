@extends('layouts.user.userLayout')
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
                  
                    </tr>
                    @foreach ($entre as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->NomProd}}</td>
                        <td>{{$item->QuantiteS}}</td>
                        <td>{{$item->PrixS}}</td>
                        <td>{{$item->created_atS}}</td>
                        <td>{{$item->QuantiteS*$item->PrixS}}</td>
                       
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
@endsection