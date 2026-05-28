@include('pages.uncategorized.header')

<div class="container mt-4">
    <h2 class="text-center mb-4">NCC Events Gallery</h2>
    <div class="row">
        <?php
        // Define an array of events with image, title, and description
        $events = [
            [
                "image" => "photos/slide1.png",
                "title" => "ARMY ATTACHMENT CAMP",
                "description" => "Army Attachment Camp provided NCC cadets with hands-on experience in military life. The camp featured drills, tactical exercises, and training led by military personnel, aiming to enhance discipline, leadership skills, and camaraderie among the cadets."
            ],
            [
                "image" => "photos/Screenshot 2025-02-07 142151.png",
                "title" => "AWARENESS SESSION UNDER MISSION SHAKTI",
                "description" => "With the beginning of Mission Shakti 4.0, the NCC cadets conducted an Awareness drive in Village Uttardhauna on the Topic ‘Female Hygiene and Female Rights’. The cadets went door to door to empower the women in rural areas."
            ],
            [
                "image" => "photos/Screenshot 2025-02-07 142151.png",
                "title" => "AZADI KA AMRIT MAHOTSAV",
                "description" => "Azadi Ka Amrit Mahotsav, the 75th anniversary of Independent India was celebrated. The program ended with a rally in which NCC Cadets, NSS Volunteers, Security Guards, and Students actively participated."
            ],
            [
                "image" => "photos/Screenshot 2025-02-07 142151.png",
                "title" => "BLOOD DONATION CAMP",
                "description" => "A Blood Donation Camp was organised in loving memory of our Founder Chancellor. NCC cadets actively participated and donated blood in loving memory."
            ]
        ];

        // Loop through the events and display them
        foreach ($events as $event) {
            echo '<div class="col-md-6 mb-4">';
            echo '  <div class="card shadow-sm">';
            echo '      <img src="{{ asset('' . $event[') }}"image"] . '" class="card-img-top" alt="' . $event["title"] . '">';
            echo '      <div class="card-body">';
            echo '          <h5 class="card-title text-center">' . $event["title"] . '</h5>';
            echo '          <p class="card-text">' . $event["description"] . '</p>';
            echo '      </div>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

@include('includes.footer')
</body>
</html>

