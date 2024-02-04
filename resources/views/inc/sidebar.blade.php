<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            @if (auth()->user()->role->nomRole ==="admin")

            <li class="nav-label">Gestion des formation</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span
                        class="nav-text"></span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route()}}">Nouveau</a></li>

                    <li><a href="{{route()}}">Liste</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Patient</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route()}}">Nouveau</a></li>

                    <li><a href="{{route('patient.index')}}">Liste</a></li>
                </ul>
            </li>
            @endif

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Rendez-vous</span></a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Nouveau</a></li>

                    <li><a href="./app-calender.html">Liste</a></li>
                </ul>
            </li>


            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-lock-screen.html">Deconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
