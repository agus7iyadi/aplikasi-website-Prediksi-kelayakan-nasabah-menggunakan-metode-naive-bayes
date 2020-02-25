<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ListkreditModel;

class Kredit extends Controller
{ 
	protected $ListkreditModel;
    // Buat variabel untuk menampung request
    protected $request;

    public function __construct() {

        // Mendeklarasikan class ProductModel menggunakan $this->ProductModel
        $this->ListkreditModel = new ListkreditModel();
        // Mendeklarasikan service request menggunakan $this->request
        $this->request = \Config\Services::request();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

	 public function index()
    {
    	$data['listtraining'] = $this->ListkreditModel->get_datatraining();
    	$data['listtest'] = $this->ListkreditModel->get_datatest();
    	// var_dump($data['listtest']);
    	// die;
     	return view('listkredit',$data);
    }

    public function tambahtesting()
	{
	    return view('kredit/createtesting');
    } 
    public function store()
	{
        // Mengambil value dari form dengan method POST
        
        $name = $this->request->getPost('nama');
        

        $gaji = $this->request->getPost('gaji');
        // $hasil_gaji = number_format($gaji,2,'.','.');

        $jenis = $this->request->getPost('jenis');

        $status = $this->request->getPost('status');

        $pinjaman = $this->request->getPost('pinjaman');
        // $hasil_pinjaman = number_format($pinjaman,2,',','.');

        $jwaktu = $this->request->getPost('jwaktu');
        $agunan = $this->request->getPost('agunan');
       
        //hitung gaji
        $hitung_gaji = $this->ListkreditModel->getgaji($gaji);       
        $hasil_gaji = count($hitung_gaji);
        //akhir hitung gaji

        // hitung jk
        $hitung_jk = $this->ListkreditModel->getjk($jenis);       
        $hasil_jk = count($hitung_jk);

        $hitung_status = $this->ListkreditModel->getstatus($status);       
        $hasil_status = count($hitung_status);

        $hitung_pinjaman = $this->ListkreditModel->getpinjaman($pinjaman);       
        $hasil_pinjaman = count($hitung_pinjaman);

        $hitung_jangka = $this->ListkreditModel->getjangka($jwaktu);       
        $hasil_jangka = count($hitung_jangka);

        $hitung_agunan = $this->ListkreditModel->getagunan($agunan);       
        $hasil_agunan = count($hitung_agunan);


        // logika naive bayes
        $hitung_lancar = $this->ListkreditModel->getlancar();       
        $hitung_tidaklancar = $this->ListkreditModel->gettidaklancar();
        $hhitung_lancar = count($hitung_lancar);
        $hhitung_tidaklancar = count($hitung_tidaklancar);

        $total_datatraining = $hhitung_lancar+$hhitung_lancar;
        
        // Menghitung Jumlah Class Label
        $lancar = $hhitung_lancar;

        $tidaklancar = $hhitung_tidaklancar;

        
        // menghitung atribut jumlah gaji
        if($gaji == 'Besar'){
            //P( Gaji = Besar | Y = Lancar) 
            $gaji_lancar = $this->ListkreditModel->getlancarwhere();
            // P( Gaji = Besar | Y = tidak Lancar) 
            $gaji_tidaklancar = $this->ListkreditModel->gettidaklancarwhere();
            $hasil1a = count($gaji_lancar);
            $hasil1b = count($gaji_tidaklancar);


        }elseif($gaji == 'Sedang'){
            // P( Gaji = sedang | Y = Lancar) 
            $gaji_lancar = $this->ListkreditModel->getsdlancarwhere();
            // P( Gaji = sedang | Y = tidak Lancar) 
            $gaji_tidaklancar = $this->ListkreditModel->getsdtdklancarwhere();
            $hasil1a = count($gaji_lancar);
            $hasil1b = count($gaji_tidaklancar);
        }elseif($gaji =='Kecil'){
            // P( Gaji = kecil | Y = Lancar) 
            $gaji_lancar = $this->ListkreditModel->getkcllancarwhere();
            // P( Gaji = kecil | Y = tidak Lancar) 
            $gaji_tidaklancar = $this->ListkreditModel->getkcltdklancarwhere();
            // akhir menghitung atribut jumlah gaji
            $hasil1a = count($gaji_lancar);
            $hasil1b = count($gaji_tidaklancar);
        }

        // menghitung atribut laki
        if($jenis == 'L'){
            // P(Jenis Kelamin = Lak-laki | Y = Lancar) 
            $jenis_lancar = $this->ListkreditModel->getpjkllancarwhere();
            // P(Jenis Kelamin = Lak-laki | Y = Tidak Lancar) 
            $jenis_tidaklancar = $this->ListkreditModel->getpjkltidaklancarwhere();
            // P(Jenis Kelamin = Perempuan | Y = Lancar)
            $hasil2a = count($jenis_lancar);
            $hasil2b = count($jenis_tidaklancar);
        }elseif($jenis =='P'){
            $jenis_lancar = $this->ListkreditModel->getpjkplancarwhere();
            // P(Jenis Kelamin = Perempuan | Y = tidak Lancar)
            $jenis_tidaklancar = $this->ListkreditModel->getpjkptdklancarwhere();
            // AKHIR MENGHITUNG JK
            $hasil2a = count($jenis_lancar);
            $hasil2b = count($jenis_tidaklancar);
        }

        // MENGHITUNG  STATUS
        if($status == 'Sudah Menikah'){
            // P(Status= Sudah Menikah | Y = Lancar) 
            $menikah_lancar = $this->ListkreditModel->getmlancarwhere();
            // P(Status= Sudah Menikah | Y = tidak Lancar) 
            $menikah_tidaklancar = $this->ListkreditModel->getmtlancarwhere();
            $hasil3a = count($menikah_lancar);
            $hasil3b = count($menikah_tidaklancar);
        }elseif($status == 'Belum Menikah'){
            // P(Status= belum Menikah | Y = Lancar) 
            $menikah_lancar = $this->ListkreditModel->getbmlancarwhere();
            // P(Status= belum Menikah | Y = tidak lancar) 
            $menikah_tidaklancar = $this->ListkreditModel->getbmtlancarwhere();
            $hasil3a = count($menikah_lancar);
            $hasil3b = count($menikah_tidaklancar);
        }


        // Menghitung Jumlah Pinjaman
        if($pinjaman =='Besar'){
            // P(Pinjaman = Besar | Y = Lancar) 
            $pinjaman_lancar = $this->ListkreditModel->getjplancarwhere();
            // P(Pinjaman = Besar | Y = Tidak Lancar) 
            $pinjaman_tidaklancar = $this->ListkreditModel->getjptdklancarwhere();
            $hasil4a = count($pinjaman_lancar);
            $hasil4b = count($pinjaman_tidaklancar);
        }elseif($pinjaman =='Sedang'){
            // P(Pinjaman = sedang | Y = Lancar) 
            $pinjaman_lancar = $this->ListkreditModel->getjpslancarwhere();
            // P(Pinjaman = sedang | Y = Tidak Lancar) 
            $pinjaman_tidaklancar = $this->ListkreditModel->getjpstdkmlancarwhere();
            $hasil4a = count($pinjaman_lancar);
            $hasil4b = count($pinjaman_tidaklancar);
        }elseif($pinjaman == 'Kecil'){
            // P(Pinjaman = kecil | Y = Lancar) 
            $pinjaman_lancar = $this->ListkreditModel->getjpblancarwhere();
            // P(Pinjaman = kecil | Y = Tidak Lancar) 
            $pinjaman_tidaklancar = $this->ListkreditModel->getjpbtdklancarwhere();
            $hasil4a = count($pinjaman_lancar);
            $hasil4b = count($pinjaman_tidaklancar);
        }


        // menghitung jangka waktu
        if($jwaktu == 'Jangka Panjang'){
            // P(Jangka_Waktu = Jangka Panjang | Y = Lancar)
            $waktu_lancar = $this->ListkreditModel->getjwtlancarwhere();
            // P(Jangka_Waktu = Jangka Panjang | Y = tidak Lancar) 
            $waktu_tidaklancar = $this->ListkreditModel->getjwtplancarwhere();
            $hasil5a = count($waktu_lancar);
            $hasil5b = count($waktu_tidaklancar);
        }elseif($jwaktu == 'Jangka Menengah'){
            // P(Jangka_Waktu = Jangka sedang | Y = Lancar) 
            $waktu_lancar = $this->ListkreditModel->getjwtslancarwhere();
            // P(Jangka_Waktu = Jangka sedang | Y = tidak lancar) 
            $waktu_tidaklancar = $this->ListkreditModel->getjwtstdklancarwhere();
            $hasil5a = count($waktu_lancar);
            $hasil5b = count($waktu_tidaklancar);
        }elseif($jwaktu == 'Jangka Pendek'){
            // P(Jangka_Waktu = Jangka pendek | Y = Lancar) 
            $waktu_lancar = $this->ListkreditModel->getjwtpklancarwhere();
            // P(Jangka_Waktu = Jangka pendek | Y = tidak lancar) 
            $waktu_tidaklancar = $this->ListkreditModel->getjwtpktdklancarwhere();
            $hasil5a = count($waktu_lancar);
            $hasil5b = count($waktu_tidaklancar);
        }

        //menghitung agunan
        if($agunan == 'BPKB SPM'){
            // P(Agunan = BPKB SPM | Y = Lancar) 
            $agunan_lancar = $this->ListkreditModel->getagunanbpkbspmlancarwhere();
            // P(Agunan = BPKB SPM | Y = tidak Lancar) 
            $agunan_tidaklancar = $this->ListkreditModel->getagunanbpkbspmtdklancarwhere();
            $hasil6a = count($agunan_lancar);
            $hasil6b = count($agunan_tidaklancar);
        
        }elseif($agunan == 'BPKB MBL'){
            // P(Agunan = BPKB MBL | Y = Lancar) 
            $agunan_lancar = $this->ListkreditModel->getagunanbpkbmbllancarwhere();
            // P(Agunan = BPKB MBL | Y = tidak Lancar) 
            $agunan_tidaklancar = $this->ListkreditModel->getagunanbpkbmbltdklancarwhere();

            $hasil6a = count($agunan_lancar);
            $hasil6b = count($agunan_tidaklancar);
        }elseif($agunan == 'SRTFKT RMH'){
            // P(Agunan = SRTFK RMH | Y = Lancar) 
            $agunan_lancar = $this->ListkreditModel->getagunansrtfklancarwhere();
            // P(Agunan = SRTFK RMH | Y = tidak Lancar) 
            $agunan_tidaklancar = $this->ListkreditModel->getagunansrtfktdklancarwhere();
            $hasil6a = count($agunan_lancar);
            $hasil6b = count($agunan_tidaklancar);
        }

        $porbabilitaslancar = $this->ListkreditModel->getporpabilitaslancar();
        $hpl = count($porbabilitaslancar);
        $porbabilitastidaklancar = $this->ListkreditModel->getporpabilitastidaklancar();
        $hptl = count($porbabilitastidaklancar);
        

        $total_lancar = (($hasil1a/$lancar)*($hasil2a/$lancar)*($hasil3a/$lancar)*($hasil4a/$lancar)*($hasil5a/$lancar)*($hasil6a/$lancar)*$hpl);
        

        $total_tidaklancar = (($hasil1b/$tidaklancar)*($hasil2b/$tidaklancar)*($hasil3b/$tidaklancar)*($hasil4b/$tidaklancar)*($hasil5b/$tidaklancar)*($hasil6b/$tidaklancar)*$hptl);
        if($total_lancar > $total_tidaklancar){
            $prediksi = 'Lancar';
        }elseif($total_lancar < $total_tidaklancar){
            $prediksi = 'Tidak Lancar';
        }

        

        
	    $data = [
            'nama' => $name,
            'gaji' => $gaji,
            'jenis_kelamin' => $jenis,
            'status' =>$status,
            'pinjaman' => $pinjaman,
            'jangka_waktu'=>$jwaktu,
            'agunan'=>$agunan,
            'prediksi' => $prediksi
        ];

        $simpan = $this->ListkreditModel->insert_testing($data);
        
        if($simpan)
	    {
	        // Deklarasikan session flashdata dengan tipe success
	        // session()->setFlashdata('success', 'Created product successfully');
	        // Redirect halaman ke product
	        return redirect()->to(base_url('kredit')); 
	    }

    }

}