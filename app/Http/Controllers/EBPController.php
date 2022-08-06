<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EBPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateIndPDF()
    {
        $nomorSurat = Auth::user()->id;
        $date = Carbon::now();
        $Nama = Auth::user()->nama;
        $NRP = Auth::user()->nrp;
        $Departemen = Auth::user()->departemen;
        $data = [
            'title' => 'Surat Bebas Pustaka',
            'no' => 'Nomor : '.$nomorSurat.'/EBP ITS/0'.$date->month.'/'.$date->year,
            'nama' => 'Nama : '.$Nama,
            'nrp' => 'NRP : '.$NRP,
            'dep' => 'Departemen : '.$Departemen,
        ];
          
        $pdf = PDF::loadView('ebp', $data);
    
        return $pdf->download('Surat Bebas Pustaka - Indonesia.pdf');
    }
    public function generateEngPDF()
    {
        $nomorSurat = Auth::user()->id;
        $date = Carbon::now();
        $Nama = Auth::user()->nama;
        $NRP = Auth::user()->nrp;
        $Departemen = Auth::user()->departemen;
        $data = [
            'title' => 'Library Free Letter of Statement',
            'no' => 'Number : '.$nomorSurat.'/EBP ITS/0'.$date->month.'/'.$date->year,
            'nama' => 'Name : '.$Nama,
            'nrp' => 'NRP : '.$NRP,
            'dep' => 'Departement : '.$Departemen,
        ];
          
        $pdf = PDF::loadView('ebp_eng', $data);
    
        return $pdf->download('Surat Bebas Pustaka - English.pdf');
    }
}