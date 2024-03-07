<?php
include __DIR__."/api/vimeo.php";
$config = require(__DIR__.'/api/init.php');

if (empty($config['access_token'])) {
    echo ('You can not upload a file without an access token. You can find this token on your app page, or generate one using auth.php');
}

$lib = new Vimeo($config['client_id'], $config['client_secret'], $config['access_token']);

	$file_name1 = $_FILES['file_data']['name'];
	$file_name = $_FILES['file_data']['tmp_name'];
	$_FILES['file_data']['type'];
	$_FILES['file_data']['size'];
	
	$name = strip_tags($_POST['videotitle']); 
	$description = strip_tags($_POST['videodesc']);
	$private = "anybody";
	if ($_POST['make_private'] == 'private') {
	$private = "nobody";
	}
    print 'Uploading ' . $file_name1 . "\n";
    try {
        $uri = $lib->upload($file_name);
		$video_data = $lib->request($uri);
        $link = '';
        if($video_data['status'] == 200 || $video_data['status'] == 201) {
            $link = $video_data['body']['link'];
			$x2 = "https://api.vimeo.com".$video_data['body']['uri'];
			
			$metaddata = array('name' => "$name", 'description' => "$description", 'privacy.view' => "$private");
			$lib->request($video_data['body']['uri'], $metaddata, 'PATCH');
        }
    }
    catch (VimeoUploadException $e) {
        //  We may have had an error.  We can't resolve it here necessarily, so report it to the user.
        print 'Error uploading ' . $file_name . "\n";
        print 'Server reported: ' . $e->getMessage() . "\n";
    }
	$file = $file_name;
	$link = $link;
	$api_video_uri = $uri;
print " $uri - $file is at $link  $api_video_uri. [$x2] \n";