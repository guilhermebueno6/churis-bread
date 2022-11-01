@include ('layouts.header')
<body>

    <div class="mycontainer">
        <div class="intro-section">
            <div><img class="logoanimated" src="images/logoWhite.png"></div>
            <div id="viewProducts" onclick="location.href='#bestsellers'"><p>VIEW PRODUCTS</p></div>
        </div>
    </div>
    <section id="best-sellers">
        @include('layouts.bestsellers')
    </section>
    <section id="our-company">
        @include('layouts.our-company')
    </section>

    <section id="membership">
        @include('layouts.membership')
    </section>

        @include ('layouts.footer')
</body>
</html>