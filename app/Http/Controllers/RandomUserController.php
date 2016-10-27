<?php

namespace app\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class RandomUserController extends Controller {
  public function showForm(){
    return view('random-user');
  }

  public function generateUser(Request $request){
    $this ->validate($request,
    ['number_of_users' => 'required|numeric|min:1',]);

      $number = $request->input('number_of_users');
      $dateOfBirth = $request->input('dateOfBirth');
      $profile = $request->input('profile');
      $faker = Faker::create();
      return view('random-user', compact('faker','number','dateOfBirth','profile'));
    }
  }
