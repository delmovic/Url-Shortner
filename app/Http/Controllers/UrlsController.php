<?php

namespace App\Http\Controllers;
use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UrlsController extends Controller
{
    public function create()
    {
    	return view('welcome');
    }

	public function store(Request $requete)
	{
		$url=$requete->url;
		$this->validate($requete,['url'=> 'required|url']);

		$Enr= $this->GetEnrForUrl($requete->url);
		return view('result')->withShort($Enr->short);
	  	
	}

	public function show($short)
	{
		//Redirige Vers l'Url origine fournir par l'utilisateur
	$url= Url::whereShort($short)->firstOrFail();
   
      return redirect($url->url);
    
	}
private function GetEnrForUrl($url)
{
	
		return Url::where('url',$url)->firstOrCreate(
		['url'=> $url],
		['short' => Url::getShort()]

	);

			// Verifie sur URl est deja raccoursi
	// 	if($Enr){
	// 		return $Enr;
	// 		//return view('result')->withShort($Enr->short);
	// 		}

	// 		//Creation du Short code Url
	// return Url::create([
	// 			'url'=> $url,
	// 			'short' => Url::getShort()
	// 		]);
}












}
