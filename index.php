<?php
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['address'] = $_POST['add'];
$_SESSION['qt'] = $_POST['qty'];

if(!$_POST)
{
    header("Location: main.php?error=CompletePersonalDetails");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <meta name='viewport' content='width-device-width'>
    <link rel="stylesheet" href="css/style.css"/>

</head>

 <script type="text/javascript">
    function EnableTextBox() {
        
        var name_field = document.getElementById("nm");
        name_field.disabled = false;
        name_field.style.backgroundColor="white";
        name_field.style.border = "1px solid black";
        
        var email_field = document.getElementById("em")
        email_field.disabled = false;
        email_field.style.backgroundColor="white";
        email_field.style.border = "1px solid black";
        
        var phone_field = document.getElementById("ph");
        phone_field.disabled = false;
        phone_field.style.backgroundColor="white";
        phone_field.style.border = "1px solid black";
        
        var add_field = document.getElementById("ad");
        add_field.disabled = false;
        add_field.style.backgroundColor="white";
        add_field.style.border = "1px solid black";
        
        var qt_field = document.getElementById("qt");
        qt_field.disabled = false;
        qt_field.style.backgroundColor="white";
        qt_field.style.border = "1px solid black";
        
        var reset_href = document.getElementById("back");
        reset_href.disabled = true;
        
        var reset_btn = document.getElementById("rs");
        reset_btn.disabled = true;
        reset_btn.style.cursor="not-allowed";
        reset_btn.style.backgroundColor="#e8ebed";
        reset_btn.style.border = "none";
        
        var edit_btn = document.getElementById("ed");
        edit_btn.disabled = true;
        edit_btn.style.cursor="not-allowed";
        edit_btn.style.backgroundColor="#e8ebed";
        edit_btn.style.border = "none";
        
        var pay_btn = document.getElementById("pay");
        pay_btn.disabled = true;
        pay_btn.style.cursor="not-allowed";
        pay_btn.style.backgroundColor="#e8ebed";
        pay_btn.style.border = "none";
        
        document.getElementById("cn").style.visibility = "visible";
        
        
    }
    
    function UpdateData() {
        
        var name_field = document.getElementById("nm");
        name_field.disabled = true;
        name_field.style.border = "none";
        name_field.style.backgroundColor = "#e8ebed";
        
        var email_field = document.getElementById("em")
        email_field.disabled = true;
        email_field.style.border = "none";
        email_field.style.backgroundColor = "#e8ebed";
        
        var phone_field = document.getElementById("ph");
        phone_field.disabled = true;
        phone_field.style.border = "none";
        phone_field.style.backgroundColor = "#e8ebed";
        
        var add_field = document.getElementById("ad");
        add_field.disabled = true;
        add_field.style.border = "none";
        add_field.style.backgroundColor = "#e8ebed";
        
        var qt_field = document.getElementById("qt");
        qt_field.disabled = true;
        qt_field.style.border = "none";
        qt_field.style.backgroundColor = "#e8ebed";
        
        var price_field = document.getElementById("pr");
        price_field.value = (document.getElementById("qt").value)*350;
        
        var reset_btn = document.getElementById("rs");
        reset_btn.disabled = false;
        reset_btn.style.cursor="pointer";
        reset_btn.style.backgroundColor="#66b84e";
        reset_btn.style.border = "1px solid #66b84e";
        
        var edit_btn = document.getElementById("ed");
        edit_btn.disabled = false;
        edit_btn.style.cursor="pointer";
        edit_btn.style.backgroundColor="#66b84e";
        edit_btn.style.border = "1px solid #66b84e";
        
        var pay_btn = document.getElementById("pay");
        pay_btn.disabled = false;
        pay_btn.style.cursor="pointer";
        pay_btn.style.backgroundColor="#66b84e";
        pay_btn.style.border = "1px solid #66b84e";
        
        document.getElementById("cn").style.visibility = "hidden";
        
    }
</script>


<body>

<div class="card-box">
  
  <div class="form-title">Please verify your details</br> </div>
  <div>
  	<h2 style="color: #66b84e; text-align:center;" >Payment</h2>
    
     <table>

            <tr>
            <td class="detail">
            <h5>Name</h5>
            </td>
            <td>
            <input id="nm" disabled name="name_verified" type="text" value="<?php echo $_SESSION['name']; ?>" /><br>
            </td>
            </tr>

            <tr>
            <td class="detail">
            <h5>Email</h5>
            </td>
            <td>
            <input id="em" disabled name="email_verified" type="text" value="<?php echo $_SESSION['email']; ?>" /><br>
            </td>
            </tr>

            <tr>
            <td class="detail">
            <h5>Phone</h5>
            </td>
            <td>
            <input id="ph" disabled name="phone_verified" type="text" value="<?php echo $_SESSION['phone']; ?>" /><br>
            </td>
            </tr>

            <tr>
            <td class="detail">
            <h5>Address</h5>
            </td>
            <td>
            <input id="ad" disabled name="address_verified" type="text" value="<?php echo $_SESSION['address']; ?>" /><br>
            </td>
            </tr>

            <tr>
            <td class="detail">
            <h5>Quantity</h5>
            </td>
            <td>
            <input id="qt" name="qt_verified" disabled type="text" value="<?php echo $_SESSION['qt']; ?>" /><br>
            </td>
            </tr>
            
            
            <tr>
            <td class="detail">
            <h5>Price</h5>
            </td>
            <td>
            <input id="pr" name="price_verified" disabled type="text" value="<?php echo $_SESSION['qt']*350; ?>" /><br>
            </td>
            </tr>
    </table>
  
  </div>
  


<table class="btn-table">
<tr>
<td class="btn-td">
<button type="button" id = "rs" class="reset-btn">
<a id = "back" href="main.php">Reset</a>
</button>
</td>
<td class="btn-td">
<button type="button" id="ed" class="reset-btn" onclick="EnableTextBox()">Edit</button>
</td>
<td class="btn-td">
<script type="text/javascript" src ="pay.js"></script>
<button type="button" id="pay" class="reset-btn" onclick="payment();">
Pay
</button>
</td>
</tr>
</table>
<div>
<button type="button" id = "cn" class="cnf-btn" onmouseover="bgColor='white'" onclick="UpdateData()">Confirm</button>
</div>
</div>

</body>
</html>
