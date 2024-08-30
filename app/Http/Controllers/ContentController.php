<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class ContentController extends Controller
{
    public function index()
    {
        $info = Info::all();
        return view('page.index', compact('info'));
    }

    public function create()
    {
        return view('page.form');
    }

    public function add(Request $request)
{
    dd($request->all()); // ตรวจสอบข้อมูลที่ได้รับ

    $validated = $request->validate([
        'methode_name' => 'required|string',
        'reason_description' => 'required|string',
        'office_name' => 'required|string',
        'date' => 'required|string',
        'attachdorder' => 'required|string',
        'attachdorder_date' => 'required|date',
        'devilvery_time' => 'required|string',
    ]);

    $info = new Info;
    $info->methode_name = $validated['methode_name'];
    $info->reason_description = $validated['reason_description'];
    $info->office_name = $validated['office_name'];
    $info->date = $validated['date'];
    $info->attachdorder = $validated['attachdorder'];
    $info->attachdorder_date = $validated['attachdorder_date'];
    $info->devilvery_time = $validated['devilvery_time'];
    $info->id = 1;

    $info->save();
    return redirect('/page');
}
    
public function edit($id)
{
    $info = Info::findOrFail($id);
    return view('info.form' ,compact('info'));
}

}
