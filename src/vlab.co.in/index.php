<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Virtual Labs</title>
<script language="JavaScript1.0" src="javascript/common_js.js" type="text/javascript"></script>
<script language="JavaScript1.0" src="javascript/templatemo_image_fader.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript1.0" src="javascript/validation.js" type="text/javascript"></script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="fadeslideshow.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [942, 221], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/1.jpg", "", "", ""],
		["images/2.jpg", ""],
		["images/3.jpg"],
		["images/4.jpg"],
		["images/5.jpg"],
		["images/6.jpg"],
		["images/7.jpg"],
		["images/8.jpg"],
		["images/9.jpg"],
		["images/10.jpg"],
		["images/11.jpg"],
		["images/12.jpg"]
		 //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>
<!-- google anylytics code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16994102-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
function highlight()
{
	if(document.getElementById('fontred').style.color!="red")
	{
		document.getElementById('fontred').style.color="red";
		document.getElementById('fontred').style.fontWeight="bold";
	}
	else
	{
		document.getElementById('fontred').style.color="#430079";
		document.getElementById('fontred').style.fontWeight="normal";
	}
}
setInterval(function (){highlight()},1000);
</script>
<script type="text/javascript" language="javascript" src="javascript/jquery-1.9.1.js"></script>
<script type="text/javascript" language="javascript" src="javascript/marquee.js"></script>
<script type="text/javascript" language="javascript" src="javascript/jquery.pause.min.js"></script>
<script type="text/javascript" language="javascript" src="javascript/jquery.easing.1.3.js"></script>
<script>
$('.marquee').marquee({});
</script>
</head>

<body>

<div align="center">
<div style="width:100%; height:300px; background-image:url(images/bk.jpg); position:absolute">  </div> 
  <div style="width:100%; height:300px; position:absolute">
  <table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;">
  <tr><td>
 <table width="941" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF;">
    


    <tr>
      <td width="500" rowspan="2" align="left" valign="top">
	  	  <div style="background-image:url(images/logo.jpg); background-repeat:no-repeat; width:497px; height:84px;cursor: pointer;" onClick="window.location.href='index.php';">
	  <div style="margin:15px 0px 0px 85px; padding:6px 0px 0px 0px; font:bold 23px Arial;">VIRTUAL LABS</div>
	  	  <div style="margin:10px 0px 0px 83px; color:#0864a7; font:bold 13px Arial;">An Initiative of Ministry of Human Resource Development (MHRD)<br />
		  Under the National Mission on Education through ICT</div>
	  </div>
	  	  </td>
      <td width="441" ><div align="right"><a href="index.php"><img src="images/home_03.jpg" alt="" width="23" height="25" border="0" /><img src="images/home_04.jpg" alt="" width="73" height="25" border="0" /></a></div></td>
    </tr>
    <tr>
      <td height="83" valign="bottom" style="padding-bottom:9px;">
	  	<!--<form method="post" action="search.php" style=" padding:0px; margin:0px;" onsubmit="return chk_login();" >-->
				<form method="post" action="search.php" style=" padding:0px; margin:0px;" onsubmit="return check_search();" name="search_form">
				
			<!-- search table start -->
			 	
	<table width="440" height="58" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="400" colspan="2" align="right" style="background-image:url(images/search.jpg);padding-top:5px; " >
		  <table width="420" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="64" align="left" class="searchtitle">&nbsp;</td>
              <td width="145" height="21" align="left" class="searchtitle">Name of Lab</td>
              <td width="144" align="left" class="searchtitle">Broad Area </td>
              <td width="66">&nbsp;</td>
            </tr>
            <tr valign="top">
              <td>&nbsp;</td>
              <td height="23" align="left"><input name="expe" id="expe" type="text" class="searchtextbox" style="width:110px;" value=""></td>
              <td align="left"><select name="cat" class="searchdd">
		<option value="0">Any</option><option value="1"  >Electronics & Communications</option><option value="2"  >Computer Science & Engineering</option><option value="3"  >Electrical Engineering</option><option value="4"  >Mechanical Engineering</option><option value="5"  >Chemical Engineering</option><option value="6"  >Biotechnology and Biomedical Engineering</option><option value="7"  >Civil Engineering</option><option value="8"  >Physical Sciences</option><option value="9"  >Chemical Sciences</option>		</select>  </td>
		 <td align="center" valign="middle"><input type="hidden" name="s_submit" value="submit" /><a href="javascript:void(0);" onClick="document.search_form.submit();" style=" text-decoration:none; color: white; font-family: Arial;font-size: 12px;">Search</a></td>
            </tr>
			<input type="hidden" name="ins" value="">
          </table>
		  
	 
			<!-- search table end --></td>
        </tr>
      </table>
		</form></td>
    </tr>
    <tr>
      <td colspan="2" align="right" style="background-color:#8ed9f8;"><img src="images/home_19.jpg" width="115" height="9" alt="" /></td>
    </tr>
    <tr>
      <td colspan="2">
	  <div id="fadeshow1"></div>


	  </td>
    </tr>
    <tr>
      <td colspan="2" style="background-image:url(images/home_25.jpg);" align="left"><img src="images/home_24.jpg" width="191" height="12" alt="" /></td>
    </tr>


  </table>

</td></tr>
    
    <tr>
      <td colspan="2" style="background-image: url(images/home_143.jpg); background-repeat:no-repeat; background-position:bottom right;"><table width="941" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1" style="background-color:#D9E0DD;"><img src="images/home_27.jpg" width="1" height="37" alt="" /></td>
          <td width="205" valign="top"><table width="205" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="36" colspan="2" align="left" class="lefthead" style="background-image:url(images/home_38.jpg); background-repeat:no-repeat; background-position:bottom; padding-left:12px;">PARTICIPATING INSTITUTES</td>
            </tr>
            <tr>
              <td height="12" colspan="2"></td>
              </tr>
            <tr>
              <td width="57" align="center"><img src="images/home_50.jpg" width="50" height="48" alt="" /></td>
              <td width="148" align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=001" class="uni_name">IIT  DELHI</a></div></td>
            </tr>
			<tr align="center">
              <td height="8" colspan="2"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_56.jpg" width="50" height="48" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=003" class="uni_name">IIT  BOMBAY</a></div></td>
            </tr>
            <tr align="center">
              <td height="8" colspan="2"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_66.jpg" width="50" height="47" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=002" class="uni_name">IIT  KANPUR</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_75.jpg" width="50" height="48" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=004" class="uni_name">IIT  KHARAGPUR</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_82.jpg" width="50" height="47" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=005" class="uni_name">IIT  MADRAS</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_86.jpg" width="50" height="42" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=006" class="uni_name">IIT  ROORKEE</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_92.jpg" width="50" height="44" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=007" class="uni_name">IIT  GUWAHATI</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/iiith_logo.jpg" width="50" height="51" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=008" class="uni_name">IIIT  HYDERABAD</a></div></td>
            </tr>
			<tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/home_109.jpg" width="50" height="52" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=009" class="uni_name">AMRITA  UNIVERSITY</a></div></td>
            </tr>
            <tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/dayalbagh.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=010" class="uni_name">DAYALBAGH UNIVERSITY</a></div></td>
            </tr>
			<tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/nitk_logo.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=011" class="uni_name">NIT KARNATAKA</a></div></td>
            </tr><tr>
              <td height="8" colspan="2" align="center"></td>
              </tr>
            <tr>
              <td align="center"><img src="images/ceo_pune.jpg" width="50" height="46" alt="" /></td>
              <td align="left" id="vrlinks_left_panel"><div><a href="institute_detail.php?ins=012" class="uni_name">COE PUNE</a></div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              </tr>
          </table>
		  </td>
          <td width="1" style="background-color:#D8D8D8;"><img src="images/spacer.gif" width="1" height="1" /></td>
          <td width="538" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" colspan="2" bgcolor="#D3E0E9">&nbsp;</td>
            </tr>
            <tr>
              <td height="38" colspan="2" align="left" class="page_head" style="background-image: url(images/home_39.jpg); background-repeat:no-repeat; padding-left:20px;">Objectives of the Virtual Labs:</td>
            </tr>
			<tr>
              <td width="5%" align="center">&nbsp;</td>
              <td width="95%" align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;"><img src="images/home_96.jpg" width="8" height="21" alt="" /></td>
              <td height="30" align="left" class="bodytext">To provide remote-access to Labs in various disciplines of Science and Engineering.  These Virtual Labs would cater to students at the undergraduate level, post graduate level as well as to research scholars.				</td>
            </tr>
			<tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;"><img src="images/home_96.jpg" width="8" height="21" alt="" /></td>
              <td height="30" align="left" class="bodytext">To enthuse students to conduct experiments by arousing their curiosity.  This would help them in learning basic and advanced concepts through remote experimentation.</td>
            </tr>
			<tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;"><img src="images/home_96.jpg" width="8" height="21" alt="" /></td>
              <td height="30" align="left" class="bodytext">To provide a complete Learning Management System around the Virtual Labs where the students can avail the various tools for learning, including additional web-resources, video-lectures, animated demonstrations and self evaluation.</td>
            </tr>
			<tr>
              <td height="20" align="center" valign="top" style="padding-top:2px;"><img src="images/home_96.jpg" width="8" height="21" alt="" /></td>
              <td height="30" align="left" class="bodytext">To share costly equipment and resources, which are otherwise available to limited number of users due to constraints on time and geographical distances.</td>
            </tr>
			<tr>
              <td height="20" align="center">&nbsp;</td>
              <td height="25" align="left">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top" class="page_head" style="background-image:url(images/home_54.jpg); background-position:left top; background-repeat:no-repeat;  padding-left:20px;">The Philosophy&nbsp;<a href="javascript:void(display_answer('Chevrolet'));"><img src="images/expand.gif" name="Chevroletbtn" width="61" height="12" border="0" id="Chevroletbtn" /></a></td>
            </tr>
			
            <tr>
              <td height="20" colspan="2" align="left" class="bodytext" style="padding-left:20px; padding-right:10px;"><div id="Chevrolet" style="display:none" align="justify" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left"><div align="justify">Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource. Web-based and video-based courses address the issue of teaching to some extent. Conducting joint experiments by two participating institutions and also sharing costly resources has always been a challenge. With the present day internet and computer technologies the above limitations can no more hamper students and researchers in enhancing their skills and knowledge. Also, in a country such as ours, costly instruments and equipment need to be shared with fellow researchers to the extent possible. Web enabled experiments can be designed for remote operation and viewing so as to enthuse the curiosity and innovation into students. This would help in learning basic and advanced concepts through remote experimentation.Today most equipment has a computer interface for control and data storage. It is possible to design good experiments around some of this equipment which would enhance the learning of a student. Internet-based experimentation further permits use of resources � knowledge, software, and data available on the web, apart from encouraging skillful experiments being simultaneously performed at points separated in space (and possibly, time). </div></td>
                </tr>
              </table>
              </div></td>
            </tr>
            <tr>
              <td height="20" colspan="2" align="left" style="padding-left:20px; padding-right:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="left" valign="top" class="page_head" style="background-image:url(images/home_54.jpg); background-position:left top; background-repeat:no-repeat;  padding-left:20px;">Salient Features&nbsp;<a href="javascript:void(display_answer('bmw'));"><img src="images/expand.gif" name="bmwbtn" width="61" height="12" border="0" id="bmwbtn" /></a></td>
            </tr>
            
			<tr>
              <td height="20" colspan="2" align="left" valign="top"><div id="bmw" style="display:none;" align="justify"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
              <td width="5%" height="20" align="center" valign="top"><img src="images/home_96.jpg" width="8" height="21" alt="" /></td>
              <td width="95%" align="left" class="sifeatures">Virtual Labs will provide to the students the result of an experiment by one of the following methods (or possibly a combination)</td>
            </tr>
			<tr>
              <td width="5%" height="20" align="right" valign="top" class="bodytext">-&nbsp;</td>
              <td width="95%" align="left" class="bodytext">Modeling the physical phenomenon by a set of equations and carrying out simulations to yield the result of the particular experiment.  This can, at-the-best, provide an approximate version&nbsp; of the &lsquo;real-world&rsquo; experiment.</td>
            </tr>
			<tr>
              <td width="5%" height="20" align="right" valign="top" class="bodytext">-&nbsp;</td>
              <td width="95%" align="left" class="bodytext">Poviding measured data for  virtual lab experiments corresponding to the data previously obtained by  measurements on an actual system.</a></td>
            </tr>
			<tr>
              <td width="5%" height="20" align="right" valign="top" class="bodytext">-&nbsp;</td>
              <td width="95%" align="left" class="bodytext">Remotely triggering an experiment in an actual lab and providing the student the result of the experiment through the computer interface.  This would entail carrying out the actual lab experiment remotely.<a href="#" class="readmore"></a></td>
            </tr>
			<tr>
              <td width="5%" height="15" align="right" valign="top" class="bodytext"></td>
              <td width="95%" height="15" align="left" class="bodytext"></td>
            </tr>
			<tr>
              <td width="5%" height="20" align="center" valign="top" class="bodytext"><img src="images/home_96.jpg" width="8" height="21" alt="" />&nbsp;</td>
              <td width="95%" align="left" class="sifeatures">Virtual Labs will be made more effective and realistic by providing additional inputs to the students like accompanying audio and video streaming of an actual lab experiment and equipment.</td>
            </tr>
			<tr>
              <td width="5%" height="15" align="center" valign="top" class="bodytext"></td>
              <td width="95%" height="15" align="left" class="sifeatures"></td>
            </tr>
			<tr>
              <td width="5%" height="20" align="center" valign="top" class="bodytext"><img src="images/home_96.jpg" width="8" height="21" alt="" />&nbsp;</td>
              <td width="95%" align="left" class="sifeatures">For the &lsquo;touch and feel&rsquo; part, the students can possibly visit an actual laboratory for a short duration.</td>
            </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                
              </table></div></td>
            </tr>
		   <tr>
              <td height="35" colspan="2" align="left" valign="top" class="page_head" nowrap><table><tr><td><a href="lab_ready_for_use.php" title="labs ready for launch"><img src="images/lab_ready.jpg" alt="lab ready for launch" border="0" /></a></td><td nowrap style="padding-top: 15px;"><a href="lab_ready_for_use.php" title="labs ready for launch" style="color: #FF0000;font-size: 11px; text-decoration: none;">Click here</a></td></tr></table></td>
            </tr>
           <tr>
              <td height="20" colspan="2" align="left" style="padding-left:20px; padding-right:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td height="35" colspan="2" align="left" valign="top" class="page_head" style="padding-left:20px; padding-right:5px; background-image:url(images/home_122.jpg); background-repeat:no-repeat;">Broad Areas of Virtual Labs</td>
            </tr>
            <tr>
              <td height="10" colspan="2" align="left">
			  <table width="527" border="0" cellspacing="0" cellpadding="0">
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=1">Electronics & Communications</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=2">Computer Science & Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=3">Electrical Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=4">Mechanical Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=5">Chemical Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=6">Biotechnology and Biomedical Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=7">Civil Engineering</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=8">Physical Sciences</a></div></td>
              </tr>
			  			  <tr>
                  <td width="500" id="vrlinks" colspan="2"><div style="padding-left:20px"><a href="ba_labs_all.php?id=9">Chemical Sciences</a></div></td>
              </tr>
			                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="2" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
            
            
            <tr>
              <td height="20" colspan="2" align="left" style="padding-left:20px; padding-right:5px;">&nbsp;</td>
            </tr>
          </table></td>
          <td width="8" valign="bottom" style="background-image:url(images/home_31.jpg); background-repeat:repeat-y;"><img src="images/blue_bar.jpg" width="9" height="14" /></td>
          <td width="203" align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="15"></td>
            </tr>
            
            <tr>
              <td height="21" class="announce_head" style="background-image:url(images/home_78.jpg); background-repeat:no-repeat;">Announcements</td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td align="center"><table width="181" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="images/home_46.jpg" width="181" height="8" alt="" /></td>
                </tr>
                <tr>
                  <td align="left" class="bord" style="padding-left:3px; padding-right:3px;">
					<marquee id="scroll_news" direction="up" scrollamount="2">
					<div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
				
				  				  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/feedback.html">1. Click here for the Lab Feedback Form</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="https://www.youtube.com/watch?v=mVBYNXLaDdg"> 2. Visit for Virtual Labs on YouTube</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/Registration.html">3. Click here for NCs Registration</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/loginform.html">4. Click here for NCs Login</a>.                    </span><br /><br />
									  <span class="sifeatures"><a style="text-decoration:none" href="http://118.102.191.38/feedback/login.html">5. Click here for VLab Team Login</a>.                    </span><br /><br />
													
				</div>		</td>
                </tr>
                <tr>
                  <td><img src="images/home_74.jpg" width="181" height="7" alt="" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td><img src="images/home_107.jpg" width="186" height="3" alt=""></td>
            </tr>
            <tr>
              <td height="10"></td>
            </tr>
            <tr>
              <td align="center"><!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="182" height="159">
                <param name="movie" value="../images/left_lab.swf" />
                <param name="quality" value="high" />
                <embed src="../images/left_lab.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="182" height="159"></embed>
              </object> 
			  --> <script type="text/javascript">

				new fadeshow(fadeimages, 182, 159, 0, 3000, 0, "R")
 
                  </script></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" id="vrlinks_right_panel"><div id="fontred" onclick="window.open('http://118.102.191.38/feedback/feedback.html','_blank')" style="margin-left:15px;cursor:pointer">LAB FEEDBACK FORM</div></td>
                </tr>

				<tr>
                  <td align="left" id="vrlinks_right_panel"><div><a href="faq.php" class="sifeatures">FAQ</a></div></td>
                </tr>

                <tr>
                  <td align="left" id="vrlinks_right_panel"><div><a href="http://www.sakshat.ac.in" class="sifeatures" target="_blank">SHAKSHAT PORTAL</a></div></td>
                </tr>
               
              </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><img src="images/home_107.jpg" width="186" height="3" alt="" /></td>
            </tr>
            <tr>
              <td align="left" class="contcthead">Contact Us</td>
            </tr>
            <tr>
              <td height="10" align="left" valign="middle"><img src="images/home_107.jpg" width="186" height="3" alt="" /></td>
            </tr>
            <tr>
              <td align="left" valign="top" class="bodytext"><a href="mailto:support@vlab.co.in" class="mail">support@vlab.co.in</a></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
</td>
        </tr>
      </table></td>
    </tr>
    <tr>
   <td height="18" colspan="100%" width="100%" bgcolor="#a7c0d4">&nbsp;	</td>
</tr>
<tr>
   <td height="15" colspan="100%" width="100%" bgcolor="#356ba1" align="center"><span style="color:#a7c0d4; display:block; float:left; padding-left:10px">This work is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0" class="white"  target="_blank"><strong>Creative Commons (CC-BY-NC-SA-3.0)</strong></a></span>
   <span style="display:block; float:right; padding-right:10px"> <a href="disclaimer.php" class="white" ><strong>Disclaimer</strong></a> </span>
   
    </td>
</tr>

	<style>
	
	a.white:link, a.white:visited, a.white:active{ color:#a7c0d4; text-decoration:none;}
	a.white:hover{color:#ffffff;}
	</style>
	
	<script>
		function chk_login()
		{
			if('')
			{
				return true;
			}
			else
			{
				alert('Please login to make a search.');
				return false;
			}
		}
	</script>    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
<script language="javascript">
function showSilent()
{

  if(document.getElementById("silent").style.display=="none"){
  
  	document.getElementById("silent").style.display="block";
  } else {
  
   document.getElementById("silent").style.display="block";
  }


}

</script>