<?php

namespace P3\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
*/
use Illuminate\Http\Request;
use P3\Http\Requests;
use RandomUser;


class UserGeneratorController extends Controller
{
    public function index()
    {
        return view('usergenerator.index');
    }

    /**
     * @return $this
     */
    public function show()
    {
        $gen = new \RandomUser\Generator();
        $user = $gen->getUser();

        for ($i=0;$i<$_POST['users]'];$i++) {
            $text = '<p>';
            $text .= $user->getName();
            $text .= '</p>';
        }

        return view('usergenerator.show')->with('text', $text);
    }
}
