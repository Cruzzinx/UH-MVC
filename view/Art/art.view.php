<?php

class ArtView extends ArtController
{
    public function show()
    {
        $arts = $this->getArt(); 
        foreach ($arts as $art) { ?>
        <tr>
        <td><?php echo $art['id']; ?></td>
        <td><?php echo $art['tittle']; ?></td>
        <td><?php echo $art['type']; ?></td>
        <td><?php echo $art['year']; ?></td>
        </tr>
        <?php
        }
    }

    public function find()
    {
        $detailArt = $this->getArtById(); 
        if (empty($detailArt))
        return;
        foreach ($detailArt as $detail) { ?>
        <div>
        <h3><?php echo $detail['tittle']; ?></h3>
        <p>tipenya : <?php echo $detail['type']; ?></p>
        <p>Tahun : <?php echo $detail['year']; ?></p>
        </div>
        <?php
        }
    }
}

?>