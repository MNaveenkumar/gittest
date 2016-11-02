<?php

$username = "matterhorn_system_account";
$password = "opencast";
//$curl = curl_init($service_url);
//$post_data = array(
//            "username" => 'restuser1',
//            "password" => 'opencast',
//            "roles" => array()
//            );
//
            $postdata = array('flavor'=>'presentation/source',
            'title'=>'test-ingest-via-curl',
            'creator'=>'John Doe',
            'BODY'=>'@SampleVideo_1080x720_2mb.mp4');
// Initialise the curl connection
$curl_connection = curl_init();
// Set curl options

		curl_setopt($curl_connection, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl_connection, CURLOPT_URL, 'http://mh.moodlemenu.net:8080/ingest/addMediaPackage/full');
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($curlHandle, CURLOPT_COOKIEFILE, '/dev/null');
		curl_setopt($curl_connection, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', 'Accept:application/xml'));
	    curl_setopt($curl_connection, CURLOPT_USERPWD, $username.':'.$password);
        curl_setopt($curl_connection, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($curl_connection, CURLOPT_HTTPHEADER, array("X-Requested-Auth: Digest",
                                           "X-Opencast-Matterhorn-Authorization: true"));
        
        
		//curl_setopt($curl_connection, CURLOPT_CUSTOMREQUEST, 'POST');
//curl_setopt($curl_connection, CURLOPT_HEADER, 1);
//curl_setopt($curl_connection, CURLOPT_USERAGENT,
//"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36");
//curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
//curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, FALSE);
//curl_setopt($curl_connection, CURLINFO_HEADER_OUT, true);
curl_setopt($curl_connection, CURLOPT_CUSTOMREQUEST, 'POST');
//curl_setopt($curl_connection, CURLOPT_POST, 1);
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $postdata);


// Send the post data.
$result = curl_exec($curl_connection);
$info = curl_getinfo($curl_connection);
echo "<pre>".print_r($info,true),"</pre>";
curl_close($curl_connection);

       
       
       
       
//       //curl_setopt($curl, CURLOPT_USERPWD, 'admin:opencast');
//    //   $headers = array(
//    //'Authorization: Basic '. base64_encode("admin:opencast"));
////curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//      
//
//       //curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Circle)");
//      //curl_setopt($curl, CURLOPT_TIMEOUT,60);
//      //curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
//      //curl_setopt($curl,CURLOPT_COOKIESESSION,true);
//       //curl_setopt($curl, CURLOPT_GET, true);
//       //curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
////curl_setopt($curl, CURLOPT_URL, 'http://103.241.136.206:8080');
////curl_setopt($curl, CURLOPT_TIMEOUT,30);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
////curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($curl, CURLOPT_USERPWD, "matterhorn:opencast");
//curl_setopt($curl, CURLOPT_ENCODING, "UTF-8");
//curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Requested-Auth: Digest"));
////curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
//echo $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Opencast-Matterhorn-Authorization: true"));
//
// curl_setopt($curl, CURLOPT_HEADER, 1);
//echo   $curl_response = curl_exec($curl);
//curl_close($curl);
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'http://103.241.136.206:8080/user-utils/users.json');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_HEADER, 1);
////curl_setopt($ch, CURLOPT_POST, true);
////curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post_data);
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Requested-Auth: Digest",
//                                           "X-Opencast-Matterhorn-Authorization: true"));
//
//echo $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// echo $response = curl_exec($ch);
//curl_close($ch);
