<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function download(Request $request)
    {
        if ($request->input('button') == '1') {
            return Pdf::view('pdfTemplate')->name('test.pdf')->landscape();
        }

        if ($request->input('button') == '2') {
            return Pdf::View('pdfTemplate')->name('test.pdf');
        }
    }
}
