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
        <section class="family">
            <h2>Family</h2>
            <ul>
                <?php foreach ($names as $name) : ?>
                    <li><?= $name; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <hr>

        <section class="associative">
            <p>Mike's hair color is <?= $person['hair']; ?>.</p>
            <ul>
                <?php foreach ($person as $key => $feature) : ?>
                    <li><strong><?= ucwords(${key}) ?></strong> <?= ": ${feature}" ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <hr>

        <section class="todos">
            <ul>
                <li>
                    <strong>Name: </strong>
                    <?= $todo['title']; ?>
                </li>
                <li>
                    <strong>Due Date: </strong>
                    <?= $todo['due']; ?>
                </li>
                <li>
                    <strong>Person Responsible: </strong>
                    <?= $todo['assigned_to']; ?>
                </li>
                <li>
                    <strong>Status: </strong>
                    <?php if ($todo['completed']) : ?>
                        <span class="incomplete">&#10008;</span>
                    <?php else : ?>
                        &#9989;
                    <?php endif; ?>
                </li>
            </ul>
        </section>

        <hr>

        <section class="tasks-class">
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
