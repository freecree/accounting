<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Size extends Model
{
    use HasFactory;

    public $routeToList;
    public $routeToAdd;
    public $routeToDelete;
    public $title;
    public $formTitle;
    public $formField;
    public $items; // id, name
 
    public function __construct() {
        $this->title = "Розміри";
        $this->items = DB::table('size_directory')->select('id_size as id', 'size_num as name')->get(); 
        $this->routeToList = "admin-sizes";
    	$this->routeToAdd = "add-size-form";
    	$this->routeToDelete = "delete-size";
    	$this->formTitle = "Створення розміру";
    	$this->formField = "Введіть розмір";
    }

    public function renderList() {
    	return view("admin.simplelist", ['obj'=>$this]);
    }
    public function renderForm() {
    	return view("admin.simpleform", ['obj'=>$this]);
    }
    public function addSize(Request $request) {
    	DB::table('size_directory')->insert([
    		'id_size'=> NULL,
    		'size_num'=> $request->input("name")
    	]);	
    }
    public function deleteSize($id) {
    	DB::table('size_directory')->where('id_size', $id)->delete();
    }

}
