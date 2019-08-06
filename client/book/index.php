<?php
include '../templates/header.php';
    if(isset($_POST['search'])){
        $response = "<ul><li>No data found!</li></ul>";

        $connection = new mysqli('127.0.0.1', 'root', '', 'bugc');
        $q = $connection->real_escape_string($_POST['q']);
        $sql = $connection->query("SELECT * FROM `books` WHERE `title` LIKE '%$q%'");
        if($sql->num_rows > 0){
            $response = "<ul class=\"list-group\" >";
                while($data = $sql->fetch_array()){
                    $response .= "<li class=\"list-group-item\" id=\"bookSelected\">".$data['title']."</li>";
                }
            $response .= "</ul>";
        }
        exit($response);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        ul{
            width:100%;
        }
        input, ul{
            /* width: 100%; */
            width: 250px;
        }
        li{
            width:100%;
        }
        li:hover{
            color: silver;
            background: #0088cc;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 10%">
        <input type="text" class="form-control" id="searchBox" placeholder="Search...">
        <div id="response"></div>
    </div>


    <script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#searchBox").keyup(function(){
                var query = $("#searchBox").val();
                if(query.length> 2){

                    $.ajax({
                        url:'index.php',
                        method:'POST',
                        data:{
                            search: 1,
                            q: query
                        },
                        success: function(data){
                            $("#response").html(data);
                        },
                        dataType:'text'
                    });

                }
            });
            $(document).on('click','li',function(){
                var books = $(this).text();
                $("#searchBox").val(books);
                $("#response").html("");
            });
        });
    </script>
</body>
</html>