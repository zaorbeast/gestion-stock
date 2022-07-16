<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\entre;
use App\Models\produit;
use App\Models\sortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class produitController extends Controller
{
    public function index()
    {
        $categorie=categorie::all();
        if ( Auth::user()->role_as=='1' ) {
            return view('ajoutprod',compact('categorie'));
        } else {
            return view('addProd',compact('categorie'));
        }


    }
    public function rapportprod( Request $request )
    {
        $idprod=$request->input('id');
        $prod=produit::join('categories','categories.id','=','produits.idcat')
        ->where('produits.id','=',$idprod)
        ->select('produits.id','produits.NomProd','categories.NomCat','produits.Quantite','produits.Prix','produits.created_at')
        ->get();
        $sortie=sortie::join('produits','produits.id','=','sorties.idprod')
        ->where('produits.id','=',$idprod)
        ->select('sorties.id','produits.NomProd','sorties.Quantite','sorties.Prix','sorties.created_at')
        ->get();
        $entre=entre::join('produits','produits.id','=','entres.idprod')
        ->where('produits.id','=',$idprod)
        ->select('entres.id','produits.NomProd','entres.QuantiteE','entres.PrixE','entres.created_at')
        ->get();
        return view('lesraport',compact('prod','sortie','entre'));

    }
    public function rapport()
    {
        $produit=produit::all();

        return view('rapport',compact('produit'));
    }
    public function insertion(Request $request)
    {
     $produit=new produit();

     $produit->NomProd=$request->input('nameprod');
     $produit->idcat=$request->input('id');
     $produit->Prix=$request->input('price');
     $produit->Quantite=$request->input('quantite');
     $produit->save();
     if (Auth::user()->role_as=='1') {
        return redirect('/ListProd')->with('status',"ajout reussi");
     } else {
         return redirect('/listpro');
     }


    }


public function selectprod()
{


     $produit=DB::table('produits')
        ->leftJoin('categories','categories.id',"=",'produits.idcat')
        ->select('categories.NomCat','produits.id','produits.NomProd','produits.Quantite','produits.Prix','produits.newPrice','produits.created_at')
        ->orderByDesc('produits.id')
        ->get();
     if (Auth::user()->role_as=='1') {
        return view('ListeProd',compact('produit'));
     } else {
        return view('listproduit',compact('produit'));
     }


}
public function edit($id)
{
    $produits = Produit::find($id);
    return view('editProduit',compact('produits'));
}
    public function updateprod(Request $request, $id)
    {
        $produits=produit::find($id);
        $produits->NomProd=$request->input('NomProd');
        $produits->idcat=$request->input('Categorie');
        $produits->Prix=$request->input('Prix');
        $produits->Quantite=$request->input('Quantite');
        $produits->update();
        return redirect('/ListProd');

    }
    public function deletePro($id)
    {
        $prod=produit::find($id);
        $prod->delete();
        return redirect('/ListProd');
    }
    public function research(Request $request)
    {
        $debut=$request->input('debut');
        $fin=$request->input('fin');
        $produit=DB::table('produits')
        ->leftJoin('categories','categories.id',"=",'produits.idcat')
        ->select('categories.NomCat','produits.id','produits.NomProd','produits.Quantite','produits.Prix','produits.newPrice','produits.created_at')
        ->where('produits.created_at',">=",$debut)
        ->where('produits.created_at',"<=",$fin)
        ->orderByDesc('produits.id')
        ->get();


                if (Auth::user()->role_as=='1') {
                    return view('ListeProd',compact('produit'));
                } else {
                    return view('listproduit',compact('produit'));
                }





    }

}
