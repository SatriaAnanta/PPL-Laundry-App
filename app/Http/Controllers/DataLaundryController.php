<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DataLaundryController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$data_laundry = DB::table('data_laundry')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['data_laundry' => $data_laundry]);
 
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		return view('tambah');
	}

	public function store(Request $request)
	{
		$kode = Str::random(5);
		$harga = ($request->berat)*4000;
		DB::table('data_laundry')->insert([
			'id' => NULL,
			'kode' => $kode,
			'tanggal' => $request->tanggal,
			'waktu' => $request->waktu,
			'berat' => $request->berat,
			'total_harga' => $harga,
			'progres' => $request->progres
		]);
		return redirect('/data_laundry');
	}

	public function delete($id)
    {
        DB::table('data_laundry')->where('id', $id)->delete();
        return back()->withStatus(__('Data Berhasil Dihapus'));
    }

}
