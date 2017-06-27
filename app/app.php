<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/parcel.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href=href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Send yr package</title>
        </head>
        <body>
            <div class='container'>
                <h1>Parcel Info</h1>
                <p>Enter the dimensions of your package to see the specs:</p>
                <form action='/view_parcel'>
                    <div class='form-group'>
                        <label for='weight'>Enter the weight (lbs.):</label>
                        <input id='weight' name='weight' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='height'>Enter the height (inches):</label>
                        <input id='height' name='height' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='length'>Enter the length (inches):</label>
                        <input id='length' name='length' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='width'>Enter the width (inches):</label>
                        <input id='width' name='width' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-danger'>Check it</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/view_parcel", function() {
        $my_parcel = new Parcel($_GET['weight'], $_GET['height'], $_GET['length'], $_GET['width']);
        return "<h2>Your package info:</h2>
        <p>The weight entered was: " . $my_parcel->getWeight() . " lbs.</p>
        <p>The height entered was: " . $my_parcel->getHeight() . " inches</p>
        <p>The length entered was: " . $my_parcel->getLength() . " inches</p>
        <p>The width entered was: " . $my_parcel->getWidth() . " inches</p><br>
        <h3>The volume is: " . $my_parcel->getVolume() . " inches!</h3>";
    });
    return $app;

?>
