<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Fashion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AdminPageController extends Controller
{
    
    public function getAdminMain() {
    	return view("admin.admin-main");
    }

    public function getEditWorkers() {
    	$workers = DB::select(
            'call Show_workers()');
    	return view("admin.edit-workers", ['workers'=>$workers]);
    }

    public function getAddWorkerForm() {
    	return view("admin.add-worker-form");
    }

    public function addWorker(Request $request) {
    	DB::table('workers_directory')->insert([
    		"id_worker"=> NULL,
            "pip"=> $request->input("name")]);
    	return redirect()->route('admin-workers');
    }

    public function deleteWorker($id) {
    	DB::table('workers_directory')->where('id_worker',$id)->delete();
    	return redirect()->route('admin-workers');
    }

    public function getWorkerTasks($id) {
        $tasks = DB::select(
        	'call Show_worker_task(?)',["$id"]
        );
        $worker = DB::table('workers_directory')->select('pip as name', 'id_worker as id')
            ->where('id_worker', "$id")->first();  
        return view("admin.edit-worker-tasks", ['tasks'=>$tasks, 'worker'=>$worker]);
    }

    public function getAddWorkerTaskForm($worker_id) {
    	$fashions = DB::table('fashion_directory')->select('id_fashion as id', 'fashion_name as name')->get();
        $sizes = DB::table('size_directory')->select('id_size as id', 'size_num as name')->get();    
    	$worker = DB::table('workers_directory')->select('pip as name', 'id_worker as id')
            ->where('id_worker', "$worker_id")->first();
    	return view("admin.add-worker-task-form", ['worker'=>$worker, 'fashions'=>$fashions, 'sizes'=>$sizes]);
    }

    public function addWorkerTask(Request $request, $worker_id) {
    		
    	DB::table('task')->insert([
    		"id_task"=> 300,
    		"date"=> $request->input("date"),
    		'worker'=> $worker_id,
    		"fashion"=> $request->input("fashion_id"),
            "size"=> $request->input("size_id"),
            "amount"=> $request->input("amount")
        ]);
        return redirect()->route('admin-worker-tasks', ['id' => $worker_id]);    
    	//return view("admin.add-worker-task-form", ['worker'=>$worker]);
    }
    public function deleteTask($worker_id, $task_id) {
    	DB::table('task')->where('id_task', $task_id)->delete();
    	return redirect()->route('admin-worker-tasks', ['id' => $worker_id]);
    }

    //sizes

    public function getSizes() {
    	$s = new Size();
    	return $s->renderList();
    }
    public function getAddSizeForm() {
    	$s = new Size();
    	return $s->renderForm();
    }
    public function addSize(Request $request) {
    	$s = new Size();
    	$s->addSize($request);
    	return redirect()->route('admin-sizes');;
    }
    public function deleteSize($id) {
    	$s = new Size();
    	$s->deleteSize($id);
    	return redirect()->route('admin-sizes');;
    }

    //fashions

    public function getFashions() {
    	$f = new Fashion();
    	return $f->renderList();
    }
    public function getAddFashionForm() {
    	$f = new Fashion();
    	return $f->renderForm();
    }
    public function addFashion(Request $request) {
    	$f = new Fashion();
    	$f->addFashion($request);
    	return redirect()->route('admin-fashions');;
    }
    public function deleteFashion($id) {
    	$f = new Fashion();
    	$f->deleteFashion($id);
    	return redirect()->route('admin-fashions');;
    }


}
