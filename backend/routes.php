<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Controller;

header('Content-Type: application/json');
//$teste = json_decode($_POST,1);
echo "<pre>" . print_r($_POST,1);die();
$aResult = array();

if (!isset($_POST['functionname']))
    $aResult['error'] = 'No function name!';

if (!isset($_POST['arguments']))
    $aResult['error'] = 'No function arguments!';

if (!isset($aResult['error'])) {
    switch ($_POST['functionname']) {
        case 'verifyUser':
            if (!is_array($_POST['arguments']) || (count($_POST['arguments']) < 2)) {
                $aResult['error'] = 'Error in arguments! You must pass login and password';
                break;
            }

            //die('leo5');
           // $userController = new Controller\UserController();
          //  $aResult = $userController->verifyUserExists($_POST['arguments']);
            break;

        default:
            $aResult['error'] = 'Not found function ' . $_POST['functionname'] . '!';
            break;
    }

}

echo json_encode($aResult);
