
    <?php

        $ciutats = ["Melbourn","Morella","Munich"];
        $value = 'M';
        $respon = false;

        foreach($ciutats as $ciutat):
            if (str_contains($ciutat, $value)){
                $respon = true;
                break;
            }
            endforeach;

        if ($respon):
            echo "Les ciutats contenen la lletra " . $value;
        else:
            echo "Les ciutats no contenen la lletra " . $value;
        endif;
    

    ?>
