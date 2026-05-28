@include('pages.uncategorized.header')

<div class="container mt-4">
    <h2 class="text-center mb-4">Video Gallery</h2>
    <div class="row">
        <?php
        $videoFolder = 'videos/';
        $videos = glob($videoFolder . '*.mp4'); // Fetch all MP4 files from the folder

        if (!empty($videos)) {
            foreach ($videos as $video) {
                echo '<div class="col-md-4 mb-4">';
                echo '  <div class="card">';
                echo '      <video controls class="w-100">';
                echo '          <source src="{{ asset('' . $video . '') }}" type="video/mp4">';
                echo '          Your browser does not support the video tag.';
                echo '      </video>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">No videos found.</p>';
        }
        ?>
    </div>
</div>

@include('includes.footer')
</body>
</html>

