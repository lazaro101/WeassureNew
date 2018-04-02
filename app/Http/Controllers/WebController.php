<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Achiever;
use App\Models\Employee;
use App\Models\NewProducts;
use App\Models\News;
use App\Models\Users;
use App\Models\Album;
use App\Models\AlbumImgs;
use App\Models\Products;
use App\Models\Home;
use App\Models\About;
use App\Models\Content;

use Auth;

class WebController extends Controller
{
	public function Login(){
		// if(!isset($_SERVER['HTTP_REFERER'])){
		// 	return redirect('/');
		// }
        // DB::table('users')->insert(['username' => 'admin' , 'password' => bcrypt('admin')]);
		return view('login');
	}
	public function doLogin(Request $req){ 
        if(Auth::attempt(['username'=> $req->username,'password'=> $req->password])){
           return redirect('/Admin');
        }
        return redirect('/Login');
	}
	public function Register(){
		DB::table('users')->insert([
			'username' => 'admin',
			'password' => bcrypt('admin'),
		]);
		return redirect('/Login');
	}

    public function Home(){
        $home = Home::orderby('home_id','DESC')->first();
        $about = About::orderby('about_id','DESC')->first();
    	return view('web.home',compact('home','about'));
    }
    public function Products(){
        $data = Products::where('deleted',0)->get();
    	return view('web.products',compact('data'));
    }
    public function Updates(){
    	return view('web.updates');
    }
    public function About(){
        $content = Content::where('deleted',0)->get();
        $about = About::orderby('about_id','DESC')->first();
        $emps = Employee::where('deleted',0)->get();
    	return vieW('web.about',compact('content','about','emps'));
    }
    public function Gallery(){
        $data = Album::where('deleted',0)->get();
        return view('web.gallery',compact('data'));
    }
    public function GalleryPics($id){
        $data = Album::where('album_id',$id)->first();
        return view('web.pics',compact('data'));
    }
}
