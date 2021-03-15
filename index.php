<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <title>Covidapp</title>
</head>

<body>
    <h1>Covid Updates</h1>
    <div class="container-fluid"><br><br>
        <div class="row ">
            <div class=" col-12 col-lg-4 col-md-4 col-sm-12 bg-warning bx " id="NewConfirmed"></div>
            <div class="col-12col-lg-3 col-md-2 col-sm-12 bg-success bx   " id="NewRecovered"></div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-12 bg-success bx  " id="TotalRecovered"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-lg-4 col-md-2 col-sm-12 bg-danger bx " id="TotalConfirmed"></div>
            <div class=" col-12col-lg-3 col-md-3 col-sm-12 bg-danger bx " id="TotalDeaths"></div>
            <div class="col-12 col-lg-4 col-md-5 col-sm-12 bg-danger bx " id="NewDeaths"></div>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-responsive text-white" id="covid">
        <caption>Country Covid report </caption>
        <thead class="thead-dark">
            <tr class="bg-success">
                <th scope="col" class="bg-success">Country</th>
                <th scope="col" class="bg-success">Country Code</th>
                <th scope="col" class="bg-success">Slug</th>
                <th scope="col" class="bg-success">New Confirmed</th>
                <th scope="col" class="bg-success">Total Confirmed</th>
                <th scope="col" class="bg-success">New Deaths</th>
                <th scope="col" class="bg-success">Total Deaths</th>
                <th scope="col" class="bg-success">New Recovered</th>
                <th scope="col" class="bg-success">Total Recovered</th>
                <th scope="col" class="bg-success">Date</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="js/fetch.js"></script>
</body>

</html>