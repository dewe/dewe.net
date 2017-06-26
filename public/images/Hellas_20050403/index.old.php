<html>
<head>
	<title>www.dewe.net - directory contents</title>
	<link rel="stylesheet" type="text/css" href="/styles.css">
</head>
<body>

<?
$getdir = dir("."); 
print("<ul style='text-align: left;'>"); 
while($entry = $getdir->read()) 
{ 
	if ($entry!= "." && $entry!= ".." && $entry!= "index.php" && $entry!= "default.php") 
	{ 
		print("<LI><a href=$entry>$entry \n</a>"); 
	} 
} 
print("</ul>");
?>

</body>
</html>