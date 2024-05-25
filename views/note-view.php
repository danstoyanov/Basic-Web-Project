<?php require "partials/head.php" ?>
<?php require "partials/navigation.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <?= htmlspecialchars($note['body']) ?>
            <br>
            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a href="/notes">
                    Go back to Notes!
                </a>
            </button>
        </div>
    </main>

<?php require "partials/footer.php" ?>