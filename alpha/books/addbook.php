<?php
include 'header.php';
?>
<div class="container">
<form style="margin-top:5%">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" placeholder="Book Title...">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Author</label>
        <input type="text" class="form-control" placeholder="Author's Name...">
        </div>
        <div class="form-group col-md-3">
        <label>Class Number</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Class Number here...">
        </div>
    </div>
    
    <div class="form-group">
        <label>Publisher</label>
        <input type="text" class="form-control" placeholder="Publishers Name...">
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="inputCity">Edition</label>
        <input type="text" class="form-control" placeholder="Edition">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Pages</label>
        <input type="text" class="form-control" placeholder="Pages..." >
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Year</label>
        <input type="text" class="form-control" placeholder="Year...">
        </div>
        <div class="form-group col-md-4">
        <label for="inputZip">Remarks</label>
        <input type="text" class="form-control" placeholder="Remarks...">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">ADD BOOK</button>
    </form>
</div>