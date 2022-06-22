<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EBPEnglishController extends Controller
{
    public function createWordDoc(Request $request){
        $nomorSurat = Auth::user()->id;
        $date = Carbon::now();
        $Nama = Auth::user()->nama;
        $NRP = Auth::user()->nrp;
        $Departemen = Auth::user()->departemen;
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $fontStyleName = 'rStyle';
        $phpWord->addFontStyle($fontStyleName, array('size' => 12));
        $phpWord->addTitleStyle(1, array('bold' => true,'size' => 14),array('align'=>'center','spaceAfter' => 0));

        $section = $phpWord->addSection();
        $header = public_path('img/header.png');
        $ttd = public_path('img/ttd.png');

        $section->addImage($header,array('width'=>453, 'height'=>105));
        $section->addTitle('Library Free Letter of Statement', 1);
        $section->addText('Number : '.$nomorSurat.'/EBP ITS/'.$date->month.'/'.$date->year,$fontStyleName,array('align'=>'center'));
        $section->addTextBreak(1);
        $section->addText('The undersigned below :',$fontStyleName);
        $section->addText('         Name 	  : Edy Suprayitno, S.S., M.Hum.',$fontStyleName);
        $section->addText('         NIP        : 196804271992031001',$fontStyleName);
        $section->addText('         Position : Head of Library',$fontStyleName);
        $section->addText('         Address : Kampus ITS Sukolilo',$fontStyleName);
        $section->addText('With this letter explains that :',$fontStyleName);
        $section->addText('         Name            : '.$Nama,$fontStyleName);
        $section->addText('         NRP              : '.$NRP,$fontStyleName);
        $section->addText('         Departement : '.$Departemen,$fontStyleName);
        $section->addText('by our data already fullfilled the requirements for library free:',$fontStyleName);
        $section->addText('         1. Submit hardcopy and softcopy of FP/Thesis/Disertation',$fontStyleName);
        $section->addText('         2. Free of Borrowed Books List',$fontStyleName);
        $section->addText('at Institut Teknologi Sepuluh Nopember (ITS) Surabaya library.',$fontStyleName);
        $section->addText('Hereby this letter is given so that it can be used properly.',$fontStyleName);
        $section->addText('                                                                                         Surabaya',$fontStyleName);
        $section->addText('                                                                                         Head of Library,',$fontStyleName);
        $section->addImage($ttd,array('width'=>145, 'height'=>96,'align'=>'right'));
        $section->addText('     Edy Suprayitno SS., M.Hum.',$fontStyleName,array('align'=>'right'));
        $section->addText('     NIP. 196804271992031001 .',$fontStyleName,array('align'=>'right'));

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objectWriter->save(storage_path('Surat Bebas Pustaka - English.docx'));
        } catch (Exception $e) {
        }
    
        return response()->download(storage_path('Surat Bebas Pustaka - English.docx'));
        }
}
