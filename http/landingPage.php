<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 4/22/17
 * Time: 11:32 AM
 */

?>

<!DOCTYPE html>
<head>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed|UnifrakturCook:700" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/transition.js"></script>


</head>
<html>
<body class="super_bg">

<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 paddypad">
                    <div class="jumbotron jumbotron-custom-landing" id="page0">
                        <h1 class="text-center font-header" id="header-font">Welcome to AirLingus</h1>
                        <p>Search Flights</p>
                            <form class="form-inline" action="flight_search.php" method="post">
                                <div class="control-group">
                                    <div class="controls controls-row">
                                        <label class="control-label" for="home">Flying From</label>
                                        <input class="span3" type="text" placeholder="Flying from?" id="home" name="home">
                                        <label class="control-label" for="home">Flying To</label>
                                        <input class="span3" type="text" placeholder="Flying to?" id="dest" name="dest">
                                    </div>
                                    <div class="controls controls-row">
                                        <label class="control-label" for="depart_date">Leaving</label>
                                        <input class="span3" type="date" id="depart_date" name="depart_date">
                                        <label class="control-label" for="return_date">Returning</label>
                                        <input class="span3" type="date" id="return_date" name="return_date">
                                    </div>
                                    <div class="control-group">
                                        <div class="controls btn-buff">
                                            <button onclick="" type="button" data-next="1" data-current="0" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>

                    <div id="page1">

                    </div>

                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
</div>



</body>
</html>
