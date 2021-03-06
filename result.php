<?php

$host = 'mysql.hostinger.com';
$user = '';
$pwd = '';
$database ='';
$table ='';
$search_key = $_POST["keyword"];
// $search_option = $_POST["option"];

// just for demo will be replaced by real connection to database
$username = "ttds";
$password = "ttdscw2";

// $search_option = 1;
// $option = 'courseDesc';
// if ($search_option == 0) {
//   $option = 'courseName';
// } else {
//   if ($search_option == 2) {
//     $option = 'courseSummary';
//   }
// }
$remote_url = 'http://104.248.163.205:8983/solr/CourseFinder/select?q=' . str_replace(' ', '%20', $search_key) . '&rows=50';

// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header' => "Authorization: Basic " . base64_encode("$username:$password")
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents($remote_url, false, $context);
$json = json_decode($file, true);


include_once('header.php');
$numFound = $json['response']['numFound'];
$course_list = $json['response']['docs'];
?>

<style>
#home{
    background: #1a242f;
}
</style>

<main>
    <div class = "container">
        <h2 class="textWhite">
            <?php echo $numFound . " results found for \"".$search_key."\":";?>
        </h2>
        <div class = "container-fliud">
        <div id='blur'>
          <a href="//104.248.163.205:8080" target="_blank">Feel like to have a chat with our AI?</a>
          <img src="static/img/chatbot.jpg" alt="Chatbot" />
        </div>
        <?php
            foreach($course_list as $course) {
                $code = $course['code'][0];
                $courseName = $course['courseName'][0];
                $courseDesc = $course['courseDesc'][0];
                $truc_courseDesc = str_replace("\n", "<br/>", implode(" ", array_slice(explode(" ", $courseDesc), 0, 30, true))) . "......";
                $courseSummary = $course['courseSummary'][0];
                $truc_courseSummary = str_replace("\n", "<br/>", implode(" ", array_slice(explode(" ", $courseSummary), 0, 30, true))) . "......";
                $availability = $course['availability'][0];
                $link = 'http://www.drps.ed.ac.uk/18-19/dpt/'.$course['link'];

                $h3_maybe = "<h3 class='textWhite' style='margin-top:0px;'>May be sutiable for:</h3>";
                $h4tag = "<h4 class='textLabel'>";
                //$suitable = $course == "" ? ($courseid == "" ? "" : $h3_maybe . $courseid . "</h4>") : ($courseid== "" ? $h3_maybe . $h4tag . $course . "</h4>" : $h3_maybe . $h4tag . $course . " / " . $courseid . "</h4>");
                echo
<<<HTML
                <div id="blur">
                    <div class="row">
                        <div class="col-md-12">
                        <span class="textWhite"><span class="glyphicon glyphicon-tag"></span>&nbsp;<h3 style="display:inline;">Title: </h3><span class="textLabel"><h3 style="display:inline;">{$courseName}</h3></span></span>
                            <h4 class="textWhite"><span class="glyphicon glyphicon-education"></span>&nbsp;Summary: <span class="textLabel">{$truc_courseSummary}</span></h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="textWhite"><span class="glyphicon glyphicon-globe"></span>&nbsp;Course URL: <span class="textLabel"><a href={$link}>{$link}</a></span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="textWhite"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Description: <span class="textLabel">{$truc_courseDesc}</span></h4>
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
