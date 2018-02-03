<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	  public $timestamps=false;
	  protected $fillable=['url','short'];

	 Public static function getShort()
	{
		$token= str_random(5);
		if(static::whereShort($token)->count() != 0 ){
		return getShort() ;
		}
		return $token;
	}
}
