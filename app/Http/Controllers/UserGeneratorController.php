<?php

namespace P3\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
*/
use Illuminate\Http\Request;
use P3\Http\Requests;

class UserGeneratorController extends Controller
{
    public function index()
    {
        return view('ug.index');
    }
}
