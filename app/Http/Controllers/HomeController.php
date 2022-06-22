<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('status');
    }
    public function edit_profil()
    {
        $mhs = Auth::User();
        return view('edit_profil',compact('mhs'));
    } 
    public function edit_profil_approve(Request $request, $id )
    {
        try {
            $mhs = User::find($request->id);
            if ($mhs->nrp != $request->nrp & $mhs->email != $request->email){
                $request->validate([
                    'nama' => ['required', 'string', 'max:255'],
                    'nrp' => ['required','numeric'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'telp' => ['required','numeric'],
                    'jenjang' => ['required'],
                    'fakultas' => ['required'],
                    'departemen' => ['required'],
                    'judulTA' => ['required'],
                ]);
                $mhs->update([
                    'nama' => $request->nama,
                    'nrp' => $request->nrp,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'jenjang' => $request->jenjang,
                    'fakultas' => $request->fakultas,
                    'departemen' => $request->departemen,
                    'judulTA' => $request->judulTA,
                 ]);
            }
            else if ($mhs->nrp != $request->nrp & $mhs->email == $request->email){
                $request->validate([
                    'nama' => ['required', 'string', 'max:255'],
                    'nrp' => ['required','numeric'],
                    'telp' => ['required','numeric'],
                    'jenjang' => ['required'],
                    'fakultas' => ['required'],
                    'departemen' => ['required'],
                    'judulTA' => ['required'],
                ]);
                $mhs->update([
                    'nama' => $request->nama,
                    'nrp' => $request->nrp,
                    'telp' => $request->telp,
                    'jenjang' => $request->jenjang,
                    'fakultas' => $request->fakultas,
                    'departemen' => $request->departemen,
                    'judulTA' => $request->judulTA,
                 ]);
            }
            else if ($mhs->nrp == $request->nrp & $mhs->email != $request->email){
                $request->validate([
                    'nama' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'telp' => ['required','numeric'],
                    'jenjang' => ['required'],
                    'fakultas' => ['required'],
                    'departemen' => ['required'],
                    'judulTA' => ['required'],
                ]);
                $mhs->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'jenjang' => $request->jenjang,
                    'fakultas' => $request->fakultas,
                    'departemen' => $request->departemen,
                    'judulTA' => $request->judulTA,
                 ]);
            }
            else {
                $request->validate([
                    'nama' => ['required', 'string', 'max:255'],
                    'telp' => ['required','numeric'],
                    'jenjang' => ['required'],
                    'fakultas' => ['required'],
                    'departemen' => ['required'],
                    'judulTA' => ['required'],
                ]);
                $mhs->update([
                    'nama' => $request->nama,
                    'telp' => $request->telp,
                    'jenjang' => $request->jenjang,
                    'fakultas' => $request->fakultas,
                    'departemen' => $request->departemen,
                    'judulTA' => $request->judulTA,
                 ]);
            }
            Alert::success('Sukses', 'Profil Berhasil Di Edit');
            return redirect('/status#Profil');
        } catch(Exception $e) {
            Alert::error('Gagal', 'Profil Gagal Di Edit'.$e->getMessage());
            return redirect()->back();
        }
    }
    public function edit_password()
    {
        $mhs = Auth::User();
        return view('edit_password',compact('mhs'));
    } 
    public function edit_password_approve(Request $request, $id )
    {
        if ($request->password == $request->password_confirmation){
            $mhs = User::find($request->id);
            $request->validate([
                "password" => "required",
            ]);
            if ($mhs->password != $request->password){
                $mhs->update([
                    "password" => Hash::make($request->password),
                ]);
                
            }
            else {
                $mhs->update([
                    "password" => $request->password,
                ]);
            }
            Alert::success('Sukses', 'Password Berhasil Di Edit');
            return redirect('/status');    
            
        }
        else{
            Alert::error('Gagal', 'Password Gagal Di Edit');
            return redirect()->back();
        }
    }
}
