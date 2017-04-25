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
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <!-Begin Jumbotron-->
            <div class="container-fluid">

                <!--Page one-->
                <div id="page0" class="jumbotron pages jumbotron-custom-landing">
                    <h1 id="header-font">Welcome to AirLingus</h1>

                    <!--Data collect-->
                    <p>Search Flights</p>
                    <form class="form-inline" method="post">
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
                        </div>

                        <button class="btn btn-default forward" type="button" data-next="1" data-current="0">Submit</button>
                    </form>


                </div>

                <!--Page two-->
                <div id="page1" class="jumbotron pages jumbotron-custom-landing">
                    <h1 id="header-font">Departing Flights</h1>
<!--todo: create php system to make auto populating tables based on search-->
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Flight Name</th>
                                <th>Flight Number</th>
                                <th>Departing From</th>
                                <th>Destination</th>
                                <th>Departing Time</th>
                                <th>Arrival Time</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>AA123</td>
                                <td>123</td>
                                <td>Miami, Fl, USA</td>
                                <td>Chicago, IL, USA</td>
                                <td>09:00:00</td>
                                <td>12:00:00</td>
                                <td>Link to buy</td>
                            </tr>
                            <tr>
                                <td>AA123</td>
                                <td>123</td>
                                <td>Miami, Fl, USA</td>
                                <td>Chicago, IL, USA</td>
                                <td>09:00:00</td>
                                <td>12:00:00</td>
                                <td>Link to buy</td>
                            </tr>
                            <tr>
                                <td>AA123</td>
                                <td>123</td>
                                <td>Miami, Fl, USA</td>
                                <td>Chicago, IL, USA</td>
                                <td>09:00:00</td>
                                <td>12:00:00</td>
                                <td>Link to buy</td>
                            </tr>
                        </table>
                    </div>

                    <button class="btn btn-default forward" type="button" data-next="2" data-current="1">Next</button>

                    <!-- Use data-back="page number you want to go to",  data-current="Page your currently at" to change pages to the right-->
                    <button class="btn btn-default back" type="button"  data-back="0" data-current="1"> Back</button>
                </div>

                <!--Page three-->
                <div id="page2" class="jumbotron pages jumbotron-custom-landing">
                    <h1 id="header-font">Returning Flights</h1>
                    <button class="btn btn-primary back" type="button"  data-back="1" data-current="2"> Back</button>
                </div>


            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>





</body>
</html>
