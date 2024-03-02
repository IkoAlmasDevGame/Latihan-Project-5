<?php 
namespace controller;
use model\Model;

class View {
    protected $sdb;
    public function __construct($db){
        $this->sdb = new Model($db);
    }

    public function histori(){
        $row = $this->sdb->AdminReservasi();
        $hasil = $row->fetchAll();
        return $hasil;
    }
}

?>