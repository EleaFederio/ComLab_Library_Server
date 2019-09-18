<?php
include '../templates/header.php';
include '../security/authentication.php';
if(!isset($_SESSION['hash'])){
    header('Location:../security/login.php');
}

if(isset($_GET['borrow_request'])){
    if($_GET['borrow_request'] == 1){
        echo '<script>
        swal("Book Borrow Request Sent", "Wait for librarians Response.");
        </script>';
    }
}
    // if(isset($_POST['search'])){
    //     $response = "<ul><li>No data found!</li></ul>";

    //     $connection = new mysqli('127.0.0.1', 'root', '', 'bugc');
    //     $q = $connection->real_escape_string($_POST['q']);
    //     $sql = $connection->query("SELECT * FROM `books` WHERE `title` LIKE '%$q%'");
    //     if($sql->num_rows > 0){
    //         $response = "<ul class=\"list-group\" >";
    //             while($data = $sql->fetch_array()){
    //                 $response .= "<li class=\"list-group-item\" id=\"bookSelected\">".$data['title']."</li>";
    //             }
    //         $response .= "</ul>";
    //     }
    //     exit($response);
    // }
    $db = new Database();
    
    $result = $db->connect()->query("SELECT * FROM `books`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <style type="text/css">
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
            z-index: 5;
        }
        .list-group, .list-group-item{
            z-index: 2;
        }
        .container{
            
        }
        input{
            display: inline;
            width: 100%;
            position: fixed;
            z-index: 9;
            padding-top: 10%;
            background: #0088cc;
            margin-right: auto;
        }
    </style> -->
</head>
<body>
    
    <div class="container" style="margin-top: 2%">
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col">TITLE</th>
                    <th scope="col">AUTHOR</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_object()){
                        $title = $row->title;
                        $author = $row->author;
                        $publisher = $row->publisher;
                ?>
                <tr scope="row">
                    <td><?php echo $title ?></td>
                    <td><?php echo $author ?></td>
                    <td><a href="view_book.php?id=<?php echo $row->book_id ?>" class="btn btn-primary">View</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr>
    <br><br><br>
    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</body>
</html>