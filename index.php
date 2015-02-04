<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	<details>
	<summary>ePub</summary>
		<?php
		$myDirectory = opendir("./epub");

		while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
		}

// close directory
		closedir($myDirectory);

//	count elements in array
		$indexCount	= count($dirArray);
		Print ("$indexCount files<br>\n");

// sort 'em
		sort($dirArray);

// print 'em
// loop through the array of files and print them all
		for($index=0; $index < $indexCount; $index++) {
			if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
				print("<p><a href=\"$dirArray[$index]\">$dirArray[$index]</a></p>");
			}
		}

		?>
		</details>
	</body>
</html>
