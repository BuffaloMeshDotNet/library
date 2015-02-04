<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>

	<details>
		<summary>ePub</summary>
		<?php
			if ($handle = opendir('epub/')) {
				while (false !== ($file = readdir($handle)))
				{
					if ($file != "." && $file != "..")
					{
						$thelist .= '<a href="epub/'.$file.'">'.$file.'</a></br>';
          		}
       		}
			closedir($handle);
			}       
		?>
		<p><?=$thelist?></p>	
	</details>

	<details>
		<summary>mobi</summary>
		<?php
			if ($handle = opendir('mobi/')) {
				while (false !== ($file = readdir($handle)))
				{
					if ($file != "." && $file != "..")
					{
						$thelist .= '<a href="mobi/'.$file.'">'.$file.'</a></br>';
          		}
       		}
			closedir($handle);
			}       
		?>
		<p><?=$thelist?></p>	
	</details>

	<details>
		<summary>PDF</summary>
		<?php
			if ($handle = opendir('pdf/')) {
				while (false !== ($file = readdir($handle)))
				{
					if ($file != "." && $file != "..")
					{
						$thelist .= '<a href="pdf/'.$file.'">'.$file.'</a></br>';
          		}
       		}
			closedir($handle);
			}       
		?>
		<p><?=$thelist?></p>	
	</details>

	<details>
		<summary>Misc Formats</summary>
		<?php
			if ($handle = opendir('misc/')) {
				while (false !== ($file = readdir($handle)))
				{
					if ($file != "." && $file != "..")
					{
						$thelist .= '<a href="misc/'.$file.'">'.$file.'</a></br>';
          		}
       		}
			closedir($handle);
			}       
		?>
		<p><?=$thelist?></p>	
	</details>

	</body>
</html>

