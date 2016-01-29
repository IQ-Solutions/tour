<?php
/**
 * Created by PhpStorm.
 * User: msnyder
 * Date: 1/28/2016
 * Time: 4:56 PM
 */

require_once('include/base.php');

$m = new Mustache_Engine(
  array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),
  ));

$tour = new mJSON;

// set base domain
$tour->base_url = $config['base-url'];
$tour->feed_url = $config['feed-url'];

//Grab the JSON object
$objtour = $tour->mJSON_Query($tour->feed_url);


//Push it to the Mustache Template
echo $m->render('tour', $objtour);

?><pre>
<?php print_r($objtour); ?>
    </pre>
<?php
