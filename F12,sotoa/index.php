<HTML>
   <link rel="stylesheet" type="text/css" href="OpSeminar.css"> 
  <HEAD><TITLE>Seminar in Operator Theory and Operator Algebras - Spring 2012, University of Virginia</TITLE></HEAD>
  <BODY bgcolor="white">

<center>
<IMG WIDTH=280 SRC="uvaLogo.gif" border="0"><br>

<FONT SIZE=5><B>Seminar in operator theory and operator algebras (MATH 9310)</b><br>
Fall 2012
</font><BR><BR>
<font size=4>

The seminar is organized by <a href="http://people.virginia.edu/~des5e">David Sherman</a>.  We meet Tuesdays 3:30-4:30 in Kerchof 326.<br><br>

</center>

<br>

<center>
<TABLE WIDTH="780" BORDER="2" CELLSPACING="2" CELLPADDING="2">

<?php

/////////
//Configuration
//
date_default_timezone_set('America/New_York');
$script_tz = date_default_timezone_get();

$start=urlencode(date(DATE_ATOM,strtotime('1 August 2012 00:00')));
$end=urlencode(date(DATE_ATOM,strtotime('15 December 2012 23:59')));

// Your private feed - which you get by right-clicking the 'xml' button in the 'Private Address' section of 'Calendar Details'.
if (!isset($calendarfeed)) {$calendarfeed = "http://www.google.com/calendar/feeds/dd0lvqfa6j2vtbocbhnsp3u380%40group.calendar.google.com/private-09b0e771ca147dd37de1d7b90b863098/basic";}

// Date format you want your details to appear
$dateformat="j M"; // 10 Mar - see http://www.php.net/date for details
$timeformat="g.ia"; // 12.15am

// How you want each thing to display.
// By default, this contains all the bits you can grab. You can put ###DATE### in here too if
// you want to, and disable the 'group by date' below.

$event_display_abstract_noURL="
<tr>
\t<td width=\"115\" align=\"left\" valign=\"middle\"><h3>###DATE###</h3></td>
\t<td width=\"665\" valign=\"top\"><h4><b>###SPEAKER###</b> ###INSTITUTION###</h4>
\t<h4>###TITLE###</h4>
\t<p>###ABSTRACT###</p></td>
</tr>";

$event_display_noabstract_noURL="
<tr>
\t<td width=\"115\" align=\"left\" valign=\"middle\"><h3>###DATE###</h3></td>
\t<td width=\"665\" valign=\"top\"><h4><b>###SPEAKER###</b> ###INSTITUTION###</h4>
\t<h4>###TITLE###</h4></td>
</tr>";

$event_display_abstract_URL="
<tr>
\t<td width=\"115\" align=\"left\" valign=\"middle\"><h3>###DATE###</h3></td>
\t<td width=\"665\" valign=\"top\"><h4><a href=\"###URL###\" target=\"new\"><b>###SPEAKER###</b></a> ###INSTITUTION###</h4>
\t<h4>###TITLE###</h4>
\t<p>###ABSTRACT###</p></td>
</tr>";

$event_display_noabstract_URL="
<tr>
\t<td width=\"115\" align=\"left\" valign=\"middle\"><h3>###DATE###</h3></td>
\t<td width=\"665\" valign=\"top\"><h4><a href=\"###URL###\" target=\"new\"><b>###SPEAKER###</b></a> ###INSTITUTION###</h4>
\t<h4>###TITLE###</h4></td>
</tr>";

//
//End of configuration block
/////////

// Form the XML address.
$calendar_xml_address = str_replace("/basic","/full?start-min=$start&start-max=$end&orderby=starttime&sortorder=a",$calendarfeed);

$xml = simplexml_load_file($calendar_xml_address);

//Build the titles et al Table
$items_shown=0;
$xml->asXML();

foreach ($xml->entry as $entry){
    $ns_gd = $entry->children('http://schemas.google.com/g/2005');
    // These are the dates we'll display
    $gCalDate = date($dateformat,strtotime($ns_gd->when->attributes()->startTime));

    //Extract the abstract
    $abstract=$entry->content;
    //Extract the URL (this is places in the "where" field and is otherwise unformatted)      
    $url=$ns_gd->where->attributes()->valueString;           
    if ($abstract == "") {
	if ($url == "") {
		$temp_event=$event_display_noabstract_noURL;
	} else {
		$temp_event=$event_display_noabstract_URL;
	};
    } else {
	if ($url != "") {
		$temp_event=$event_display_abstract_URL;
	} else {
		$temp_event=$event_display_abstract_noURL;
	};
    };
    
    $gcalTitle=$entry->title;
    //The title, speaker & instution are in the title field: Speaker (Institution) - Title
    $title_speaker_institution=preg_split("/ - /",$gcalTitle);
    //This strips apart the speaker and institution parts. If there is no institution, then it returns the empty string for [1].
    $speaker_institution=explode("(",$title_speaker_institution[0]);
    $speaker=$speaker_institution[0];
    $institution=$speaker_institution[1];
    if ($institution != "") {
	$institution="(".$institution;
    }
    $temp_event=str_replace("###SPEAKER###",$speaker,$temp_event);
    $temp_event=str_replace("###INSTITUTION###",$institution,$temp_event);
    $temp_event=str_replace("###TITLE###",$title_speaker_institution[1],$temp_event);
    $temp_event=str_replace("###URL###", $url,$temp_event);
    $temp_event=str_replace("###DATE###",$gCalDate,$temp_event);
    $temp_event=str_replace("###ABSTRACT###",$abstract,$temp_event);
    
    echo $temp_event;
    echo "\n";
}

echo "
</tbody>
</table>
* <em> please note time, date, and/or location change</em>" 

?>

<br><bR>

<img width=300 src="clark.jpg">
<img width=300 src="ross.jpg"> 
<img width=300 src="alevras.jpg">
</center>



<br><br>

You can reminisce about previous semesters at the links below:<br>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/F11,sotoa/sotoa.html">
 Fall 2011</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/S11,sotoa/sotoa.html">
 Spring 2011</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/F10,sotoa/sotoa.html">
 Fall 2010</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/S10,sotoa/sotoa.html">
 Spring 2010</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/F09,sotoa/sotoa.html">
 Fall 2009</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/S09,sotoa/sotoa.html">
 Spring 2009</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/F08,sotoa/sotoa.html">
 Fall 2008</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/S08,sotoa/sotoa.html">
 Spring 2008</a>

<a href="http://www.people.Virginia.EDU/~des5e/oldsotoa/F07,sotoa/sotoa.html">
 Fall 2007</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2007spring.html">
 Spring 2007</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2006fall.html">
 Fall 2006</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2006spring.html">
 Spring 2006</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2005fall.html">
 Fall 2005</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2005spring.html">
 Spring 2005</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2004fall.html">
 Fall 2004</a>
 
<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2004spring.html">
 Spring 2004</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2003fall.html">
 Fall 2003</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2003spring.html">
 Spring 2003</a>

<a href="http://www.people.Virginia.EDU/~jlr5m/otseminar2002fall.html">
 Fall 2002 </a>

<br /><br />

</font>
</BODY>
</HTML>