<?php

namespace App\Http\Controllers;

use App\Models\entre;
use App\Models\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class entreController extends Controller
{
    public function index()
    {
        $data=DB::table('produits')
        ->select('NomProd','id')
        ->get();
    if (Auth::user()->role_as=='1') {
        return view('entreAdmin',compact('data'));
    } else {
        return view('entreUser',compact('data'));
    }
    
    }
  public function selection()
  {
      $entre=DB::table('entres')
      ->leftJoin('produits','produits.id',"=",'entres.idprod')
      ->select('entres.id','produits.NomProd','entres.QuantiteE','entres.PrixE','entres.created_at')
      ->get();
      if (Auth::user()->role_as=='1') {
        return view('ListeEntree',compact('entre'));
      } else {
          return view('listEntreUser',compact('entre'));
      }
      
      
  }
    public function inserer(Request $request)
    {
        $entre=new entre();
        $entre->QuantiteE=$request->input('quantite');
        $entre->PrixE=$request->input('prix');
        $entre->idprod=$request->input('id');
        $entre->save();
        $id=$request->input('id');
        $prod=produit::find($id);
        $prod->Quantite=($prod->Quantite+$request->input('quantite'));
        $prod->NewPrice=$request->input('prix');
        $prod->update();
        return redirect('/ListeEntre');
    }
    public function edit($id)
    {
        $data=DB::table('produits')
        ->select('NomProd','id')->get();
        $entre=entre::find($id);
        return view('editEntree',compact('entre','data'));

    }
    public function apdateEntre(Request $request,$id)
    {
        $entre=entre::find($id);
        $entre->QuantiteE=$request->input('Quantite');
        $entre->PrixE=$request->input('Prix');
     //   $entre->idprod=$request->input('idprod');
        $entre->update();
        return redirect('/ListeEntre');
        
        
    }
    public function deletEntre($id)
    {
        $entre=entre::find($id);
        $entre->delete();
        return redirect('/ListeEntre');
    }
    public function research(Request $request)
    {
        $debut=$request->input('debut');
        $fin=$request->input('fin');
        $entre=DB::table('entres')
      ->leftJoin('produits','produits.id',"=",'entres.idprod')
      ->select('entres.id','produits.NomProd','entres.QuantiteE','entres.PrixE','entres.created_at')
      ->where('entres.created_at',">=",$debut)
      ->where('entres.created_at',"<=",$fin)
      ->orderByDesc('entres.id')
      ->get();
      if (Auth::user()->role_as=='1') {
          return view('ListeEntree',compact('entre'));
      } else {
        return view('listEntreUser',compact('entre'));
      }
      
      
    }
}
