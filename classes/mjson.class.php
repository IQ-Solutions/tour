<?php
/**
 * Created by PhpStorm.
 * User: msnyder
 * Date: 1/29/2016
 * Time: 11:39 AM
 */

class mJSON{
  public $base_url;
  public $feed_url;

  //Grab the feed
  public function mJSON_Query($query) {
    //View URL
    $mJSON = file_get_contents($query);
    //$mJSON = str_replace('{','"node" : { ', $mJSON);

    if (!empty($mJSON)) {
      $mJSON = json_decode($mJSON , true);

      return $mJSON;
    }
    else {
      return NULL;
    }
  }

}