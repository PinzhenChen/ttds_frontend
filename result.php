<?php

$host = 'mysql.hostinger.com';
$user = '';
$pwd = '';
$database ='';
$table ='';
$search_key = $_POST["keyword"];
$search_option = $_POST["option"];
/*
$con = mysqli_connect($host, $user, $pwd, $database);
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if ($search_option == "0") {
    $buysell = "Seller";
    $query ="SELECT * FROM " . $table . " WHERE `Title` LIKE '%%" . $search_key . "%%' AND `Status` LIKE 'Selling';";
} else {
    $buysell = "Buyer";
    $query ="SELECT * FROM " . $table . " WHERE `Title` LIKE '%%" . $search_key . "%%' AND `Status` LIKE 'Buying';";
}

$query_result = mysqli_query($con, $query);

$course_list = array();
while($row = mysqli_fetch_array($query_result, MYSQLI_BOTH)){
    $course_list[] = $row;
}

mysqli_close($con);
*/

// just for demo will be replaced by real connection to database
$course1 = array('Compiling Techniques','Leevi Li','http://google.co.uk','placeholder1');
$course2 = array('Extreme Computing','Change Chen','http://google.co.uk','placeholder2');
$course_list = array($course1,$course2);

include_once('header.php');
?>

<style>
#home{
    background: #1a242f;
}
</style>

<main>
    <div class = "container">
        <h2 class="textWhite"> 
            <?php echo "Results for searching \"".$search_key."\":";?>
        </h2>
        <h4 class="textWhite">There are <?php echo count($course_list);?> courses matching your search</h4>
        <div class = "container-fliud">
        <?php
            foreach($course_list as $course) {
                //$course = $course[0];
                //$courseid = $course[1];
                $h3_maybe = "<h3 class='textWhite' style='margin-top:0px;'>May be sutiable for:</h3>";
                $h4tag = "<h4 class='textLabel'>";
                //$suitable = $course == "" ? ($courseid == "" ? "" : $h3_maybe . $courseid . "</h4>") : ($courseid== "" ? $h3_maybe . $h4tag . $course . "</h4>" : $h3_maybe . $h4tag . $course . " / " . $courseid . "</h4>");
                echo
<<<HTML
                <div id="blur">
                    <div class="row">
                        <div class="col-md-12">                            
                        <span class="textWhite"><span class="glyphicon glyphicon-tag"></span>&nbsp;<h3 style="display:inline;">Title: </h3><span class="textLabel"><h3 style="display:inline;">{$course[0]}</h3></span></span>
                            <h4 class="textWhite"><span class="glyphicon glyphicon-education"></span>&nbsp;Lecturer: <span class="textLabel">{$course[1]}</span></h4>
                        </div>
                        
                    </div>                
                    <div class="row">
                        <div class="col-md-12">                    
                            <h4 class="textWhite"><span class="glyphicon glyphicon-globe"></span>&nbsp;Course URL: <span class="textLabel">{$course[2]}</span></h4>           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">                    
                            <h4 class="textWhite"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Description: <span class="textLabel">{$course[3]}</span></h4>
                        </div>                        
                    </div>
                </div>
HTML;
            }
        ?>                
        </div>
	</div>
</main>

<?php include_once('footer.php');?>
