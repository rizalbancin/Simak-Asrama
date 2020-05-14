<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class HafalanDoaHadist extends Model
{
    protected $table = 'hafalandoahadist';

    protected $fillable = ['tanggal','pm','doa','hadist','nilai','pembina_id','siswa_id'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}