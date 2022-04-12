<?php
/*
 * Class User
 * Class ini digunakan untuk database yang terkait dengan operation (fetch, dan insert)
 */
class User{
    private $dbHost     = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName     = 'codingan';
    private $userTbl    = 'user';
    
    public function __construct(){
        if(!isset($this->db)){
            // menghubungkan ke databse
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Gagal terhubung dengan MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    //Mengembalikan row dari database berdasarkan Kondisi
    public function getRows($kondisi = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$kondisi)?$kondisi['select']:'*';
        $sql .= ' FROM '.$this->userTbl;
        if(array_key_exists("where",$kondisi)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($kondisi['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        
        if(array_key_exists("order_by",$kondisi)){
            $sql .= ' ORDER BY '.$kondisi['order_by']; 
        }
        
        if(array_key_exists("start",$kondisi) && array_key_exists("limit",$kondisi)){
            $sql .= ' LIMIT '.$kondisi['start'].','.$kondisi['limit']; 
        }elseif(!array_key_exists("start",$kondisi) && array_key_exists("limit",$kondisi)){
            $sql .= ' LIMIT '.$kondisi['limit']; 
        }
        
        $hasil = $this->db->query($sql);
        
        if(array_key_exists("return_type",$kondisi) && $kondisi['return_type'] != 'all'){
            switch($kondisi['return_type']){
                case 'count':
                    $data = $hasil->num_rows;
                    break;
                case 'single':
                    $data = $hasil->fetch_assoc();
                    break;
                default:
                    $data = '';
            }
        }else{
            if($hasil->num_rows > 0){
                while($row = $hasil->fetch_assoc()){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }
    
    //Memasukan data ke dalamn database
    public function insert($data){
        if(!empty($data) && is_array($data)){
            $kolom = '';
            $Value  = '';
            $i = 0;
            if(!array_key_exists('dibuat',$data)){
                $data['dibuat'] = date("Y-m-d H:i:s");
            }
            if(!array_key_exists('diubah',$data)){
                $data['diubah'] = date("Y-m-d H:i:s");
            }
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $kolom .= $pre.$key;
                $Value  .= $pre."'".$val."'";
                $i++;
            }
            $kueri = "INSERT INTO ".$this->userTbl." (".$kolom.") VALUES (".$Value.")";
            $insert = $this->db->query($kueri);
            return $insert?$this->db->insert_id:false;
        }else{
            return false;
        }
    }

}