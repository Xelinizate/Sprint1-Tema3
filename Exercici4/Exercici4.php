
    <?php

        $personal = array(
            "nom" => "Adriana",
            "edat" => 38,
            "email"=> "xelinizate86@gmail.com",
            "menjar" => "pizza"
        );

        foreach ($personal as $item => $value):
            echo($item . " - " . $value . "<br>");
        endforeach;

    ?>
