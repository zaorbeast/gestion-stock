<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categorieController extends Controller
{
    public function ajouterCat()
    {
        if (Auth::user()->role_as=='1') {
            return view('admincat');
        } else {
            return redirect('/home')->with('status',"Desole vous n'etes pas un admin");
        }
        
    }
    public function insertCat(Request $request)
    {
    $categorie=new categorie();
    $categorie->NomCat=$request->input('nomCat');
    $categorie->save();
    return redirect('/ListeCat');
    }
    public function selection()
    {
    $categorie=categorie::all();
    return view('ListeCat',compact('categorie'));
    }
    public function editcat($id)
    {
        $categorie=categorie::find($id);
        return view('EditCategorie',compact('categorie'));
    }
    public function UpdateCat(Request $request,$id)
    {
        $categorie=categorie::find($id);
        $categorie->NomCat=$request->input('nomcat');
        $categorie->update();
        return redirect('/ListeCat');
    }
    public function deleteCate($id)
    {
        $categorie=categorie::find($id);
        $categorie->delete();
        return redirect('/ListeCat');
    }
}
