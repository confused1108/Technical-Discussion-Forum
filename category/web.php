<html>
<head>
<title>Welcome to Web Development</title>
<link rel="stylesheet" type="text/css" href="../css/category.css">
<style>
.divigr:hover{
	background-color:#e6f2ff;
	width:60%;
	transition-duration: 0.4s;
	margin-left:25px;
}
.divigr
{
	margin-left:15px;
	width:60%;
}
</style>
</head>
<body>
<?php

include 'nvgbar2.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1>Web Development<span>Dive into the sea of Web Development !!</span></h1>
</center>
</div>
<div class="maimage">
<img src="../images/web_home.png" alt="Web Development" width="100%" height="340px" style="display: block;
    margin: auto;">
</div>
<br>
<br>
<div class="description">
<i>Web development is the coding or programming that enables website functionality, per the owner's requirements. It mainly deals with the non-design aspect of building websites, which includes coding and writing markup.
<br>
Web development ranges from creating plain text pages to complex Web-based applications, social network applications and electronic business applications.</i>
</div>
<div>
<center>
<p style="color:White; font-size:300%; font-family:verdana; background-color:powderblue;">Latest Discussions</p>
</center>
</div>
<?php
include "../connect.php";
//echo "<p>Latest Discussion<p>";
$cat='web';
 $query = mysqli_query($connection,"SELECT * FROM topics WHERE topic_cat='$cat' ORDER BY topic_date DESC ");
//$result = mysql_query($query);
//$numrows = mysql_num_rows($sql);

if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysqli_fetch_array($query))
	{
		$by=$row['topic_by'];
		$date=$row['topic_date'];
		$sub=$row['topic_subject'];
		$id=$row['topic_id'];
		echo "<div style:'width:60%;' class='divigr'>";
		echo "<h1><a href='../topic.php?posts_topic=$id' style='color:black; text-decoration:none;'>$sub</a></h1><br>";
		$query2 = mysqli_query($connection,"SELECT username FROM users WHERE id='$by'");
		while($row2 = mysqli_fetch_array($query2))
		{
			$name=$row2['username'];
			echo "<h3>Asked by: $name</h3><h3>On ";
			echo date('d-m-Y', strtotime($date));
			echo "</h3><br>";
		}
		echo "</div>";
		echo "<hr style='width:60%; float:left;'><br>";
		//echo "<br><br><br><br><br>";
		
	}
}
echo "<br><br><br>";

//script for pagination

// find out how many rows are in the table
$dbh=new PDO("mysql:host=localhost;dbname=techon","root","");

$sql = "SELECT COUNT(*) FROM users";
$result = mysqli_query($connection,$sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysqli_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 2;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
    // cast var as int
    $currentpage = (int) $_GET['currentpage'];
} else {
    // default page num
    $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
    // set current page to last page
    $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
    // set current page to first page
    $currentpage = 1;
} // end if

// the offset of the list, based on current page
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db
$sql = "SELECT username FROM users LIMIT $offset, $rowsperpage";
$result = mysqli_query($connection,$sql) or trigger_error("SQL", E_USER_ERROR);

// while there are rows to be fetched...
while ($list = mysqli_fetch_array($result)) {
    // echo data
    echo $list['username'] . " : " . $list['username'] . "<br />";
} // end while

/******  build the pagination links ******/
// range of num links to show
$range = 8;

// if not on page 1, don't show back links
if ($currentpage > 1) {
    // show << link to go back to page 1
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
    // get previous page num
    $prevpage = $currentpage - 1;
    // show < link to go back to 1 page
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
} // end if

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    // if it's a valid page number...
    if (($x > 0) && ($x <= $totalpages)) {
        // if we're on current page...
        if ($x == $currentpage) {
            // 'highlight' it but don't make a link
            echo " [<b>$x</b>] ";
            // if not current page...
        } else {
            // make it a link
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
        } // end else
    } // end if
} // end for

// if not on last page, show forward and last page links
if ($currentpage != $totalpages) {
    // get next page
    $nextpage = $currentpage + 1;
    // echo forward link for next page
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
    // echo forward link for lastpage
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
} // end if
/****** end build pagination links ******/


/*try {

    // Find out how many items are in the table
    $dbh=new PDO("mysql:host=localhost;dbname=techon","root","");
    $total = $dbh->query('
        SELECT
            COUNT(*)
        FROM
            users
    ')->fetchColumn();

    // How many items to list per page
    $limit = 2;

    // How many pages will there be
    $pages = ceil($total / $limit);

    // What page are we currently on?
    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
        'options' => array(
            'default'   => 1,
            'min_range' => 1,
        ),
    )));

    // Calculate the offset for the query
    $offset = ($page - 1)  * $limit;

    // Some information to display to the user
    $start = $offset + 1;
    $end = min(($offset + $limit), $total);

    // The "back" link
    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

    // The "forward" link
    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

    // Display the paging information
    echo '<div id="paging"><p>'. $prevlink. ' Page '. $page. ' of '. $pages.' pages, displaying '. $start. '-' .$end. ' of '. $total. ' results '. $nextlink. ' </p></div>';

    // Prepare the paged query
    $stmt = $dbh->prepare('
        SELECT
            username
        FROM
            users
        ORDER BY
            id
        LIMIT
            :limit
        OFFSET
            :offset
    ');

    // Bind the query params
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    // Do we have any results?
    if ($stmt->rowCount() > 0) {
        // Define how we want to fetch the results
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $iterator = new IteratorIterator($stmt);

        // Display the results
        foreach ($iterator as $row) {
            echo '<p>', $row['username'], '</p>';
        }

    } else {
        echo '<p>No results could be displayed.</p>';
    }

} catch (Exception $e) {
    echo '<p>', $e->getMessage(), '</p>';
}
*/
?>


</body>
<?php

include 'footer.php';

?>
</html>
