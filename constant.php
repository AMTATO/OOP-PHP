<?php 
    // Tidak bisa disimpan di dalam sebuah class
    // define('NAMA', 'Ilham Pradipta Listiyanto');
    // echo NAMA;

    // echo "<br>";

    // Bisa disimpan di dalam sebuah class
    // const UMUR = 22;
    // echo UMUR;

    // class Coba{
    //     const NAMA = 'Ilham';
    // }

    // echo Coba::NAMA;

    // Magic Constant
    // __LINE__ -> Untuk mengetahui posisi baris code
    // __FILE__ -> Untuk mengetahui alamat dari file
    // __DIR__ -> Untuk mengetahui direktori dari file yang bersangkutan
    // __FUNCTION__ -> Untuk mengetahui kita sedang berada di function apa
    // __CLASS__ -> Untuk mengetahui kita sedang berada di class apa
    // __TRAIT__ ->
    // __METHOD__ ->
    // __NAMESPACE__ ->

    // function coba(){
    //     return __FUNCTION__;
    // }
    // echo coba();

    class Coba{
        public $kelas = __CLASS__;
    }
    $obj = new Coba;
    echo $obj->kelas;
?>