<?php

namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model; //Model Eloquent
    use App\Models\kelas;
    use App\Models\Matakuliah;

class Mahasiswa extends Model
{
    protected $table="mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false;
    //protected $primaryKey = ''; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'Nim',
        'Nama',
        'Jurusan',
        'No_Handphone',
        'EMail',
        'Tanggal_lahir',
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class)->withpivot('nilai');
    }
}
