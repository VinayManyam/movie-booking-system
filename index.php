<?php include 'data.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Movie Rating</title>
    </head>
    <script type="text/javascript">
     i=0;  
function load(){
    
        scity=document.getElementById("scity");
         scinnema=document.getElementById("scinnema");
         smovie=document.getElementById("smovie");
         stime=document.getElementById("stime");
         sclass=document.getElementById("sclass");
         sno=document.getElementById("sno");
         sbill=document.getElementById("sbill");
         state=document.getElementById("display");
         movie1= document.getElementById("movie");
       cinnema= document.getElementById("cinnema"); 
     city= document.getElementById("city");
     time1=document.getElementById("time");
     classs=document.getElementById("class1");
     seate=document.getElementById("seate");
     fname=document.getElementById('fname');
          iname=document.getElementById("iname");
     ipic=document.getElementById("ipic");
     irate=document.getElementById("irate");
     idisc=document.getElementById("idisc");
     itime=document.getElementById("itime");
     igenres=document.getElementById("igenres");
     idirect=document.getElementById("idirect");
     idate=document.getElementById("idate");
      rcity=document.getElementById("rcity");
         rcinnema=document.getElementById("rcinnema");
         rmovie=document.getElementById("rname");
         rtime=document.getElementById("rtime");
         rclass=document.getElementById("rclass");
         rno=document.getElementById("rno");
         rbill=document.getElementById("rbill");
         rbtn=document.getElementById("rbtn");
       
       
     mov=<?php echo json_encode($mlist);?>;
     arr=<?php echo json_encode($arr);?>;
     movlist=<?php echo json_encode($movlist);?>;
    // alert(movlist['The Shawshank Redemption']['mname']);
             
               for(var i=0;i<arr.length;i++){
               var x = document.createElement("option");
               x.value=arr[i];
               x.text=arr[i];
          city.appendChild(x);
      }
    }
    
function cin(){
      var hyd=<?php echo json_encode($hyd);?>;
 var ban=<?php echo json_encode($ban);?>;
 var mob=<?php echo json_encode($mob);?>;
 time1.innerHTML='';
 movie1.innerHTML=''; 
 cinnema.innerHTML=''; 
 classs.innerHTML='';
 seate.innerHTML='';
 
 
 if(city.value!='select city'){
 state.style.display="block";
 rcity.style.display="block";
 }
 else{
    state.style.display="none";
 rcity.style.display="none";  
 }
 
 rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 rclass.style.display="none";
 rtime.style.display="none";
 rname.style.display="none";
 rcinnema.style.display="none";
  scity.innerHTML=city.value;
 switch(city.value)
 {
             case 'Hyderabad':
         cinnema.innerHTML=''; 
           for(var i=0;i<hyd.length;i++){
               var x = document.createElement("option");
               x.value=hyd[i];
               x.text=hyd[i];
          cinnema.appendChild(x);
          }
            break;
            
        case 'bangalore':
          
           for(var i=0;i<ban.length;i++){
               var x = document.createElement("option");
               x.value=ban[i];
               x.text=ban[i];
          cinnema.appendChild(x);
          }
            break;
            
        case 'Mumbai':
         for(var i=0;i<hyd.length;i++){
               var x = document.createElement("option");
               x.value=mob[i];
               x.text=mob[i];
          cinnema.appendChild(x);
          }
            break;
            
            default:
rcinnema.style.display="none";
                  //alert("somethin went wrong");
                break;
 }
     
    }
    
function movie(){
     if(cinnema.value!='select cinnema')
     {
     rcinnema.style.display="block";
     scinnema.innerHTML=cinnema.value;
 }else{
     alert('please select cinnema');
   rcinnema.style.display="none";  
 }
      rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 rclass.style.display="none";
 rtime.style.display="none";
 rname.style.display="none";
 
     
     hydm=<?php echo json_encode($hydmov);?>; 
     banm=<?php echo json_encode($bngmov);?>; 
     mumm=<?php echo json_encode($mummov);?>; 
  
  movie1.innerHTML='';
classs.innerHTML='';
seate.innerHTML='';
time1.innerHTML='';
     switch(city.value)
 {
     case 'Hyderabad':
            switch(cinnema.value)
{
    case 'PVRCinemas':
      // //alert(hydm['PVRCinemas'].length);
      //////alert(hydm['PVRCinemas'][1]);
          for(var i=0;i<hydm['PVRCinemas'].length;i++){
               var x = document.createElement("option");
               x.value=hydm['PVRCinemas'][i];
               x.text=hydm['PVRCinemas'][i];
          movie1.appendChild(x);
      }
        break;
        
         case 'Carnival':
         
          for(var i=0;i<hydm['Carnival'].length;i++){
               var x = document.createElement("option");
               x.value=hydm['Carnival'][i];
               x.text=hydm['Carnival'][i];
          movie1.appendChild(x);
      }
        break;   
     case 'Vimal Theater':
         
                for(var i=0;i<hydm['Vimal Theater'].length;i++){
               var x = document.createElement("option");
               x.value=hydm['Vimal Theater'][i];
               x.text=hydm['Vimal Theater'][i];
          movie1.appendChild(x);
      }
        break;  
        
     case 'PVR Cinemas Inorbit Mall':
             for(var i=0;i<hydm['PVR Cinemas Inorbit Mall'].length;i++){
               var x = document.createElement("option");
               x.value=hydm['PVR Cinemas Inorbit Mall'][i];
               x.text=hydm['PVR Cinemas Inorbit Mall'][i];
          movie1.appendChild(x);
      }
         break;
         
         
        case 'Vijetha Movie Hall':
             for(var i=0;i<hydm['Vijetha Movie Hall'].length;i++){
               var x = document.createElement("option");
               x.value=hydm['Vijetha Movie Hall'][i];
               x.text=hydm['Vijetha Movie Hall'][i];
          movie1.appendChild(x);
      }
            break;    
        
        default:
          //alert("select movie");
            break;
} 
            break;
            
            
     case 'bangalore':
            switch(cinnema.value)
{
    case 'Pushpanjali Theatre':
       ////alert(banm['Pushpanjali Theatre'].length);
      //////alert(hydm['PVRCinemas'][1]);
          for(var i=0;i<banm['Pushpanjali Theatre'].length;i++){
               var x = document.createElement("option");
               x.value=banm['Pushpanjali Theatre'][i];
               x.text=banm['Pushpanjali Theatre'][i];
          movie1.appendChild(x);
      }
        break;
        
         case 'HMT Cinema':
         
          for(var i=0;i<banm['HMT Cinema'].length;i++){
               var x = document.createElement("option");
               x.value=banm['HMT Cinema'][i];
               x.text=banm['HMT Cinema'][i];
          movie1.appendChild(x);
      }
        break;   
     case 'Rex Theatre':
         
                for(var i=0;i<banm['Rex Theatre'].length;i++){
               var x = document.createElement("option");
               x.value=banm['Rex Theatre'][i];
               x.text=banm['Rex Theatre'][i];
          movie1.appendChild(x);
      }
        break;  
        
     case 'PVR':
             for(var i=0;i<banm['PVR'].length;i++){
               var x = document.createElement("option");
               x.value=banm['PVR'][i];
               x.text=banm['PVR'][i];
          movie1.appendChild(x);
      }
         break;
         
         
        case 'Poornima Theatre':
             for(var i=0;i<banm['Poornima Theatre'].length;i++){
               var x = document.createElement("option");
               x.value=banm['Poornima Theatre'][i];
               x.text=banm['Poornima Theatre'][i];
          movie1.appendChild(x);
      }
            break;    
        
           case 'PVR Cinemas':
             for(var i=0;i<banm['PVR Cinemas'].length;i++){
               var x = document.createElement("option");
               x.value=banm['PVR Cinemas'][i];
               x.text=banm['PVR Cinemas'][i];
          movie1.appendChild(x);
      }
            break; 
        
        
        
        
        
        default:
          //alert("select movie");
            break;
} 
            break;       
            
     case 'Mumbai':
            switch(cinnema.value)
{
    case 'Eros Cinema':
       //alert(mumm['Eros Cinema'].length);
      //////alert(hydm['PVRCinemas'][1]);
          for(var i=0;i<mumm['Eros Cinema'].length;i++){
               var x = document.createElement("option");
               x.value=mumm['Eros Cinema'][i];
               x.text=mumm['Eros Cinema'][i];
          movie1.appendChild(x);
      }
        break;
        
         case 'Regal Cinema':
         
          for(var i=0;i<mumm['Regal Cinema'].length;i++){
               var x = document.createElement("option");
               x.value=mumm['Regal Cinema'][i];
               x.text=mumm['Regal Cinema'][i];
          movie1.appendChild(x);
      }
        break;   
     case 'Sterling Cineplex':
         
                for(var i=0;i<mumm['Sterling Cineplex'].length;i++){
               var x = document.createElement("option");
               x.value=mumm['Sterling Cineplex'][i];
               x.text=mumm['Sterling Cineplex'][i];
          movie1.appendChild(x);
      }
        break;  
        case 'New Excelsior Mukta Cinema':
             for(var i=0;i<mumm['New Excelsior Mukta Cinema'].length;i++){
               var x = document.createElement("option");
               x.value=mumm['New Excelsior Mukta Cinema'][i];
               x.text=mumm['New Excelsior Mukta Cinema'][i];
          movie1.appendChild(x);
      }
            break;    
        
           case 'Capitol Cinema':
             for(var i=0;i<mumm['Capitol Cinema'].length;i++){
               var x = document.createElement("option");
               x.value=mumm['Capitol Cinema'][i];
               x.text=mumm['Capitol Cinema'][i];
          movie1.appendChild(x);
      }
            break; 
        default:
         // alert("select movie");
            break;
} break;              
       default:
          alert("select cinnema");

            break;     
    
}
 }

function time(){
    
   
    rname.style.display="block";
 smovie.innerHTML=movie1.value;
 rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 rclass.style.display="none";
 rtime.style.display="none";
classs.innerHTML='';
seate.innerHTML='';
time1.innerHTML='';
      movlist=<?php echo json_encode($movlist);?>;
     hydt=<?php echo json_encode($hydt);?>; 
     bant=<?php echo json_encode($bant);?>; 
     mobt=<?php echo json_encode($mobt);?>; 
     
    
  //////alert(typeof(hydt));

switch(movie1.value){
    default:
       //alert(movie1.value);
       alert('hi watch u r code something got wrong');
            break;
   case "The Shawshank Redemption":
      
        iname.innerHTML=movlist['The Shawshank Redemption']['mname'];
        irate.innerHTML=movlist['The Shawshank Redemption']['mrate'];
        idisc.innerHTML=movlist['The Shawshank Redemption']['mdisc'];
        ipic.src=movlist['The Shawshank Redemption']['mpic'];
        fname.innerHTML=movlist['The Shawshank Redemption']['mname'];
        idate.innerHTML=movlist['The Shawshank Redemption']['release'];
        idirect.innerHTML=movlist['The Shawshank Redemption']['director'];
        igenres.innerHTML=movlist['The Shawshank Redemption']['genres'];
        itime.innerHTML=movlist['The Shawshank Redemption']['time'];
       break;
      
      case "Pulp Fiction":
      
        iname.innerHTML=movlist['Pulp Fiction']['mname'];
        irate.innerHTML=movlist['Pulp Fiction']['mrate'];
        idisc.innerHTML=movlist['Pulp Fiction']['mdisc'];
        ipic.src=movlist['Pulp Fiction']['mpic'];
        fname.innerHTML=movlist['Pulp Fiction']['mname'];
                idate.innerHTML=movlist['Pulp Fiction']['release'];
        idirect.innerHTML=movlist['Pulp Fiction']['director'];
        igenres.innerHTML=movlist['Pulp Fiction']['genres'];
        itime.innerHTML=movlist['Pulp Fiction']['time'];
       break;  
       
          case "The Lord of the Rings: The Re":
      
        iname.innerHTML=movlist['The Lord of the Rings: The Re']['mname'];
        irate.innerHTML=movlist['The Lord of the Rings: The Re']['mrate'];
        idisc.innerHTML=movlist['The Lord of the Rings: The Re']['mdisc'];
        ipic.src=movlist['The Lord of the Rings: The Re']['mpic'];
        fname.innerHTML=movlist['The Lord of the Rings: The Re']['mname'];
        idate.innerHTML=movlist['The Lord of the Rings: The Re']['release'];
        idirect.innerHTML=movlist['The Lord of the Rings: The Re']['director'];
        igenres.innerHTML=movlist['The Lord of the Rings: The Re']['genres'];
        itime.innerHTML=movlist['The Lord of the Rings: The Re']['time'];
        
       break;
       
          case "12 Angry Men":
      
        iname.innerHTML=movlist['12 Angry Men']['mname'];
        irate.innerHTML=movlist['12 Angry Men']['mrate'];
        idisc.innerHTML=movlist['12 Angry Men']['mdisc'];
        ipic.src=movlist['12 Angry Men']['mpic'];
        fname.innerHTML=movlist['12 Angry Men']['mname'];
           idate.innerHTML=movlist['12 Angry Men']['release'];
        idirect.innerHTML=movlist['12 Angry Men']['director'];
        igenres.innerHTML=movlist['12 Angry Men']['genres'];
        itime.innerHTML=movlist['12 Angry Men']['time'];
       break;
       
          case "The Dark Knight":
      
        iname.innerHTML=movlist['The Dark Knight']['mname'];
        irate.innerHTML=movlist['The Dark Knight']['mrate'];
        idisc.innerHTML=movlist['The Dark Knight']['mdisc'];
        ipic.src=movlist['The Dark Knight']['mpic'];
        fname.innerHTML=movlist['The Dark Knight']['mname'];
           idate.innerHTML=movlist['The Dark Knight']['release'];
        idirect.innerHTML=movlist['The Dark Knight']['director'];
        igenres.innerHTML=movlist['The Dark Knight']['genres'];
        itime.innerHTML=movlist['The Dark Knight']['time'];
       break;
       
          case "Baby Driver":
      
        iname.innerHTML=movlist['Baby Driver']['mname'];
        irate.innerHTML=movlist['Baby Driver']['mrate'];
        idisc.innerHTML=movlist['Baby Driver']['mdisc'];
        ipic.src=movlist['Baby Driver']['mpic'];
        fname.innerHTML=movlist['Baby Driver']['mname'];
           idate.innerHTML=movlist['Baby Driver']['release'];
        idirect.innerHTML=movlist['Baby Driver']['director'];
        igenres.innerHTML=movlist['Baby Driver']['genres'];
        itime.innerHTML=movlist['Baby Driver']['time'];
       break;
       
          case "Upside Down":
      
        iname.innerHTML=movlist['Upside Down']['mname'];
        irate.innerHTML=movlist['Upside Down']['mrate'];
        idisc.innerHTML=movlist['Upside Down']['mdisc'];
        ipic.src=movlist['Upside Down']['mpic'];
        fname.innerHTML=movlist['Upside Down']['mname'];
           idate.innerHTML=movlist['Upside Down']['release'];
        idirect.innerHTML=movlist['Upside Down']['director'];
        igenres.innerHTML=movlist['Upside Down']['genres'];
        itime.innerHTML=movlist['Upside Down']['time'];
       break;
       
          case "The Godfather":
      
        iname.innerHTML=movlist['The Godfather']['mname'];
        irate.innerHTML=movlist['The Godfather']['mrate'];
        idisc.innerHTML=movlist['The Godfather']['mdisc'];
        ipic.src=movlist['The Godfather']['mpic'];
        fname.innerHTML=movlist['The Godfather']['mname'];
           idate.innerHTML=movlist['The Godfather']['release'];
        idirect.innerHTML=movlist['The Godfather']['director'];
        igenres.innerHTML=movlist['The Godfather']['genres'];
        itime.innerHTML=movlist['The Godfather']['time'];
       break;
       
        case "select movie":
            rname.style.display="none";
            alert("please select a movie");
               iname.innerHTML=movlist['Upside Down']['mname'];
        irate.innerHTML=movlist['Upside Down']['mrate'];
        idisc.innerHTML=movlist['Upside Down']['mdisc'];
        ipic.src=movlist['Upside Down']['mpic'];
        fname.innerHTML=movlist['Upside Down']['mname'];
           idate.innerHTML=movlist['Upside Down']['release'];
        idirect.innerHTML=movlist['Upside Down']['director'];
        igenres.innerHTML=movlist['Upside Down']['genres'];
        itime.innerHTML=movlist['Upside Down']['time'];
       break;
       
       
       
       
       
       
        
}


seate.innerHTML='';

  switch(city.value)
{
case "Hyderabad":
    switch(cinnema.value){
        
    case "PVRCinemas":
  //alert(cinnema.value);
    switch(movie1.value)
    {
        case "The Godfather":
          time1.innerHTML='';
 
         
        for(var i=0;i<hydt['PVRCinemas']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Godfather'][i];
               x.text=hydt['PVRCinemas']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
     
        break;
        
       case "The Shawshank Redemption":

         
        for(var i=0;i<hydt['PVRCinemas']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Shawshank Redemption'][i];
               x.text=hydt['PVRCinemas']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
  
         
        for(var i=0;i<hydt['PVRCinemas']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Pulp Fiction'][i];
               x.text=hydt['PVRCinemas']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
    
         
        for(var i=0;i<hydt['PVRCinemas']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
               x.text=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  time1.innerHTML='';

         
        for(var i=0;i<hydt['PVRCinemas']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Dark Knight'][i];
               x.text=hydt['PVRCinemas']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
               time1.innerHTML='';
                 
         
        for(var i=0;i<hydt['PVRCinemas']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Upside Down'][i];
               x.text=hydt['PVRCinemas']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
             time1.innerHTML='';
 
         
        for(var i=0;i<hydt['PVRCinemas']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Baby Driver'][i];
               x.text=hydt['PVRCinemas']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
          time1.innerHTML='';

          
                            
        for(var i=0;i<hydt['PVRCinemas']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['12 Angry Men'][i];
               x.text=hydt['PVRCinemas']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
    break;
    
            case "Vimal Theater":
  //alert(cinnema.value);
    
     switch(movie1.value)
    {
        case "The Godfather":
         
        for(var i=0;i<hydt['Vimal Theater']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vimal Theater']['The Godfather'][i];
               x.text=hydt['Vimal Theater']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");

        break;
        
                case "The Shawshank Redemption":
         
        for(var i=0;i<hydt['Vimal Theater']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vimal Theater']['The Shawshank Redemption'][i];
               x.text=hydt['Vimal Theater']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
                case "Pulp Fiction":
                  //alert('pulp fiction');
         
        for(var i=0;i<hydt['Vimal Theater']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vimal Theater']['Pulp Fiction'][i];
               x.text=hydt['Vimal Theater']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
        
              
        
        
               case "The Lord of the Rings: The Re":
         
        for(var i=0;i<hydt['PVRCinemas']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
               x.text=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
         
        for(var i=0;i<hydt['PVRCinemas']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Dark Knight'][i];
               x.text=hydt['PVRCinemas']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                
         
        for(var i=0;i<hydt['PVRCinemas']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Upside Down'][i];
               x.text=hydt['PVRCinemas']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
                
         
        for(var i=0;i<hydt['PVRCinemas']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Baby Driver'][i];
               x.text=hydt['PVRCinemas']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
                
         
        for(var i=0;i<hydt['PVRCinemas']['12 Angry Men '].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['12 Angry Men'][i];
               x.text=hydt['PVRCinemas']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
    break;
    
    
       case "Vijetha Movie Hall":
  //alert(cinnema.value);
  
   
    switch(movie1.value)
    {
        case "The Godfather":
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['The Godfather'][i];
               x.text=hydt['Vijetha Movie Hall']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
                case "The Shawshank Redemption":
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['The Shawshank Redemption'][i];
               x.text=hydt['Vijetha Movie Hall']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
              //alert("error getting");
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['Pulp Fiction'][i];
               x.text=hydt['Vijetha Movie Hall']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
        
              
        
        
               case "The Lord of the Rings: The Re":
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['The Lord of the Rings: The Re'][i];
               x.text=hydt['Vijetha Movie Hall']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['The Dark Knight'][i];
               x.text=hydt['Vijetha Movie Hall']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['Upside Down'][i];
               x.text=hydt['Vijetha Movie Hall']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
                
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['Baby Driver'][i];
               x.text=hydt['Vijetha Movie Hall']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
                
         
        for(var i=0;i<hydt['Vijetha Movie Hall']['12 Angry Men '].length;i++){
               var x = document.createElement("option");
               x.value=hydt['Vijetha Movie Hall']['12 Angry Men'][i];
               x.text=hydt['Vijetha Movie Hall']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
    break;
    
       case "PVR Cinemas Inorbit Mall":
  //alert(cinnema.value);
    switch(movie1.value)
    {
        case "The Godfather":
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['The Godfather'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       
        break;
        
                case "The Shawshank Redemption":
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['The Shawshank Redemption'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['The Shawshank Redemption'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
              
        
        
               case "The Lord of the Rings: The Re":
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['The Lord of the Rings: The Re'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['The Dark Knight'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['Upside Down'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
                
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['Baby Driver'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
                
         
        for(var i=0;i<hydt['PVR Cinemas Inorbit Mall']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVR Cinemas Inorbit Mall']['12 Angry Men'][i];
               x.text=hydt['PVR Cinemas Inorbit Mall']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
    break;
    
       case "Carnival":
  //alert(cinnema.value);
    switch(movie1.value)
    {
        case "The Godfather":
         
        for(var i=0;i<hydt['PVRCinemas']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Godfather'][i];
               x.text=hydt['PVRCinemas']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
                case "The Shawshank Redemption":
         
        for(var i=0;i<hydt['PVRCinemas']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Shawshank Redemption'][i];
               x.text=hydt['PVRCinemas']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
         
        for(var i=0;i<hydt['PVRCinemas']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Shawshank Redemption'][i];
               x.text=hydt['PVRCinemas']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
              
        
        
               case "The Lord of the Rings: The Re":
         
        for(var i=0;i<hydt['PVRCinemas']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
               x.text=hydt['PVRCinemas']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
         
        for(var i=0;i<hydt['PVRCinemas']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['The Dark Knight'][i];
               x.text=hydt['PVRCinemas']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                
         
        for(var i=0;i<hydt['PVRCinemas']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Upside Down'][i];
               x.text=hydt['PVRCinemas']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
                
         
        for(var i=0;i<hydt['PVRCinemas']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['Baby Driver'][i];
               x.text=hydt['PVRCinemas']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
                
         
        for(var i=0;i<hydt['PVRCinemas']['12 Angry Men '].length;i++){
               var x = document.createElement("option");
               x.value=hydt['PVRCinemas']['12 Angry Men'][i];
               x.text=hydt['PVRCinemas']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
    break;
    
    default:
  //alert('////alert');
        }
        break;
        
        
case "bangalore": 
    time1.innerHTML='';
  //alert('bangalore');
    switch(cinnema.value)
    {
        case "Pushpanjali Theatre":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
        
        for(var i=0;i<bant['Pushpanjali Theatre']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['The Godfather'][i];
               x.text=bant['Pushpanjali Theatre']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
       
        break;
        
       case "The Shawshank Redemption":
          
        
        for(var i=0;i<bant['Pushpanjali Theatre']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['The Shawshank Redemption'][i];
               x.text=bant['Pushpanjali Theatre']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
        
        for(var i=0;i<bant['Pushpanjali Theatre']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['Pulp Fiction'][i];
               x.text=bant['Pushpanjali Theatre']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
        
        for(var i=0;i<bant['Pushpanjali Theatre']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['The Lord of the Rings: The Re'][i];
               x.text=bant['Pushpanjali Theatre']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
        
        for(var i=0;i<bant['Pushpanjali Theatre']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['The Dark Knight'][i];
               x.text=bant['Pushpanjali Theatre']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
        
        for(var i=0;i<bant['Pushpanjali Theatre']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['Upside Down'][i];
               x.text=bant['Pushpanjali Theatre']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
        
        for(var i=0;i<bant['Pushpanjali Theatre']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['Baby Driver'][i];
               x.text=bant['Pushpanjali Theatre']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['Pushpanjali Theatre']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Pushpanjali Theatre']['12 Angry Men'][i];
               x.text=bant['Pushpanjali Theatre']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
      
       case "HMT Cinema":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
         
        for(var i=0;i<bant['HMT Cinema']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['The Godfather'][i];
               x.text=bant['HMT Cinema']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<bant['HMT Cinema']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['The Shawshank Redemption'][i];
               x.text=bant['HMT Cinema']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<bant['HMT Cinema']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['Pulp Fiction'][i];
               x.text=bant['HMT Cinema']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<bant['HMT Cinema']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['The Lord of the Rings: The Re'][i];
               x.text=bant['HMT Cinema']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<bant['HMT Cinema']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['The Dark Knight'][i];
               x.text=bant['HMT Cinema']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<bant['HMT Cinema']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['Upside Down'][i];
               x.text=bant['HMT Cinema']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<bant['HMT Cinema']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['Baby Driver'][i];
               x.text=bant['HMT Cinema']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['HMT Cinema']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['HMT Cinema']['12 Angry Men'][i];
               x.text=bant['HMT Cinema']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
      
       case "Rex Theatre":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['The Godfather'][i];
               x.text=bant['Rex Theatre']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['The Shawshank Redemption'][i];
               x.text=bant['Rex Theatre']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['Pulp Fiction'][i];
               x.text=bant['Rex Theatre']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['The Lord of the Rings: The Re'][i];
               x.text=bant['Rex Theatre']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['The Dark Knight'][i];
               x.text=bant['Rex Theatre']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['Upside Down'][i];
               x.text=bant['Rex Theatre']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         //////alert(bant['Rex Theatre']['The Godfather'].length);
        for(var i=0;i<bant['Rex Theatre']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['Baby Driver'][i];
               x.text=bant['Rex Theatre']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['Rex Theatre']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Rex Theatre']['12 Angry Men'][i];
               x.text=bant['Rex Theatre']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
      
       case "PVR":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
         
        for(var i=0;i<bant['PVR']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['The Godfather'][i];
               x.text=bant['PVR']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<bant['PVR']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['The Shawshank Redemption'][i];
               x.text=bant['PVR']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<bant['PVR']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['Pulp Fiction'][i];
               x.text=bant['PVR']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<bant['PVR']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['The Lord of the Rings: The Re'][i];
               x.text=bant['PVR']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<bant['PVR']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['The Dark Knight'][i];
               x.text=bant['PVR']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<bant['PVR']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['Upside Down'][i];
               x.text=bant['PVR']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<bant['PVR']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['Baby Driver'][i];
               x.text=bant['PVR']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['PVR']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR']['12 Angry Men'][i];
               x.text=bant['PVR']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
        
         case "Poornima Theatre":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
         
        for(var i=0;i<bant['Poornima Theatre']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['The Godfather'][i];
               x.text=bant['Poornima Theatre']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<bant['Poornima Theatre']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['The Shawshank Redemption'][i];
               x.text=bant['Poornima Theatre']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<bant['Poornima Theatre']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['Pulp Fiction'][i];
               x.text=bant['Poornima Theatre']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<bant['Poornima Theatre']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['The Lord of the Rings: The Re'][i];
               x.text=bant['Poornima Theatre']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<bant['Poornima Theatre']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['The Dark Knight'][i];
               x.text=bant['Poornima Theatre']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<bant['Poornima Theatre']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['Upside Down'][i];
               x.text=bant['Poornima Theatre']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<bant['Poornima Theatre']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['Baby Driver'][i];
               x.text=bant['Poornima Theatre']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['Poornima Theatre']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['Poornima Theatre']['12 Angry Men'][i];
               x.text=bant['Poornima Theatre']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
        
         case "PVR Cinemas":
      //alert(cinnema.value);
        switch(movie1.value)
        {
        case "The Godfather":
           
        
        for(var i=0;i<bant['PVR Cinemas']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['The Godfather'][i];
               x.text=bant['PVR Cinemas']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
        
        for(var i=0;i<bant['PVR Cinemas']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['The Shawshank Redemption'][i];
               x.text=bant['PVR Cinemas']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
        
        for(var i=0;i<bant['PVR Cinemas']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['Pulp Fiction'][i];
               x.text=bant['PVR Cinemas']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
        
        for(var i=0;i<bant['PVR Cinemas']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['The Lord of the Rings: The Re'][i];
               x.text=bant['PVR Cinemas']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
        
        for(var i=0;i<bant['PVR Cinemas']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['The Dark Knight'][i];
               x.text=bant['PVR Cinemas']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
        
        for(var i=0;i<bant['PVR Cinemas']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['Upside Down'][i];
               x.text=bant['PVR Cinemas']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
        
        for(var i=0;i<bant['PVR Cinemas']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['Baby Driver'][i];
               x.text=bant['PVR Cinemas']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<bant['PVR Cinemas']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=bant['PVR Cinemas']['12 Angry Men'][i];
               x.text=bant['PVR Cinemas']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
        
    }
        break;
        
      
                default:
                  //alert('something');
                    break;
    }
    break;
    
    
case "Mumbai":
     time1.innerHTML='';
    switch(cinnema.value)
    {    
     case "Eros Cinema":
       switch(movie1.value)
       {
                   case "The Godfather":
           
         
        for(var i=0;i<mobt['Eros Cinema']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['The Godfather'][i];
               x.text=mobt['Eros Cinema']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<mobt['Eros Cinema']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['The Shawshank Redemption'][i];
               x.text=mobt['Eros Cinema']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<mobt['Eros Cinema']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['Pulp Fiction'][i];
               x.text=mobt['Eros Cinema']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<mobt['Eros Cinema']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['The Lord of the Rings: The Re'][i];
               x.text=mobt['Eros Cinema']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<mobt['Eros Cinema']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['The Dark Knight'][i];
               x.text=mobt['Eros Cinema']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<mobt['Eros Cinema']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['Upside Down'][i];
               x.text=mobt['Eros Cinema']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<mobt['Eros Cinema']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['Baby Driver'][i];
               x.text=mobt['Eros Cinema']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<mobt['Eros Cinema']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Eros Cinema']['12 Angry Men'][i];
               x.text=mobt['Eros Cinema']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
     
       }
            break;
 
  case "Regal Cinema":
       switch(movie1.value)
       {
                   case "The Godfather":
           
         
        for(var i=0;i<mobt['Regal Cinema']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['The Godfather'][i];
               x.text=mobt['Regal Cinema']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       classs.innerHTML='';
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<mobt['Regal Cinema']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['The Shawshank Redemption'][i];
               x.text=mobt['Regal Cinema']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<mobt['Regal Cinema']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['Pulp Fiction'][i];
               x.text=mobt['Regal Cinema']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<mobt['Regal Cinema']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['The Lord of the Rings: The Re'][i];
               x.text=mobt['Regal Cinema']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<mobt['Regal Cinema']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['The Dark Knight'][i];
               x.text=mobt['Regal Cinema']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<mobt['Regal Cinema']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['Upside Down'][i];
               x.text=mobt['Regal Cinema']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<mobt['Regal Cinema']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['Baby Driver'][i];
               x.text=mobt['Regal Cinema']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<mobt['Regal Cinema']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Regal Cinema']['12 Angry Men'][i];
               x.text=mobt['Regal Cinema']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
     
       }
            break;

 case "Sterling Cineplex":
       switch(movie1.value)
       {
                   case "The Godfather":
           
        
        for(var i=0;i<mobt['Sterling Cineplex']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['The Godfather'][i];
               x.text=mobt['Sterling Cineplex']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       
        break;
        
       case "The Shawshank Redemption":
          
        
        for(var i=0;i<mobt['Sterling Cineplex']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['The Shawshank Redemption'][i];
               x.text=mobt['Sterling Cineplex']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
        
        for(var i=0;i<mobt['Sterling Cineplex']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['Pulp Fiction'][i];
               x.text=mobt['Sterling Cineplex']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
        
        for(var i=0;i<mobt['Sterling Cineplex']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['The Lord of the Rings: The Re'][i];
               x.text=mobt['Sterling Cineplex']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
        
        for(var i=0;i<mobt['Sterling Cineplex']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['The Dark Knight'][i];
               x.text=mobt['Sterling Cineplex']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
        
        for(var i=0;i<mobt['Sterling Cineplex']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['Upside Down'][i];
               x.text=mobt['Sterling Cineplex']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
        
        for(var i=0;i<mobt['Sterling Cineplex']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['Baby Driver'][i];
               x.text=mobt['Sterling Cineplex']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
          
        for(var i=0;i<mobt['Sterling Cineplex']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Sterling Cineplex']['12 Angry Men'][i];
               x.text=mobt['Sterling Cineplex']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
     
       }
            break;

    case "Capitol Cinema":
       switch(movie1.value)
       {
                   case "The Godfather":
           
        
        for(var i=0;i<mobt['Capitol Cinema']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['The Godfather'][i];
               x.text=mobt['Capitol Cinema']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       
        break;
        
       case "The Shawshank Redemption":
          
        
        for(var i=0;i<mobt['Capitol Cinema']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['The Shawshank Redemption'][i];
               x.text=mobt['Capitol Cinema']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
        
        for(var i=0;i<mobt['Capitol Cinema']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['Pulp Fiction'][i];
               x.text=mobt['Capitol Cinema']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
        
        for(var i=0;i<mobt['Capitol Cinema']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['The Lord of the Rings: The Re'][i];
               x.text=mobt['Capitol Cinema']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
        
        for(var i=0;i<mobt['Capitol Cinema']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['The Dark Knight'][i];
               x.text=mobt['Capitol Cinema']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
        
        for(var i=0;i<mobt['Capitol Cinema']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['Upside Down'][i];
               x.text=mobt['Capitol Cinema']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
        
        for(var i=0;i<mobt['Capitol Cinema']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['Baby Driver'][i];
               x.text=mobt['Capitol Cinema']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
          
        for(var i=0;i<mobt['Capitol Cinema']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['Capitol Cinema']['12 Angry Men'][i];
               x.text=mobt['Capitol Cinema']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
     
       }
            break;
            
            
     case "New Excelsior Mukta Cinema":
       switch(movie1.value)
       {
                   case "The Godfather":
           
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['The Godfather'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['The Godfather'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['The Godfather'][i];
          time1.appendChild(x);}
        break;
        
        case "select movie":
       //alert("please selcet time");
       
        break;
        
       case "The Shawshank Redemption":
          
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['The Shawshank Redemption'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['The Shawshank Redemption'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['The Shawshank Redemption'][i];
          time1.appendChild(x);}
        break;
        
        
            case "Pulp Fiction":
               
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['Pulp Fiction'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['Pulp Fiction'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['Pulp Fiction'][i];
          time1.appendChild(x);}
        break;
       case "The Lord of the Rings: The Re":
                  
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['The Lord of the Rings: The Re'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['The Lord of the Rings: The Re'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['The Lord of the Rings: The Re'][i];
          time1.appendChild(x);}
        break;
        
               case "The Dark Knight":
                  
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['The Dark Knight'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['The Dark Knight'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['The Dark Knight'][i];
          time1.appendChild(x);}
        break;
       
       
              case "Upside Down":
                                 
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['Upside Down'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['Upside Down'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['Upside Down'][i];
          time1.appendChild(x);}
        break;
        
        
        
       case "Baby Driver":
               
         
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['Baby Driver'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['Baby Driver'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['Baby Driver'][i];
          time1.appendChild(x);}
        break;
        
      case "12 Angry Men":
           
        for(var i=0;i<mobt['New Excelsior Mukta Cinema']['12 Angry Men'].length;i++){
               var x = document.createElement("option");
               x.value=mobt['New Excelsior Mukta Cinema']['12 Angry Men'][i];
               x.text=mobt['New Excelsior Mukta Cinema']['12 Angry Men'][i];
          time1.appendChild(x);}
        break; 
        
        
        
     
       }
            break;           
    }
    break;

default:
    rclass.style.display="none";
    
////alert("please select a movie");
break;

}
   
}

function class1(){
    if(time1.value=='select time'){
      seate.innerHTML='';
      classs.innerHTML='';
       rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 rclass.style.display="none";
 rtime.style.display="none";
 alert('please select time');
    }else{
    rtime.style.display="block";
    stime.innerHTML=time1.value;
    rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 rclass.style.display="none";

        classs.innerHTML='';
    seate.innerHTML='';
         var x = document.createElement("option");
               x.value='please select class';
               x.innerHTML="Select Class";
          classs.appendChild(x);
          
        var x = document.createElement("option");
               x.value='Platinum';
               x.innerHTML="Platinum &nbsp &#8377 250/-";
          classs.appendChild(x);
          
     var x = document.createElement("option");
               x.value='Gold';
               x.innerHTML="Gold &nbsp &nbsp &nbsp &nbsp &#8377 200/-";
          classs.appendChild(x); 
     var x = document.createElement("option");
               x.value='Silver';
               x.innerHTML="Silver &nbsp &nbsp &nbsp &#8377 150/-";
          classs.appendChild(x);
    
        var x = document.createElement("option");
               x.value='Normal';
               x.innerHTML="Normal &nbsp &nbsp &#8377 100/-";
          classs.appendChild(x);
    
}
}
function seates(){
    if(classs.value!='please select class'){
 rclass.style.display="block";
 sclass.innerHTML=classs.value;
 rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
  seate.innerHTML='';
    var x = document.createElement("option");
               x.value=0;
               x.innerHTML="Seats";
          seate.appendChild(x);
          
        var x = document.createElement("option");
               x.value=1;
               x.innerHTML=1;
          seate.appendChild(x);
          
         var x = document.createElement("option");
               x.value=2;
               x.innerHTML=2;
          seate.appendChild(x);
          
        var x = document.createElement("option");
               x.value=3;
               x.innerHTML=3;
          seate.appendChild(x);
          
          var x = document.createElement("option");
               x.value=4;
               x.innerHTML=4;
          seate.appendChild(x);
          
        var x = document.createElement("option");
               x.value=5;
               x.innerHTML=5;
          seate.appendChild(x);
   
        
        
        }else{
          alert('class is empty');
 rno.style.display="none";
 rclass.style.display="none"; 
 seate.innerHTML='';
  rbtn.style.display="none";
 rbill.style.display="none";
 

      }
   
}

function bill(){
    if(seate.value!=0)
    {
    var count=parseInt(seate.value);
    var bill=0;
   rbtn.style.display="block";
  rbill.style.display="block";
    rno.style.display="block";
        switch(classs.value){
       case 'Platinum':
          // alert('hi');
       bill=count*250;
       break;
         case 'Gold':
       bill=count*200;
       break;
          case 'Silver':
       bill=count*150;
       break;
       
        case 'Normal':
       bill=count*100;
       break;
       
       default:

 
                break;
           
   }
   
   
    sno.innerHTML=seate.value;
    
    sbill.innerHTML="&#8377 "+bill+"/-";
  
        }else{
                       alert('Please select no of seats');
 rbtn.style.display="none";
 rbill.style.display="none";
 rno.style.display="none";
 seate.innerHTML='';
        }
    
}

function conform(){
    alert("hellow javascript");
}

function nlist(){

     if(i<mov.length-1){
         i++;
         listmov();
        }else{
            i=1;
            listmov();
        }
}
function blist(){
    //alert('list');
     
     //alert(count(movies));
     if(i>2){
         i--;
         listmov();
        }else{
            i=mov.length-1;
            listmov();
        }
}
function listmov(){
    // alert('iam in list');
           iname.innerHTML=mov[i]['mname'];
        irate.innerHTML=mov[i]['mrate'];
        idisc.innerHTML=mov[i]['mdisc'];
        ipic.src=mov[i]['mpic'];
        fname.innerHTML=mov[i]['mname'];
        idate.innerHTML=mov[i]['release'];
        idirect.innerHTML=mov[i]['director'];
        igenres.innerHTML=mov[i]['genres'];
        itime.innerHTML=mov[i]['time']; 
    
}
    </script>
    <body onload="load()" bgcolor="green">
        <div align="center">
            <table><tr><td><select id="city" onchange="cin()"></select></td>
                    <td><select id="cinnema" onchange="movie()"></select></td>
                <td> <select id="movie" onchange="time()"></select></td>
                <td><select id="time" onchange="class1()"></select></td>
                <td><select id="class1" onchange="seates()"></select></td>
                <td><select id="seate" onchange="bill()"></select></td>
                
                <tr></table>
           
        </div>

            <div id="slide" align="center">
                    <table width="1300" height="600" frame="box" bgcolor="white">
                        <tr><td width="850" height="600">
                            <table width="850" hight="600"><tr>
                                <td width="300" height="500">
                                    <figure align="center">
                                        <img src="6.jpg" width="300" height="500" id="ipic">
                                    <figcaption id="fname">Upside Down</figcaption>
                                    </figure>
                                
                                </td>                                  
                                <td valign="top" width="500">
                                
                                            <table cellpadding="10">
                                                <caption><font color="green" size="4"><b>Movie Information</b></font></caption>
                                                  <tr><td>Name:</td><td id="iname">Upside Down</td></tr>
                                                    <tr><td width="100">Rating:</td><td id="irate" width="500">8.8/10</td></tr>
                                                    <tr><td width="100">Duration:</td><td id="itime" width="500">1h 54min</td></tr>
                                                    <tr><td width="100">Release:</td><td id="idate" width="500"> 1 May 2013</td></tr>
                                                    <tr ><td width="100">Genres:</td><td id="igenres" width="500"> Drama, Fantasy, Romance</td></tr>
                                                    <tr><td width="100">Director:</td><td id="idirect" width="500">Juan Solanas</td></tr>
                                                    <tr height="200" valign="top"><td>Description:</td><td  id="idisc">The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.</td></tr>
                                               <tr><td><input type="button" value="Back" onclick="blist()"></td><td><input type="button" value="Next" onclick="nlist()"></td></tr>
                                        </table>
                                        
                                        
                                </td>
                                    </tr>
                            </table>
                      
                            </td>
                                <td valign="top">
                                    <br>
                                     <table cellpadding="10"  frame="box" id="display"  style="display:none">
                                                <caption><font color="green" size="4"><b>Selected movie Information</b></font></caption>
                                                 <tr style="display:none" id="rcity"><td width="100">City:</td><td  id="scity"></td></tr>
                                                <tr style="display:none" id="rcinnema"><td width="100">Cinnema:</td><td  id="scinnema"></td></tr>
                                                 <tr style="display:none" id="rname"><td width="100">Movie Name:</td><td id="smovie"></td></tr>   
                                                    <tr style="display:none" id="rtime"><td width="100">Time:</td><td id="stime"></td></tr>
                                                    <tr style="display:none" id="rclass"><td width="100">Class:</td><td id="sclass"></td></tr>
                                                    <tr style="display:none" id="rno"><td width="100">No of seats:</td><td id="sno"></td></tr>
                                                    <tr style="display:none" id="rbill"> <td width="100">Bill:</td><td id="sbill"></td></tr>
                                                    <tr style="display:none" align="center" id="rbtn"><td  collspan="2"><input type="button" value="conform" onclick="conform()"></td></tr>
                                        </table>
                                    
                            </td></tr>
                
                        
                </table>
        </div>
        <div align="center"> &copy vinay manyam 2017</div>
    </body>
</html>

