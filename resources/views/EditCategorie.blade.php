@extends('admin.layout.admin_dash_layout')
@section('content')
    <div class="card">
        <div class="card-head">
            <h1>Modifier la categorie</h1>
        </div>
        <div class="card-body">
            <form action="{{url('/UpdateCact/'.$categorie->id)}}" method="post" enctype="multipart/form-data">
            @method('put')
                @csrf
                <table>
                    <tr class="col-md-11">
                        <td>
                        <label class="col-md-5">Nom de la categorie</label>
                        <input type="text" name="nomcat" class="col-md-5" value="{{$categorie->NomCat}}">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="Modifier {{$categorie->id}}" class="btn btn-success">
                    </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection