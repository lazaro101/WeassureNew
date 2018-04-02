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

class AdminController extends Controller
{
	public function __construct()
    { 
        $this->middleware('checklog');
    }

    public function Admin(){
        $home = Home::orderby('home_id','DESC')->first();
        $about = About::orderby('about_id','DESC')->first();
        $content = Content::where('deleted',0)->get();
        return view('admin.home',compact('home','about','content'));
    }
    public function saveHome(Request $req){ 
        if (Home::orderby('home_id','DESC')->first() == "") {
            Home::insert([ 'header' => 'sample' ]);
        }
        if (About::orderby('about_id','DESC')->first() == "") {
            About::insert([ 'address' => 'sample' ]);
        }
        Home::orderby('home_id','DESC')->limit(1)->update([
            'header' => $req->header ,
            'subheader' => $req->subheader ,
            'title' => $req->title ,
            'content1_title' => $req->ctitle1 , 
            'content1_desc' => $req->cdesc1 ,  
            'content2_title' => $req->ctitle2 , 
            'content2_desc' => $req->cdesc2 ,  
            'content3_title' => $req->ctitle3 , 
            'content3_desc' => $req->cdesc3 , 
        ]);
        if (isset($req->cimg1)) {
            $target_dir = "SystemImages/Img/";
            $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["cimg1"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['cimg1']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file);
            Home::orderby('home_id','DESC')->limit(1)->update([ 'content1_img' => $target_file ]);
        }
        if (isset($req->cimg2)) {
            $target_dir = "SystemImages/Img/";
            $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["cimg2"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['cimg2']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file);
            Home::orderby('home_id','DESC')->limit(1)->update([ 'content2_img' => $target_file ]);
        }
        if (isset($req->cimg3)) {
            $target_dir = "SystemImages/Img/";
            $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["cimg3"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['cimg3']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file);
            Home::orderby('home_id','DESC')->limit(1)->update([ 'content3_img' => $target_file ]);
        }
        About::orderby('about_id','DESC')->limit(1)->update([
            'address' => $req->address,
            'day' => $req->open,
            'time' => $req->time,
            'contact' => $req->contact,
            'email' => $req->email,
        ]);
        return redirect('/Admin');
    }
    public function saveContent(Request $req){
        if (isset($req->id)) {
            foreach ($req->id as $key => $value) { 
                if ($req->id[$key] == "") {
                    Content::insert([
                        'content_title' => $req->title[$key],
                        'content_desc' => $req->desc[$key],
                    ]);
                } else {
                    Content::where('content_id',$req->id[$key])->update([
                        'content_title' => $req->title[$key],
                        'content_desc' => $req->desc[$key],
                    ]);
                }
            }
        }
        return redirect('/Admin');
    }
    public function removeContent(Request $req){
        Content::where('content_id',$req->id)->update([ 'deleted' => 1 ]);

        return response()->json();
    }

    public function Employees(){
    	$emp = Employee::where('deleted',0)->get();
    	return view('admin.employees',compact('emp'));
    }
    public function addEmployee(Request $req){
        Employee::insert([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'position' => $req->position,
        ]);
        return redirect('/Admin/Employees');
    }
    public function editEmployee(Request $req){
        Employee::where('emp_id',$req->id)->update([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'position' => $req->position,
        ]);
        return redirect('/Admin/Employees');
    }
    public function getEmployee(Request $req){
        $data = Employee::where('emp_id',$req->id)->first();
        return response()->json($data);
    }
    public function deleteemp(Request $req){
        Employee::where('emp_id',$req->id)->update(['deleted' => 1]);
        return redirect('/Admin/Employees');
    }

    public function Products(){
        $data = Products::where('deleted',0)->get();
        return view('admin/products',compact('data'));
    }
    public function addProduct(Request $req){
        foreach ($req->photo as $num => $val) { 
            $target_dir = "Products/";
            $target_file = $target_dir . date("mdYHis") .$num.'.'.pathinfo(basename($_FILES["photo"]["name"][$num]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['photo']['tmp_name'][$num]; 
            move_uploaded_file($temp_name, $target_file);

            Products::insert([ 
                'product_path' => $target_file
            ]);
        } 
        return redirect('/Admin/Products');
    }
    public function removeProduct(Request $req){
        Products::where('product_id',$req->pid)->update([ 'deleted' => 1]);
        return response()->json();
    }

    public function Updates(){
        $pic1 = News::orderby('news_id','DESC')->first();
        $pic2 = NewProducts::orderby('np_id','DESC')->first();
        $pic3 = Achiever::orderby('achiever_id','DESC')->first();
        return view('admin.updates',compact('pic1','pic2','pic3'));
    }
    public function saveUpdates(Request $req){
        if (isset($req->news)) {
            $target_dir = "Updates/";
            $target_file = $target_dir . date("mdYHis") .'1.'.pathinfo(basename($_FILES["news"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['news']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file); 
            News::insert([ 'news_path' => $target_file ]);
        } 
        if (isset($req->product)) {
            $target_dir = "Updates/";
            $target_file = $target_dir . date("mdYHis") .'2.'.pathinfo(basename($_FILES["product"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['product']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file); 
            NewProducts::insert([ 'np_path' => $target_file ]);
        }
        if (isset($req->achiever)) {
            $target_dir = "Updates/";
            $target_file = $target_dir . date("mdYHis") .'3.'.pathinfo(basename($_FILES["achiever"]["name"]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['achiever']['tmp_name']; 
            move_uploaded_file($temp_name, $target_file); 
            Achiever::insert([ 'achiever_path' => $target_file ]);
        }
        return redirect('/Admin/Updates');
    }

    public function AdminGallery(){
        $data = Album::where('deleted',0)->get();
        return view('admin.gallery',compact('data'));
    }
    public function getGallery(Request $req){
        $data = Album::where('album_id',$req->id)->first();
        return response()->json($data);
    }
    public function AdminGalleryPics($id){
        $data = Album::where('album_id',$id)->first();
        return view('admin.pics',compact('data'));
    }
    public function removePic(Request $req){
        AlbumImgs::where('album_id',$req->alid)->where('ai_id',$req->picid)->delete();
        return response()->json();
    }
    public function addGallery(Request $req){
        $id = ALbum::insertGetId([
            'album_name' => $req->alname, 
        ]); 
        foreach ($req->photo as $num => $val) { 
            $target_dir = "Photos/";
            $target_file = $target_dir . date("mdYHis") .$num.'.'.pathinfo(basename($_FILES["photo"]["name"][$num]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['photo']['tmp_name'][$num]; 
            move_uploaded_file($temp_name, $target_file);

            AlbumImgs::insert([
                'album_id' => $id,
                'img_path' => $target_file
            ]);
        } 
        return redirect('/Admin/Gallery');
    }
    public function editGallery(Request $req){
        ALbum::where('album_id',$req->id)->update([
            'album_name' => $req->alname, 
        ]);  
        return redirect('/Admin/Gallery');
    }
    public function addPics(Request $req){
        foreach ($req->photo as $num => $val) { 
            $target_dir = "Photos/";
            $target_file = $target_dir . date("mdYHis") .$num.'.'.pathinfo(basename($_FILES["photo"]["name"][$num]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['photo']['tmp_name'][$num]; 
            move_uploaded_file($temp_name, $target_file);

            AlbumImgs::insert([
                'album_id' => $req->id,
                'img_path' => $target_file
            ]);
        } 
        return redirect('/Admin/Gallery/'.$req->id);
    }
    public function deleteGallery(Request $req){
        Album::where('album_id',$req->id)->update([ 'deleted' => 1]);
        return redirect('/Admin/Gallery');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
