<?php

include '../templates/header.php';

?>
    <div class="container" style="margin-top:20%">
        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label>Book Name</label>
            <input type="text" class="form-control" placeholder="Noli Me Tanghere">
            </div>
            <div class="form-group col-md-6">
            <label>Author</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Jose Rizal">
            </div>
        </div>
        <div class="form-group">
            <label>Publisher</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="National Bookstore">
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputCity">Estimated Prize</label>
            P<input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">ISBN</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

    </body>
</html>