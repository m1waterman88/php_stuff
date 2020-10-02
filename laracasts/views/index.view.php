<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Learn PHP</title>
</head>
<body>
    <header>
        <h1><?= $greeting; ?></h1>
    </header>
    <main>
        <section class="tasks">
            <ul>
                <?php foreach ($tasks as $task): ?>
                    <li>
                        <?php if ($task->isComplete()): ?>
                            <strike><?= $task->description(); ?></strike>
                        <?php else: ?>
                            <?= $task->description(); ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <hr>

        <section class="">
        </section>

    </main>
    <script src="main.js"></script>
</body>
</html>
