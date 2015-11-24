<?php
/**
 * demo_list_pager.php along with demo_view_pager.php provides a sample web application
 *
 * The difference between demo_list.php and demo_list_pager.php is the reference to the 
 * Pager class which processes a mysqli SQL statement and spans records across multiple  
 * pages. 
 *
 * The associated view page, demo_view_pager.php is virtually identical to demo_view.php. 
 * The only difference is the pager version links to the list pager version to create a 
 * separate application from the original list/view. 
 * 
 * @package nmPager
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.02 2011/05/18
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_view_pager.php
 * @see Pager.php 
 * @todo none
 */

require 'includes/config.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
//$sql = "select MuffinName, MuffinID, Price from test_Muffins";

$sql = "select * from test_Customers";

#Fills <title> tag  
$title = 'Customer List/View/Pager';

# END CONFIG AREA ---------------------------------------------------------- 

include 'includes/header.php'; #header must appear before any HTML is printed by PHP
?>
<h3 align="center"><?=THIS_PAGE;?></h3>

<p>This page demonstrates a List/View/Pager web application.</p>
<p>It adds the <b>Pager</b> class to add pagination to our pages.</p>
<p>Take the code from it to enable paging on your pages!</p>
<?php
#reference images for pager
$prev = '<img src="' . VIRTUAL_PATH . 'images/arrow_prev.gif" border="0" />';
$next = '<img src="' . VIRTUAL_PATH . 'images/arrow_next.gif" border="0" />';

#Create a connection
# connection comes first in mysqli (improved) function
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


# Create instance of new 'pager' class
$myPager = new Pager(2,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{#records exist - process
	if($myPager->showTotal()==1){$itemz = "customer";}else{$itemz = "customers";}  //deal with plural
    echo '<div align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</div>';
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<div align="center">
            <a href="' . VIRTUAL_PATH . 'customer_view.php?id=' . (int)$row['CustomerID'] . '">' . dbOut($row['FirstName']) . '</a>
            </div>';
	}
	echo $myPager->showNAV(); # show paging nav, only if enough records	 
}else{#no records
    echo "<div align=center>What! No Customers?  There must be a mistake!!</div>";	
}
@mysqli_free_result($result);
@mysqli_close($iConn);

include 'includes/footer.php';
?>
