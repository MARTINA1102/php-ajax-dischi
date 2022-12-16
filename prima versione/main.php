<main><?php

	include_once __DIR__ . '/data/data.php';

	foreach ($arrDischi as $disco) { ?>
		<div>
			<img src="<?= $disco['poster'] ?>">
            <h2><?= $disco['title'] ?></h2>
			<p><?= $post['author'] ?></p>
            <p><?= $post['year'] ?></p>
		</div> <?
	};?>
</main>