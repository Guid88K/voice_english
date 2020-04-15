<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordSearchController extends Controller
{
    public function search(Request $request)
    {
        $dictionary = DB::table('dictionaries')->where('word', 'like',  $request->word . '%')->get();

        if (!(count($dictionary) > 0)) {
            $dictionary = DB::table('dictionaries')->where('translate_word', 'like',  $request->word . '%')->get();

        }

        return view('dictionary.dictionary', ['dictionary' => $dictionary]);
    }
}
