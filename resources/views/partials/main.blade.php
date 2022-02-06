<main>
    <!-- sezione jumbotron -->
    @yield('PageHero')

    <!-- sezione corpo main della pagina -->
    <div id="main_content">
        <div class="container">
            <!-- bottone fissato in alto a sinistra 'current series' -->
            <button class="btn current">Current Series</button>

            @yield('PageRow')

            <!-- bottone fissato in basso 'load more' -->
            <button class="btn load">Load More</button>
        </div>
    </div>
</main>