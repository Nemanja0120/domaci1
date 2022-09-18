<?php

class User{
    public $id;
    public $korisnickoIme;
    public $lozinka;


public function __construct($id = null, $korisnickoIme=null, $lozinka = null){
    $this->id = $id;
    $this->korisnickoIme = $korisnickoIme;
    $this->lozinka = $lozinka;
}
public static function logIn($korisnickoIme, $lozinka, mysqli $conn){
    $q = "select * from korisnik where korisnickoIme= '".$korisnickoIme."' and lozinka ='".$lozinka."' limit 1;";
    
    return $conn->query($q);
}

}
?>