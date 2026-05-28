@include('pages.uncategorized.header')

<div class="container mt-4">
    <h2 class="text-center mb-4">Photo Gallery</h2>
    <div class="row">
        <?php
        $photoFolder = 'photos/';
        $photos = glob($photoFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Fetch all image files

        if (!empty($photos)) {
            foreach ($photos as $photo) {
                echo '<div class="col-md-4 mb-4">';
                echo '  <div class="card">';
                echo '      <img src="{{ asset('' . $photo . '') }}" class="card-img-top" alt="Photo">';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">No photos found.</p>';
        }
        ?>
    </div>
</div>

@include('includes.footer')
</body>
</html>

