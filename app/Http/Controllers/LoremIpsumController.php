<?php

namespace P3\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
*/
use Illuminate\Http\Request;
use P3\Http\Requests;
use joshtronic\LoremIpsum;

class LoremIpsumController extends Controller
{
    public function index()
    {
        return view('loremipsum.index');
    }

    public function show()
    {
        $lipsum = new LoremIpsum();
        switch ($_POST['text_type']) {
            case 'words':
                $text = $lipsum->words($_POST['paragraphs'], 'p');
                break;
            case 'sentences':
                $text = $lipsum->sentences($_POST['paragraphs'], 'p');
                break;
            case 'paragraphs':
                $text = $lipsum->paragraphs($_POST['paragraphs'], 'p');
                break;
        }

        return view('loremipsum.show')->with('text', $text);
    }
}
