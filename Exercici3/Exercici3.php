
    <?php

        $ciutats = ["Melbourn","Morella","Munich"];
        $value = 'M';

        foreach($ciutats as $ciutat => $value):
            if (str_contains($ciutats, $value)):
                echo "Les ciutats contenen la lletra " . $value;
            else:
                echo "Les ciutats no contenen la lletra " . $value;
            endif;
        endforeach;
    

    ?>
