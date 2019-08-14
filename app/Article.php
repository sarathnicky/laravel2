<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
 public function home()
{
	$articles = DB::table('articles')->get();	
	return $articles;
}

public function insert($data)
{
	print_r($data);
}
	
}
