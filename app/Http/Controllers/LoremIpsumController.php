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

    public function show(Request $request)
    {
        $this->validate($request, ['size' => 'required|integer|min:1|max:99']);

        $text_type = $request->input('text_type');
        $size = $request->input('size');

        $lipsum = new LoremIpsum();
        switch ($text_type) {
            case 'words':
                $text = $lipsum->words($size, 'p');
                break;
            case 'sentences':
                $text = $lipsum->sentences($size, 'p');
                break;
            case 'paragraphs':
                $text = $lipsum->paragraphs($size, 'p');
                break;
        }

        return view('loremipsum.show')->with('text', $text);
    }
}
