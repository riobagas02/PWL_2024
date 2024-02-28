<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NAMA : Rio Bagas Hermawan' . '<br>' . 'NIM : 2241720193';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}