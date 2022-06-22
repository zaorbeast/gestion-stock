@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Modifier l'entre</h1>
        </div>
        <div class="card-body">
            <form action="{{url('/updateEntre/'.$entre->id)}}" method="post" enctype="multipart/form-data">
                
            @method('put')
            @csrf
            <table>
                <tbody>
                
             <!--   <div class="col-md-4 mb-3">
                            <select class="form-select" name="id">
                                <option value="" type="placeholder" >Selectionner Sous Categories</option>
                                @foreach($data as $item)
                                <option  value="{{ $item->id}}">{{ $item->NomProd }}</option>
                               
                                @endforeach    
                            </select>
                        </div> -->
                    <div class="col-md-8 mb-3">
                    <tr>
                        <label class="col-md-2">Prix</label>
                        <input type="number" name="Prix" class="col-md-5" value="{{$entre->Prix}}">
                    </tr>
                    </div>
                    <div class="col-md-8 mb-3">
                    <tr>
                        <label class="col-md-2">Quantite</label>
                        <input type="Number" class="col-md-5" name="Quantite" value="{{$entre->Quantite}}">
                    </tr>
                    </div>
                    <div class="mb-3">
                    <tr>
                    <input type="submit" value="Modifier" class="btn btn-success">
                    </tr>
                    </div>
                </tbody>
            </table>


            </form>
        </div>
    </div>
@endsection