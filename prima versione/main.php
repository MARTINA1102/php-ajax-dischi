<main><?php

	include_once __DIR__ . '/data/data.php';

	foreach ($arrDischi as $disco) { 
		echo "<div class='cards'>";
			echo "<div class='disco'>";
				echo "<img class='disco-img src='". $disco["poster"]."'>";
				echo "<h2 class='titolo'>" . $disco["title"] . "</h2>";
				echo "<p class='sub_tit'>" . $disco["author"] ."</p>";
				echo "<p class='sub_tit'>" . $disco["year"]. "</p>";
			echo "</div>";
		echo "</div>";
	} ?>
</main>