<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "Muhammad Andra Fadhillah";
    protected $nim = "2110817310013";
    protected $prodi = "Teknologi Informasi";
    protected $hobi = "Bermain Game";
    protected $skill = "Administrator Server Game Minecraft";
    protected $foto = "fotoku.jpg";

    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getProdi()
    {
        return $this->prodi;
    }
    public function getHobi()
    {
        return $this->hobi;
    }
    public function getSkill()
    {
        return $this->skill;
    }
    public function getFoto()
    {
        return $this->foto;
    }
}