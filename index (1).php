<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: lightblue;
         background-image: url('moneypic.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 250px;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:#444;
}
</style>
</head>
<body>
<br>
<h2 style=" font-family:Times New Roman; font-size: 55px ; color:white; "> <center><i>CREDIT MANAGEMENT</i></center> </h2>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="Demo1.php">VIEW USERS</a>
  <a href="transfercredit.php">TRANSFER CREDIT</a>
  <a href="transactiondetails.php">TRANSACTION HISTORY</a>
</div>

<button class="openbtn" onclick="openNav()">☰ MENU</button>  
<p> This website allows you to transfer credit between the users and also view the transaction history.</p>
<p> Open Menu for options</p>

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
   
</body>
</html> 
