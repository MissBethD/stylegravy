<a class="instagram-wrapper-frame" href="http://instagram.com/stylegravy" title="StyleGravy Instagram" target="_blank"></a>
<?php
/**
 * Instagram PHP API
 * 
* @author sprclldr
 */

$result = wp_remote_get( "https://api.instagram.com/v1/users/370349999/media/recent?client_id=7fc654d364fb45b7946722e29786968f&count=1" );
$result = json_decode( $result['body'] );
 foreach ($result->data as $entry) {
    echo '<img src="' . $entry->images->thumbnail->url .'">';
  }
?>