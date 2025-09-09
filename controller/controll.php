<?php 

class ArtController extends ArtModel{
    public function getArt(){
        return $this->FindAll();
    }

    public function getArtById(){
        if(!isset($_GET['id'])){
            return;
        }

        $onlyid = preg_replace('/\D/', '', $_GET['id']);
        if($onlyid != ""){
            return $this->FindOne($_GET['id']);
        }
    }
}

?>