@extends('layouts.user.userLayout')
@section('content')
<div class="card">
        <div class="card-head">
            <h1>Liste des entres</h1>
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
                        <td>{{$item->Quantite}}</td>
                        <td>{{$item->Prix}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->Quantite*$item->Prix}}</td>
                    </tr>

                    @endforeach
                </thead>
            </table>


    <div class="container">
        <a href="#" id="login" class="button">Rechercher</a>
    </div>
        <div class="popup">
            <div class="popup-content">
                <form action="/rechercheEntre">
                    <img src="{{asset('users/images/close.jfif')}}" alt="" class="close">
                    <input type="date" name="debut" placeholder="debut">
                    <input type="date" name="fin" placeholder="fin">
                    <input type="submit" value="Recherche" class="button">
                </form>
            </div>
        </div>
        <script>
            document.getElementById("login").addEventListener("click", function()
                     {
                         document.querySelector(".popup").style.display = "flex";
                     })
            document.querySelector(".close").addEventListener("click", function()
                {
                    document.querySelector(".popup").style.display = "none";
                })
        </script>

</div>
</div>
@endsection
