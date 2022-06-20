<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public function registrasi()
    {
        $admin =  Auth::guard('admin')->user();
        $mahasiswa = User::all();
        
        return view ('admin.registrasi', compact(['admin', 'mahasiswa']));
    }   
    public function detail($id)
  {
      $mahasiswa = User::find($id);

      return response()->json($mahasiswa);
  }
  
  public function aktivasiMahasiswa(Request $request, $id){
    try {
        DB::transaction(function() use ($request, $id) {
            $mhs = User::find($id);
            // dd($mhs);
            $mhs->status = 1;
            $mhs->update();
        });

        // Mahasiswa::where('id', $id)
        //   ->update(['status' => 1]);
        Alert::success('Sukses', 'Mahasiswa berhasil diverifikasi');
        return redirect()->back();
    } catch(Exception $e) {
        Alert::success('Gagal', 'Mahasiswa gagal diverifikasi'.$e->getMessage());
        return redirect()->back();
    }
  }

  public function validasiSetuju(Request $request, $id)
  {
    try {
        DB::transaction(function() use ($request, $id) {
            $mhs = User::find($id);
            $mhs->status = 2;
            $mhs->update();
        });
        Alert::success('Sukses', 'Mahasiswa berhasil disetujui');
        return redirect()->back();
    } catch(Exception $e) {
        Alert::success('Gagal', 'Mahasiswa gagal disetujui'.$e->getMessage());
        return redirect()->back();
    }
  } 

  public function validasiTolak(Request $request, $id)
  {
    try {
        DB::transaction(function() use ($request, $id) {
            $mhs = User::find($id);
            $mhs->status = 0;
            $mhs->update();
        });
        Alert::success('Sukses', 'Mahasiswa berhasil ditolak');
        return redirect()->back();
    } catch(Exception $e) {
        Alert::success('Gagal', 'Mahasiswa gagal ditolak'.$e->getMessage());
        return redirect()->back();
    }
  } 

  public function validasi()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = User::all();
      
      return view ('admin.validasi', compact(['admin', 'mahasiswa']));
  } 

  public function terimaTA()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = User::all();
      
      return view ('admin.terimaTA', compact(['admin', 'mahasiswa']));
  } 

  public function terimaTASetuju(Request $request, $id)
  {
    try {
        DB::transaction(function() use ($request, $id) {
            $mhs = User::find($id);
            $mhs->status = 3;
            $mhs->update();
        });
        Alert::success('Sukses', 'Mahasiswa berhasil disetujui');
        return redirect()->back();
    } catch(Exception $e) {
        Alert::success('Gagal', 'Mahasiswa gagal disetujui'.$e->getMessage());
        return redirect()->back();
    }
  } 

  public function tanggungan()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = User::all();
      
      return view ('admin.tanggungan', compact(['admin', 'mahasiswa']));
  } 

  public function suratbebas()
  {
      $admin =  Auth::guard('admin')->user();
      $mahasiswa = User::all();
      
      return view ('admin.suratbebas', compact(['admin', 'mahasiswa']));
  } 

  public function suratbebasSetuju(Request $request, $id)
  {
    try {
        DB::transaction(function() use ($request, $id) {
            $mhs = User::find($id);
            $mhs->status = 4;
            $mhs->update();
        });
        Alert::success('Sukses', 'Mahasiswa berhasil disetujui');
        return redirect()->back();
    } catch(Exception $e) {
        Alert::success('Gagal', 'Mahasiswa gagal disetujui'.$e->getMessage());
        return redirect()->back();
    }
  }
}