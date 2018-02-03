@extends('layout.template',['title' => ' Resultat'])

@section('content')
	<h1>Vous trouverez ci dessous votre <b>raccourci Url</b> </h1>
	<p>
		 Short code: <a href="{{config('app.url')}}/{{$short}}" target="_blanck">{{config('app.url') }}/{{ $short }}</a>
	</p>
@stop