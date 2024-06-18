<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return view('publisher.index');
    }

    public function create()
    {
        return view('publisher.create');
    }

    public function edit()
    {
        return view('publisher.edit');
    }

    public function detail()
    {
        return view('publisher.detail');
    }

    public function delete()
    {
        echo 'Publisher Deleted';
    }
}
