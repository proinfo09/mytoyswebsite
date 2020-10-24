<?php
include('dbconnect.php');
class ProductCRUD
{
    private $msg = "";
    public function getMes()
    {
        return $this->msg;
    }
    public function readProduct()
    {
        $data = array();
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $data;
            }
            $query = 'SELECT code, name, price, image, details
	                        FROM public.products;';
            $result = pg_query($conn, $query);
            while ($row = pg_fetch_row($result)) {
                array_push($data, array("code" => $row[0], "image" => $row[1], "name" => $row[2], "price" => $row[3], "details" => $row[4]));
            }
            pg_close($conn);
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            echo $this->msg;
        }
        return $data;
    }
    public function createProduct($code, $image, $name, $price, $details)
    {
        $data = array();
        $success = -1;
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $data;
            }
            $query = 'INSERT INTO products (code, image, name, price, details) VALUES ($1, $2, $3, $4, $5) returning code ';
            $params = array(&$code, &$image, &$price, &$name, &$details);
            $res = pg_query_params($conn, $query, $params);
            $row =  pg_fetch_row($res);
            
            $success = $row[0];
            pg_close($conn);
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            $success = -1;
        }
    }

    public function deleteProduct($code = FALSE){
        $success = -1;
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $success;
            }
            $query = "DELETE FROM public.products WHERE code=$1";
            $params = array(&$code);
            $res = pg_query_params($conn, $query, $params);
            $row =  pg_affected_rows($res);
            $success = $row[1];
            $this->msg = "";
            pg_close($conn);
            if ($res === false) {
                $this->msg = "Error query";
                return $success;
            }
        } catch (Exception $e) {
            $this->msg = $e->getMessage();
            $success =-1;
        }
    }

    public function updateProduct ($code, $image, $name, $price, $details){
        $success = -1;
        try {
            global $connString;
            $conn = pg_connect($connString);
            if ($conn === false) {
                $this->msg = "Fail";
                return $success;
            }
        $query = 'UPDATE public.products SET image=$2, name=$3, price=$4, details=$5 WHERE code =$1';
        $params = array(&$code, &$image, &$name, &$price, &$details);
        $res = pg_query_params($conn,$query,$params);
        $row =  pg_affetched_row($res);
        $success = $row;
        $this->msg = "";
        pg_close($conn);
        if ($res === FALSE) {
            $this->msg = "Error in executing query.";
            return $success;
        }
        }catch (Exception $e){
                $this->msg = $e->getMessage();
                $success = -1;
        }
    } 
}