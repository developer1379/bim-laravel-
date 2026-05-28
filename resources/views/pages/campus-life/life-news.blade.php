@include('pages.uncategorized.header')

<div class="container mt-4">
    <h2 class="text-center mb-4">News Gallery</h2>
    <div class="row">
        <?php
        $newsFolder = 'news/';
        $newsPhotos = glob($newsFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Fetch all image files

        if (!empty($newsPhotos)) {
            foreach ($newsPhotos as $newsPhoto) {
                echo '<div class="col-md-4 mb-4">';
                echo '      <img src="{{ asset('' . $newsPhoto . '') }}" class="img-fluid" alt="News">';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">No news images found.</p>';
        }
        ?>
    </div>
</div>

@include('includes.footer')
</body>
</html>

