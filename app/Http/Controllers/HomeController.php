<?php namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        if (\Configer::get('maintain') == 'on') {
            return view('maintain');
        } else {
            return view('form', [
                'config' => \Configer::get(),
                'alert' => \Configer::check(),
            ]);
        }
    }

    public function about()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('privacy', [
            'config' => \Configer::get(),
        ]);
    }

    public function report(){
        @$key = strip_tags(\Route::input('key'));
        $post = \DB::table('post')->where('post_key', $key)->first();

        if(count($post)){
            return view('report', [
                'config' => \Configer::get(),
                'post' => $post,
            ]);
        }else{
            return redirect()->action('HomeController@index');
        }
    }
}
