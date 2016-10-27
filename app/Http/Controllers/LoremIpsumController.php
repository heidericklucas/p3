<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as Generator;

class LoremIpsumController extends Controller {

    public function showForm() {
        return view('lorem-ipsum');
  }

  public function generateText(Request $request){
      $this ->validate($request,
      ['number_of_paraghraphs' => 'required|numeric|min:1',]);

      $number = $request->input('number_of_paraghraphs');
      $generator = new Generator();
      $result = $generator->getParagraphs($number);
      return view('lorem-ipsum')->with('result',$result);
    }

}
