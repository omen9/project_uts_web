<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoginModel;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{

   public function __construct()
   {
      $this->LoginModel = new LoginModel();
   }


    public function index()
    {
       return view('welcome');
    }
    public function login()
    {
       return view('login');
       
    }
    public function register()
    {
       return view('register');
    }
    public function about()
    {
       return view('about');
    }
    public function product()
    {
       $data = ['barang' => $this->LoginModel->dataBarang(),];
       return view('product',$data);
    }
    public function article($id)
    {
      $data = ['barang' => $this->LoginModel->detailBarang($id),];
 
       return view('article',$data);
    }
    public function admin()
    {
       return view('admin/home');
    }
    public function addBarang()
    {
       return view('admin/barang/addData');
    }
    public function editBarang($id)
    {
      $data = ['barang' => $this->LoginModel->editData($id),];
       return view('admin/barang/editData',$data);
    }
    public function akun()
    {
       $data= ['akun'=>$this->LoginModel->dataAkun(),];
       return view('admin/akun',$data);
    }
    public function barang()
    {
       $data= ['barang'=>$this->LoginModel->dataBarang(),];
       return view('admin/barang',$data);
    }
    public function transaksi()
    {
       $data= ['transaksi'=>$this->LoginModel->dataTransaksi(),];
       return view('admin/transaksi',$data);
    }

    public function addBuku()
    {

        $file = Request()->gambar;
        $filenName = Request()->nama_buku . '.' . $file->extension();
        $file->move(public_path('image'), $filenName);


        
        $data = [
            'nama' => Request()->nama_buku,
            'kategori' => Request()->kategori,
            'harga' => Request()->harga,
            'deskripsi' => Request()->desc,
            'img' => $filenName,
        ];

        $this->LoginModel->addData($data);
        return redirect()->route('barang')->with('pesan', 'Data berhasil ditambahkan');
    }
    public function checkout()
    {
       $total = Request()->jumlah * Request()->nHarga;
        
        $data = [
            'pembeli' => Request()->nama,
            'alamat' => Request()->alamat,
            'nama_barang' => Request()->nBarang,
            'jumlah' => Request()->jumlah,
            'harga' => Request()->nHarga,
            'total_harga'=> $total,
        ];

        $this->LoginModel->addCheckout($data);
        return redirect()->route('articles')->with('pesan', 'Data berhasil ditambahkan');
    }


    public function registerCreate(){
       $data=[
          'id' => 0,
         'username' => Request()->username,
         'password' => Request()->password,
         'level'=> 1,
       ];
       $this->LoginModel->addAkun($data);

       return redirect()->route('login')->with('pesan','data berhasil ditambahkan');
    }
    public function loginChecking(){
      
      $username=request()->username;
      $password=request()->password;
      // if(! $this->LoginModel->loginChecking($username,$password,1)){
      //    App::abort(500, 'Error');
      // } 
      // elseif(! $this->LoginModel->loginChecking($username,$password,2)){
      //    App::abort(500, 'Error');
      // }
      if($this->LoginModel->loginChecking($username,$password,2)){
         return redirect()->route('admin')->with('pesan','berhasil login');
      }
      elseif($this->LoginModel->loginChecking($username,$password,1)){
         return redirect()->route('index')->with('pesan','berhasil login');
      }
      else {
         App::abort(500, 'Error');
      }
    }

    public function deleteAkun($id){
      $this->LoginModel->deleteDataAkun($id);
      return redirect()->route('akun')->with('pesan', 'Data berhasil dihapus');
    }

    public function deleteBuku($id){
      $this->LoginModel->deleteDataBuku($id);
      return redirect()->route('barang')->with('pesan', 'Data berhasil dihapus');
    }

    public function updateBuku($id)
    {

        if (Request()->gambar) {
            $file = Request()->gambar;
            $filenName = Request()->nama_buku . '.' . $file->extension();
            $file->move(public_path('image'), $filenName);

            $data = [
                'nama' => Request()->nama_buku,
                'kategori' => Request()->kategori,
                'harga' => Request()->harga,
                'deskripsi' => Request()->desc,
                'img' => $filenName,
            ];
        } else {
            $data = [
               'nama' => Request()->nama_buku,
               'kategori' => Request()->kategori,
               'harga' => Request()->harga,
               'deskripsi' => Request()->desc,
            ];
        }

        $this->LoginModel->updateData($id, $data);
        return redirect()->route('barang')->with('pesan', 'Data berhasil diubah');
    }
}
