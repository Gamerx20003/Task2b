<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
   <title>MOM page</title>    
</head>   
<body>

 <h1 id="topline">Welcome to the AlphaQ server Add MOM page!</h1>
 
 <form method="post" id="ntag" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname1"><br><br><br>
  Date: <input type="text" name="fdate1"><br><br><br>
  MOM:<textarea type="text" name="MOM" id="MOMtag"></textarea><br><br><br>
  <input type="submit">
</form>

 <?php
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "rootpass";
    $dbname = "MOMdb";
    $port = "3306";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name1 = $_REQUEST['fname1'];
       $date1 = $_REQUEST['fdate1'];
       $MOM = $_REQUEST['MOM'];           
         
         try{
         $tab = new PDO('mysql:dbhost=$dbhost;port=$port;dbname=MOMdb', $dbuser, $dbpass);
         $tab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         $sql = "INSERT INTO MoM (user,date,MoMer,MoM) VALUES ('$name1','$date1','$name1','$MOM')";
         $tab->exec($sql);
         
         header("Location: http://localhost/hopage.php");
         }
         catch(PDOException $error) {

            echo $sql . "<br>" . $error->getMessage();
      }     
     $tab=null;
    } 
    ?> 
  
</body>
<style>
     body{
     background-image: url('https://imgur.com/ABsPMOd.png')
     }
     #topline{
       text-align: center;
       color: black;
      }
      
      #ntag{
       text-align: center;
       color: black;
       font-size: 20px;
       position: absolute;
       right:850px;
       top:200px;
      }
      #MOMtag{
      width:300px;
      height:250px;
      word-wrap: break-word;
      }
</style>

</html>
