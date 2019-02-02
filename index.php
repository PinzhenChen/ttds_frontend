<?php include_once('./header.php');?>
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
                                </div>
                            </div>
                            <span class="collapsible">Filters</span>
                            <div class="content">
                              <p>test</p>
                            </div>
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

<?php include_once('./footer.php');?>
