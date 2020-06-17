<main class="container">
    <div class="content">
        <div class="text-light column">
            <?php
            $index = new Index();
            $indexContent = $index->getContent();
            //var_dump($indexContent);
            foreach ($indexContent as $content) {
                echo "<div class='col-md '>
                        <p class='bg-content p-2 shadow'>" . $content->content . "</p>
                    </div>";
            }
            ?>
        </div>
    </div>
</main>