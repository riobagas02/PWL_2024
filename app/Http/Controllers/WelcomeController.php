<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// class WelcomeController extends Controller
// {
//     public function hello() {
//         return 'Hello World';
//     }
// }


// class WelcomeController extends Controller{
//     public function hello(){
//         return('Hello World');
//     }
//     public function greeting(){
//         return view('blog.hello', ['name' => 'Rio Bagas']);
//     }
// }


class WelcomeController extends Controller{
    public function hello(){
        return('Hello World');
    }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Rio Bagas')
        ->with('occupation','Astronaut');
    }
}