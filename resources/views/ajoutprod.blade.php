@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
<div class="card-head">
    <h1>
    ajouter un produit
    </h1>  
</div>
<div class="card-body">
    <form action="{{url('/ajouterproduit')}}" class="login100-form validate-form" method="POST">
        @csrf
    <table>
        <tbody>
        <div class="col-md-4 mb-3">
                            <select class="form-select" name="id">
                                <option value="" type="placeholder" >Selectionner la categorie</option>
                                @foreach($categorie as $item)
                                <option value="{{ $item->id}}">{{ $item->NomCat}}</option>
                                @endforeach    
                            </select>
                        </div>
            <div class="col-md-8 mb-3">
        <tr class="col-md-8">
            <label class="col-md-3">Nom du Produit</label>
            <input type="text" class="col-md-5" name="nameprod">
        </tr>
    </div>
    <div class="col-md-8 mb-3">
        <tr >
            <label class="col-md-3">prix</label>
            <input type="number" name="price" class="col-md-5">
        </tr>
    </div>
    <div class="col-md-8 mb-3">
        <tr >
            <label class="col-md-3">Quantite</label>
            <input type="number" name="quantite" class="col-md-5">
        </tr>
    </div>
    
        <tr>
            <input type="submit" class=" btn btn-success mr-3" style="width: fit-content;">
            <input type="reset" class="btn btn-danger " value="Annuller" style="width: fit-content;">
        </tr>
    
        </tbody>
    </table>
    </form>
</div>

    </div>
@endsection
