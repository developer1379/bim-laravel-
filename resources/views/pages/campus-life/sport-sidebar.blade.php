
<div class="col-lg-2 border-top border-3 border-secondary " id='dashboard-menu' style='background-color:#212529;'>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">

            <h4 class='mt-2 text-white'><a class="text-light text-decoration-none">About Sport</a></h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#AdminDropdown" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="AdminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ url('campus-life/sport?sport-committee') }}">Sports Committee</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?sport-spardha') }}">Spardha</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?sport-events') }}">Events</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?sport-achievement') }}">Achievement</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?sport-clubs') }}">Clubs</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?sport-facilities') }}">Sports Facilities</a>
                        <hr style="border-color: white; margin: 5px 0;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('campus-life/sport?staff-annual-sports') }}">Staff Annual Sports</a>
                        <hr style="border-color: white; margin: 5px 0;">

                    </li>
                   
                </ul>

            </div>
        </div>
    </nav>
</div>