<?php

namespace P3\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
*/
use Campo\UserAgent;
use Illuminate\Http\Request;
use P3\Http\Requests;


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
        $text = '';

        if (isset($_POST['allit']))
            $generator = new \Nubs\RandomNameGenerator\Alliteration();
        else
            $generator = new \Nubs\RandomNameGenerator\Vgng();

        for ($i=0; $i<$_POST['users']; $i++) {
            $text .= '<p>';
            $text .= $generator->getName() . '<br>';
            if (isset($_POST['environment'])) {
                $text .= \Campo\UserAgent::random() . '<br>';
            }
            $text .= '</p>';
        }

        return view('usergenerator.show')->with('text', $text);
    }
}
