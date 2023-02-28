<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  li{
    list-style-type: none;
    }

}
</style>
</head>
  
<?php
session_start();
?>      
   
<body>
<?php
$cost = $_POST["cost"];
$hash = $_POST["strcrypt"];
?>
    <nav class="navbar fixed-top navbar-expand-sm bg-light justify-content-center">

      <!-- Links -->
      <ul class="navbar-nav mr-5">

        <li class="nav-item mr-5">
          <a class="nav-link" href="afterSignIn.php"><span class="h2">E - Commerce Website</span></a>
        </li>
        <li class="nav-item">
          <span class="navbar-text mx-5 mt-3"><?php echo $_SESSION["userEmail"];?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="#"><i class="material-icons" style="font-size: 50px;">shopping_cart</i><span class="numOfItems" style="position: absolute; color: white; left: 937px; top: 21px;"></span></a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link float-right" href="logout.php"><button class="btn btn-sm btn-outline-primary">Logout</button></a>
        </li>

      </ul>
    </nav>

<div class="container-fluid" style="margin-top: 120px; padding: 30px;">
<h2>Payment</h2>
<div class="row">
  <div class="col-8">
    <div class="container">
      <form action="action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name*</label>
            <input type="text" id="fname" name="firstname" placeholder="Kamesh R" required>
            <label for="email"><i class="fa fa-envelope"></i> Email*</label>
            <input type="text" id="email" name="email" placeholder="kamesh@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address*</label>
            <input type="text" id="adr" name="address" placeholder="34 15th Street " required>
            <label for="city"><i class="fa fa-institution"></i> City*</label>
            <input type="text" id="city" name="city" placeholder="Vellore" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State*</label>
                <input type="text" id="state" name="state" placeholder="TN" required> 
              </div>
              <div class="col-50">
                <label for="zip">Zip Code*</label>
                <input type="text" id="zip" name="zip" placeholder="632001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card*</label>
            <input type="text" id="cname" name="cardname" placeholder="KAMESH R" required>
            <label for="ccnum">Credit card number*</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month*</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Sep" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year*</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV*</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
		<p>Proceed Securely*</p>
		<input type='button' id='cryptstr' value="Pay Now" class="btn btn-success" /></p><br>
        <!-- input type="submit" value="Continue to checkout" class="btn btn-success" -->
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p><?php echo $_POST["itemName"];?><span class="price">$<?php echo $_POST["cost"];?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$<?php echo $_POST["cost"];?></b></span></p>
    </div>
  </div>
</div>
  </div>
   <p>The hash value(using SHA512) of cost is  <span class="price" style="color:red"><?php echo $_POST["strcrypt"];?></span></p>
<script>
//code of SHA512 function
		function SHA512(str){function int64(msint_32,lsint_32){this.highOrder=msint_32;this.lowOrder=lsint_32;}
		var H=[new int64(0x6a09e667,0xf3bcc908),new int64(0xbb67ae85,0x84caa73b),new int64(0x3c6ef372,0xfe94f82b),new int64(0xa54ff53a,0x5f1d36f1),new int64(0x510e527f,0xade682d1),new int64(0x9b05688c,0x2b3e6c1f),new int64(0x1f83d9ab,0xfb41bd6b),new int64(0x5be0cd19,0x137e2179)];var K=[new int64(0x428a2f98,0xd728ae22),new int64(0x71374491,0x23ef65cd),new int64(0xb5c0fbcf,0xec4d3b2f),new int64(0xe9b5dba5,0x8189dbbc),new int64(0x3956c25b,0xf348b538),new int64(0x59f111f1,0xb605d019),new int64(0x923f82a4,0xaf194f9b),new int64(0xab1c5ed5,0xda6d8118),new int64(0xd807aa98,0xa3030242),new int64(0x12835b01,0x45706fbe),new int64(0x243185be,0x4ee4b28c),new int64(0x550c7dc3,0xd5ffb4e2),new int64(0x72be5d74,0xf27b896f),new int64(0x80deb1fe,0x3b1696b1),new int64(0x9bdc06a7,0x25c71235),new int64(0xc19bf174,0xcf692694),new int64(0xe49b69c1,0x9ef14ad2),new int64(0xefbe4786,0x384f25e3),new int64(0x0fc19dc6,0x8b8cd5b5),new int64(0x240ca1cc,0x77ac9c65),new int64(0x2de92c6f,0x592b0275),new int64(0x4a7484aa,0x6ea6e483),new int64(0x5cb0a9dc,0xbd41fbd4),new int64(0x76f988da,0x831153b5),new int64(0x983e5152,0xee66dfab),new int64(0xa831c66d,0x2db43210),new int64(0xb00327c8,0x98fb213f),new int64(0xbf597fc7,0xbeef0ee4),new int64(0xc6e00bf3,0x3da88fc2),new int64(0xd5a79147,0x930aa725),new int64(0x06ca6351,0xe003826f),new int64(0x14292967,0x0a0e6e70),new int64(0x27b70a85,0x46d22ffc),new int64(0x2e1b2138,0x5c26c926),new int64(0x4d2c6dfc,0x5ac42aed),new int64(0x53380d13,0x9d95b3df),new int64(0x650a7354,0x8baf63de),new int64(0x766a0abb,0x3c77b2a8),new int64(0x81c2c92e,0x47edaee6),new int64(0x92722c85,0x1482353b),new int64(0xa2bfe8a1,0x4cf10364),new int64(0xa81a664b,0xbc423001),new int64(0xc24b8b70,0xd0f89791),new int64(0xc76c51a3,0x0654be30),new int64(0xd192e819,0xd6ef5218),new int64(0xd6990624,0x5565a910),new int64(0xf40e3585,0x5771202a),new int64(0x106aa070,0x32bbd1b8),new int64(0x19a4c116,0xb8d2d0c8),new int64(0x1e376c08,0x5141ab53),new int64(0x2748774c,0xdf8eeb99),new int64(0x34b0bcb5,0xe19b48a8),new int64(0x391c0cb3,0xc5c95a63),new int64(0x4ed8aa4a,0xe3418acb),new int64(0x5b9cca4f,0x7763e373),new int64(0x682e6ff3,0xd6b2b8a3),new int64(0x748f82ee,0x5defb2fc),new int64(0x78a5636f,0x43172f60),new int64(0x84c87814,0xa1f0ab72),new int64(0x8cc70208,0x1a6439ec),new int64(0x90befffa,0x23631e28),new int64(0xa4506ceb,0xde82bde9),new int64(0xbef9a3f7,0xb2c67915),new int64(0xc67178f2,0xe372532b),new int64(0xca273ece,0xea26619c),new int64(0xd186b8c7,0x21c0c207),new int64(0xeada7dd6,0xcde0eb1e),new int64(0xf57d4f7f,0xee6ed178),new int64(0x06f067aa,0x72176fba),new int64(0x0a637dc5,0xa2c898a6),new int64(0x113f9804,0xbef90dae),new int64(0x1b710b35,0x131c471b),new int64(0x28db77f5,0x23047d84),new int64(0x32caab7b,0x40c72493),new int64(0x3c9ebe0a,0x15c9bebc),new int64(0x431d67c4,0x9c100d4c),new int64(0x4cc5d4be,0xcb3e42b6),new int64(0x597f299c,0xfc657e2a),new int64(0x5fcb6fab,0x3ad6faec),new int64(0x6c44198c,0x4a475817)];var W=new Array(64);var a,b,c,d,e,f,g,h,i,j;var T1,T2;var charsize=8;function utf8_encode(str){return unescape(encodeURIComponent(str));}
		function str2binb(str){var bin=[];var mask=(1<<charsize)-1;var len=str.length*charsize;for(var i=0;i<len;i+=charsize){bin[i>>5]|=(str.charCodeAt(i/charsize)&mask)<<(32-charsize-(i % 32));}
		return bin;}
		function binb2hex(binarray){var hex_tab='0123456789abcdef';var str='';var length=binarray.length*4;var srcByte;for(var i=0;i<length;i+=1){srcByte=binarray[i>>2]>>((3-(i % 4))*8);str+=hex_tab.charAt((srcByte>>4)&0xF)+hex_tab.charAt(srcByte&0xF);}
		return str;}
		function safe_add_2(x,y){var lsw,msw,lowOrder,highOrder;lsw=(x.lowOrder&0xFFFF)+(y.lowOrder&0xFFFF);msw=(x.lowOrder>>>16)+(y.lowOrder>>>16)+(lsw>>>16);lowOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);lsw=(x.highOrder&0xFFFF)+(y.highOrder&0xFFFF)+(msw>>>16);msw=(x.highOrder>>>16)+(y.highOrder>>>16)+(lsw>>>16);highOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);return new int64(highOrder,lowOrder);}
		function safe_add_4(a,b,c,d){var lsw,msw,lowOrder,highOrder;lsw=(a.lowOrder&0xFFFF)+(b.lowOrder&0xFFFF)+(c.lowOrder&0xFFFF)+(d.lowOrder&0xFFFF);msw=(a.lowOrder>>>16)+(b.lowOrder>>>16)+(c.lowOrder>>>16)+(d.lowOrder>>>16)+(lsw>>>16);lowOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);lsw=(a.highOrder&0xFFFF)+(b.highOrder&0xFFFF)+(c.highOrder&0xFFFF)+(d.highOrder&0xFFFF)+(msw>>>16);msw=(a.highOrder>>>16)+(b.highOrder>>>16)+(c.highOrder>>>16)+(d.highOrder>>>16)+(lsw>>>16);highOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);return new int64(highOrder,lowOrder);}
		function safe_add_5(a,b,c,d,e){var lsw,msw,lowOrder,highOrder;lsw=(a.lowOrder&0xFFFF)+(b.lowOrder&0xFFFF)+(c.lowOrder&0xFFFF)+(d.lowOrder&0xFFFF)+(e.lowOrder&0xFFFF);msw=(a.lowOrder>>>16)+(b.lowOrder>>>16)+(c.lowOrder>>>16)+(d.lowOrder>>>16)+(e.lowOrder>>>16)+(lsw>>>16);lowOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);lsw=(a.highOrder&0xFFFF)+(b.highOrder&0xFFFF)+(c.highOrder&0xFFFF)+(d.highOrder&0xFFFF)+(e.highOrder&0xFFFF)+(msw>>>16);msw=(a.highOrder>>>16)+(b.highOrder>>>16)+(c.highOrder>>>16)+(d.highOrder>>>16)+(e.highOrder>>>16)+(lsw>>>16);highOrder=((msw&0xFFFF)<<16)|(lsw&0xFFFF);return new int64(highOrder,lowOrder);}
		function maj(x,y,z){return new int64((x.highOrder&y.highOrder)^(x.highOrder&z.highOrder)^(y.highOrder&z.highOrder),(x.lowOrder&y.lowOrder)^(x.lowOrder&z.lowOrder)^(y.lowOrder&z.lowOrder));}
		function ch(x,y,z){return new int64((x.highOrder&y.highOrder)^(~x.highOrder&z.highOrder),(x.lowOrder&y.lowOrder)^(~x.lowOrder&z.lowOrder));}
		function rotr(x,n){if(n<=32){return new int64((x.highOrder>>>n)|(x.lowOrder<<(32-n)),(x.lowOrder>>>n)|(x.highOrder<<(32-n)));}else{return new int64((x.lowOrder>>>n)|(x.highOrder<<(32-n)),(x.highOrder>>>n)|(x.lowOrder<<(32-n)));}}
		function sigma0(x){var rotr28=rotr(x,28);var rotr34=rotr(x,34);var rotr39=rotr(x,39);return new int64(rotr28.highOrder^rotr34.highOrder^rotr39.highOrder,rotr28.lowOrder^rotr34.lowOrder^rotr39.lowOrder);}
		function sigma1(x){var rotr14=rotr(x,14);var rotr18=rotr(x,18);var rotr41=rotr(x,41);return new int64(rotr14.highOrder^rotr18.highOrder^rotr41.highOrder,rotr14.lowOrder^rotr18.lowOrder^rotr41.lowOrder);}
		function gamma0(x){var rotr1=rotr(x,1),rotr8=rotr(x,8),shr7=shr(x,7);return new int64(rotr1.highOrder^rotr8.highOrder^shr7.highOrder,rotr1.lowOrder^rotr8.lowOrder^shr7.lowOrder);}
		function gamma1(x){var rotr19=rotr(x,19);var rotr61=rotr(x,61);var shr6=shr(x,6);return new int64(rotr19.highOrder^rotr61.highOrder^shr6.highOrder,rotr19.lowOrder^rotr61.lowOrder^shr6.lowOrder);}
		function shr(x,n){if(n<=32){return new int64(x.highOrder>>>n,x.lowOrder>>>n|(x.highOrder<<(32-n)));}else{return new int64(0,x.highOrder<<(32-n));}}
		str=utf8_encode(str);strlen=str.length*charsize;str=str2binb(str);str[strlen>>5]|=0x80<<(24-strlen % 32);str[(((strlen+128)>>10)<<5)+31]=strlen;for(var i=0;i<str.length;i+=32){a=H[0];b=H[1];c=H[2];d=H[3];e=H[4];f=H[5];g=H[6];h=H[7];for(var j=0;j<80;j++){if(j<16){W[j]=new int64(str[j*2+i],str[j*2+i+1]);}else{W[j]=safe_add_4(gamma1(W[j-2]),W[j-7],gamma0(W[j-15]),W[j-16]);}
		T1=safe_add_5(h,sigma1(e),ch(e,f,g),K[j],W[j]);T2=safe_add_2(sigma0(a),maj(a,b,c));h=g;g=f;f=e;e=safe_add_2(d,T1);d=c;c=b;b=a;a=safe_add_2(T1,T2);}
		H[0]=safe_add_2(a,H[0]);H[1]=safe_add_2(b,H[1]);H[2]=safe_add_2(c,H[2]);H[3]=safe_add_2(d,H[3]);H[4]=safe_add_2(e,H[4]);H[5]=safe_add_2(f,H[5]);H[6]=safe_add_2(g,H[6]);H[7]=safe_add_2(h,H[7]);}
		var binarray=[];for(var i=0;i<H.length;i++){binarray.push(H[i].highOrder);binarray.push(H[i].lowOrder);}
		return binb2hex(binarray);}

		// register onclick events for Encrypt button
		document.getElementById('cryptstr').onclick = function() {
		var txt_string = "<?php echo $cost; ?>"; // gets data from input text
		// encrypts data and adds it in #strcrypt element
		var ohash = "<?php echo $hash; ?>";
		var nhash = SHA512(txt_string);
		if(ohash != nhash){       
//        setTimeout(function(){ alert("You are under ATTACK!"); }, 3000);
       window.alert("Unable to proceed further. Since you are under ATTACK!");
       window.location.href = "logout.php";
        
        
      }else{
		  window.location.href = "action_page.php";
        
      }
		return false;
		
		

		}
</script>
</body>
</html>