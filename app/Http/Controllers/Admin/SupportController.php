<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Report $report)
    {
        $reports = $report->all();
        // dd($reports);

        return view('admin/reports/index', compact('reports'));
    }

    public function show(string $id)
    {
        // dd($id);
            // Report::find($id);
            // Report::where('id', $id)->first();
            // Report::where('id', '=', $id)->first();
            // Report::where('id', '!=', $id)->first();
        if(!$report = Report::find($id)){
            return redirect()->back();
        }
        
        return view('admin/reports/show', compact('report'));
       
    }

    public function create()
    {
        return view('admin/reports/create');
    }

    // public function store()
    // {
    //     dd('vou cadastrar ...');
    // }
    public function store(Request $request, Report $report )
    {
        //  dd($request->all());
        $data = $request->all();
        $data['status'] = 'a';

        $report = $report->create($data);
        // dd($report);
        return redirect()->route('reports.index');
    }
}
