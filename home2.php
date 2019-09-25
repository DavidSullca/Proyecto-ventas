<?php 
    
    require 'bootstrap.php';
    require "Entity/Comidas.php";
    $productos = $entityManager -> getRepository('Entity\Comidas')-> FindBy([]);
 ?>
<html>

<!------ Include the above in your HEAD tag ---------->
<head>
<title>www.comidasrapidas.com/disfruta</title>
<link rel="stylesheet" href="./public/Bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

html,body{
background-image: url('./public/home.jpg');
background-repeat: no-repeat;
background-position: right top;
background-attachment: fixed;
background-size: cover;
height: 100%;
font-family: 'Numans', sans-serif;
}

.view-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;

}
.thumbnail
{
    margin-bottom: 30px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;

}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 30px;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    border: 0;

}
.item.list-group-item .img-event {
    float: left;
    width: 30%;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}

.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    display: inline-block;

}
.item.list-group-item .caption
{
    float: left;
    width: 70%;
    margin: 0;

}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
     }

.item.list-group-item:after
{
    clear: both;
}
.img-fixed-size
{
    width: 512px; 
    height: 270px;
}

    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-right">
                <div class="btn-group">
                    <button class="btn btn-info" id="list">
                        List View
                    </button>
                    <button class="btn btn-danger" id="grid">
                        Grid View
                    </button>
                </div>
            </div>
        </div>
    </div> 
    <div id="products" class="row view-group">
          <?php
                foreach ($productos as  $value) {
                echo'<div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid img-fixed-size" src="public/'.$value->getImg().'" alt="" />
                        </div>
                        <div class="caption card-body">';                       
 
                            echo '<h4 class="group card-title inner list-group-item-heading">'
                                .$value->getComida()."</h4>";
                                 
                             echo '<p class="group inner list-group-item-text">'.$value->getDescripcion().'</p>';
                            echo '<div class="row">';
                                echo '<div class="col-xs-12 col-md-6">';
                                    echo '<p class="lead">'.$value->getPrecio()."</p>";
                                echo '</div>';
                                 echo '<form action="encargo.php" method="post" >';
                                echo '<div class="col-xs-12 col-md-6">';
                                    echo '<input type="hidden" name="comida" value='.$value->getId().'>';
                                    echo '<input type="submit" value="Encargar">';
                                echo "</form>";        
                              echo '  </div>';
                         echo '   </div>';
                       echo ' </div>';
                   echo ' </div>';
                echo '</div>';
                                            }
                            ?>                  
</div>
</body>
</html>