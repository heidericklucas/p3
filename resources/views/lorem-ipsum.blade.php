@extends('master')

@section('title')
	Lucas Vieira's P3 | Developer's Best Friend | Lorem Ipsum Generator
@stop

@section('content')
	<a href="../">Go Back</a>

	<h2>Lorem Ipsum Generator</h2>

	@if(count($errors) > 0)
	<ul>
	  @foreach ($errors->all() as $error)
	  <li>{{ $error }}</li>
	  @endforeach
	</ul>
	@endif

	<form method='POST' action='lorem-ipsum'>
	  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
	  <label for='paragraphs'>Number of Paragraphs (Max 99):</label>
	  <input type='text' name='number_of_paraghraphs' maxlength='2' ><br><br>
	  <input type='submit' value='Generate!'>
	</form>

	<div class="content">

	  @if (isset($result))
	  <?php
	  for($i=0; $i<count($result); $i++){
	    echo "<p>".$result[$i]."</p>";
	  }
	  ?>
	  @endif
	</div>

@stop
