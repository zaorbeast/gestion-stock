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
                        <th>Id produit</th>
                        <th>Nom Produit</th>
                        <th>Categorie</th>
                        <th>Quantite</th>
                        <th>Prix</th>
                        <th>nouveau prix</th>
                        <th>create at</th>
                        <th>Total</th>
                        <th>action</th>
                    </tr>
                    @foreach ($produit as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->NomProd}}</td>
                        <td>{{$item->NomCat}}</td>
                        <td>{{$item->Quantite}}</td>
                        <td>{{$item->Prix}}</td>
                        <td>{{$item->newPrice}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->Quantite*$item->Prix}}</td>
                       
                        <td>
                            <a href="{{url('/editProd/'.$item->id)}}" class="btn btn-primary">modifier</a>
                            <a href="{{url('/deleteProd/'.$item->id)}}" class="btn btn-danger">suprimer</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </thead>
            </table>
            <div class="input-group input-group-outline">
              <form action="{{url('/recherche')}}">
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