@extends('home')
@section('content')
<h1 class="mb-6" >Entre le produit</h1>
        
<form action="addProd" method="POST" enctype="multipart/form-data" class="login100-form validate-form ">
@csrf
<tr>
<div class="col-md-4 mb-3">
   <select class="form-select" name="id">
        <option value="" type="placeholder" >Selectionner la categorie</option>
        @foreach($categorie as $item)
         <option value="{{ $item->id}}">{{ $item->NomCat}}</option>
        @endforeach    
   </select>
</div>
</tr>
 <div class="col-md-8 mb-3">
<tr>       
<td>
<label class="col-md-3"> product name</label>
<input type="text" name="nameprod" class="input100 col-md-5">
</td>
</tr>
</div>            
<div class="col-md-8 mb-3">
<tr>
 <td>
    <label class="col-md-3">Prix</label>
    <input type="number" name="price" class="inpur100 col-md-5">
 </td>
</tr>
</div>
<div class="col-md-8 mb-3">
<tr>
</tr>
<tr>
        <td>
                <label class="col-md-3">Quantite</label>
                <input name="quantite" class="col-md-5 input100" type="number">
        </td>
</tr>
</div>
<div class="col-md-8 mb-3">

</div>
<div class="col-mb-8">
        <td class="col-md-4">

        </td>
        <td class="col=md-4">
                <button type="submit" name="subimt" class="btn btn-primary">add</button>
        </td>
</div>
</form>




@endsection