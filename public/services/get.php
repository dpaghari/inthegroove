<?php
require_once("config.php");
require_once("ApiManager.php");

$action = isset($_GET["action"]) ? $_GET["action"] : null;
$data = array();
switch ($action) {

	// Event actions
	case 'auth_user':
	// die('hi');
		// $_POST = json_decode(file_get_contents('php://input'), true);
		$un = isset($_POST["username"]) ? $_POST["username"] : null;
		$pw = isset($_POST['password']) ? $_POST['password'] : null;
		$apiManager = new ApiManager();
		$data = $apiManager->auth_user($un, $pw);

		if($data['valid']) header("Location: /admin.php" );
		break;

	case 'set_schedule' :
		$_POST = json_decode(file_get_contents('php://input'), true);
		$name = isset($_POST["name"]) ? $_POST["name"] : null;
		$img_url = isset($_POST["imgURL"]) ? $_POST["imgURL"] : null;
		$host = isset($_POST["host"]) ? $_POST["host"] : null;
		$event_date = isset($_POST["event_date"]) ? $_POST["event_date"] : null;
		$location = isset($_POST["location"]) ? $_POST["location"] : null;
		$details = isset($_POST["details"]) ? $_POST["details"] : null;
		$event_type = isset($_POST["event_type"]) ? $_POST["event_type"] : 0;
		$friends = isset($_POST["friends"]) ? $_POST["friends"] : array();

		$apiManager = new ApiManager();
		$data = $apiManager->create_new_event($name, $img_url, $host, $event_date, $location, $details, $event_type, $friends);
		break;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data, JSON_NUMERIC_CHECK);
}
 ?>
