<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
              $name=$_REQUEST['name'];
              echo "$name";
              $dbc=new mysqli('localhost','root','','yoga');
	$q1="select name,id_num from reg where name='$name' ";
	$r1=mysqli_query($dbc,$q1);
	if($r1){
		if(mysqli_num_rows($r1)>0){
                    
                    
                    //already regis
			$row=mysqli_fetch_array($r1,MYSQLI_ASSOC);
			$selected=$row['id_num'];
			//if($_SESSION['main_user_id'])
			//{
				echo 'session fetched';
				$_SESSION['main_user_id']=$selected;
				$_SESSION['main_user_name']=$row['name'];
			//	header('location:newhtml1.php');
			//}
			
			$main_user_id=$_SESSION['main_user_id'];

			
                        
			//header('location:crt_grp.php');
                        
			
		}
                else{
                    //regis user
                    
                                                      
        $q="INSERT INTO `yoga`.`reg` (`name`, `id_num`, `date`) VALUES ('$name', '', '');";
        $r=mysqli_query($dbc,$q);
        
        $q1="SELECT name,id_num from reg where name='$name' ";
	    $r1=mysqli_query($dbc,$q1);
                    if($r1){
                    
                    //already regis
			$row=mysqli_fetch_array($r1,MYSQLI_ASSOC);
			$selected=$row['id_num'];
			//if($_SESSION['main_user_id'])
			//{
				
				$_SESSION['main_user_id']=$selected;
				$_SESSION['main_user_name']=$row['name'];
				//header('location:myfriends.php');
			//}
			
			$main_user_id=$_SESSION['main_user_id'];
                        // header('location:newhtml1.php');
			
			//header('location:crt_grp.php');
                                     
                    
                            
			
                    }
        } }
        ?>
    </body>
</html>
