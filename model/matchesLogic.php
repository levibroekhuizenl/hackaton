<?php
    
    require_once 'datahandler.php';
    require_once 'outputdata.php';

    //class om Products te handlen
    class MatchesLogic {
        //properties

        //methods
          public function __construct(){
                $this->DataHandler = new DataHandler("localhost", "mysql" ,"poules" ,"root" ,"");
            }

        function readMatches() {
            try { 
                $sql = 'SELECT * FROM matches';
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
         return $outputdata->createTable($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
        }

        public function searchMatch($res){ 
            try { 
                $sql = "SELECT * FROM accounts, matches WHERE matches.home LIKE '%$res%' OR matches.away LIKE '%$res%' OR accounts.username = '$res'";
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
                echo $outputdata->createTable($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        function readProduct($sql){
        
            $stmt = $this->DataHandler->readData($sql);
    
            $product = $stmt->fetchAll();
            return $product;
        }

        public function readAllProducts(){ 
            try { 
                $sql = 'SELECT * FROM services';
                $res = $this->DataHandler->readsData($sql);
                $results = $res->fetchAll();
                $outputdata = new OutputData();
         return $outputdata->createTable($results);
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        public function deleteProduct($id){ 
            try { 
                $sql = "DELETE FROM services WHERE service_id='$id' ";
                $res = $this->DataHandler->deleteData($sql);
                return "verwijderd";
                // return$results;
            } catch (Exception $e) { throw $e; }
    }

        function updateProduct($id, $product_name, $price, $desc) {
            try { 
                $sql = "UPDATE products SET product_name='$product_name',product_price='$price',other_product_details='$desc' WHERE product_id='$id'";
                $res = $this->DataHandler->updateData($sql);
                $answer = "Product " . $product_name . " was updated || " . $res . " rows updated <br><br>";
                $answer .= '<a id="button" href="../index.php">Overview</a>';
                return $answer;
            } catch (Exception $e) { throw $e; }
        }

        function __destruct() {
            $this->conn = null;
        }
    }
?>