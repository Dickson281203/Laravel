<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index');
    }

    public function create()
    {
        return view('book.create');
    }

    public function edit()
    {
        return view('book.edit');
    }

    public function detail()
    {
        return view('book.detail');
    }

    public function delete()
    {
        echo 'Buku Deleted';
    }
    public function transaksi()
    {
        return view('book.transaksi');
    }
}
