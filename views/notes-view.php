<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>

            <p class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <a href="/notes/create" class="text-blue-500 underline">Create new note</a>
            </p>
    </main>

<?php require "partials/footer.php" ?>