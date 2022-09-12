<?php 

// cek photo null apa tidak
if (! function_exists('orang_photo')) {
    function orang_photo($photo)
    {
        $nama_file     = 'orang.png';
        if (!is_null($photo)) {
            $nama_file = $photo;
        }
        return $nama_file;
    }
}
if (! function_exists('siswa')) {
    function siswa()
    {
        $siswa = [
            ['44553545','firman setiawan','laki-laki','perum CGM blok A23'],
            ['44553545','lina marlina','perempuan','perum CGM blok A23'],
            ['44553545','andri anjasmara','laki-laki','perum CGM blok A23'],
        ];
        return $siswa;
    }
}
