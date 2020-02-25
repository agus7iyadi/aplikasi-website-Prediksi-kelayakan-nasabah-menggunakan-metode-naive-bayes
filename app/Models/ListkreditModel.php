<?php namespace App\Models;

use CodeIgniter\Model;

class ListkreditModel extends Model
{
    protected $table;
    protected $table2;

    public function __construct() {

        parent::__construct();
        // Memanggil class Database
        $db = \Config\Database::connect();
        // Menginisialisasi $this->table untuk menampung data table product
        $this->table = $this->db->table('data_training');
        $this->table2 = $this->db->table('data_test');
    }

    public function get_datatraining()
    {
        // Mengembalikan nilai data product disertail dengan output result array
        return $this->table->get()->getResultArray();
    }
    public function get_datatest()
    {
        // Mengembalikan nilai data product disertail dengan output result array
        return $this->table2->get()->getResultArray();
    }
    public function insert_testing($data)
    {
        // Melakukan insert data ke dalam table
        return $this->table2->insert($data);
    }
    public function getporpabilitaslancar(){  
        $status ='Lancar';
        return $this->table->where('kolektabilitas', $status)->get()->getResultArray();
    }
    public function getporpabilitastidaklancar(){  
        $status ='Tidak Lancar';
        return $this->table->where('kolektabilitas', $status)->get()->getResultArray();
    }
    public function getgaji($gaji){  
        return $this->table->where('gaji', $gaji)->get()->getResultArray();

    }
    public function getjk($jenis){  
        return $this->table->where('jenis_kelamin', $jenis)->get()->getResultArray();
    }
    public function getstatus($status){  
        return $this->table->where('status', $status)->get()->getResultArray();
    }
    public function getpinjaman($pinjaman){  
        return $this->table->where('pinjaman', $pinjaman)->get()->getResultArray();
    }
    public function getjangka($jwaktu){  
        return $this->table->where('jangka_waktu', $jwaktu)->get()->getResultArray();
    }
    public function getagunan($agunan){  
        return $this->table->where('agunan', $agunan)->get()->getResultArray();
    }
    public function getlancar(){  
        $status = 'Lancar';
        return $this->table->where('kolektabilitas', $status)->get()->getResultArray();
    }
    public function gettidaklancar(){  
        $status = 'Tidak Lancar';
        return $this->table->where('kolektabilitas', $status)->get()->getResultArray();
    }
    //gaji
    public function getlancarwhere(){  
        $gaji = 'Besar';
        $status = 'Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function gettidaklancarwhere(){  
        $gaji = 'Besar';
        $status = 'Tidak Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getsdlancarwhere(){  
        $gaji = 'Sedang';
        $status = 'Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getsdtdklancarwhere(){  
        $gaji = 'Sedang';
        $status = 'Tidak Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getkcllancarwhere(){  
        $gaji = 'kecil';
        $status = 'Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getkcltdklancarwhere(){  
        $gaji = 'kecil';
        $status = 'Tidak Lancar';
        $this->table->where('gaji', $gaji);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }

    // jenis ///
    public function getpjkllancarwhere(){  
        $jk = 'L';
        $status = 'Lancar';
        $this->table->where('jenis_kelamin', $jk);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getpjkltidaklancarwhere(){  
        $jk = 'L';
        $status = 'Tidak Lancar';
        $this->table->where('jenis_kelamin', $jk);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getpjkplancarwhere(){  
        $jk = 'P';
        $status = 'Lancar';
        $this->table->where('jenis_kelamin', $jk);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getpjkptdklancarwhere(){  
        $jk = 'P';
        $status = 'Tidak Lancar';
        $this->table->where('jenis_kelamin', $jk);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getmlancarwhere(){  
        $statusperkawinan = 'Sudah Menikah';
        $status = 'Lancar';
        $this->table->where('status', $statusperkawinan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getmtlancarwhere(){  
        $statusperkawinan = 'Sudah Menikah';
        $status = 'Tidak Lancar';
        $this->table->where('status', $statusperkawinan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getbmlancarwhere(){  
        $statusperkawinan = 'Belum Menikah';
        $status = 'Lancar';
        $this->table->where('status', $statusperkawinan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getbmtlancarwhere(){  
        $statusperkawinan = 'Belum Menikah';
        $status = 'Tidak Lancar';
        $this->table->where('status', $statusperkawinan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }

    //pinjaman

    public function getjplancarwhere(){  
        $pinjaman = 'Besar';
        $status = 'Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjptdklancarwhere(){  
        $pinjaman = 'Besar';
        $status = 'Tidak Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjpslancarwhere(){  
        $pinjaman = 'Sedang';
        $status = 'Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjpstdkmlancarwhere(){  
        $pinjaman = 'Sedang';
        $status = 'Tidak Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjpblancarwhere(){  
        $pinjaman = 'Kecil';
        $status = 'Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjpbtdklancarwhere(){  
        $pinjaman = 'Kecil';
        $status = 'Tidak Lancar';
        $this->table->where('pinjaman', $pinjaman);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }

    // jangka waktu
    
    public function getjwtlancarwhere(){  
        $jangka = 'Jangka Panjang';
        $status = 'Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjwtplancarwhere(){  
        $jangka = 'Jangka Panjang';
        $status = 'Tidak Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }

    public function getjwtslancarwhere(){  
        $jangka = 'Jangka Menengah';
        $status = 'Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjwtstdklancarwhere(){  
        $jangka = 'Jangka Menengah';
        $status = 'Tidak Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjwtpklancarwhere(){  
        $jangka = 'Jangka Pendek';
        $status = 'Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getjwtpktdklancarwhere(){  
        $jangka = 'Jangka Pendek';
        $status = 'Tidak Lancar';
        $this->table->where('jangka_waktu', $jangka);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }



    // agunan
    public function getagunanbpkbspmlancarwhere(){  
        $agunan = 'BPKB SPM';
        $status = 'Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getagunanbpkbspmtdklancarwhere(){  
        $agunan = 'BPKB SPM';
        $status = 'Tidak Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getagunanbpkbmbllancarwhere(){  
        $agunan = 'BPKB MBL';
        $status = 'Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getagunanbpkbmbltdklancarwhere(){  
        $agunan = 'BPKB MBL';
        $status = 'Tidak Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getagunansrtfklancarwhere(){  
        $agunan = 'SRTFKT RMH';
        $status = 'Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }
    public function getagunansrtfktdklancarwhere(){  
        $agunan = 'SRTFKT RMH';
        $status = 'Tidak Lancar';
        $this->table->where('agunan', $agunan);
        $this->table->where('kolektabilitas', $status);
        return $this->table->get()->getResultArray();
    }


    // public function insert_product($data)
    // {
    //     // Melakukan insert data ke dalam table
    //     return $this->table->insert($data);
    // }
    // public function edit_product($id)
    // {
    //     // Menampilkan data di dalam table berdasarkan primary key dan single output getRowArray()
    //     return $this->table->where('product_id', $id)->get()->getRowArray();
    // }  
    // public function update_product($data, $id)
    // {
    //     // Set data dalam bentuk array
    //     $this->table->set($data);
    //     // Ubah data yang sudah di set berdasarkan product_id
    //     $this->table->where('product_id', $id);
    //     // Melakukan update data
    //     return $this->table->update(); 
    // } 
    // public function delete_product($id)
    // {
    //     // Hapus data yang sudah di set berdasarkan product_id
    //     $this->table->where('product_id', $id);
    //     // Melakukan delete data
    //     return $this->table->delete();
    // } 


} 