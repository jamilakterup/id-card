<?php

namespace App\Http\Controllers;

use PDF;


class TestController extends Controller
{

    public function generatePdf()
    {
        $data = [
            'foo' => 'hello 1',
            'bar' => 'hello 2',
            'img' => asset('assets/images/front_page.jpg'),
        ];


        $pdf = PDF::loadView('pdf.document', $data);

        return $pdf->stream('document.pdf');
    }
}
