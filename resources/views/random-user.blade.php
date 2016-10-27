@extends('master')

@section('title')
	Random User Generator
@stop

@section('content')
	<a href="../">Go Home</a>

 	<h2>Random User Generator</h2>

	@if(count($errors) > 0)
	    <ul>
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif

	<form method='POST' action='random-user'>
	    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
	    <label for='paragraphs'>Number of users (Max 99): </label>
	    <input type='text' name='number_of_users' maxlength='2' ><br>
			<p>Check if you would like to include:</p>
			<input  type='checkbox' name='dateOfBirth'>
	    <label for='dateOfBirth'> Date of birth</label><br>


			<input type='checkbox' name='profile'>
	    <label for='profile'>Profile</label><br><br>
	    <input type='submit' value='Generate!'>
	</form>



	@if (isset($number))
	<?php
	if($dateOfBirth == 'on' && $profile=='on'){

	    for($i=0; $i<$number; $i++){
	        echo "<h4>".$faker->name."</h4>";
	        echo "<p>".$faker->date($format = 'Y-m-d', $max = 'now')."</p>";
	        echo "<p>".$faker->text."</p>";
	    }
	}elseif ($dateOfBirth == 'on') {

	    for($i=0; $i<$number; $i++){
	        echo "<h4>".$faker->name."</h4>";
	        echo "<p>".$faker->date($format = 'Y-m-d', $max = 'now')."</p>";
	  }
	} elseif($profile == 'on'){
	    for($i=0; $i<$number; $i++){
	        echo "<h4>".$faker->name."</h4>";
	        echo "<p>".$faker->text."</p>";
	    }
	} else {
	    for($i=0; $i<$number; $i++){
	       echo "<h4>".$faker->name."</h4>";
	    }
	}
	?>
	@endif

@stop
