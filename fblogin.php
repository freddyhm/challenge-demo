<?php 
require_once 'facebook/src/facebook.php';


 $app_id = '325719784202371';
 $app_secret = '299e69d4b939d91f89904fac8bb883bc';
 $my_url = '';
 
 $config = array(
		'appId' => $app_id,
		'secret' => $app_secret,
		'redirect_uri' => 'http://apps.facebook.com/firstfbapp');

$fb = new facebook($config);

$user_id = $fb->getUser();

if($user_id){

	
$query1 = "SELECT uid2 FROM friend WHERE uid1 = me()";
$query2 = "SELECT first_name, last_name, uid, movies FROM user WHERE uid IN (SELECT uid2 FROM #query1)";
	

	
	$queries = '{
                    "query1": "' . $query1 . '",
                     "query2": "' . $query2 . '"
                 }';
					 
	$param = array(       
     'method' => 'fql.multiquery',       
     'queries' => $queries,   
     'callback' => '');       
	 
	$flqResult = $fb->api($param);
	
	//$values = $flqResult[0];
	
	//$flqResult2 = $fb->api(array('method' => 'fql.query', 'query' => "'"));
	foreach($flqResult as $values)
	{
		foreach($values['fql_result_set'] as $result)
		{
			echo '<br />' . print_r($result) . '<br />';
		}
	}
	
	//print_r($values['fql_result_set'][0]['comments']['comment_list'][0]);
	
	 // Run fql query
	//$fql_query_url = 'https://graph.facebook.com/fql?q=SELECT+uid2+FROM+friend+WHERE+uid1=me()';
	//$fql_query_result = file_get_contents($fql_query_url);
	//$fql_query_obj = json_decode($fql_query_result, true);
	
	//display results of fql query
	echo '<pre>';
	print_r("query results:");
	//print_r($fql_query_obj);
	echo '</pre>';
	
	
	
	/*
	print '<pre>';

	//print $user_id;
	print_r($fb->api('/me'));
	print_r($fb->api('/me/likes'));

	print '</pre>';
*/

}
else
{
	$params = array( 'scope' => 'user_likes,friends_likes,read_stream' );
	header('Location: ' . $fb->getLoginUrl($params));
	
	print '<script>top.location.href="' . $fb->getLoginUrl($params). '" </script>';
}



?>