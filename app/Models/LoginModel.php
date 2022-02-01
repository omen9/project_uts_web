<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model{

    public function dataAkun(){
        return DB::table('tb_akun')->get();
    }
    public function dataBarang(){
        return DB::table('tb_buku')->get();
    }
    public function detailBarang($id){
        return DB::table('tb_buku')->where('id',$id)->first();
    }
    public function dataTransaksi(){
        return DB::table('tb_transaksi')->get();
    }
    public function addAkun($data){
        DB::table('tb_akun')->insert($data);
    }
    public function deleteDataAkun($id){
        DB::table('tb_akun')->where('id',$id)->delete();
    }
    public function deleteDataBuku($id){
        DB::table('tb_buku')->where('id',$id)->delete();
    }
    public function addData($data){
        DB::table('tb_buku')->insert($data);
    }
    public function addCheckout($data){
        DB::table('tb_transaksi')->insert($data);
    }
    public function editData($id){
        return DB::table('tb_buku')->where('id',$id)->first();    
    }
    public function updateData($id,$data){
        return DB::table('tb_buku')->where('id',$id)->update($data);    
    }

    public function loginChecking($username, $password, $level){
        return DB::table('tb_akun')->where('username',$username)->where('password',$password)->where('level',$level)->first();
    }
}