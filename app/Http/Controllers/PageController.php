<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class PageController extends Controller
{
    public function getWorkers() {
        $workers = DB::select(
            'call Show_workers()');
        return view("show-workers", ['workers'=>$workers]);
    }

    public function getWorkerTasks($id) {
        $tasks = DB::select(
            'call Show_worker_task(?)',["$id"]
        );
        $name = DB::table('workers_directory')->select('pip')
            ->where('id_worker', "$id")->first();    
        return view("worker-tasks", ['tasks'=>$tasks, 'name'=>$name->pip]);
    }

    public function getPlanForm() {
        return view("plan-form");
    }

    public function getPlan(Request $request) {
        $title = "План виготовлення продукції<br>за місяць";
        $month = (int)$request['month'];
        $planJobs = DB::select(
            'call Show_month_plan(?)',["$month"]);
        return view("plan-jobs",['title'=>$title, 'objects'=>$planJobs] );
    }

    public function getSummaryMadeForm() {
        $root = "summary-made";
        $title = "Зведення виготовленої<br>продукції робітником за місяць";
        $workers = DB::select(
            'call Show_workers()');
        return view("monthWorker-form", ['root'=>$root, 'title'=>$title, 'workers'=>$workers]);
    }

    public function getSummaryBrackForm() {
        $root = "summary-brack";
        $title = "Зведення відбракованої продукції<br> за місяць за видами браку";
        $bracks = DB::table('defect_directory')->select('id_defect as id', 'defect_type as type')->get();
        $workers = DB::select(
            'call Show_workers()');
        return view("monthBrack-form", ['root'=>$root, 'bracks'=>$bracks]);
    }

    public function getSummaryMade(Request $request) {
        $title = "Зведення виготовленої<br>продукції робітником за місяць";
        $month = (int)$request['month'];
        $id = (int)$request['id'];
        $planJobs = DB::select(
            'call Show_workers_job(?, ?)', [$month, $id]);
        return view("plan-jobs", ['title'=>$title, 'objects'=>$planJobs]);
    }

    public function getSummaryBrack(Request $request) {
        $month = (int)$request['month'];
        $id = (int)$request['id'];
        DB::select('call cr_or_rep_view');
        $brackJobs = DB::select(
            'call Show_perc_defect(?, ?)', [$month, $id]);
        return view("brack-table", ['objects'=>$brackJobs]);
    }

    


}
