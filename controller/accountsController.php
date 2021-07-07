<?php
require_once '../model/accountsLogic.php';
class MatchesController {
        //properties
        public $matches;

        //methods
        function __construct() {
            $this->AccountsLogic = new MatchesLogic();
        }

        function handleRequest() {
            try {

                if(isset($_REQUEST['todo'])){
                    $todo = $_REQUEST['todo'];
                }else {
                    $todo = 'default';
                }

                switch ($todo) {
                    case 'createform':
                        break;
                    case 'register':
                        session_start();
                        $username = $_REQUEST['username'];
                        $password = $_REQUEST['psw'];
                        $confirm_password = $_REQUEST['psw-repeat'];
                        if($password == $confirm_password){

                        }else {
                            echo 'wachtwoorden komen niet overeen';
                        }
                        $this->collectCreateAccount($username, $password);
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        echo 'welkom' . $_SESSION['username'];
                        break;
                    case 'login':
                        session_start();
                        $username = $_REQUEST['username'];
                        $password = $_REQUEST['psw'];
                        $this->collectReadAccount($username, $password);
                        break;
                    case 'update':
                        $this->collectUpdateProduct($id, $product_name, $price, $desc);
                        break;
                    case 'reads':
                        $this->collectreadAllmatches();
                        break;
                    case 'logout':
                        session_start();
                        $_SESSION['loggedin'] = null;
                        echo 'succesvol uitgelogd';
                        break;
                    case 'search':
                        $res = $_REQUEST['search'];
                        $this->collectSearchMatch($res);
                        break;
                    case 'delete':
                        $this->collectDeleteProduct($_REQUEST['id']);
                        echo 'verwijderd';
                        break;
                    default:
                        $this->collectReadMatches();
                        break;
                }

            }catch (Exeption $e){
                throw $e;
            }
        }

        function collectReadMatches() {
            $matches = $this->MatchesLogic->readMatches();
            
        }

         public function collectSearchMatch($res) {
            $matches = $this->MatchesLogic->searchMatch($res);
        }

        function collectCreateAccount($username, $password) {
            $matches = $this->AccountsLogic->createAccount($username, $password);
                        header("Refresh:0");
        }

        function collectReadAccount($username, $password) {
           $matches = $this->AccountsLogic->readAccount($username, $password);
           include '../view/matches.php';

        }

        function collectLogOut() {
            $matches = $this->matchesLogic->logOutAccount();
        }

        function collectSearchProduct($res) {
            $matches = $this->matchesLogic->searchProduct($res);
        }

        function __destruct() {
            $this->conn = null;
        }
    }
$new = new MatchesController();
$new->handleRequest();
?>