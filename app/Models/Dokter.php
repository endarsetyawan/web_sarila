<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dokter extends Model
{
    public function allData()
    {
        return DB::table('dokters')->get();
    }
    public function detailData($id)
    {
        return DB::table('dokters')->where('id',$id)->first();
    }
    public function addData($data)
    {
        DB::table('dokters')->insert($data);
    }
    public function updateData($id,$data)
    {
        DB::table('dokters')
        ->where('id', $id)
        ->update($data);
    }
}
