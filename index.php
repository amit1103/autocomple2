<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title>PHP MySQL Typeahead Autocomplete</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typeahead.js"></script>
    <style>
        .tt-hint,
        .company {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 400px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
        }
    </style>
    <script>
        $(document).ready(function() {

            $('input.company').typeahead({
                name: 'city',
                remote: 'city.php?query=%QUERY'

            });

        })
    </script>
</head>

<body>
    <div class="content">

        <form id="form1" name="form1" method="post" action="index.php">
            <h1>Try it yourself</h1>
            <input type="text" name="city" size="30" class="company" placeholder="Please Enter City or ZIP code">
            <input type="submit" name="submit" id="submit" value="submit">
        </form>
    </div>
</body>

</html>