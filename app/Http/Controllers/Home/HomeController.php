<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Menu;
use App\Models\Extra;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    
    //
	function index()
    {  
       $site_adi = Setting::where('area', '=', 'site_adi')->first();    
       $title = $site_adi->value;    
       $site_aciklama = Setting::where('area', '=', 'site_aciklama')->first();   
       $description = $site_aciklama->value;
       $posts=Post::orderBy('id','desc')->paginate(10);
       $menus = Menu::where('parent_id', '=', 0)->get();
       $menu_sub = Menu::where('parent_id', '>', 0)->get();
       $kategoriler = Category::orderBy('id','desc')->get();
       $extra_sabit = Extra::where('area','sabit_yazi')->join('posts', 'extras.other_id', '=', 'posts.id')->first();
       $tag_cloud = Extra::where('area','post_tag')->paginate(20);
       return view('boots.home',compact('posts','menus','menu_sub','extra_sabit','description','title','kategoriler','tag_cloud'));
    }
    // Post Detail
    function detail($slug){		
		$detail = Post::where('slug', '=', $slug)->first();
        $title = $detail->title;
        $description = substr($detail->content,0,200);
        $kategoriler = Category::orderBy('id','desc')->get();
        $menus = Menu::where('parent_id', '=', 0)->get();
        $menu_sub = Menu::where('parent_id', '>', 0)->get();
        $tag_cloud = Extra::where('area','post_tag')->paginate(20);
    	return view('boots.detail',compact('detail','menus','menu_sub','title','kategoriler','description','tag_cloud'));
    }
    // Category Post
    function category_post($slug){	
        $cat_info = Category::where('slug','=',$slug)->first();
        $cat_id = $cat_info->id;
        $title = $cat_info->title;
        $description = $cat_info->content;
        $menus = Menu::where('parent_id', '=', 0)->get();
        $menu_sub = Menu::where('parent_id', '>', 0)->get();
        $kategoriler = Category::orderBy('id','desc')->get();
        $tag_cloud = Extra::where('area','post_tag')->paginate(20);
		$posts = Extra::where('value', '=', $cat_id)->join('posts', 'extras.other_id', '=', 'posts.id')->paginate(10);
    	return view('boots.category',compact('cat_id','posts','menus','menu_sub','cat_info','title','description','kategoriler','tag_cloud'));
    }
    // Post Tag List
    function tag_post($slug){	
        $title = str_replace('-',' ',$slug);
        $description = '';
		$posts = Extra::where('value', '=', $title)->join('posts', 'extras.other_id', '=', 'posts.id')->paginate(10);
        $menus = Menu::where('parent_id', '=', 0)->get();
        $menu_sub = Menu::latest()->get();
        $kategoriler = Category::orderBy('id','desc')->get();
        $tag_cloud = Extra::where('area','post_tag')->paginate(20);
    	return view('boots.tag',compact('posts','menus','menu_sub','title','description','kategoriler','tag_cloud'));
    }
  function search(Request $request){
        $search = $request->input('kelime');
        $title = $search;
        $description = '';
        $kategoriler = Category::orderBy('id','desc')->get();
        $tag_cloud = Extra::where('area','post_tag')->paginate(20);
        $menus = Menu::where('parent_id', '=', 0)->get();
        $menu_sub = Menu::latest()->get();
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();
    
        return view('boots.search', compact('posts','title','description','menus','menu_sub','kategoriler','tag_cloud'));
    }
    
}