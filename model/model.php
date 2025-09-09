<?php 

class ArtModel extends Connection{
    protected $name;
    protected $type;
    protected $year;

    protected function FindAll(){
        $sql = "SELECT * FROM seni";
        $result = $this->connect()->query($sql);
        if($result->num_rows > 0){
            while ($data = mysqli_fetch_assoc($result)){
                $art[] = $data;
            }
        }

        return $art;
    }


    protected function FindOne($id){
        $sql = "SELECT * FROM SENI WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        if($result->num_rows > 0){
            while ($data = mysqli_fetch_assoc($result)){
                $art[] = $data;
            }
        }

        return $art;
    }
}

?>