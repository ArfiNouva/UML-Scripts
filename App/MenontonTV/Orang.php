<?php

namespace App\MenontonTV;

class Orang{
    private $nama,
            $remoteTV,
            $TV;

    public function __construct($nama, RemoteTV $remoteTV, TV $TV)
    {
        $this->nama = $nama;
        $this->remoteTV = $remoteTV;
        $this->TV = $TV;
    }

    public function getNama(){
        return $this->nama;
    }

    public function nyalakanWithRemote(){
        if(!$this->remoteTV){
            return "Nyalain Pake Remote";
        } else {
            return "Lo ga punya remote dek....";
        }
    }

}