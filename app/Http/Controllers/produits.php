<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
class produits extends Controller
{
    //Produits
    public function getDataFromProduit()
{
    $produits = Produit::all(); // Fetch all products from the 'produit' table

    return view('fronts.Home', ["produits" => $produits]);
}
    public function getDataFromProduit2(){
        $produits = produit::all();
        
    }
    public function addToPanier($p,$u){
        $a = Db::insert('insert into paniers(id_produit,id_user) values(?,?)', [$p, $u]);
        return redirect('/')->with('success','product add to cart successfully');       
    }
}
