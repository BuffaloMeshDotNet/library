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
	</body>
</html>
