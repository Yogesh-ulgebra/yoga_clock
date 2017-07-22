<!DOCTYPE html>
<html>
    <head>
        <title>your page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newhtml1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div id="ttt">
 kooooooooooooooooooooooooooooooooooooollllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk 
</div>
        <div class="page_outer">
            <div class="page_inner">
                <div class="page_top">
                    <div class="page_tittle">
                        Daily Progress
                    </div>
                </div>
                <div class="page_middle">
                    <div class="today_your">
                        <div class="ty_head">
                                    <div class="ty_your_name">
                                    <?php
                                    
                                        
                                    
                                    ?>
                                </div>
                                <div class="ty_logout">
                                    <form action="newhtml.html" method="get">
                                        <button class="ty_log_butt">Logout</button>
                                    </form>
                                    
                                </div>
                                <div class="ty_date">
                                  <?php  echo "Date : " .date("h:i:sa"); ?>
                                </div>
                            
                        </div>
                        
                        <div class="ty_outer">
                            <div class="ty_inner">
                                
                                
                                <div class="ty_today">
                                    <div class="ty_today_your">
                                        some thing about you
                                    </div>
                                    <div class="ty_text">
                                    <form action="newphp.php" method="POST" id="form">
                                        
                                        <textarea name="message" class="ty_comments" placeholder="Enter your comments..." wrap="hard"></textarea>
                                        
                                        <button id="message_send">ok
<div id="save_style1"></div>
                                        <div id="save_style2"></div>
                                        </button>

                                    </form>
                                        
                                    </div>
                                </div>
                                <div class="ty_past">
                                    
                                    <?php 

session_start();

$id = $_SESSION['main_user_id'];

$dbc=new mysqli('localhost','root','','yoga');

$q1="SELECT * from reg_message where id='$id' ";
$r1=mysqli_query($dbc,$q1);

if($r1){
               ?>
<table id="past_view">  
<tr>
<td id="date">date</td>
<td id="message">message</td>
</tr>

<?php
while ($row=mysqli_fetch_array($r1,MYSQLI_ASSOC)) {
            
?>
       
<tr>
<td id="date"> <pre><?php echo $row['date'];  ?> </pre> </td>
<td id="message"><pre> <?php echo $row['message'];  ?> </pre> </td>
</tr>

<?php

}

?>
</table>
<?php    

}

?>


                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
