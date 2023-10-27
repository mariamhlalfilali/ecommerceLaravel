<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produit;
use App\Models\Panier;
use Illuminate\Support\Facades\DB;

class paniers extends Controller
{
    //Panier 
    public function getDataFromPanier($u){
        $pa = DB::table('produits')
            ->join('paniers', 'produits.id', '=', 'paniers.id_produit')
            ->where('paniers.id_user', '=', $u)
            ->paginate(2);
        $sum=DB::table('produits')
            ->join('paniers', 'produits.id', '=', 'paniers.id_produit')
            ->where('paniers.id_user', '=', $u)
            ->select(DB::raw('FORMAT(SUM(prix), 2) as sum'))
            ->first()->sum;
            
        $produit1 = produit::latest()->take(4)->get();
      

        return view('fronts.Cart', ["produits"=>$pa,"sommeAchat"=>$sum,"produit1"=>$produit1]);
    }
    

    public function deleteFromPanier($id) {
        $panier = Panier::find($id);
        $panier->delete();
        return back()->with('success', 'Deletion was successful .');
    }
    
    
}
