<?php include 'includes/config.php';?>
<?php

if(isset($_GET['day']))
{//show the selected day
    $myDay = $_GET['day'];

}else{//show today
    $myDay = date('l');
}
 
//die;

//$myDay = date('l');
$myPic = '';

//TESTING - DELETE THIS LINE BELOW
//$myDay = "Tuesday";
switch($myDay)
{

    case 'Monday':
        $myPic = "pumpkin-spice-latte.jpg";
        break;
        
    case 'Tuesday':    
        $myPic = "iced-coffee.jpg";
        break;
}



//die;
?>

<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>

<img src="images/<?=$myPic?>" alt="Our Pumpkin Spice Latte tastes great on a Fall Day!" id="coffee" />
<p><strong class="feature"><?=$myDay?>'s Coffee Special:</strong></p>

<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>















<?php include 'includes/footer.php';?>