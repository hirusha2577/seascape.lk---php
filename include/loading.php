<?php
include '../class/include.php';
$BOOKING = new Booking();
$BOOKING->set_personal_info($_POST);
$result = $BOOKING->create_booking();
?>
<input type="hidden" id="result" value="<?php echo $result; ?>">
<input type="hidden" id="c_in" value="<?php echo $_POST['check_in']; ?>">
<input type="hidden" id="c_out" value="<?php echo $_POST['check_out']; ?>">
<input type="hidden" id="c_type" value="<?php echo $_POST['customer_type']; ?>">
<input type="hidden" id="s_type" value="<?php echo $_POST['service_type']; ?>">
<input type="hidden" id="r_type" value="<?php echo $_POST['room_type']; ?>">
<style>

    .cen {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .ring {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        box-shadow: 0 4px 0 #8e1f4a;
        background: transparent;
        animation: animate 1s linear infinite;
    }
    .text {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        color: #8e1f4a;
        position: absolute;
        top: 0;
        left: 0;
        text-align: center;
        line-height: 200px;
        font-size: 2em;
        background: transparent;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
    }
    @keyframes animate {
        0%{
            transform: rotateZ(0deg);
        }
        100%{
            transform: rotateZ(360deg);
        }
    }

</style>

<div class="row" style="height: 200px"></div>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="cen">
            <div class="text">Requesting</div>
            <div class="ring"></div><br>
        </div>
        
    </div>
    <div class="col-3"></div>
</div>
<div class="row" style="margin-top: 300px;">
    <div class="col-12">
        <center><h2 id="count" style="font-weight: bold"></h2></center>
        <center><p id="text"></p></center>
    </div>
</div>

<div class="row" style="height: 200px"></div>

<script>

    if ($("#result").val() === "success") {
        count();
    } else {
        $("#count").html("Requesting Fail.");
    }

    var x = 40;
    function count() {
        x = x + 15;
        $("#count").html(x + "%");
        if(x === 100){ 
            $("#count").html("Done");
            $("#text").html("We will send confirmation mail for your booking.");
            setTimeout(end, 4000);
        }else{
            setTimeout(count, 1500);
        }
    }
    function end(){
        
        window.open("search_room.php?room_type="+$("#r_type").val()+"&customer_type="+$("#c_type").val()+"&service_type="+$("#s_type").val()+"&check_in="+$("#c_in").val()+"&check_out="+$("#c_out").val(), "_self");
    }
</script>