<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AboutController extends Controller
{
    public function index()
    {
        return 'Nama : Rio Bagas Hermawan' . '<br>' . 'NIM : 2241720193';
    }
}