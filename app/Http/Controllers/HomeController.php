<?php namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // return view('form');


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
        return view('privacy');
    }
}
