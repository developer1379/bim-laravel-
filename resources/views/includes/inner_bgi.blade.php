<x-department-navbar>
    <x-slot name="logo">{{ asset('../images/bgi_logo.png') }}</x-slot>
    <x-slot name="logoStyle">max-width:100% !important;</x-slot>
    <x-slot name="title">BUDDHA GROUP OF INSTITUTIONS</x-slot>

    <li><a class="nav-link scrollto" href="{{ url('bgi') }}"><i class="bx bxs-home fs-3"></i></a></li>

                 <li><a href="{{ url('../bgi_parichay') }}">Parichay </a></li>
                  <li><a href="{{ url('../bgi_message') }}">Management </a></li>

                   <li><a href="{{ url('bgi') }}">Colleges </a></li>
                   <li><a href="https://youtu.be/JgfesOatD3o?si=5gEnlamiAwUIq2yV.php" target="_blank">Campus </a></li>
                    <li><a href="https://buddhainnovation.in/" target="_blank">Buddha Innovation Council </a></li>





            </ul>
            </li>
</x-department-navbar>
