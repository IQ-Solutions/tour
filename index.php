<?php
/**
 * Created by PhpStorm.
 * User: msnyder
 * Date: 1/28/2016
 * Time: 4:56 PM
 */

class hscJSON{
    public $base_url;
    public $feed_url;

    //Grab the feed
    public function mJSON_Query($query) {
        //View URL
        $mJSON = file_get_contents($query);

        if (!empty($mJSON)) {
            $mJSON = json_decode($mJSON);
            return $mJSON;
        }
        else {
            return NULL;
        }
    }

    //prep the vars for the mustache file


}

