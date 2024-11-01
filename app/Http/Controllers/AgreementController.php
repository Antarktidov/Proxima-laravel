<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgreementController extends Controller
{
    public function index()
    {
        $file = Storage::disk('local')->read('agreement.txt', 'Contents');
        return view('agreement', compact('file'));
    }
}
