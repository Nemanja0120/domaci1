<?php

class Muzej{
    public $muzejID;
    public $nazivMuzeja;
    public $grad;
    public $godinaOsnivanja;

    public function __construct($muzejID = null, $nazivMuzeja = null, $grad = null, $godinaOsnivanja = null){
        $this->muzejID = $muzejID;
        $this->nazivMuzeja = $nazivMuzeja;
        $this->grad = $grad;
        $this->godinaOsnivanja = $godinaOsnivanja;
    }

    public static function getAll(mysqli $conn){
        $q = "SELECT * FROM muzej";
        return $conn->query($q);
    }
    public static function deleteById($muzejID, mysqli $conn)
    {
        $q = "DELETE FROM muzej WHERE muzejID=$muzejID";
        return $conn->query($q);
    }

    public static function add($nazivMuzeja, $grad, $godinaOsnivanja, mysqli $conn){
       
        $q = "INSERT INTO muzej(nazivMuzeja, grad, godinaOsnivanja) values('$nazivMuzeja', '$grad', '$godinaOsnivanja')";
        return $conn->query($q);
    
        
}
    

public static function update($muzejID, $nazivMuzeja, $grad, $godinaOsnivanja, mysqli $conn)
{
    $q = "UPDATE muzej set nazivMuzeja='$nazivMuzeja', grad='$grad', godinaOsnivanja='$godinaOsnivanja' where muzejID=$muzejID";
    return $conn->query($q);
}

public static function getById($muzejID, mysqli $conn)
    {
        $q = "SELECT * FROM muzej WHERE muzejID=$muzejID";
        $myArray = array();
        if ($result = $conn->query($q)) {

            while ($row = $result->fetch_array(1)) {
                $myArray[] = $row;
            }
        }
        return $myArray;
    }

  
}


?>