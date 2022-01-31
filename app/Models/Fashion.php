<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Fashion extends Model
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
        $this->title = "Моделі";
        $this->items = DB::table('fashion_directory')->select('id_fashion as id', 'fashion_name as name')->get(); 
        $this->routeToList = "admin-fashions";
    	$this->routeToAdd = "add-fashion-form";
    	$this->routeToDelete = "delete-fashion";
    	$this->formTitle = "Створення моделі";
    	$this->formField = "Введіть модель";
    }

    public function renderList() {
    	return view("admin.simplelist", ['obj'=>$this]);
    }
    public function renderForm() {
    	return view("admin.simpleform", ['obj'=>$this]);
    }
    public function addFashion(Request $request) {
    	DB::table('fashion_directory')->insert([
    		'id_fashion'=> NULL,
    		'fashion_name'=> $request->input("name")
    	]);	
    }
    public function deleteFashion($id) {
    	DB::table('fashion_directory')->where('id_fashion', $id)->delete();
    }

}
