<?php

        $str2 = file_get_contents( "../config/datadir.json" );

        $json = json_decode( $str2, true);

        $datadir = $json['datadir'];

        echo $datadir;

        $jsonpath = $datadir . 'user_preferences-data.json';

        echo $jsonpath;

        $fp = fopen($jsonpath, 'w');
            fwrite($fp, json_encode($_POST));
        fclose($fp);

?>