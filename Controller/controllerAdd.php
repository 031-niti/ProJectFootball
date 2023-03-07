<?php 
  //สร้างตัวแปร
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $team = $_POST['team'];
  $position = $_POST['position'];
  $image = $_POST['image'];
  $detail_user = $_POST['detail_user'];


    $data=array();
    $data["first_name"]=$first_name;
    $data["last_name"]=$last_name;
    $data["team"]=$team;
    $data["position"]=$position;
    $data["image"]=$image;
    $data["detail_user"]=$detail_user;
    
    include_once "../model/ConDB.php";
    include_once "../model/Course.php";
    $obj_name=new Team();
    $rs2= $obj_name->Add($data);


?>