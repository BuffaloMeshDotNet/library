<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<title>eBook Library</title>
	<body>
	<div id="main" class="body">
	<h1>eBook Library</h1><p/>
	If there are any titles you'd like, please let the node administrator know, and we'll try our best to locate it, and get it up here for you.</p>
	<div id="ePub" class="col">
		<h2>ePub</h2><br/>
		Most devices can read this.<p/>
			<?php
				if ($handle = opendir('epub/')) {
					while (false !== ($file = readdir($handle)))
					{
						if ($file != "." && $file != "..")
						{
							$thelist1 .= '<a href="epub/'.$file.'">'.$file.'</a></p>';
   	       		}
   	    		}
				closedir($handle);
				}       
				print $thelist1
			?>	
	</div>

	<div id="mobi" class="col">
		<h2>mobi Format</h2><br/>
		Amazon devices (aka Kindles)</p>
			<?php
				if ($handle = opendir('mobi/')) {
					while (false !== ($file = readdir($handle)))
					{
						if ($file != "." && $file != "..")
						{
							$thelist2 .= '<a href="mobi/'.$file.'">'.$file.'</a></p>';
  	        		}
  	     		}
				closedir($handle);
				}       
				print $thelist2;
			?>	
	</div>

	<div id="pdf" class="col">
			<h2>PDF Format</h2><br/>
			Laptops and Desktops<p/>
			<?php
				if ($handle = opendir('pdf/')) {
					while (false !== ($file = readdir($handle)))
					{
						if ($file != "." && $file != "..")
						{
							$thelist3 .= '<a href="pdf/'.$file.'">'.$file.'</a></p>';
  	        		}
  	     		}
				closedir($handle);
				}       
				print $thelist3;
			?>	
	</div>

	<div id="misc" class="col">
			<h2>Misc Formats</h2><br/>
			Various formats (Text files, etc)<p/>
			<?php
				if ($handle = opendir('misc/')) {
					while (false !== ($file = readdir($handle)))
					{
						if ($file != "." && $file != "..")
						{
							$thelist4 .= '<a href="misc/'.$file.'">'.$file.'</a></p>';
  	        		}
  	     		}
				closedir($handle);
				}       
				print $thelist4
			?>	
	</div>
	</div>
	</body>
</html>
