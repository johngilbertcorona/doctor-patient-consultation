@extends('main')
@section('mainContent')
    <main>
        <!-- Home -->
        <section id="home">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="resources/cloud_computing_by_xxaries1970xx_dern0ab.jpg">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Security</h1>
                                <p>Our secure VPN sends your internet traffic through an encrypted VPN tunnel, so your
                                    passwords and confidential data stay safe, even over public or untrusted Internet
                                    connections.</p>
                                <p><a class="btn btn-lg btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#registerModal">Try now</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="resources/pexels-manuel-geissinger-325229.jpg">
                        </div>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Privacy</h1>
                                <p>Keep your browsing history private. As a VPN provider, we do not log user activity or
                                    share data with third parties. Our anonymous VPN service enables Internet without
                                    surveillance.</p>
                                <p><a class="btn btn-lg btn-primary" href="#services">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <img src="resources/pexels-kourosh-qaffari-1583582.jpg">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>Freedom</h1>
                                <p>We created RyuzakilabVPN to protect the journalists and activists who use email.
                                    RyuzakilabVPN breaks down the barriers of Internet censorship, allowing you to
                                    access any website or content.</p>
                                <p><a class="btn btn-lg btn-primary" href="#pricing">Choose your plan</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="resources/img1.jpg">
                        <h2 class="fw-normal">Lorem</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis, pulvinar dapibus leo.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="resources/img2.jpg">
                        <h2 class="fw-normal">Sit Dolor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis, pulvinar dapibus leo.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="resources/img3.jpg">
                        <h2 class="fw-normal">Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis, pulvinar dapibus leo.</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="services">
            <div class="container marketing">
                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Our newest feature protects you from ads,
                            trackers, and malware</h2>
                        <p class="lead">Take your cybersecurity to the next level with RyuzakilabVPN Threat
                            Protection
                            feature. You don’t need to connect to a VPN server for it to work. Once you enable it in the
                            settings, Threat Protection will always make your browsing safer, faster, and smoother
                            without tracking your actions online. Don’t worry about downloading malware, dealing with
                            trackers and intrusive ads, or visiting a malicious URL — Threat Protection will neutralize
                            these cyber threats before they can do any real damage to your device or data..</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" src="resources/hero-threat-protection-bubble-shield.svg">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Get secure and private access to the internet
                        </h2>
                        <p class="lead">A good VPN service provides you a secure, encrypted tunnel for online traffic
                            to
                            flow. Nobody can see through the tunnel, get their hands on your online data, or find your
                            real IP address and location. RyuzakilabVPN is the best VPN if you’re looking for peace of
                            mind
                            when on public Wi-Fi. Securely access personal information or work files, encrypt your
                            internet connection, and keep your browsing history and online identity private. Enjoy
                            online privacy and security with RyuzakilabVPN. Need more? Explore the additional VPN
                            benefits our
                            apps offer.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" src="resources/web-vector-cloud-browse-apps.svg">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Protect all of your devices</h2>
                        <p class="lead">Do you use Windows at work, macOS at home, and Linux for your special
                            projects?
                            You’ll enjoy online privacy and security on every platform. There’s a RyuzakilabVPN
                            application
                            for Windows, macOS, iOS, Android, Linux and even Android TV. Oh, and also encrypted proxy
                            extensions for Chrome, Firefox, and Edge. Best of all, with one RyuzakilabVPN account, you
                            can
                            secure up to 6 devices at the same time. It’s the top VPN provider for all your gadgets,
                            trusted by 14 million users worldwide. Try our risk-free VPN with a 30-day money-back
                            guarantee and surf the web in privacy!</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" src="resources/web-vector-devices-secure-home.svg">
                    </div>
                </div>



                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->
        </section>

        <!-- Pricing -->
        <section id="pricing">
            <div class="container marketing">
                <header>
                    <hr class="featurette-divider">
                    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                        <h1 class="display-4 fw-normal">Pricing</h1>
                        <p class="fs-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus
                            mi,
                            cursus egestas neque eu,
                            ornare finibus justo.</p>
                    </div>
                </header>

                <main>
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Free</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$0<small
                                            class="text-muted fw-light">/mo</small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 users included</li>
                                        <li>2 GB of storage</li>
                                        <li>Email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for
                                        free</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Pro</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$15<small
                                            class="text-muted fw-light">/mo</small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>20 users included</li>
                                        <li>10 GB of storage</li>
                                        <li>Priority email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                <div class="card-header py-3 text-bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Enterprise</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$29<small
                                            class="text-muted fw-light">/mo</small>
                                    </h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>30 users included</li>
                                        <li>15 GB of storage</li>
                                        <li>Phone and email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="display-6 text-center mb-4">Compare plans</h2>

                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th style="width: 34%;"></th>
                                    <th style="width: 22%;">Free</th>
                                    <th style="width: 22%;">Pro</th>
                                    <th style="width: 22%;">Enterprise</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-start">Public</th>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start">Private</th>
                                    <td></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <th scope="row" class="text-start">Permissions</th>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start">Sharing</th>
                                    <td></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start">Unlimited members</th>
                                    <td></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start">Extra security</th>
                                    <td></td>
                                    <td></td>
                                    <td><svg class="bi" width="24" height="24">
                                            <use xlink:href="#check"></use>
                                        </svg></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>

        <!-- Footer / Contact Us -->

        <section id="contactUs">
            <div class="container">
                <!-- Accordion -->
                <div class="row">
                    <h1 class="pt-4 pb-4">Lorem ipsum dolor</h1>
                    <!-- Accordion Left -->
                    <div class="col">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Lorem ipsum
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        dolor sit amet
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        consectetur
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        adipiscing elit
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion Right -->
                    <div class="col">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Sed risus
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        cursus egestas
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        neque eu
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        finibus justo
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Us -->
                <footer class="pt-5">
                    <div class="row">
                        <div class="col-6 col-md-2 mb-3">
                            <h3>Ryuzakilab</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus mi, cursus egestas
                                neque
                                eu,
                                ornare finibus justo.
                            </p>
                        </div>

                        <div class="col-6 col-md-2 mb-3">
                        </div>

                        <div class="col-6 col-md-2 mb-3">
                            <h5>Reach us</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="mailto:info@ryuzakilab.com"
                                        class="nav-link p-0 bi-envelope-fill"> info@ryuzakilab.com</a>
                                </li>
                                <li class="nav-item mb-2"><a href="tel:+1-720-276-5502"
                                        class="nav-link p-0 bi-telephone-fill"> +1-720-276-5502</a>
                                </li>
                                <li class="nav-item mb-2 bi-geo-alt-fill">
                                    4856 Bee Street, Hesperia, Michigan 49421
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="members.html" class="nav-link team"> Team</a>
                                </li>

                            </ul>
                        </div>

                        <div class="col-md-5 offset-md-1 mb-3">
                            <form>
                                <h5>Subscribe to our newsletter</h5>
                                <p>Monthly digest of what's new and exciting from us.</p>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Email address</label>
                                    <input id="newsletter1" type="text" class="form-control"
                                        placeholder="Email address">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                        <p>© 2022 ryuzakilab. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-dark bi-twitter" href="#"></a></li>
                            <li class="ms-3"><a class="link-dark bi-instagram" href="#"></a></li>
                            <li class="ms-3"><a class="link-dark bi-facebook" href="#"></a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </section>
    </main>
@endsection
