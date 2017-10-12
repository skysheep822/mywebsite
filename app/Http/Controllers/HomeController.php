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



    public function test(){

        $myfile = fopen("/home/vagrant/code/config/publisher.php", "w") or die("Unable to open file!");

        $user = "admin";
        $password = "password";
        $app_id = "1824467507820475";
        $app_secret = "d6f47b6007b5590c1a274e5614f98615";
        $default_graph_version = "v2.8";
        $fb_page_token = "EAAZA7VZCG1N7sBAEL9uM9DA6v9VqbF3Yry2YJEt3JxtG5DEHJPau2MmXJ4O6tGg8ihKUIxWarDnJzBCeuZCpWjTCqtTMsPGTcDiSUrtmGUKVmRZBkPqfBOjaRusZCm60LFu5xsFeaK5ufFf5Q8Uosx7vZCO0GNJ0pSbLeGKbLayQZDZD";
        $recaptcha_key = "6LfXqgATAAAAACzwvvdV59zzxpdFOkWDSsa0331s";
        $recaptcha_secret = "6LfXqgATAAAAALVnEIzAjJ67pGSe7sI1-yUoFZfu";

        fwrite($myfile, "<?php return [\n    'user' => '");
        fwrite($myfile, $user);
        fwrite($myfile,"',\n    'password' => '");
        fwrite($myfile, $password);
        fwrite($myfile,"',\n    'fb_app_setting' > [\n        'app_id' => '");
        fwrite($myfile, $app_id);
        fwrite($myfile,"',\n        'app_secret' => '");
        fwrite($myfile, $app_secret);
        fwrite($myfile,"',\n        'default_graph_version' => '");
        fwrite($myfile, $default_graph_version);
        fwrite($myfile,"',\n    ],\n    'fb_page_token' => '");
        fwrite($myfile, $fb_page_token);
        fwrite($myfile,"',\n    'recaptcha_key' => '");
        fwrite($myfile, $recaptcha_key);
        fwrite($myfile,"',\n    'recaptcha_secret' => '");
        fwrite($myfile, $recaptcha_secret);
        fwrite($myfile,"',\n];");

        fclose($myfile);
        return view('maintain');

    }
}
