<?php

//header('location:index.php');
function connection(){
    try{
        $con = mysqli_connect("localhost","root","mysql","hoteldb");
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return $con;
}

function searchbyquery($table,$searchterm,$searchdata){
    try {
        $con = connection();
        $sql = "SELECT * FROM $table WHERE $searchterm LIKE '%".$searchdata."%'";
        $res = mysqli_query($con,$sql);
        $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);        
    } catch (Exception $e) {
        echo $e->getMessage();   
    }
    return $rows;
}

function build_sql_insert($table, $data) {
    try {
        $con = connection();
        $key = array_keys($data);
        $val = array_values($data);
        $sql = "INSERT INTO $table (" . implode(', ', $key) . ") " . "VALUES ('" . implode("', '", $val) . "')";
        $res = mysqli_query($con,$sql);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return($res);
}

function build_sql_check($table, $col_to_check,$val_of_col) {
    try {
        $con = connection();
        $sql = "SELECT * from $table WHERE  $col_to_check = '{$val_of_col}'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_num_rows($res);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return ($row);
}

function build_sql_delete($table, $primary_key ,$value ) {
    try {
        $con = connection();
        $sql = "DELETE from $table WHERE  $primary_key = $value";
        $res = mysqli_query($con,$sql);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return($res);
}

function userlogin($username,$password){
    try{
        $con = connection();
        $sql ="SELECT * from registration where uname='".$username."' and password='".$password."'";
        $res = mysqli_query($con,$sql);
        $r = mysqli_num_rows($res);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return $r;
}
function adminlogin($data){
    try{
        $con = connection();
        $sql ="SELECT * from employee where u_name='".$data['u_name']."' and password='".$data['password']."'";
        $res = mysqli_query($con,$sql);
        $r = mysqli_num_rows($res);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return $r;
}

/* function to build SQL UPDATE string */
function build_sql_update($table,$data,$primary_key,$where)
{
    try{
        $con = connection();
        $cols = array();
        foreach($data as $key => $val) {
            $cols[] = "$key = '$val'";
        }
        $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $primary_key = $where";
        $res = mysqli_query($con,$sql);
        //$r = mysqli_num_rows($res);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return($res);
}

function selectalldatabyid($table,$primary_key,$id){
    try{
        $con = connection();
        $cols = array();
        $sql = "SELECT * from $table  WHERE $primary_key=$id";
        $result = mysqli_query($con, $sql);//0 or 1>
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return($row);
}

function selectbyusername($u_name){
    try {
        $con = connection();
        $selectalldata = "SELECT * from employee where u_name='".$u_name."'";
        $result = mysqli_query($con, $selectalldata);//0 or 1>
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    return $row;    
}

function counttablerows($table){
    try {
        $con = connection();
        $selectalldata = "SELECT * from $table";
        $result = mysqli_query($con, $selectalldata);//0 or 1>
        $row = mysqli_num_rows($result);
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    /*echo "<pre>";
    print_r($row);
    echo "</pre>";*/
    return $row;    
}

function selectalldataby($table){
    try {
        $con = connection();
        $selectalldata = "SELECT * from $table";
        $result = mysqli_query($con, $selectalldata);//0 or 1>
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    /*echo "<pre>";
    print_r($row);
    echo "</pre>";*/
    return $row;
}

function findtotalrooms($table,$hotel_id){
    try {
        $con = connection();
        $selectalldata = "SELECT count(*) As 'totalroom' from $table WHERE hotel_id = {$hotel_id}";
        $result = mysqli_query($con, $selectalldata);//0 or 1
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    /*echo "<pre>";
    print_r($row);
    echo "</pre>";*/
    return $row;
}
function findavilrooms($table,$hotel_id){
    try {
        $con = connection();
        $selectalldata = "SELECT count(*) As 'availroom' from $table WHERE hotel_id = {$hotel_id} AND booking_status <> 1";
        $result = mysqli_query($con, $selectalldata);//0 or 1
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    /*echo "<pre>";
    print_r($row);
    echo "</pre>";*/
    return $row;
}
function selectdistictrow($table,$col){
    try{
        $con = connection();
        $cols = array();
        $sql = "SELECT DISTINCT($col) from $table";
        $result = mysqli_query($con, $sql);//0 or 1>
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return($row);
}