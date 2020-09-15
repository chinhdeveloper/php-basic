<?php 

  function methoadPost(){
      if(empty($_POST['fname'])||empty($_POST['age'])||empty($_POST['address'])){
            return false ;
      }
          $addStudent = array ("frame"=>$_POST['fname'],"age"=>$_POST['age'],"address"=>$_POST['address']);
          return $addStudent;

    
  }