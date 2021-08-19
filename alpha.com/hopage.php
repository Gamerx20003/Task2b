<html>
 <head>
  <title>MoMs.local</title>

  <style>
  
  body{
  background-image: url('https://imgur.com/9kxK55p.png')
  }
 table { text-align: center;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 10px;
}

 th {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #04AA6D;
  color: white;
}
 tr:nth-child(even){background-color: white;}
 tr:nth-child(odd){background-color: #faebd7;}

 tr:hover {background-color: yellow;}
 
 #sub{
     color: black;
     position: absolute;
     top:900px;
     right:100px;
     font-size:20px
     }

 #sub12{
     color: black;
     position: absolute;
     top:900px;
     right:200px;
     font-size:20px
     }
</style>
</head>

<body>
 <form action="http://localhost/logoutpage.php">
    <input type="submit" value="Logout" id="sub">
    </form> 
 <form action="http://localhost/creatMOM.php">
 <input type="submit" value="Enter MoM? click here" id="sub12">
 </form>
 <?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "rootpass";
         $dbname = "MOMdb";
         $port = "3000";
         
         $tab = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);
         
         if($tab->connect_error) {
            die("Connect failed:" . $tab->connect_error);
         }
         
         $samp="SELECT * FROM MoM";
         $op=$tab->query($samp);
         
         if($op->num_rows > 0){
            echo "The MOMs entered are as follows:-";
            echo "<br><table><tr><th>username</th><th>date</th><th>MoM</th><th>MoMer</th></tr>";
         
            while($row = $op->fetch_assoc()) {
               echo "<tr><td>".$row["user"]."</td><td>".$row["date"]."</td><td>".$row["MoM"]."</td><td>".$row["MoMer"]."</td></tr>";
            }  
            echo "</table>";
            }
         else{
            echo "NO such DB";
         }
         
         $mysqli->close();
 ?>
</body>
</html>
