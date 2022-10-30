@include ('layouts.header')
<body>

    <div class="mycontainer">
        <div class="intro-section">
            <div><img class="logoanimated" src="images/logoWhite.png"></div>
            <div id="viewProducts" onclick="location.href='#bestsellers'"><p>VIEW PRODUCTS</p></div>
        </div>
    </div>

    <div class="mycontainer">
        <div id="bestsellers">
            <div class="line" style="width:100%;">
                <h2><span>Best Sellers</span></h2>
            </div>
            <div class="bestsellersitems">

            </div>
        </div>
    </div>




    <div class="mycontainer">
        <div class="services cool">
            <div class="descriptions">
                <div class="descriptions-item fadeInUp">
                    <img src="images/fireplace2.png" height="225.75px" width="225.75px">
                    <h2>Built in Fireplaces</h2>
                    <p>From large projects to small jobs, we do it all at the most competitive rates in the local area. No matter what you need, we make sure it is done right - the first time. Call today for a free consultation.</p>
                </div>
                <div class="descriptions-item fadeInUp">
                    <img src="images/fireplace3.png" height="225.75px" width="225.75px">
                    <h2>Fireplace Inserts</h2>
                    <p>At London Excavation we know what exceptional and reliable service means. We’re committed to providing clients with a wide range of options, all with guaranteed quality and precision. From the beginning stages of the project all the way to the completion of the process, we work side-by-side with clients every step of the way.</p>
                </div>
                <div class="descriptions-item fadeInUp">
                    <img src="images/fireplace4.png"  height="225.75px" width="225.75px">
                    <h2>Free Standing Stoves</h2>
                    <p>Our mission at London Excavation is simple: to provide high-quality services for our valued clients. Our team goes above and beyond to cater to each project’s specific needs. Through open communication and exceptional service, we hope you’ll find what you’re looking for with our Trucking Company. For more information or general inquiries, get in touch today.</p>
                </div>
            </div>
            <button onclick="location.href='servicesfireplacesbyjack.php'">More Services ></button>
        </div>
    </div>
        <div style="width:100%;display:flex;align-items:center;flexdirection:column;">
            <img src="images/rickroll.jpg">
        </div>

        @include ('layouts.footer')
</body>