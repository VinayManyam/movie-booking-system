   <?php
        $con= mysqli_connect("localhost", "root", "", "movies");
        $str="select distinct ccity from cinnema";
        $res= mysqli_query($con,$str);
        $arr=array();
        while($row= mysqli_fetch_assoc($res)){
            
            $arr[]=$row['ccity'];
        }
        $hyd= cinnema("Hyderabad");
        array_unshift($hyd, 'select cinnema');
        $ban= cinnema("bangalore");
        array_unshift($ban, 'select cinnema');
        $mob= cinnema('Mumbai');
        array_unshift($mob, 'select cinnema');
//cinnema from city        
       function cinnema($city){
           $con= mysqli_connect("localhost", "root", "", "movies");
          $str="SELECT cname FROM cinnema WHERE ccity='$city' ";
        $res= mysqli_query($con,$str);
        $arr2=array();
        while($row= mysqli_fetch_assoc($res)){
            
            $arr2[]=$row['cname'];
        }
        return $arr2;
        }
        $mlist=movies1();
        $hydmov=(object)[];
        $hydt=(object)[];
         $bant=(object)[];
         $mpbt=(object)[];
         $bant=cintime('bangalore');
        $hydt=cintime('Hyderabad');
        $mobt=cintime('Mumbai');
               $bngmov=(object)[];
        $mummov=(object)[];
       $hydmov= moviescity('Hyderabad');
    
       $bngmov=moviescity('bangalore');
       $mummov=moviescity('Mumbai');
    $movlist= movielist();
 /* //data sending to main page  
   print_r($bant);
   print_r($hydt);
   print_r($mobt);
   print_r($bngmov);
   print_r($mummov);
   print_r($hydmov);
   print_r($movlist);
   print_r($mlist);
   
   */
   

   
       function movielist(){
    
        $con= mysqli_connect("localhost", "root", "", "movies");
        $str="SELECT *from movies";
        $res= mysqli_query($con,$str);
        $arr2=array();
        $obj=(object)[];
        while($row= mysqli_fetch_assoc($res)){
                      $arr2[$row['mname']]= $row;
                        
        }
        return $arr2;
       // print_r($arr2);
}
       


//print_r($mlist);
function movies1(){
    
             $con= mysqli_connect("localhost", "root", "", "movies");
          $str="SELECT * FROM movies";
        $res= mysqli_query($con,$str);
        $arr2=array();
        
        while($row= mysqli_fetch_assoc($res)){
                       $arr2[]=$row;
                        
        }
        return $arr2;
        
}


 //obj:movies from cinnema  
function moviescity($city){
    
             $con= mysqli_connect("localhost", "root", "", "movies");
          $str="SELECT cname,cid FROM cinnema WHERE ccity='$city' ";
        $res= mysqli_query($con,$str);
        $arr2=array();
        $cid=(object)[];
        while($row= mysqli_fetch_assoc($res)){
                        $cid->$row['cname']=movies($row['cid']);
                        
        }
        return $cid;
        
}
//cintime('Hyderabad');
//obj:time from city
function cintime($city){
    
             $con= mysqli_connect("localhost", "root", "", "movies");
          $str="SELECT cname,cid FROM cinnema WHERE ccity='$city' ";
        $res= mysqli_query($con,$str);
        $arr2=array();
        $cid=(object)[];
       while($row= mysqli_fetch_assoc($res)){
                     $cid->$row['cname']=gcid($row['cid']);
                      // echo "<br>".$row['cid']."<br>";
                       //print_r(gcid($row['cid']));
        }
        //return $cid;
        return $cid;
}

//pid from cid table:con
function movies($cid){
          $con= mysqli_connect("localhost", "root", "", "movies");
          
           $str="SELECT pid FROM con WHERE cid=$cid";
        $res= mysqli_query($con,$str);
        $arr2=array();
        while($row= mysqli_fetch_assoc($res)){
            
            $arr2[]=name($row['pid']);
        }
        return $arr2;
        }
  //movie name from pid in movies              
function name($pid){
            
            $con= mysqli_connect("localhost", "root", "", "movies");
            $str="SELECT mname FROM movies WHERE mid=$pid";
        $res= mysqli_query($con,$str);
        $arr2=array();
        $row= mysqli_fetch_assoc($res);
         
            $arr2=$row['mname'];
        
        return $arr2;
        }

     //print_r(gcid(5));
 //get mid from cid in times        
function gcid($cid){
     $con= mysqli_connect("localhost", "root", "", "movies");
      
      $ter=movies($cid);
      
      array_shift($ter);
          //  print_r($ter);
     // echo count($ter)."<br>";
    //  print_r($ter);
      $arr2=array();
      
    //  echo $ter[$i]."<br>";
         $str="SELECT distinct mid FROM times WHERE cid=$cid";
        
        //for($i=1;$i<count($ter);$i++){
            $res= mysqli_query($con,$str);
        while($row= mysqli_fetch_assoc($res)){
       
       gsid($row['mid'],$cid); 
      //echo " ".$cid."->".$row['mid']."<br>";
       
        $arr2[]=gsid($row['mid'],$cid);
        
        
      }
     // echo count($arr2)." arrlen<br>";
     $result= array_combine($ter, $arr2);
           
      //print_r($result);   
     return $result;   
           
        
        
}  // print_r(gsid(2,2));
//gsid(8,2);
//get sid from cid,mid in times
 function gsid($mid1,$cid1){
     $con= mysqli_connect("localhost", "root", "", "movies");
          
           $str="SELECT distinct sid FROM times WHERE cid=$cid1 and mid=$mid1 order by sid";
        $res= mysqli_query($con,$str);
        $arr2=array();
        
        while($row= mysqli_fetch_assoc($res)){
           // print_r($row); 
         //print_r(gtime($row['sid']));
            $arr2[]= gtime($row['sid']);
       //echo $row['sid']."<br>";
             }
             
        return $arr2;
     
 }  
 //get times from sid in time 
 
 function gtime($sid){
     
          $con= mysqli_connect("localhost", "root", "", "movies");
          
           $str="SELECT time FROM `times` WHERE tid=$sid";
        $res= mysqli_query($con,$str);
        $arr2=array();
        while($row= mysqli_fetch_assoc($res)){
            
            $arr2=$row['time'];
           
        }
        return $arr2;
     
 }
 
        ?>
