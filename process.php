<?php
if(isset($_POST['annsubmit'])){
$fname=$_POST['ufxd-fname'];
$phone=$_POST['ufxd-phone'];
$email=$_POST['ufxd-email'];
$message=$_POST['ufxd-message'];

$from="marketing@dpsadelhi.com";
$subject="DPSA Enquiry ";
$msg="<table style='border:3px solid #000'>
<tr>
<th style='background-color:#000;color:white;font-size:20px;padding:10px;'>
<a href='https://dpsadelhi.com/'><img
src='https://dpsadelhi.com/assets/images/logo/logo-black.png' style='max-width:200px'/></a>
</th>
</tr>
<tr>
<th  style='background-color:#000;color:white;padding:10px;'>
<center>
Dear Administrator <br/>DPSA
</center>
</th>
</tr>
<tr>
<td style='padding:30px;'>
<b>User has sent the Enquiry with the following details from
DPSA </b><br/><br/>
First-NAME : $fname <br/>
CONTACT : $phone  <br/>
EMAIL : $email <br/>
MESSAGE : $message <br/>
</td>
</tr>
<tr>
<th style='background-color:#000;color:#fff;padding:20px;'><center>18 F/F, Village Chilia, Near Shiv Mandir, Delhi -110091 (India)<br/> +91-8368333966<br/>  marketing@dpsadelhi.com
</center></th>
</tr>
</table>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$from."\n";
$headers.= "Cc: " . $mailcc ."\n";
$to='marketing@dpsadelhi.com';
mail($to,$subject,$msg,$headers);
$msg1="<table style='border:3px solid #000'>
<tr>
<th style='background-color:#000;color:white;font-size:20px;padding:10px;'>
<a href='https://dpsadelhi.com/'><img
src='https://dpsadelhi.com/assets/images/logo/logo-black.png' style='max-width:200px'/></a>
</th>
</tr>
<tr>
<th  style='background-color:#000;color:white;padding:10px;'>
<center>
Dear $name <br/>
</center>
</th>
</tr>
<tr>
<td style='padding:30px;'>
<center><b>Your Enquiry is Submitted<br/><br>
Thanks for connecting, we will reach out soon.</b></center>
</td>
</tr>

<tr>
<th style='background-color:#000;color:#fff;padding:20px;'><center>Rohini , Delhi - 110086 (India)<br/> +91 987-327-2462<br/>  marketing@dpsadelhi.com
</center></th>
</tr>
</table>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$to."\n";
$headers.= "Cc: " . $mailcc ."\n";
$to1=$email;
mail($to1,$subject,$msg1,$headers);
echo "<script>alert('Thanks for connecting, we will reach out soon.');
location.href='index.php';</script>";
}
else
{
echo "<script>history.back(-1)</script>";
}
?>