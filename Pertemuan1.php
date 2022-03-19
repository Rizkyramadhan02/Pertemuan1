<?php
//class parent 
class laptop {

    //property class laptop
    public $warna;

    //method pada class laptop
    function diwarna($warna){
        $this->warna=$warna;
    }
  
}

//class parent
class manusia {
    //property class manusia
    public $nama_pemilik;

    //method class manusia
    function dinama($nama_pemilik){
        $this->nama_pemilik=$nama_pemilik;
    }
}   

// child class 1 atau sub class dari class laptop
//class child dengan syntax extend
class notebook extends laptop {
    
    //property class manusia
    public $nama_brand;
    public $type_brand;
    

    //method class spesifikasi
    function berinamabrand($merk){
        $this->nama_brand=$merk;
    }

    function berinamatype($type){
        $this->type_brand=$type;
    }
}    

// child class 2 atau sub class dari class laptop
//class child dengan syntax extend
class spesifikasi extends laptop {
    
    //property class manusia
    public $memory;
    public $jenis_processor;
    

    //method class spesifikasi
    function memori($memory){
        $this->memory=$memory;
    }

    function jenisprocessor($processor){
        $this->jenis_processor=$processor;
    }
}    


// child class 1 atau sub class dari class manusia
//class child dengan syntax extend
class TTL extends manusia {

    //property class TTL
    public $tempat_lahir;
    public $tgl_lahir;

    //method class spesifikasi
    function ditempatlahir($tempat){
        $this->tempat_lahir=$tempat;
    }

    function ditanggallahir($lahir){
        $this->tgl_lahir=$lahir;
    }
}

// child class 2 atau sub class dari class manusia
//class child dengan syntax extend
class sekolah extends manusia {

    //property class TTL
    public $sekolah;
    public $jurusan;

    //method class spesifikasi
    function disekolah($sekolah){
        $this->sekolah=$sekolah;
    }

    function dijurusan($jurusan){
        $this->jurusan=$jurusan;
    }
}

//intansiasi class laptop dan manusia
$rizky_laptop = new notebook;
$orang_rizky = new TTL;
$laptop_spec = new spesifikasi;
$sekolah_rizky = new sekolah;

//set propertynya laptop
$rizky_laptop->berinamabrand("Asus");
$rizky_laptop->berinamatype("X-MA14");
$laptop_spec->memori("4 GB");
$laptop_spec->jenisprocessor("Intel Core i7");

//set propertynya manusia
$orang_rizky->dinama("Rizky Ramadhan");
$orang_rizky->ditempatlahir("Cirebon");
$orang_rizky->ditanggallahir("22 November 2001");
$sekolah_rizky->disekolah("Universitas Catur Insan Cendekia");
$sekolah_rizky->dijurusan("Sistem Informasi");

//menampilkan isi property laptop
echo "Merk Laptop : " . $rizky_laptop->nama_brand . "<br/>";
echo "Type Laptop : " . $rizky_laptop->type_brand . "<br>";
echo "Memory RAM : " . $laptop_spec->memory . "<br/>";
echo "Processor : " . $laptop_spec->jenis_processor . "<br/>";


//menampilkan isi property manusia
echo "Nama Pemilik : " . $orang_rizky->nama_pemilik . "<br/>";
echo "Tempat Lahir : " . $orang_rizky->tempat_lahir . "<br/>";
echo "Tanggal Lahir : " . $orang_rizky->tgl_lahir . "<br/>";
echo "Asal Kampus : " . $sekolah_rizky->sekolah . "<br/>";
echo "Jurusan : " . $sekolah_rizky->jurusan;

?>

<?php
echo "<center>&copy; Rizky Ramadhan </center>" ?>