<?php
"ssss";
 $sale=$_REQUEST['sale'];
 $Flat=$_POST['checkbox_Flat'];
 $House=$_POST['checkbox_Hou'];
 $Purpose=$_POST['checkbox_Pur'];
 $Converted_house=$_REQUEST['checkbox_Con_hou'];
 $commercial_premises=$_POST['checkbox_Con_pre'];
 $Freehold=$_POST['checkbox_Fre'];
 $Commonhold=$_POST['checkbox_Com'];
 $Leasehold=$_POST['checkbox_Lea'];
 $registered_estate=$_POST['checkbox_reg'];
 $registered_estate1=$_POST['checkbox_Part'];
 $unregistered_estate=$_POST['checkboxUN1'];
 $unregistered_estate1=$_POST['checkboxUN2'];
 $owner=$_POST['checkbox_own'];
 $representative=$_POST['checkbox_repres'];
 $representative1=$_POST['checkbox_represent'];
 $checkbox_Oth=$_POST['checkbox_Oth'];
 $checkbox_vac=$_POST['checkbox_vac'];
 $checkbox_Sec=$_POST['checkbox_Sec'];
 include("include.php");
?>

<?php
#mail function start
$to                 = "sunny_21084@yahoo.com";
    $from               ="kevin@yahoo.com";
    $subject            = "Hello! This is HTML email";
    $message            = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body
{
margin:0px;
padding:0px;
}

.header2
{
width:831px;
height:45px;
background-color:#7e8a00;
font-family:Arial, Helvetica, sans-serif;
font-size:20px;
font-weight:bold;
color:#FFFFFF;
padding-top:20px;
padding-left:10px;
}


.info2
{
width:500px;
height:150px;
margin:0 auto;
border: solid 1px #000000;
padding-top:15px;
}
.info3
{
width:831px;
height:auto;
margin:0 auto;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#000000;
line-height:19px;
margin-top:25px;
}


/*Header Portion Begin*/

#wrapper
{
width:909px;
height:auto;
margin:0 auto;
position:relative;
}
#mainarea
{
width:841px;
height:auto;
margin:0 auto;
margin-top:30px;
position:relative;
}
#header
{
width:841px;
height:146px;
background-color:#7e8a00;
font-family:Arial, Helvetica, sans-serif;
font-size:45px;
font-weight:bold;
color:#FFFFFF;
text-align:center;
padding-top:60px;
}
.navi
{
width:841px;
height:33px;
background-color:#596200;
}

/*Header Portion End*/

/*First Div begin*/

#first
{
width:841px;
height:auto;
margin-top:25px;
position:relative;
}
.info
{
width:781px;
height:auto;
margin:0 auto;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#000000;
line-height:19px;
padding-top:15px;
}
.address_area
{
width:781px;
height:165px;
margin:0 auto;
margin-top:25px;
}
.address
{
width:344px;
height:165px;
float:left;
border:solid 1px #000000;
}
.address_value
{
width:434px;
height:165px;
float:left;
border-bottom:#000000 solid 1px;
border-top:#000000 solid 1px;
border-right:#000000 solid 1px;
background-color:#7e8a00;
}
.add_txtarea
{
width:420px;
height:154px;
background-color:#7e8a00;
border:none;
color:#FFFFFF;
padding:3px 5px 5px 3px;
}
.address_txt
{
width:auto;
height:auto;
float:left;
margin-top:11px;
margin-left:11px;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#000000;
font-weight:bold;
}
.seller_area
{
width:781px;
height:35px;
margin:0 auto;
margin-top:25px;
}
.seller
{
width:344px;
height:35px;
float:left;
border:solid 1px #000000;
}
.seller_value
{
width:434px;
height:35px;
float:left;
border-bottom:#000000 solid 1px;
border-top:#000000 solid 1px;
border-right:#000000 solid 1px;
background-color:#7e8a00;
}
.seller_txt
{
width:auto;
height:auto;
float:left;
margin-top:9px;
margin-left:11px;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#000000;
font-weight:bold;
}
.seller_txtarea
{
width:410px;
height:26px;
background-color:#7e8a00;
border:none;
color:#FFFFFF;
padding:3px 5px 5px 3px;
}
.about_form
{
width:781px;
height:35px;
margin:0 auto;
margin-top:50px;
background-color:#596200;
border:solid 1px #000000;
}
.about_heading
{
width:auto;
height:auto;
float:left;
margin-top:10px;
margin-left:11px;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#ffffff;
font-weight:bold;
}
.about_txt
{
width:761px;
height:auto;
margin:0 auto;
border-bottom:#000000 solid 1px;
border-left:#000000 solid 1px;
border-right:#000000 solid 1px;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#000000;
padding:10px;
}

/*First Div End*/

/*Second Div begin*/

#second
{
width:841px;
height:auto;
margin-top:50px;
position:relative;
}
.main_head
{
width:841px;
height:50px;
float:left;
background-color:#7e8a00;
margin-bottom:25px;
}
.main_txt
{
width:auto;
height:auto;
float:left;
margin-top:15px;
margin-left:15px;
font-family:Arial, Helvetica, sans-serif;
font-size:20px;
color:#ffffff;
font-weight:bold;
}
.property
{
width:781px;
height:37px;
margin:0 auto;
margin-top:25px;
background-color:#596200;
clear:both;
}
.property2
{
width:781px;
height:37px;
margin:0 auto;
background-color:#596200;
clear:both;
}
.property_txt
{
width:auto;
height:auto;
float:left;
font-family:Arial, Helvetica, sans-serif;
font-size:15px;
color:#ffffff;
padding: 11px 0 0 11px;
font-weight:bold;

}
.pro_value
{
width:781px;
height:auto;
margin:0 auto;
clear:both;
}

.table_class {
	PADDING-RIGHT: 3px; PADDING-LEFT: 3px; FONT-SIZE: 9pt; MARGIN-BOTTOM: 0px; COLOR: #000000; LINE-HEIGHT: 17px; FONT-FAMILY: Arial Unicode MS,Myriad,ms sans-serif,Helvetica, Arial, sans-serif; BORDER-COLLAPSE: collapse
}
.table_class TD {
	BORDER-RIGHT: #000000 1px solid; PADDING-RIGHT: 7px; PADDING-LEFT: 10px; PADDING-BOTTOM: 7px; BORDER-LEFT:  #000000 1px solid; PADDING-TOP: 7px; BORDER-BOTTOM:  #000000 1px solid; BORDER-TOP:  #000000 1px solid
}
.table_class2 {
	PADDING-RIGHT: 3px; PADDING-LEFT: 3px; FONT-SIZE: 9pt; MARGIN-BOTTOM: 30px; COLOR: #505254; LINE-HEIGHT: 17px; FONT-FAMILY: Arial Unicode MS,Myriad,ms sans-serif,Helvetica, Arial, sans-serif; BORDER-COLLAPSE: collapse
}
.table_class2 TR {
	BORDER-RIGHT: #d7e6ea 1px solid; PADDING-RIGHT: 7px; PADDING-LEFT: 10px; PADDING-BOTTOM: 7px; BORDER-LEFT: #d7e6ea 1px solid; PADDING-TOP: 7px; BORDER-BOTTOM: #d7e6ea 1px solid
}
.table_class2 TD {
	PADDING-RIGHT: 7px; PADDING-LEFT: 10px; PADDING-BOTTOM: 7px; PADDING-TOP: 7px;
}
.table_border {
	BORDER-RIGHT: #ffffff 0px solid; BORDER-TOP: #ffffff 0px solid; FONT-SIZE: 9pt; BORDER-LEFT: #ffffff 0px solid; COLOR: #434343; LINE-HEIGHT: 17px; BORDER-BOTTOM: #ffffff 1px solid; FONT-FAMILY: Arial Unicode MS,Myriad,ms sans-serif,Helvetica, Arial, sans-serif; BORDER-COLLAPSE: collapse
}
.table_border TD {
	PADDING-RIGHT: 7px; PADDING-LEFT: 10px; PADDING-BOTTOM: 7px; PADDING-TOP: 7px
}
.table_new TD TABLE{
border:none;
}
.tbl_bor{
border:0px;
}

/*Second Div end*/

/*third Div begin*/

#third
{
width:841px;
height:auto;
margin-top:50px;
}
#fourth
{
width:841px;
height:auto;
margin-top:50px;
}
#fifth
{
width:841px;
height:auto;
margin-top:50px;
}
#sixth
{
width:841px;
height:auto;
margin-top:50px;
}

.table_class tr td table tr td{
border:none;
padding:0px;

}
.space
{
line-height:3px;
}

/*Sales statement page*/

.property2
{
width:831px;
height:37px;
margin:0 auto;
background-color:#596200;
clear:both;
}
.pro_value2
{
width:831px;
height:auto;
margin:0 auto;
clear:both;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: Property Infor mation Questionnaire ::</title>
</head>

<body>

	<div id="wrapper">
		<div id="mainarea">
			<div class="header2">&nbsp;&nbsp; Sale  Statement </div>
			<!--First Div begin-->
<div id="first">
				<div class="info"><div class="info2"><textarea name="sale" cols="" rows="" style="width:98%; border:none; height:98%;">'.$sale.'</textarea></div></div>
				<div class="info3"><strong>About this form:</strong><br/>
				  <br/>
                    <strong>1.</strong>	Under the Home Information Pack (No.2) Regulations 2007, you must provide the following information in <br/>your Home Information Pack and may use this form to do so.<br/><br/>
                    <strong>2.</strong>	Someone else can complete this form on behalf of a seller.<br/><br/>
                    <strong>3.</strong>	If the property has not yet been completed or converted, please answer the questions as if the property <br/>has been completed or converted.<br/><br/>
        <strong>4.</strong>	Please answer all questions by checking the relevant box and adding any further information asked for.<br/> Where alternatives are offered, please indicate which one (or more) applies.</div>
				</div>
<!--First Div End-->

<!--Second Div begin-->

			<div id="second">
			  <div class="pro_value2"><table width="831" border="0" cellpadding="0" cellspacing="0" class="table_class">
  <tr bgcolor="#7E8A00">
    <td><span class="style1">1</span></td>
    <td><span class="style1">2 Statement</span></td>
  </tr>
  <tr>
    <td width="389"><strong>1.</strong>Is  the property a flat or a house? </td>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_Flat" value="Flat"'.$Flatc.' /></td>
        <td>Flat  (incl. maisonette) <strong>or</strong></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Hou" value="House"'.$Housec.' /></td>
        <td>House  (incl. bungalow)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><strong>2. </strong>If  it is a flat, what type of building is it in?</td>
    <td ><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_Pur" value="Purpose"'.$Purpose1.' /></td>
        <td>Purpose  built block</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Con_hou" value="Converted house"'.$Converted_housec.' /></td>
        <td>Converted house <strong>or</strong></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Con_pre" value="Conversion  of commercial premises"'.$commercial_premisesc.' /></td>
        <td>Conversion  of commercial premises</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><strong>3. </strong>The  property is (or will be):</td>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_Fre" value="Freehold"'.$Freeholdc.' /></td>
        <td>Freehold</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Com" value="Commonhold"'.$Commonholdc.' /></td>
        <td>Commonhold</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Lea" value="Leasehold"'.$Leaseholdc.' /></td>
        <td>Leasehold  starting (or likely to start) from <a name="Text2" id="Text2"></a>&ensp;&ensp;&ensp;&ensp;&ensp;  and  with </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>years  left on the lease</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><strong>4.</strong>The  title to the interest in the property being sold is:</td>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_reg" value="The  whole of a registered estate"'.$registered_estatec.' /></td>
        <td>The  whole of a registered estate</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Part" value="Part of a registered estate"'.$registered_estate1c.' /></td>
        <td>Part of a registered estate</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkboxUN1" value="The  whole of an unregistered estate"'.$unregistered_estatec.' /></td>
        <td>The  whole of an unregistered estate</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkboxUN2" value="Part  of an unregistered estate"'.$unregistered_estate1c.' /></td>
        <td>Part  of an unregistered estate</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><strong>5.</strong> Name(s)  of seller </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><strong>6.</strong>  The  capacity of the seller</td>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_own" value="The  owner or owners"'.$ownerc.' /></td>
        <td>The  owner or owners</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_repres" value="A representative with the  necessary authority to sell the property for an owner who has died"'.$representativec.' /></td>
        <td>A representative with the  necessary authority to sell the property for an owner who has died</td>
      </tr>
      <tr>
        <td valign="top"><input type="checkbox" name="checkbox_represent" value="A  representative with the necessary authority to sell the property for a living  owner (for example with a power of attorney)"'.$representative1c.' /></td>
        <td>A  representative with the necessary authority to sell the property for a living  owner (for example with a power of attorney)</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="checkbox_Oth" value="Other  (please give details):"'.$checkbox_Othc.' /></td>
        <td>Other  (please give details):</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><strong>7.</strong> The  property is being sold:</td>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="18"><input type="checkbox" name="checkbox_vac" value="With  vacant possession"'.$checkbox_vacc.' /></td>
        <td>With  vacant possession</td>
      </tr>
      <tr>
        <td valign="top"><input type="checkbox" name="checkbox_Sec" value="Section  171((2) of the Housing Act 2004 applies and part to the property is not being  sold with vacant possession.&nbsp; Explanation  of circumstances as follows:"'.$checkbox_Secc.' /></td>
        <td>Section  171((2) of the Housing Act 2004 applies and part to the property is not being  sold with vacant possession.&nbsp; Explanation  of circumstances as follows: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. </td>
      </tr>
    </table></td>
  </tr>
</table>

			  </form>
                <br />
			  </div>
			  
			
		  </div>
        </div>
	</form>
	</div>
</body>
</html>';

//end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
 $chks= mail($to, $subject, $message, $headers);
if($chks)
{
echo "Mail has been sent";
}

#End
?>


