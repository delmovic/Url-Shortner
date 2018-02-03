@extends('layout/template',['title'=> 'URL'])
@section('content')

    <h1>Rarcourcisseur d'URL de <i class="fa fa-edit"></i>test</h1>
    <form method="POST" >
        {{ csrf_field()}}
        <div class="row form-inline">
        	 <div class="input-group col-md-offset-2 col-md-10">
        	 	 <input class="form-control input" type="text" name="url" placeholder="Entrer l'Url a raccourci ici" value="{{old('url')}}">
                {!! $errors->first('url','<p class="alert alert-danger">:message</p>') !!}
                <span class="input-group-btn">
                    <button  type="submit" class="btn btn-primary"><i class="fa fa-link"></i> Envoyer</button>
                </span>


        	 </div>
        	
        </div>
    </form>
        
@stop
