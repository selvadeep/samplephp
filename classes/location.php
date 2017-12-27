<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Version: 0.0.1
* Date: 25-04-2015
* App Name: Php+ajax country state city dropdown
* Description: A simple oops based php and ajax country state city dropdown list
*/
class foo
{
}

require_once("dbconfig.php");

class location extends dbconfig {

   public static $data;

   function __construct() {
     parent::__construct();
   }
 
 // Fetch all countries list
   public static function getCountries() {
     try {
       $query = "SELECT id, name FROM countries";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("Country not found.");
       }
       $res = array();
       //$obj = new foo();
         //$obj1 = new stdClass();//create a new

       while($resultSet = mysqli_fetch_assoc($result)) {
          // $obj = new class{};
           $obj = new stdClass();
        //$res[$resultSet["id"]] = $resultSet['name'];
        $obj->id= $resultSet["id"]; 
        $obj->name = $resultSet['name']; 
        $obj->label = $resultSet["name"]; 
        $obj->value = $resultSet["name"]; 
        array_push($res, $obj);
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Countries fetched successfully.", 'result'=>$res);
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

  // Fetch all states list by country id
  public static function getStates($countryId) {
     try {
       $query = "SELECT id, name FROM states WHERE country_id='".$countryId."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("State not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result))
       {
        //$res[$resultSet['id']] = $resultSet['name'];
           $obj = new stdClass();
        //$res[$resultSet["id"]] = $resultSet['name'];
        $obj->id= $resultSet["id"]; 
        $obj->name = $resultSet['name']; 
        $obj->label = $resultSet["name"]; 
        $obj->value = $resultSet["name"]; 
        array_push($res, $obj);
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"States fetched successfully.", 'result'=>$res);
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }

 // Fetch all cities list by state id
  public static function getCities($stateId) {
     try {
       $query = "SELECT id, name FROM cities WHERE state_id='".$stateId."'";
       $result = dbconfig::run($query);
       if(!$result) {
         throw new exception("City not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        //$res[$resultSet['id']] = $resultSet['name'];
                   $obj = new stdClass();
        //$res[$resultSet["id"]] = $resultSet['name'];
        $obj->id= $resultSet["id"]; 
        $obj->name = $resultSet['name']; 
        $obj->label = $resultSet["name"]; 
        $obj->value = $resultSet["name"]; 
        array_push($res, $obj);
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Cities fetched successfully.", 'result'=>$res);
     } catch (Exception $e) {
       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     } finally {
        return $data;
     }
   }   


}
