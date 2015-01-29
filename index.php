<!DOCTYPE html>
<html lang="">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alege receta potrivita</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#meniu1">meniul 1</a></li>
                    <li><a href="#meniu2">meniul 2</a></li>
                    <li><a href="#meniu3">meniul 3</a></li>
                    <li><a href="#meniu4">meniul 4</a></li>
                </ul>
            </div><!--.nav-collapse -->
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-2 col-md-2  col-sm-2">Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar!
                Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar!
                Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar! Left Sidebar! </div>
            <div class="col-lg-8 col-md-8 col-sm-4">

                <button type="button" id="add" onclick="addRow()" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Adauga
                </button>

                <button type="button" id="remove" onclick="removeRow()" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-minus"></span> Sterge
                </button>

                <div id="strSchet" style="height: <?php$divheight?>;">
                    <p id="first">Pentru a introduce Ingredientele la cautare: </p>
                <form name="getdata" method="get" >
                    <div id="counts">      </div>
                    <button type="submit" style="margin-top: 10px;" id='submit-btn'>Cauta</button>
                </form>
                </div>



            </div>
        </div>

        <input type="button" ondblclick="kzdms()" />

        <hr style="color:display: block;border-style: inset;border-width: 2px;color: rgba(3, 0, 1, 0.84); ">
        <div style="display: block; text-align: center;"><h4>Rezultate:<h4>  </div>

<?php
require_once('lib/query.php');
?>

    </div>

    <script>
        window.something = function kzdms(){
            alert("suka");
        }
        var i = 0;

        function addrow() {
            alert("gavnp");
//            document.getElementById("counts").innerHTML+= '<input type="text" style=" margin-top: 5px; margin-left: 5px; name="edit[' + i +']"'+'><br>';
//            i++;
//            document.cookie="counts="+i+";";

        }
        function removeRow(){
            do {
                var idelement = "edit" + (i-1).toString();
                var elem = document.getElementById(idelement);
                elem.parentNode.removeChild(elem);
                i--;
                break;
            } while(i!=0);
        }
    </script>



    <?php
    global $phpi;
    require_once('lib/config.php');

    ?>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<!--!--http://www.poftabuna.md/retete/index--!-->