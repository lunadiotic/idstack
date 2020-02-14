<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function getSubject(Request $request)
    {
        $data = [];
        if ($request->has('query')) {
            $data = Subject::select('id', 'title')->where('title', 'LIKE', "%{$request->get('query')}%")->get();
        }

        return response()->json($data);
    }
}
