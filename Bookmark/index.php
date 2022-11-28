<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Bookmarker</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">



</head>

<body onload="fetchBookmarks()">
<?php
$con = mysqli_connect("localhost","root","","bookmark");
if(isset($_POST['btn']))
{
    $name= $_POST['siteName'];
    $ctgry = $_POST['category'];
    $link = $_POST['siteUrl'];
    $query = mysqli_query($con,"INSERT INTO `book`( `title`, `categories`, `link`) VALUES ('$name','$ctgry','$link')");
    if($query)
    {
        print("DATA INSERTED");
    }
    else{
        print("failed ");
    }
}




?>
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 style="text-align:center">BOOKMARK APP</h1>
                <h6 class="display-5">Having a way to store your bookmark means there is better chance you are going to actually look at those bookmarks in the future .More often than not we are left with the browser bookmarks manager tha ends up getting full and forgotten</h6>


                <form id="myForm" method="POST">
                    <div class="form-group">
                        <label>Site Title : </label>
                        <input type="text" class="form-control" id="siteName" placeholder="Site title" name="siteName">
                    </div>
                    <div class="form-group">
                        <label>Site Category : </label>
                        <input type="text" class="form-control" id="category" placeholder="category" name="category">
                    </div>

                    <div class="form-group">
                        <label>Site Link : </label>
                        <input type="text" class="form-control" id="siteUrl" placeholder="SIte link" name="siteUrl">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                </form>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="bookmarksResults"></div>



                </div>

            </div>

            <hr>

        </div>
        <!-- /container -->

    </main>

    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>


</html>