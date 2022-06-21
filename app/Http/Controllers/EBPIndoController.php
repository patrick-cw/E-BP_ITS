<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EBPIndoController extends Controller
{
    public function createWordDoc(){
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

        $section->addImage('A:\Github\E-BP_ITS\resources\header.png',array('width'=>453, 'height'=>105));
        $section->addTitle('SURAT KETERANGAN BEBAS PUSTAKA', 1);
        $section->addText('Nomor : '.$nomorSurat.'/EBP ITS/'.$date->month.'/'.$date->year,$fontStyleName,array('align'=>'center'));
        $section->addTextBreak(1);
        $section->addText('Yang bertanda tangan dibawah ini :',$fontStyleName);
        $section->addText('         Nama 	  : Edy Suprayitno, S.S., M.Hum.',$fontStyleName);
        $section->addText('         NIP 	  : 196804271992031001',$fontStyleName);
        $section->addText('         Jabatan : Kepala Perpustakaan',$fontStyleName);
        $section->addText('         Alamat	  : Kampus ITS Sukolilo',$fontStyleName);
        $section->addText('Dengan ini menerangkan bahwa :',$fontStyleName);
        $section->addText('         Nama           : '.$Nama,$fontStyleName);
        $section->addText('         NRP             : '.$NRP,$fontStyleName);
        $section->addText('         Departemen : '.$Departemen,$fontStyleName);
        $section->addText('berdasarkan data kami, sudah memenuhi persyaratan Bebas Pustaka :',$fontStyleName);
        $section->addText('         1. Menyerahkan Hardcopy dan Softcopy TA/Tesis/Disertasi',$fontStyleName);
        $section->addText('         2. Bebas Tanggungan Pinjaman Koleksi dan Administrasi',$fontStyleName);
        $section->addText('di Perpustakaan Institut Teknologi Sepuluh Nopember (ITS) Surabaya.',$fontStyleName);
        $section->addText('Demikian surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.',$fontStyleName);
        $section->addText('                                                                                         Surabaya',$fontStyleName);
        $section->addText('                                                                                         Kepala Perpustakaan,',$fontStyleName);
        $section->addImage('A:\Github\E-BP_ITS\resources\ttd.png',array('width'=>145, 'height'=>96,'align'=>'right'));
        $section->addText('     Edy Suprayitno SS., M.Hum.',$fontStyleName,array('align'=>'right'));
        $section->addText('     NIP. 196804271992031001 .',$fontStyleName,array('align'=>'right'));

        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objectWriter->save(storage_path('Surat Bebas Pustaka - Indonesia.docx'));
        } catch (Exception $e) {
        }
    
        return response()->download(storage_path('Surat Bebas Pustaka - Indonesia.docx'));
        }
}
