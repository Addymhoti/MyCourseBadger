<h2>Achievements</h2>
<main>
<?php 
	foreach($courses as $course){
		echo '<div class="badge_area">';
		echo '<img class="img-respnsive" src="' . $course["badge"] .'"/>';
		echo '<br>';
		echo '<a href="' . $course["url"]  .'">' . $course['title'] . '</a>';
		echo '</div>';
	}
?>
</main>