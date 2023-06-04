<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\controllers\controller;
use App\Modules\Inventory\Entity\category;

class categorycontroller extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
    public function Addpost()
    {
        $name = request("name");
        $code = request("code");
     
        $category = new category();
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function Index()
    {
        $data = category::all();
        return view("inventory.category.index", [
      'categoryList' => $data
        ]);
        

    }
    public function Edit()
    {
        $id = request('categoryId');
        $category = category::find($id);
        return view("inventory.category.edit",[
            'category' => $category
        ]);

    }
    public function editpost()
    {
     $id = request('id');
     $name = request('name');
     $code = request('code');

     $category = Category::find($id);
     $category->name = $name;
     $category->code = $code;
     $category->save();
     return redirect("/inventory/category");
    }
    public function delete()
    {
        $id=request('categoryId');
        $category = Category::find($id);
        $category->delete();
        Alert::SetSuccessMessage("Category deleted");
        return redirect("/inventory/category");
        
    }
}

