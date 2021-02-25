<!-- Footer scection -->
<section id="footer-section" class="">
    <div class="container-fluid py-4 px-0 ">

        <div class="container">
            <div class="row py-5 d-flex align-items-center  justify-content-center  no-gutter">
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <h3 class="heading text-center from-left mb-4">Leave us a message!</h3>
                    <div class="col-sm-12 col-md-12 col-lg-8  mx-auto">


                        <form id="contact_us" action="javascript:void(0)" method="POST">
                            @csrf

                            <div class="messages"></div>
                            <div class="form-label-group">
                                <input name="name" type="text" id="name" value="{{ old( 'name') }}" class="form-control"
                                    placeholder="Name">
                                <label for="name">Name*</label>
                            </div>

                            <div class="form-label-group">
                                <input name="email" type="email" id="inputEmail" class="form-control"
                                    placeholder="Email address" required>
                                <label for="inputEmail">Email address*</label>
                            </div>

                            <div class="form-label-group">
                                <input name="phone" type="number" id="inputNumber" class="form-control hide-input-arrow"
                                    placeholder="Phone">
                                <label for="inputNumber">Phone</label>
                            </div>

                            <div class="form-label-group">
                                <textarea name="message" class="form-control form-rounded" rows="3"
                                    id="textareaMessage"></textarea>
                                <label for="textareaMessage">Message*</label>
                            </div>

                            <div class="alert alert-success d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                            <button
                                class="btn btn-lg btn-dark  text-white btn-block btn-login text-uppercase font-weight-bold mb-2">Send
                                Message
                            </button>
                            <a href="" data-target="#myModal" data-toggle="modal"
                                class="btn btn-lg btn-warning  text-white btn-block btn-login text-uppercase font-weight-bold mb-2">Book
                                A tour
                            </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <iframe class="w-100" style="margin-bottom:-4%;" height="300" id="gmap_canvas"
            src="https://maps.google.com/maps?q=N%C2%B0%2032%2C%20Rue%20Yugoslavie%2C%20Marrakech%2C%20Morocco&t=&z=17&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
    <footer class=" mt-2 pt-4 pb-5" style="">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 fade-out">
                    <i class="fa fa-phone fa-3x my-4" aria-hidden="true"></i>
                    <p>0666190187<br>0661757057</p>
                </div>
                <div class="col-md-4 col-sm-6 fade-out-1">
                    <i class="fa fa-at fa-3x my-4" aria-hidden="true"></i>
                    <p>hello@thespot.ma <br> <a href="www.thespot.ma" class="" style="color: #eee;">www.thespot.ma</a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 fade-out-2">
                    <i class="fa fa-map-marker-alt fa-3x my-4" aria-hidden="true"></i>
                    <p>N° 32, Rue Yugoslavie, <br> Marrakech, Morocco</p>
                </div>
            </div>
        </div>
    </footer>






    <div class="copyrights bg-dark m-0 py-2 px-4 d-block w-100 d-flex justify-content-between">
        <p class="text-white p-0 mt-3 small">Copyright &copy; 2019 All Rights Reserved to thespot.</p>
        <div class="legal-info d-flex">
            <p class="p-0 mt-3 small"><a class="text-white" href="#0" onclick="showmodal1()"> Terms and Conditions </a></p>
            <p class="p-0 mt-3 ml-4 small"><a class="text-white" href="#0" onclick="showmodal2()"> Privacy Policy </a></p>
        </div>
    </div>
</section>


{{-- Modal Book --}}
<div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: inline !important;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title float-left p-0" id="myModalLabel">Book a tour</h4>
            </div>

            <div class="modal-body p-0"><iframe allowtransparency="true" class="bookingIframe" frameborder="0"
                    id="ycbmiframethespotmarrakech"
                    src="https://thespotmarrakech.youcanbook.me/?noframe=true&amp;skipHeaderFooter=true"
                    style="width:100%;height:750px;border:0px;background-color:transparent;"></iframe>
                <script>
                    window.addEventListener && window.addEventListener("message", function (event) {
                        if (event.origin === "https://thespotmarrakech.youcanbook.me") {
                            document.getElementById("ycbmiframethespotmarrakech").style.height = 750 + "px";
                        }
                    }, false);

                </script>
            </div>

            <div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>


{{-- terms of use Modal --}}

<div id="termsconditionsModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white font-weight-bold" id="gridModalLabel">Terms & Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true" class="text-white">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="content">
                        <main id="main" class="site-main">

                            <div class="breadcrumbs">
                                <div class="content-container content-container--extended"><span><span
                                            class="breadcrumb_last" aria-current="page">Privacy Policy</span></span>
                                </div>
                            </div>
                            <section class="page-content">
                                <div class="content-container">

                                    <div class="columned-content columned-content--single-column wow fadeInUp">

                                        <div class="columned-content__main">
                                            <div class="text-block">
                                                <p><strong>Effective February 8, 2018</strong></p>
                                                <p>Welcome to the website of Populous Holdings, Inc. and its
                                                    subsidiaries and
                                                    affiliates, collectively, “Populous,” “we,” or “us”. By using
                                                    our website(s)
                                                    (“Site”), you consent to use of information that is collected or
                                                    submitted as
                                                    described in this Privacy Policy.</p>
                                                <p><strong>“Personal information”</strong> is data about an
                                                    individual who can be
                                                    identified from that data, or from that data and other
                                                    information to which one
                                                    has access. Personal Information is usually your name in
                                                    combination with
                                                    another identifier, such as date of birth, postal address, email
                                                    address,
                                                    telephone number, or government-issued identification number.
                                                    The specific
                                                    definition of Personal Information often varies from one
                                                    jurisdiction to
                                                    another.</p>
                                                <p><strong>What Personal Information Do We Collect?</strong></p>
                                                <p>Our Clients are typically businesses, rather than individuals.
                                                    That said, when
                                                    you use our Site, services, contact us or participate in an
                                                    online survey, we
                                                    may collect a variety of personal information, including your
                                                    name, mailing
                                                    address, phone number, email address or contact preferences.</p>
                                                <p><strong>How Do We Use Your Personal Information?</strong></p>
                                                <p>We may use your Personal Information to track your use of our
                                                    Site; to transact
                                                    business with you in connection with the services; to assess
                                                    your degree of
                                                    satisfaction with our Site or the services; to update you about
                                                    our Site or the
                                                    services; to improve the effectiveness of the Site or the
                                                    services; to prevent,
                                                    deter and investigate violations of this Privacy Policy and our
                                                    Terms and
                                                    Conditions, or any fraud and other illegal activities; and to
                                                    send you important
                                                    notices regarding our services and changes to our business
                                                    policies.</p>
                                                <p><strong>With Whom Do We Share Your Personal Information?</strong>
                                                </p>
                                                <p>We may share your Personal Information with third parties who may
                                                    help us operate
                                                    the Site or help us assess your interest or satisfaction with
                                                    the Site or the
                                                    services.</p>
                                                <p>We may disclose your Personal Information if we determine that
                                                    disclosure is
                                                    reasonably necessary to enforce our <a
                                                        href="https://populous.com/terms-conditions">Terms of
                                                        Use</a>, this Privacy
                                                    Policy or to otherwise protect our operations, clients or users.
                                                </p>
                                                <p>We may release your Personal Information to others (including law
                                                    enforcement) if
                                                    we believe such release is reasonably necessary to comply with
                                                    the law or legal
                                                    process; enforce or apply the terms of applicable terms of use;
                                                    detect, prevent,
                                                    or otherwise address fraud, security or technical issues; or
                                                    otherwise protect
                                                    the rights, property or safety of others.</p>
                                                <p>We may sell, transfer and/or disclose your Personal Information
                                                    as part of a
                                                    business divestiture, sale, merger, or acquisition of all or a
                                                    part of our
                                                    business. If another company acquires our company, business, or
                                                    assets, that
                                                    company will possess the Personal Information collected by us
                                                    and will assume
                                                    the rights and obligations regarding your Personal Information
                                                    as described in
                                                    this Privacy Policy. In the event of an insolvency, bankruptcy,
                                                    or receivership,
                                                    your Personal Information may also be transferred as a business
                                                    asset.</p>
                                                <p><strong>How Do We Protect Your Personal Information?</strong></p>
                                                <p>We maintain a variety of security measures, including physical,
                                                    electronic and
                                                    procedural safeguards. No system can be completely secure, so we
                                                    do not promise,
                                                    and you should not expect, that your Personal Information,
                                                    searches, or other
                                                    communications will always remain secure.</p>
                                                <p><strong>Your Access to Personal Information</strong></p>
                                                <p>You can ask us for the Personal Information we possess, so that
                                                    you can determine
                                                    if it is inaccurate or if you want it deleted, provided we not
                                                    required to
                                                    retain it by law or for legitimate business purposes.</p>
                                                <p>We may decline to process requests that are frivolous/vexatious,
                                                    jeopardize the
                                                    privacy of others, are extremely impractical, or for which
                                                    access is not
                                                    otherwise required by local law. Access, correction, or deletion
                                                    requests can be
                                                    made to info@populous.com.</p>
                                                <p><strong>What Other Information Do We Collect?</strong></p>
                                                <p>We automatically gather information when you browse or view our
                                                    Site. This log
                                                    data may include your browser type (e.g., Chrome, Safari,
                                                    Firefox or Internet
                                                    Explorer), your domain, the Internet Protocol (IP) address
                                                    assigned to your
                                                    computer (or the unique device ID of your mobile device, or
                                                    other unique
                                                    identifier), the date and time of your visits, the pages on our
                                                    Site you visit
                                                    and other information related to your visit.</p>
                                                <p>We collect data that does not, on its own, permit direct
                                                    association with any
                                                    specific individual. We may collect, use, transfer, and disclose
                                                    such
                                                    non-personal information for any purpose.</p>
                                                <p>If we combine non-personal information with your Personal
                                                    Information, we will
                                                    maintain the combined information as Personal Information for as
                                                    long as it
                                                    remains combined.</p>
                                                <p>We may collect details of how visitors to the Site use our
                                                    services.</p>
                                                <p><strong>How Do We Employ Cookies and Similar
                                                        Technologies?</strong></p>
                                                <p>We use technologies such as “cookies” and web beacons so we can
                                                    remember certain
                                                    information about you, remember your preferences or recognize
                                                    you when you
                                                    return. They also help us compile aggregate data about Site
                                                    traffic and Site
                                                    interaction so that we can improve our Site and protect our Site
                                                    from fraud.</p>
                                                <p>A cookie is a text file that stored on your computer. As text
                                                    files, cookies
                                                    cannot read information on your hard drive, run programs or
                                                    deliver viruses to
                                                    your computer. Cookies let our Site remember your preferences or
                                                    recognize you
                                                    when you return.</p>
                                                <p>Most browsers are set to accept cookies automatically. You can
                                                    set your browser
                                                    to decline all cookies automatically or to prompt you for a
                                                    response each time a
                                                    cookie is offered. Note that declining cookies may hinder our
                                                    Site’s performance
                                                    and may not allow you to access all of its features and
                                                    services.</p>
                                                <p>Web beacons, also known as clear GIFs, are often used in
                                                    combination with
                                                    cookies. These often transparent images are part of web pages,
                                                    and allow us to
                                                    count users who have visited certain pages and to generate
                                                    statistics about how
                                                    our Site is used. They are not used to access Personal
                                                    Information.</p>
                                                <p>Pixel tags enable us to send email messages in a format customers
                                                    can read, and
                                                    they tell us whether mail has been opened. We may use this
                                                    information to reduce
                                                    or eliminate messages sent to customers.</p>
                                                <p>As do many internet sites, we gather some information
                                                    automatically, such
                                                    Internet Protocol (IP) addresses, browser type and language,
                                                    Internet service
                                                    provider (ISP), referring and exit websites and applications,
                                                    operating system,
                                                    date/time stamp, and clickstream data.</p>
                                                <p>In some of our email messages, you will find a “click-through
                                                    URL” linked to
                                                    content on our Site. We track this click-through data to help us
                                                    determine
                                                    interest in particular topics and measure the effectiveness of
                                                    our customer
                                                    communications. If you prefer not to be tracked in this way, you
                                                    should not
                                                    click such links in our email messages.</p>
                                                <p>We use Google Adwords and Google Analytics to gather data such as
                                                    age, gender and
                                                    interests to provide advertising targeted to suit your interests
                                                    and
                                                    preferences. For example, you may see certain online ads on our
                                                    Site or other
                                                    sites because we contract with Google and similar companies to
                                                    target our ads
                                                    based on information collected from you or by automated means,
                                                    like cookies and
                                                    web beacons. These companies also use automated technologies to
                                                    collect
                                                    information when you click on our ads, which helps track and
                                                    manage the
                                                    effectiveness of our marketing efforts.</p>
                                                <p>You may opt out of the automated collection of information by
                                                    third-party ad
                                                    networks for the purpose of delivering advertisements tailored
                                                    to your
                                                    interests, by visiting the consumer opt-out page for the
                                                    Self-Regulatory
                                                    Principles for Online Behavioral Advertising at
                                                    http://www.aboutads.info/choices/ and edit or opt-out your
                                                    Google Display
                                                    Network ads’ preferences at
                                                    http://www.google.com/ads/preferences/</p>
                                                <p>You may give consent for our Site to capture and record certain
                                                    precise
                                                    geo-location or global positioning data from your device in
                                                    order to tailor
                                                    information to your location. We may link such location data to
                                                    other
                                                    information that you provide to us or that may be accessed in
                                                    connection with
                                                    your use of our Site.</p>
                                                <p>You should be able manage how your mobile device and mobile
                                                    browser share
                                                    location information with us, as well as how your mobile browser
                                                    handles cookies
                                                    and related technologies, by adjusting your mobile device’s
                                                    privacy and security
                                                    settings.</p>
                                                <p>There are “do not track” or similar browser choices available to
                                                    internet users
                                                    with respect to online web activity, but given the present lack
                                                    of consensus of
                                                    what constitutes an informed election, appropriate trigger or
                                                    breadth of scope
                                                    of such choice, our Site will not operate any differently when a
                                                    “do not track”
                                                    signal is received.</p>
                                                <p><strong>Personal Information for Event Credentialing</strong></p>
                                                <p>One of the services that Populous provides is event credentialing
                                                    for our
                                                    Clients. We do not control what Personal Information our Clients
                                                    collect, with
                                                    whom they share it, how they protect it, or what access they may
                                                    provide you to
                                                    it.</p>
                                                <p>In general, our Clients will use your Personal Information to
                                                    decide whether
                                                    Populous should issue you credentials to an event. We do not
                                                    control our
                                                    Clients’ uses of your Personal Information.</p>
                                                <p>Our Clients may ask you for your name and postal address, email
                                                    address, and
                                                    telephone number, Social Security Number, drivers’ license
                                                    number or other
                                                    identifiers to determine your eligibility for credentials. The
                                                    Personal
                                                    Information requested will vary from Client to Client and Event
                                                    to Event.</p>
                                                <p>You are not required to provide the Personal Information that our
                                                    Client
                                                    requests, but if you decline, you may not be eligible for the
                                                    services or
                                                    credentials sought.</p>
                                                <p>You should review the Privacy Policy and Terms and Conditions of
                                                    each Client from
                                                    whom you seek credentials to understand its collection, use,
                                                    sharing or
                                                    protection of your Personal Information, and inquire directly of
                                                    the Client as
                                                    you see fit.</p>
                                                <p><strong>Social Networking Sites</strong></p>
                                                <p>You may be able to post content to Social Networking Sites (such
                                                    as Facebook,
                                                    Instagram, Snapchat or Twitter) on which we maintain a presence.
                                                    If you choose
                                                    to do this, we will provide information to the Social Networking
                                                    Sites in
                                                    accordance with your elections. You acknowledge and agree that
                                                    you are solely
                                                    responsible for your use of those websites and that it is your
                                                    responsibility to
                                                    review the terms of use and privacy policies. We are not
                                                    responsible for the
                                                    availability, accuracy, content, products or services of such
                                                    Social Network
                                                    Sites.</p>
                                                <p><strong>Third Party Links</strong></p>
                                                <p>Our Site may have links or be linked to other sites we do not
                                                    own, control or
                                                    maintain. We are not responsible for and make no representations
                                                    or warranties
                                                    about the privacy practices of those sites. We recommend that
                                                    you check the
                                                    privacy policies of other sites and contact the operator if you
                                                    have concerns or
                                                    questions. Nonetheless, we seek to protect the integrity of our
                                                    Site and welcome
                                                    any feedback about these third party sites.</p>
                                                <p><strong>Children</strong></p>
                                                <p>Our Site is not directed to minors. If we learn that we have
                                                    collected personal
                                                    information from anyone under the age of 13, we will endeavor to
                                                    delete such
                                                    information as soon as reasonably possible.</p>
                                                <p><strong>Privacy Rights of California Residents</strong></p>
                                                <p>California residents are entitled once a year, free of charge, to
                                                    request and
                                                    obtain certain information regarding our disclosure of personal
                                                    information to
                                                    third parties for their direct marketing purposes. Populous does
                                                    not disclose
                                                    personal information to third parties for direct marketing
                                                    purposes.</p>
                                                <p><strong>Opting Out of Communications</strong></p>
                                                <p>You may opt-out of receiving marketing-related emails by clicking
                                                    the
                                                    &#8220;unsubscribe&#8221; link at the bottom of any email you
                                                    receive from us or
                                                    by changing the communication preferences on your online account
                                                    or profile. If
                                                    you no longer want to receive promotional text messages from us,
                                                    please follow
                                                    the cancellation instructions contained in the last text
                                                    message. If you are
                                                    having difficulty unsubscribing from our marketing
                                                    communications using the
                                                    above methods, please contact us at info@populous.com</p>
                                                <p>If you opt-out from receiving marketing emails or text messages,
                                                    we may still
                                                    need to send you communications about your orders, customer
                                                    service inquiries,
                                                    promotions participation and other matters.</p>
                                                <p>If you agreed to receive future marketing communications directly
                                                    from a third
                                                    party through our Site, you will need to contact that party to
                                                    opt-out of such
                                                    communications. This process may be outlined on that party’s
                                                    Privacy Policy.</p>
                                                <p><strong>Changes to our Privacy Statement</strong></p>
                                                <p>We may update this Privacy Statement from time to time, so please
                                                    check the
                                                    effective date at the top of this page as the date of last
                                                    revision. Changes
                                                    will become immediately effective upon posting on our Site
                                                    unless otherwise
                                                    noted. Your use of the Site following these changes indicates
                                                    your consent to
                                                    the practices described in the revised Privacy Statement.</p>
                                                <p><strong>Contacting Us</strong></p>
                                                <p>If there are any questions regarding this privacy policy, you may
                                                    contact us
                                                    using the information at info@populous.com</p>
                                            </div>
                                        </div> <!-- /halves__half -->

                                        <div class="columned-content__side">
                                        </div> <!-- /halves__half -->

                                    </div>

                                </div>
                            </section>



                        </main><!-- #main -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<div id="privacypolicyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white font-weight-bold" id="gridModalLabel">Privacy Policy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true" class="text-white">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="content">
                        <main id="main" class="site-main">

                            <div class="breadcrumbs">
                                <div class="content-container content-container--extended"><span><span
                                            class="breadcrumb_last" aria-current="page">Privacy Policy</span></span>
                                </div>
                            </div>
                            <section class="page-content">
                                <div class="content-container">

                                    <div class="columned-content columned-content--single-column wow fadeInUp">

                                        <div class="columned-content__main">
                                            <div class="text-block">
                                                <p><strong>Effective February 8, 2018</strong></p>
                                                <p>Welcome to the website of Populous Holdings, Inc. and its
                                                    subsidiaries and
                                                    affiliates, collectively, “Populous,” “we,” or “us”. By using
                                                    our website(s)
                                                    (“Site”), you consent to use of information that is collected or
                                                    submitted as
                                                    described in this Privacy Policy.</p>
                                                <p><strong>“Personal information”</strong> is data about an
                                                    individual who can be
                                                    identified from that data, or from that data and other
                                                    information to which one
                                                    has access. Personal Information is usually your name in
                                                    combination with
                                                    another identifier, such as date of birth, postal address, email
                                                    address,
                                                    telephone number, or government-issued identification number.
                                                    The specific
                                                    definition of Personal Information often varies from one
                                                    jurisdiction to
                                                    another.</p>
                                                <p><strong>What Personal Information Do We Collect?</strong></p>
                                                <p>Our Clients are typically businesses, rather than individuals.
                                                    That said, when
                                                    you use our Site, services, contact us or participate in an
                                                    online survey, we
                                                    may collect a variety of personal information, including your
                                                    name, mailing
                                                    address, phone number, email address or contact preferences.</p>
                                                <p><strong>How Do We Use Your Personal Information?</strong></p>
                                                <p>We may use your Personal Information to track your use of our
                                                    Site; to transact
                                                    business with you in connection with the services; to assess
                                                    your degree of
                                                    satisfaction with our Site or the services; to update you about
                                                    our Site or the
                                                    services; to improve the effectiveness of the Site or the
                                                    services; to prevent,
                                                    deter and investigate violations of this Privacy Policy and our
                                                    Terms and
                                                    Conditions, or any fraud and other illegal activities; and to
                                                    send you important
                                                    notices regarding our services and changes to our business
                                                    policies.</p>
                                                <p><strong>With Whom Do We Share Your Personal Information?</strong>
                                                </p>
                                                <p>We may share your Personal Information with third parties who may
                                                    help us operate
                                                    the Site or help us assess your interest or satisfaction with
                                                    the Site or the
                                                    services.</p>
                                                <p>We may disclose your Personal Information if we determine that
                                                    disclosure is
                                                    reasonably necessary to enforce our <a
                                                        href="https://populous.com/terms-conditions">Terms of
                                                        Use</a>, this Privacy
                                                    Policy or to otherwise protect our operations, clients or users.
                                                </p>
                                                <p>We may release your Personal Information to others (including law
                                                    enforcement) if
                                                    we believe such release is reasonably necessary to comply with
                                                    the law or legal
                                                    process; enforce or apply the terms of applicable terms of use;
                                                    detect, prevent,
                                                    or otherwise address fraud, security or technical issues; or
                                                    otherwise protect
                                                    the rights, property or safety of others.</p>
                                                <p>We may sell, transfer and/or disclose your Personal Information
                                                    as part of a
                                                    business divestiture, sale, merger, or acquisition of all or a
                                                    part of our
                                                    business. If another company acquires our company, business, or
                                                    assets, that
                                                    company will possess the Personal Information collected by us
                                                    and will assume
                                                    the rights and obligations regarding your Personal Information
                                                    as described in
                                                    this Privacy Policy. In the event of an insolvency, bankruptcy,
                                                    or receivership,
                                                    your Personal Information may also be transferred as a business
                                                    asset.</p>
                                                <p><strong>How Do We Protect Your Personal Information?</strong></p>
                                                <p>We maintain a variety of security measures, including physical,
                                                    electronic and
                                                    procedural safeguards. No system can be completely secure, so we
                                                    do not promise,
                                                    and you should not expect, that your Personal Information,
                                                    searches, or other
                                                    communications will always remain secure.</p>
                                                <p><strong>Your Access to Personal Information</strong></p>
                                                <p>You can ask us for the Personal Information we possess, so that
                                                    you can determine
                                                    if it is inaccurate or if you want it deleted, provided we not
                                                    required to
                                                    retain it by law or for legitimate business purposes.</p>
                                                <p>We may decline to process requests that are frivolous/vexatious,
                                                    jeopardize the
                                                    privacy of others, are extremely impractical, or for which
                                                    access is not
                                                    otherwise required by local law. Access, correction, or deletion
                                                    requests can be
                                                    made to info@populous.com.</p>
                                                <p><strong>What Other Information Do We Collect?</strong></p>
                                                <p>We automatically gather information when you browse or view our
                                                    Site. This log
                                                    data may include your browser type (e.g., Chrome, Safari,
                                                    Firefox or Internet
                                                    Explorer), your domain, the Internet Protocol (IP) address
                                                    assigned to your
                                                    computer (or the unique device ID of your mobile device, or
                                                    other unique
                                                    identifier), the date and time of your visits, the pages on our
                                                    Site you visit
                                                    and other information related to your visit.</p>
                                                <p>We collect data that does not, on its own, permit direct
                                                    association with any
                                                    specific individual. We may collect, use, transfer, and disclose
                                                    such
                                                    non-personal information for any purpose.</p>
                                                <p>If we combine non-personal information with your Personal
                                                    Information, we will
                                                    maintain the combined information as Personal Information for as
                                                    long as it
                                                    remains combined.</p>
                                                <p>We may collect details of how visitors to the Site use our
                                                    services.</p>
                                                <p><strong>How Do We Employ Cookies and Similar
                                                        Technologies?</strong></p>
                                                <p>We use technologies such as “cookies” and web beacons so we can
                                                    remember certain
                                                    information about you, remember your preferences or recognize
                                                    you when you
                                                    return. They also help us compile aggregate data about Site
                                                    traffic and Site
                                                    interaction so that we can improve our Site and protect our Site
                                                    from fraud.</p>
                                                <p>A cookie is a text file that stored on your computer. As text
                                                    files, cookies
                                                    cannot read information on your hard drive, run programs or
                                                    deliver viruses to
                                                    your computer. Cookies let our Site remember your preferences or
                                                    recognize you
                                                    when you return.</p>
                                                <p>Most browsers are set to accept cookies automatically. You can
                                                    set your browser
                                                    to decline all cookies automatically or to prompt you for a
                                                    response each time a
                                                    cookie is offered. Note that declining cookies may hinder our
                                                    Site’s performance
                                                    and may not allow you to access all of its features and
                                                    services.</p>
                                                <p>Web beacons, also known as clear GIFs, are often used in
                                                    combination with
                                                    cookies. These often transparent images are part of web pages,
                                                    and allow us to
                                                    count users who have visited certain pages and to generate
                                                    statistics about how
                                                    our Site is used. They are not used to access Personal
                                                    Information.</p>
                                                <p>Pixel tags enable us to send email messages in a format customers
                                                    can read, and
                                                    they tell us whether mail has been opened. We may use this
                                                    information to reduce
                                                    or eliminate messages sent to customers.</p>
                                                <p>As do many internet sites, we gather some information
                                                    automatically, such
                                                    Internet Protocol (IP) addresses, browser type and language,
                                                    Internet service
                                                    provider (ISP), referring and exit websites and applications,
                                                    operating system,
                                                    date/time stamp, and clickstream data.</p>
                                                <p>In some of our email messages, you will find a “click-through
                                                    URL” linked to
                                                    content on our Site. We track this click-through data to help us
                                                    determine
                                                    interest in particular topics and measure the effectiveness of
                                                    our customer
                                                    communications. If you prefer not to be tracked in this way, you
                                                    should not
                                                    click such links in our email messages.</p>
                                                <p>We use Google Adwords and Google Analytics to gather data such as
                                                    age, gender and
                                                    interests to provide advertising targeted to suit your interests
                                                    and
                                                    preferences. For example, you may see certain online ads on our
                                                    Site or other
                                                    sites because we contract with Google and similar companies to
                                                    target our ads
                                                    based on information collected from you or by automated means,
                                                    like cookies and
                                                    web beacons. These companies also use automated technologies to
                                                    collect
                                                    information when you click on our ads, which helps track and
                                                    manage the
                                                    effectiveness of our marketing efforts.</p>
                                                <p>You may opt out of the automated collection of information by
                                                    third-party ad
                                                    networks for the purpose of delivering advertisements tailored
                                                    to your
                                                    interests, by visiting the consumer opt-out page for the
                                                    Self-Regulatory
                                                    Principles for Online Behavioral Advertising at
                                                    http://www.aboutads.info/choices/ and edit or opt-out your
                                                    Google Display
                                                    Network ads’ preferences at
                                                    http://www.google.com/ads/preferences/</p>
                                                <p>You may give consent for our Site to capture and record certain
                                                    precise
                                                    geo-location or global positioning data from your device in
                                                    order to tailor
                                                    information to your location. We may link such location data to
                                                    other
                                                    information that you provide to us or that may be accessed in
                                                    connection with
                                                    your use of our Site.</p>
                                                <p>You should be able manage how your mobile device and mobile
                                                    browser share
                                                    location information with us, as well as how your mobile browser
                                                    handles cookies
                                                    and related technologies, by adjusting your mobile device’s
                                                    privacy and security
                                                    settings.</p>
                                                <p>There are “do not track” or similar browser choices available to
                                                    internet users
                                                    with respect to online web activity, but given the present lack
                                                    of consensus of
                                                    what constitutes an informed election, appropriate trigger or
                                                    breadth of scope
                                                    of such choice, our Site will not operate any differently when a
                                                    “do not track”
                                                    signal is received.</p>
                                                <p><strong>Personal Information for Event Credentialing</strong></p>
                                                <p>One of the services that Populous provides is event credentialing
                                                    for our
                                                    Clients. We do not control what Personal Information our Clients
                                                    collect, with
                                                    whom they share it, how they protect it, or what access they may
                                                    provide you to
                                                    it.</p>
                                                <p>In general, our Clients will use your Personal Information to
                                                    decide whether
                                                    Populous should issue you credentials to an event. We do not
                                                    control our
                                                    Clients’ uses of your Personal Information.</p>
                                                <p>Our Clients may ask you for your name and postal address, email
                                                    address, and
                                                    telephone number, Social Security Number, drivers’ license
                                                    number or other
                                                    identifiers to determine your eligibility for credentials. The
                                                    Personal
                                                    Information requested will vary from Client to Client and Event
                                                    to Event.</p>
                                                <p>You are not required to provide the Personal Information that our
                                                    Client
                                                    requests, but if you decline, you may not be eligible for the
                                                    services or
                                                    credentials sought.</p>
                                                <p>You should review the Privacy Policy and Terms and Conditions of
                                                    each Client from
                                                    whom you seek credentials to understand its collection, use,
                                                    sharing or
                                                    protection of your Personal Information, and inquire directly of
                                                    the Client as
                                                    you see fit.</p>
                                                <p><strong>Social Networking Sites</strong></p>
                                                <p>You may be able to post content to Social Networking Sites (such
                                                    as Facebook,
                                                    Instagram, Snapchat or Twitter) on which we maintain a presence.
                                                    If you choose
                                                    to do this, we will provide information to the Social Networking
                                                    Sites in
                                                    accordance with your elections. You acknowledge and agree that
                                                    you are solely
                                                    responsible for your use of those websites and that it is your
                                                    responsibility to
                                                    review the terms of use and privacy policies. We are not
                                                    responsible for the
                                                    availability, accuracy, content, products or services of such
                                                    Social Network
                                                    Sites.</p>
                                                <p><strong>Third Party Links</strong></p>
                                                <p>Our Site may have links or be linked to other sites we do not
                                                    own, control or
                                                    maintain. We are not responsible for and make no representations
                                                    or warranties
                                                    about the privacy practices of those sites. We recommend that
                                                    you check the
                                                    privacy policies of other sites and contact the operator if you
                                                    have concerns or
                                                    questions. Nonetheless, we seek to protect the integrity of our
                                                    Site and welcome
                                                    any feedback about these third party sites.</p>
                                                <p><strong>Children</strong></p>
                                                <p>Our Site is not directed to minors. If we learn that we have
                                                    collected personal
                                                    information from anyone under the age of 13, we will endeavor to
                                                    delete such
                                                    information as soon as reasonably possible.</p>
                                                <p><strong>Privacy Rights of California Residents</strong></p>
                                                <p>California residents are entitled once a year, free of charge, to
                                                    request and
                                                    obtain certain information regarding our disclosure of personal
                                                    information to
                                                    third parties for their direct marketing purposes. Populous does
                                                    not disclose
                                                    personal information to third parties for direct marketing
                                                    purposes.</p>
                                                <p><strong>Opting Out of Communications</strong></p>
                                                <p>You may opt-out of receiving marketing-related emails by clicking
                                                    the
                                                    &#8220;unsubscribe&#8221; link at the bottom of any email you
                                                    receive from us or
                                                    by changing the communication preferences on your online account
                                                    or profile. If
                                                    you no longer want to receive promotional text messages from us,
                                                    please follow
                                                    the cancellation instructions contained in the last text
                                                    message. If you are
                                                    having difficulty unsubscribing from our marketing
                                                    communications using the
                                                    above methods, please contact us at info@populous.com</p>
                                                <p>If you opt-out from receiving marketing emails or text messages,
                                                    we may still
                                                    need to send you communications about your orders, customer
                                                    service inquiries,
                                                    promotions participation and other matters.</p>
                                                <p>If you agreed to receive future marketing communications directly
                                                    from a third
                                                    party through our Site, you will need to contact that party to
                                                    opt-out of such
                                                    communications. This process may be outlined on that party’s
                                                    Privacy Policy.</p>
                                                <p><strong>Changes to our Privacy Statement</strong></p>
                                                <p>We may update this Privacy Statement from time to time, so please
                                                    check the
                                                    effective date at the top of this page as the date of last
                                                    revision. Changes
                                                    will become immediately effective upon posting on our Site
                                                    unless otherwise
                                                    noted. Your use of the Site following these changes indicates
                                                    your consent to
                                                    the practices described in the revised Privacy Statement.</p>
                                                <p><strong>Contacting Us</strong></p>
                                                <p>If there are any questions regarding this privacy policy, you may
                                                    contact us
                                                    using the information at info@populous.com</p>
                                            </div>
                                        </div> <!-- /halves__half -->

                                        <div class="columned-content__side">
                                        </div> <!-- /halves__half -->

                                    </div>

                                </div>
                            </section>



                        </main><!-- #main -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



<script>
    function showmodal1(){
     $('#termsconditionsModal').modal('show');
     console.log('hi')
    }
    function showmodal2(){
     $('#privacypolicyModal').modal('show');
     console.log('hi')
    }

</script>