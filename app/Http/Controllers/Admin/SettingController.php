<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('pages.admin.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        Setting::updateOrCreate(['id' => 1], $request->except('submit'));
        $request->session()->flash('status', 'Success!');
        return redirect()->route('admin.setting.index');
    }
}
