<?php defined('SYSPATH') OR die("No direct access allowed.");?>

<style>
    label {
        display: block;
        font-size: 16px;
        margin-bottom: 15px;
    }
    input {
        display: block;
        margin-bottom: 15px;
    }
    .form_container {
        padding: 20px;
    }
    .table {
        width : 100%;
        height: 300px;
        overflow: auto;
        margin-top: 20px;
        border : none;
    }
    .table table {
        width: 100%;
        text-align: center;
    }
    .table table th{
        text-align: center;
    }
</style>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
            <div class="form_container">
                <form id="uploadForm" enctype="multipart/form-data">
                    <label>Passenger Details File</label>
        			<input required id="passenger_details_file" type="file" 
                    accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" name="passenger_details"  />
                    <div>
                        <button id="submit_btn" class="btn btn-primary"><?php echo __('button_update'); ?></button> 
                    </div>
                </form>
                <div class="table" id="table"> 
                </div>
            </div>   
        </div>
    </div>
    <script>
            
        $("#uploadForm").on('submit',(function(e) {

            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/manage/update_corporate_trips_with_excel",
                beforeSend: function() {
                    $('#submit_btn').prop('disabled', true);
                    $("#submit_btn").html('Please Wait');
                },
                success: function (data) {
                    $('#submit_btn').prop('disabled', false);
                    $("#submit_btn").html("<?php echo __('button_update'); ?>");
                    let table = document.getElementById("table").innerHTML = data;
                    alert("<?php echo __("wallet_suucessfully_update"); ?>");
                },
                error: function (error) {
                    console.log(error);
                    $('#submit_btn').prop('disabled', false);
                    $("#submit_btn").html("<?php echo __('button_update'); ?>");
                    alert("<?php echo __("try_again"); ?>");
                    // window.location.href = "/manage/wallet_logs";
                    // console.log(error);
                },
                async: true,
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                timeout: 200000
            });
        }));

    </script>
</div>

