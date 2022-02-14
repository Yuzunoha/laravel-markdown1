<?php

namespace App\Http\Controllers;

use App\Models\Markdowntext;
use Illuminate\Http\Request;

class MarkdowntextController extends Controller
{
    public function index()
    {
        $m = Markdowntext::find(1);
        $text = $m ? $m->text : '';
        return view('markdowntext', compact('text'));
    }

    public function store(Request $request)
    {
        $m = Markdowntext::find(1);
        if (!$m) {
            $m = new Markdowntext();
        }
        $m->text = $request->text;
        return $m->save();
    }
}
