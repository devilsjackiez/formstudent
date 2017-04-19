<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>พวก 58</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="DataTables-1.10.13/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!--<script type="text/javascript" language="JavaScript" src="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" language="JavaScript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="JavaScript" src="vendor/twbs/bootstrap/dist/js/npm.js"></script>-->
    <script type="text/javascript" language="JavaScript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" language="JavaScript"
            src="DataTables-1.10.13/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="JavaScript"
            src="DataTables-1.10.13/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
<?php

$str = file_get_contents('table1.json');
$json = json_decode($str, true);
echo '<pre>' . print_r($json, true) . '</pre>';

?>
<div class="container" style="background-color: rgba(255,255,255,0.8);margin-top: 40px; padding-bottom: 40px;">
    <h1 style="font-weight: bolder;">Configuration form for team leader of a team</h1>
    <br>
    <table id="example" class="table table-striped  dt-responsive nowrap table-responsive" cellspacing="0"
           width="100%">
        <thead>
        <tr align="center">
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Nickname</th>
        </tr>
        </thead>
        <tbody>
        <td align="center"><span style="font-weight: 600;font-size: 1.5em;">

        </td>
        </tbody>
    </table>
</div>
</body>
</html>