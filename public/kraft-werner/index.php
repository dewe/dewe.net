<?

function GetDirArray($sPath)
{
	//Load Directory Into Array
	$handle=opendir($sPath);
	while ($file = readdir($handle))
        $retVal[count($retVal)] = $file;

	//Clean up and sort
	closedir($handle); 	
	// sort($retVal);
	return $retVal;
}

?>

<html>
<head>
<title>Kraft-Werner Bowling</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="kwb_styles.css">

</head>

<body>
<table border="0" cellspacing="0" cellpadding="0" width="650">
  <tr> 
    <td valign="top" colspan="2"> 
      <h1>Kraft-Werner Bowling</h1>
    </td>
  </tr>
  <tr> 
    <td valign="top" width="450" style="padding-right:5px"> 
      <h3>Tider</h3>
      <p>Nu &auml;r v&aring;rs&auml;songen 2002 ig&aring;ng. Fast tid &auml;r 
        bokad en bra bit fram i v&aring;r (till och med n&auml;r?): <b>onsdagar 
        kl&nbsp;19:00&nbsp;-&nbsp;21:00</b>. P&aring; det vanliga st&auml;llet.</p>
      <h3>KWB League v&aring;ren 2002</h3>
      <p>Senaste statistiken ligger &ouml;verst i listan.</p>
      <h4><b>St&auml;llning</b></h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td>Benke</td>
          <td width="10">&nbsp;</td>
          <td> 
            <div align="right">111 po&auml;ng</div>
          </td>
        </tr>
        <tr> 
          <td>H&aring;kan</td>
          <td width="10">&nbsp;</td>
          <td> 
            <div align="right">77 po&auml;ng</div>
          </td>
        </tr>
        <tr> 
          <td>Micke</td>
          <td width="10">&nbsp;</td>
          <td> 
            <div align="right">68 po&auml;ng</div>
          </td>
        </tr>
        <tr> 
          <td>Bumpa</td>
          <td width="10">&nbsp;</td>
          <td> 
            <div align="right">61 po&auml;ng</div>
          </td>
        </tr>
        <tr> 
          <td>Johan</td>
          <td width="10">&nbsp;</td>
          <td> 
            <div align="right">50 po&auml;ng</div>
          </td>
        </tr>
      </table>
      <h4><b>Statistik</b></h4>
      <?
         $basedir = "2002_spring/";
		 $filearray = GetDirArray($basedir);
         rsort($filearray);
         foreach($filearray as $file) {
           if ($file != "." and $file != "..") {
             print "<a href=\"" . $basedir . $file . "\">" . $file . "</a><br>";
           }
         }
      ?>
      <h3>Regler</h3>
      <p>F&ouml;r tillf&auml;llet spelar vi efter f&ouml;ljande regler:</p>
      <ol>
        <li>Som 'match' r&auml;knar den samling serier som spelas under en kv&auml;ll 
          d&aring; vi &auml;r minst tre (3) deltagare.</li>
        <li>Man får tre (3) poäng för första plats, två (2) poäng för andra plats 
          och ett (1) poäng för tredje plats i en serie som ingår i en match. 
        </li>
        <li>Man f&aring;r dessutom tv&aring; (2) po&auml;ng f&ouml;r vunnen match, 
          dvs den som har kv&auml;llens h&ouml;gsta sammanlagda po&auml;ng. Endast 
          avslutade och godk&auml;nda serier r&auml;knas.</li>
        <li>Om flera spelare slutar p&aring; lika po&auml;ng vinner den med flest 
          antal strike. Vid lika antal strike är det flest antal spärr som gäller. 
          D&auml;refter r&auml;knas flest 9:or, 8:or, 7:or osv. I sista hand lottas 
          serien. </li>
      </ol>
      <h3>L&auml;nkar</h3>
      <p> <a href="http://www.hickoksports.com/glossary/gbowling.shtml" target="_blank">Bowling 
        Glossary</a><br>
        <a href="http://www.bowlingindex.com/" target="_blank">Complete Bowling 
        Index</a><br>
        <a href="http://www.kolumbus.fi/bowwwling/" target="_blank">Tenpin Bowling 
        All Over The Web</a><br>
        <a href="http://www.korpen.se/verk/regler/bowling.htm" target="_blank">Korpens 
        bowlingregler</a><br>
        <a href="http://www.swebowl.se/" target="_blank">Svenska Bowlingf&ouml;rbundet</a><br>
        <a href="http://www.swebowl.se/blaboken/start.htm">Bl&aring; boken - bowlingssportens 
        &quot;lagbok&quot;</a></p>
    </td>
    <td valign="top" style="border-left:solid 1px #666633; padding-left: 10px" width="200"> 
      <?php require('comments.html'); ?>
      <div align="right" class="comment"><a href="http://www.blogger.com/blog.pyra?blogid=3201454" target="blogger">L&auml;gg 
        till kommentar</a></div>
    </td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <div align="right" class="footer">&copy; Johan Dewe. Last update: 
        <!-- #BeginDate format:IS1 -->2002-05-24<!-- #EndDate -->
      </div>
      <div align="right"><a href="http://www.blogger.com" target="blogger"><img width=88 height=31 src="http://buttons.blogger.com/bloggerbutton1.gif" border=0 alt="This page is powered by Blogger. Isn't yours?" vspace="5"></a></div>
    </td>
  </tr>
</table>
</body>
</html>