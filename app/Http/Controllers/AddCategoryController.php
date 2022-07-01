<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\q_categorie;

class AddCategoryController extends Controller
{
    //
    function addCategory(Request $req)
    {
        $q_categorie = new q_categorie;
        $q_categorie -> title = $req -> title;
        $q_categorie -> save();
        return redirect('add-category');
    }
}
