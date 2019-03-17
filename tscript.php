<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>

<script type="text/javascript">
  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();
</script>

<script type="text/javascript">
function entryChange1(){
radio = document.getElementsByName('entryPlan') 
if(radio[0].checked) {
document.getElementById('firstBox').style.display = "";
document.getElementById('secondBox').style.display = "none";
}else if(radio[1].checked) {
document.getElementById('firstBox').style.display = "none";
document.getElementById('secondBox').style.display = "";
}
}
window.onload = entryChange1;
</script>

<script type="text/javascript">
var $countA = 0;
var $countB = 0;


function countUpA0() {
    document.getElementById( "0" ).value = ++$countA;
}
function countUpA1() {
    document.getElementById( "1" ).value = ++$countA;
}




</script>

<script type="text/javascript">
var $countA = 0;
function countDownA() {
    document.getElementById( "sampleOutputA" ).innerHTML = --$countA;
}
</script>
