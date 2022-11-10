@include ('layouts.header')
<body>

    <div class="mycontainer">
        <div class="intro-section">
            <div><img class="logoanimated" src="images/logoWhite.png"></div>
            <div id="viewProducts" onclick="location.href='#best-sellers'"><p>VIEW PRODUCTS</p></div>
        </div>
    </div>
    <section id="best-sellers">
        @include('layouts.bestsellers')
    </section>
    <section id="our-company">
        @include('layouts.our-company')
    </section>

    <section id="membership" class="hidden">
        @include('layouts.membership')
    </section>

    <section id="delivery" class="hidden">
        @include('layouts.delivery')
    </section>

    <section id="location">
        @include('layouts.location')
    </section>

    <section id="reviews" class="hidden">
        @include('layouts.reviews')
    </section>

        @include ('layouts.footer')
        
</body>
</html>