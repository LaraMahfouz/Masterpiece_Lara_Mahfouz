@extends('layouts/publicApp')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
@endsection
@section('addpost')
    <div class="col">
        <div class="offcanvas-social">
            <a data-ghost="Click-AddPost" class="addAds orangeBtn clear taRight fLeft relative" href="{{ url('home') }}"
                style="width: 240px ;background-color:#72A499;color:#fff">
                <i class="fas fa-camera" style="font-size:20px"><span class="utf_closed" style="
                                  background: #feffba;
                                  float: left;
                                  position: absolute;
                                  transform: rotate(-45deg);
                                  left: -5px;
                                  top: 40px;
                                  text-align: center;
                                  width: 90px;
                                  font-size: 12px;
                                  margin: 0;
                                  z-index: 999;
                                  color: rgb(43, 43, 43);
                                  font-weight: 600;
                                  line-height: 28px;
                                  border-radius: 20PX 60px 10px 14PX;">FREE</span>
                    ADD POST</i></a>
        </div>
    </div>
@endsection
@section('maincon')

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets/images/bg/page-title-1.jpg') }}" style="margin-bottom:3%">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title" style="text-align: left">Privacy Policy</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->
    <h5 class="title" style="text-align: left;margin-left:10%;">Privacy Policy</h5>
    <p style="margin:2% 10%;text-align:justify">Please read this Privacy Policy carefully before using our Services. In this
        Privacy Policy the following words and expressions shall have the meanings hereby assigned to them: Services means
        any products, services, content, features, technologies, or functions, and all related websites, applications and
        services offered to you by us. Platform means the websites, mobile apps, mobile sites or other online properties
        through which we offer our Services. By using OpenSooq and related Services, you give explicit consent to OpenSooq
        for the collection, use, disclosure and retention of your personal information by us, as described in this Privacy
        Policy and our Terms of Use. OpenSooq may change this Privacy Policy from time to time as described below. We advise
        you to read it regularly to check for changes. Any amended Privacy Policy will be effective immediately after it is
        posted on our Website.
        <span> What data do we collect about you? Registration and other account information: When you
            register to use our Services, we may collect the following information about you depending on how you register
            on
            our Platform that can include mobile number and name amongst other basic info. Data we collect automatically
            when
            you use of our Services: When you interact with our Platform or use our Services, we automatically collect
            various
            information that includes but is not limited to device information, location information, log data, click stream
            data, cookies and similar technologies. Data from third parties or publicly available sources: We may receive
            personal data about you from various third parties and public sources.</span>
        <span> Why do we process your personal
            information? We use your personal data when the law allows us to. Most commonly but not limited to, we will use
            the
            data where we need to perform the contract we are about to enter into or have entered into with you, to improve,
            personalize and deliver our current and upcoming Services and Platform, to do our best to catch scam and fraud,
            to
            introduce Services and Platform features, to better serve you via help tools, and to comply with a legal or
            regulatory obligation with authorities as need be.</span>
        3. How will we inform you about changes in our Privacy Policy? We
        may amend this Privacy Policy from time to time. We will post changes on this page for any change we do. If you or
        your guardian (as the case may be) do not agree with the changes, please stop using the Services and Platform. 4.
        Your rights You may have certain legal rights regarding your personal data depending on the country you are in or
        how we interact with you. You will not have to pay a fee to access your personal data (or to exercise any of the
        other rights). However, we may charge a reasonable fee if your request is clearly unfounded, repetitive or excessive
        or for any other reason. Alternatively, we may refuse to comply with your request in these circumstances. We try to
        respond to all legitimate requests within three months. Occasionally it may take us longer if your request is
        particularly complex or you have made several requests. In this case, we will notify you and keep you updated. 5.
        Communication and marketing We will communicate with you by email, SMS or in app notification in connection with our
        Services/Platform to confirm your registration, to inform you in case your listing has become live/expired and for
        other transactional messages in relation to our Services. As it is imperative for us to provide you such
        transactional messages you may not be able to opt-out of such messages. You may or may not receive some marketing
        communications from us if you use our Platform or Services; provided us with your details when you entered a
        competition; or registered for a promotion. 6. Who do we share your data with? We may have to share your personal
        data with the parties set out below for the purposes set out above. We use third party service providers to help us
        deliver certain aspect of our Services for example, cloud storage facilities such as Amazon Web Services or others.
        Service providers may be located inside or outside of the country you are currently in. Unless explicitly provided
        otherwise in this Privacy Policy, this Privacy Policy applies only to the use and transfer of information we collect
        from you. OpenSooq has no control over the privacy policies of third parties that may apply to you. We therefore
        encourage you to ask questions before you disclose your personal information to others. In order to improve our
        Services, we will sometimes share your non-identifiable information with analytics providers that help us analyse
        how people are using our Platform/Service. We share your information with them in non-identifiable form for
        monitoring and reporting the effectiveness of the campaign delivery to our business partners and for internal
        business analysis. We may disclose your personal data to law enforcement authorities, regulators, governmental or
        public bodies and other relevant third parties to comply with any legal or regulatory requirements. We may choose to
        sell, transfer, or merge parts of our business or our assets. Alternatively, we may seek to acquire other businesses
        or merge with them. If a change happens to our business, then the new owners may use your personal data in the same
        way as set out in this Privacy Policy. When you post an item for sale using our Services, you may choose to make
        certain personal information visible to other OpenSooq users. This may include (but not limited to) your name, your
        email address, your location, your contact number, and your picture. Please note, any information you provide to
        other users can always be shared by them with others so please exercise discretion in this respect. 7. International
        transfers You agree that we may transfer your personal data to third parties inside and outside of your country. So
        while we strive to protect such information, we cannot ensure or warrant the security of any information you
        transmit to us and you do so at your own risk. 8. Where do we store your data and for how long? The data we collect
        about you may be stored and processed inside as well as outside your country in secure servers in order to provide
        the best possible user experience for the Service and/or Platform, current or upcoming. For example – for fast
        website or mobile application build up. We will only retain your personal data for as long as necessary to fulfil
        the purposes we collected it for, including for the purposes of satisfying any legal, accounting, or reporting
        requirements. To determine the appropriate retention period for personal data, we consider the amount, nature, and
        sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your personal
        data, the purposes for which we process your personal data and whether we can achieve those purposes through other
        means, and the applicable legal requirements. 9. Technical and organizational measures and processing security All
        the information we receive about you are stored on secure servers and we have basic measures that are suitable to
        protect your personal data. OpenSooq continually evaluates the security of its network and adequacy of its internal
        information security program which is designed to (a) help secure your data against accidental or unlawful loss,
        access or disclosure, (b) identify reasonably foreseeable risks to the security of the OpenSooq network, and (c)
        minimize security risks, including through risk assessment and regular testing. In addition, we ensure that all
        payment data are encrypted using SSL technology. Please note, despite the measures we have implemented to protect
        your data, the transfer of data through the Internet or other open networks is never completely secure and there is
        a risk that your personal data may be accessed by unauthorized third parties. 10. Contact For any additional
        information or to exercise your rights, please contact our team at info@opensooq.com, or go to the Help section on
        our Platforms. 11. Changes to this Policy We may update, upgrade, modify (partially and/or fully) this Privacy
        Policy from time to time to keep it up to date with legal requirements and the way we operate our business(es).
        Please regularly check this page for the latest version of the Privacy Policy. Your continued use of our Services
        following an amendment indicates your or your guardian's acceptance (as the case may be) of any changes. 12.
        Acceptance of this Policy You acknowledge you have read this Policy and agree to all its terms and conditions. By
        accessing and using the Platforms and Services you agree to be bound by this Policy and the Terms of Use. If you do
        not agree to abide by the terms of this Policy and our other Policies, you are not authorized to access or use the
        Platform(s) and Service(s).
    </p>
@endsection
