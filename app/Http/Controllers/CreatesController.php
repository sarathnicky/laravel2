<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Article;
//use Auth;
//use DB;
//use Users;
//use Session;


class CreatesController extends Controller
{
	
	public function __construct()
    {
        $this->Article = new Article();
    }

public function home()
{
	$data = array();
	//$articles = Article::all();
	//$Article = new Article();
	//$articles= $Article->home();	
	$articles= $this->Article->home();	
	//$articles = DB::table('articles')->get();
	//print_r($articles);
	
	$data['articless'] = $articles;
	
	//print_r($data);
	//return view('index', ['articless' => $articles]);
	//return view('home');
	return view('index', $data);
}

public function create()
{
	
	return view('create');
	
}

public function insert(Request $req)
{
$name=$req->input('email');	
$mobile=$req->input('password');

$data = array('name'=>$name, 'mobile'=>$mobile);

$this->Article->insert($data);	

//DB::table('articles')->insert($data);

//return redirect('/');
}

public function update($id)
{
$articles = DB::table('articles')->where('id', $id)->get();
return view('update', ['articles' => $articles]);
}


public function update_change(Request $req, $id)
{
$name=$req->input('email');	
$mobile=$req->input('password');

$data = array('name'=>$name, 'mobile'=>$mobile);

DB::table('articles')
            ->where('id', $id)
            ->update($data);

return redirect('/');
}

public function delete($id)
{
DB::table('articles')->where('id', $id)->delete();
return redirect('/');
}

public function login()
{
return view('login');
}

/*public function login_session(Request $request)
{
echo $email=$request->get('email');	
echo $password=$request->get('password');

}*/
public function login_session(Request $request)
    {
        //$value = $request->session()->get('key', 'default');

//         $value = $request->session()->get('key', function() {
//     return 'default';
// });

// $data = $request->session()->all();
// print_r($data);
    	if ($request->session()->has('users')) {
    //
}
    }


/*public function login_session(Request $request)
{
$email=$request->get('email');	
$password=$request->get('password');

$checkuser = Users::selectRaw("Count(*) as Total")->where('email','=',$email)->first();

if(intval($checkuser->Total) > 0)
{
	$getpassword = Users::select("password")->where('email','=',$email)->first();
	if(password_verify($password, $getpassword->Password))
	{
		$request->session()->set('email', $email);
		echo "login";
	}
	else
	{
	echo "error";
	}
}
else
{
	echo "else";
}

}*/

}
