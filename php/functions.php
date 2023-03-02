<?php include('server.php');
//$db = mysqli_connect('localhost', 'root', '', 'project');
function getUsersData($id){
    $array=array();
    $q = mysqli_query(mysqli_connect('localhost', 'root', '', 'project'),"SELECT * FROM `users` WHERE `id`='".$id."'");
    while($r=mysqli_fetch_assoc($q)) { 
        $array['id']=$r['id'];
        $array['username']=$r['username']; 
        $array['email']=$r['email'];
        $array['dateob']=$r['dateob']; 
        $array['phone']=$r['phone'];
      }
    return $array;
}
function getId($username) {
    //$q = mysql_query("SELECT `id` FROM `users` WHERE `username`='".$username."'"); 
    $q = mysqli_query(mysqli_connect('localhost', 'root', '', 'project'), "SELECT `id` FROM `users` WHERE `username`='".$username."'");
    //$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	//$results = mysqli_query($db, $query);
    while($r=mysqli_fetch_assoc($q)) { 
        return $r['id'];
    }
}     
?>