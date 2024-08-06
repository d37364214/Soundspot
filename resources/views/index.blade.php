@include('header')

<div class="content">
    <!-- Contenu principal ici -->
        <div class="grid">
                <a href="guitare"><img src="{{ asset('images/guitare.jpeg') }}" alt="Guitare"><p>Guitare</p></a>
                        <a href="piano"><img src="{{ asset('images/piano.jpeg') }}" alt="Piano"><p>Piano</p></a>
                                <a href="percussions"><img src="{{ asset('images/percussions.jpeg') }}" alt="Percussions"><p>Percussions</p></a>
                                        <a href="prod"><img src="{{ asset('images/production.jpeg') }}" alt="Production"><p>Production</p></a>
                                            </div>
                                            </div>

                                            @include('footer')