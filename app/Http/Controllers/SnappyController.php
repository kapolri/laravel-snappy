<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class SnappyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pdf = PDF::loadView('bootstrap');
        return $pdf->download('invoice.pdf');
    }
}
