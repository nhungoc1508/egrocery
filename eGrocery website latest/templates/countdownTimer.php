<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.main-box{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
   
}
.box{
    /* border: 1px solid #fff; */
    background-color:#D4B563;
    border-radius: 20px;
    text-align: center;
    margin: 10px;
    width: 120px;
    /* box-shadow: 3px 6px; */
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
   
}
.content-1,.content-3,.content-5,.content-7{
    font-size: 30px;
    font-weight: bold;
    color: red;
    /* text-shadow: 2px 4px gray; */
}
</style>
</head>
<body>

<p id="timer">
<div class="main-box">
    <div class="box">
        <div class="content-1">
            
        
        </div>
        <div class="content-2">
            <h4>Days</h4>
        </div>
    </div>
    <div class="box">
        <div class="content-3">
            
        
        </div>
        <div class="content-4">
        <h4>Hours</h4>
        </div>
    </div>
    <div class="box">
        <div class="content-5">
            
        
        </div>
        <div class="content-6">
        <h4>Minutes</h4>
        </div>
    </div>
    <div class="box">
        <div class="content-7">
            
        
        </div>
        <div class="content-8">
        <h4>Seconds</h4>
        </div>
    </div>

</div>

</p>

<script>

var countDownDate = new Date("May 5, 2021 23:59:59").getTime();

var x = setInterval(function() {


  var now = new Date().getTime();
   
  var distance = countDownDate - now;
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 

  document.querySelector('.content-1').innerHTML = days;
  document.querySelector('.content-3').innerHTML = hours;
  document.querySelector('.content-5').innerHTML = minutes;
  document.querySelector('.content-7').innerHTML = seconds;

    

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>