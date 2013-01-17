<html>
<head>
<?php
    // Get class for Instagram
    // More examples here: https://github.com/cosenary/Instagram-PHP-API
    require_once 'instagram.class.php';

    // Initialize class with client_id
    // Register at http://instagram.com/developer/ and replace client_id with your own
    $instagram = new Instagram('457f784dbf5b4580a4c256f84911cbc6');

    // Set keyword for #hashtag
    $tag = 'github';

    // Get latest photos according to #hashtag keyword
    $media = $instagram->getTagMedia($tag);

    // Set number of photos to show
    $limit = 20;

    // Set height and width for photos
    $size = '100';

    // Show results
    // Using for loop will cause error if there are less photos than the limit
    foreach(array_slice($media->data, 0, $limit) as $data)
    {
        // Show photo
        echo '<p><img src="'.$data->images->thumbnail->url.'" height="'.$size.'" width="'.$size.'" alt="SOME TEXT HERE"></p>';
    }
?>
</head>
</html>
