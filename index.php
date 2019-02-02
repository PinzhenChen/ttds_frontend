<?php
include_once('./header.php');
$filter_flag = $_POST["filter_flag"];
echo
<<<HTML
<style>
#home{
    background: #1a242f;
}
</style>

    <main style = "padding-top: 0px;">
        <body>
            <div class="container-fluid">
                <div>
                   <h2 style="color: azure;">Course Information Made Easy</h2>
                   <p style="color: azure;">This platform aims to achieve easy and powerful course related information searching</p>
                </div>
                <form action="./result.php" method="POST" name="searchForm" onsubmit="return validateSearchForm()">
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <div id="custom-search-input" class="form-group">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control input-lg" placeholder="Enter your keywords" name="keyword" required>
                                    <span class="input-group-btn">

                                         <button type="submit">
                                            <!-- <i class="glyphicon glyphicon-search" style="color: #2c3e50;"></i> -->
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>

                                                    <form action="./index.php" method="POST" >
                                                      <div class="col-md-3">
                                                      </div>
                                                      <div class="col-md-6">
                                                        <button type="submit" name="filter_flag" value="1"><span class="glyphicon glyphicon-filter"></span></button>
                                                      </div>
                                                    </form>                                    
                                </div>
                            </div>
HTML;
if ($filter_flag == "1") {
    echo
<<<HTML
                            <!-- SELECT BOX -->
                            <div class="custom-select" style="width:200px;">
                              <select>
                                <option value="0">Select car:</option>
                                <option value="1">Audi</option>
                                <option value="2">BMW</option>
                                <option value="3">Citroen</option>
                                <option value="4">Ford</option>
                                <option value="5">Honda</option>
                                <option value="6">Jaguar</option>
                                <option value="7">Land Rover</option>
                                <option value="8">Mercedes</option>
                                <option value="9">Mini</option>
                                <option value="10">Nissan</option>
                                <option value="11">Toyota</option>
                                <option value="12">Volvo</option>
                              </select>
                            </div>
HTML;
}

  echo
<<<HTML
                            <!-- <div class="form-checks textWhite">
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="0" id="courseName" required>Course Name
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="1" id="courseDesc" required>Course Description
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="option" value="2" id="courseSummary" required>Course Summary
                                </label>
                            </div> -->
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </form>


            </div>
        </body>
    </main>
HTML;

include_once('./footer.php');
?>
