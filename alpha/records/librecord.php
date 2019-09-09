<?php
include 'header.php';
?>



<div class="container" style="margin-top:5%">
    <form action="dtr.php" method='POST'>
        <h3 class="h3 text-center">Generate Log Report</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="dates" style="display: table; margin: auto">
                    <label for="">From</label>
                    <input type="text" autocomplete="off" id="begindate" style="width: 200px" name="begin" class="form-control" placeholder="yyyy-mm-dd">
                </div>
            </div>
            <div class="col-md-6">
                <div class="dates" style="display: table; margin: auto" >
                    <label for="">To</label>
                    <input type="text" autocomplete="off" id="begindate" style="width: 200px" name="end" class="form-control" placeholder="yyyy-mm-dd">
                </div>
            </div>
        </div>
        <br><br>
        <input type="submit" class="btn btn-primary btn-lg" style="display: table; margin: auto" value="Generate Report">
    </form>
</div>


<script>
    $(function () {
        $('.dates #begindate').datepicker({
            'format' : 'yyyy-mm-dd',
            'autoclose' : true 
        });
    });

</script>

<?php 
    include '../templates/footer.php';
?>