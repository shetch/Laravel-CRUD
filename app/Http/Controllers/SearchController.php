<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Search contacts by firstname.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        if ($keywords != '') {
            $results = DB::table('contacts')
                ->where('firstname', 'like', $keywords.'%')
                ->orWhere('lastname', 'like', $keywords.'%')
                ->get();
                return view('search')->with(['results' => $results, 'keywords' => $keywords]);
        }

        return redirect()->route('home')->with('error','Please enter search criteria!');
    }
}
