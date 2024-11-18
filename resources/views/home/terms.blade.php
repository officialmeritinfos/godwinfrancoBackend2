@extends('home.base')

@section('content')

    <!-- START SECTION BANNER -->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('home/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">{{$pageName}}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">{{$siteName}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- CONTENT-1
			============================================= -->
    <section id="content-1" class="content-1 wide-60 inner-page-hero content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-12 col-lg-12 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">

                        <p><i>This Terms of Service was last updated on January 1, 2022.</i></p>
                        <h3 class="text-center" style="font-weight: bolder;">Terms and Conditions </h3>
                        <p>Carefully read the rules for using the {{$siteName}} service. By accessing or using the site, you agree
                            to comply with the conditions described in this document. If you do not agree to these terms,
                            do not use this website.
                            These Terms of Use (the “Terms”) apply to your access to and use of the {{$siteName}} website
                            (the “Site”).
                        </p>
                        <h3 class="text-center" style="font-weight: bolder;">Introduction</h3><p>
                            {{$siteName}} reserves the right to change or modify the terms and conditions contained in these
                            Terms or any other policies or guidelines on the Site, at any time and its sole discretion. We
                            will provide notice of these changes by posting the revised Terms on the Site and changing
                            the “Last edited” date at the top of the Terms, or providing other notification methods that
                            {{$siteName}} will determine at its own discretion each time. Using a specific form of notification in
                            some cases does not obligate us to use the same form in other cases. Any changes or
                            modifications will take effect immediately after the changes are posted on the Site and will
                            apply to your subsequent use of the Site. You waive any right you may require to receive
                            special notice of such changes or modifications. Your continued use of this Site will confirm
                            your acceptance of such changes or modifications; therefore, you must review the Terms
                            and the applicable policies whenever you use the Site to understand the terms and
                            conditions applicable to such use. The latest version of the Terms can be viewed by clicking
                            on the “Terms of Use” hypertext link at the bottom of our web pages. If you do not agree to
                            the Terms and Conditions in accessing or using the Site, you must stop using the Site.</p>
                        <h3 class="text-center" style="font-weight: bolder;">Foreword</h3>
                        <p>{{$siteName}} is an online platform that allows
                            you to build up your blockchain portfolio by allowing to invest in diverse blockchain and
                            asset management portfolios. We are experts with over 7 years of experiences and all our staff
                            are task with the responsibility of ensuring the maximum return on every investment.</p>
                        <h3 class="text-center" style="font-weight: bolder;">

                            User responsibilities</h3><p>
                            By accessing or using the site, you represent and warrant that you have not previously been
                            suspended or removed from the site. Your age should allow you to provide an official state
                            document identifying your identity. You can use our Services only if you can legally enter into
                            an agreement with these Terms and Conditions in accordance with applicable law. If you use
                            our Services, you agree to do so in accordance with these Terms and applicable laws and
                            regulations. You also represent and warrant that you will not use the Site if the laws of your
                            country prohibit you from doing so in accordance with these Terms.
                        </p><p>
                            <b>
                                Registration and Account</b></p><br>
                        To access and use certain functions on the Site, you need to create an account in {{$siteName}}(“Account”). You agree to:<br>
                        1. Provide accurate, current and complete information when creating or updating an
                        Account;<br>
                        2. Maintain and timely update information about your Account;<br>
                        3. Maintain the security and privacy of your credentials and restrict access to your account
                        and your computer;<br>
                        4. Immediately notify {{$siteName}} if you discover or otherwise suspect any security breaches
                        associated with the Site;<br>
                        5. Enable two-step authentication using a mobile application<br>
                        6. We ake responsibility for all actions that occur under your account, and assume all the risks<br>
                        ofexcept for unauthorized access without active two-step authentication. In no event will {{$siteName}} be liable
                        for unauthorized access to accounts with inactive two-step authentication.<br><b>
                            Suspension and Account Closure</b><br>
                        We may, without any obligation to you or any third party, deny you permission to open an
                        account, suspend your account, or terminate your account or your use of one or more of the
                        Services. Such actions may be taken as a result of:<br>
                        - Account Inactivity ;<br>
                        - Failure to identify yourself if we believe that your account has been hacked so that we can
                        comply with laws or regulations;<br>
                        - As a result of your violation of the terms of this Agreement;<br>
                        If you have cryptocurrency remaining on your account that has been suspended or closed,
                        you can access this cryptocurrency and bring it to the external address of the wallet (unless
                        prohibited by law or court order). If you are unable to log in to your account because it has
                        been suspended, you must contact us at <b>{{$web->email}}</b> to process such a withdrawal.
                        You may terminate this Agreement at any time by closing your account and ceasing to use
                        the Services. Upon termination of this Agreement and your account, you continue to be
                        responsible for all transactions made while the account remains active.<br><b>
                            Inactive accounts</b><br>
                        An inactive account is defined as a user account with no login or other activity for more than
                        180 days. {{$siteName}} may, but is not required to, transfer funds from an account to a protected
                        “Cold Storage” account for safekeeping. When a user resumes action in an inactive account,
                        funds can be obtained from “Cold Storage” by contacting customer support to check and
                        restore the account.<br><b>
                            Transaction limits and refunds</b><br>
                        {{$siteName}} reserves the right to change the limits on deposits, withdrawals, conversions, storage
                        and speed in your account, as well as the availability of the Services, if we consider it
                        necessary. After a cryptocurrency transaction has been initiated, it cannot be canceled or
                        refunded.<br><b>
                            Privacy policy</b><br>
                        Please refer to our Privacy Policy for information on how we collect, use and share your
                        personal information.
                        <br><b>
                            Internet Data Privacy</b><br>
                        Transmission of data or information (including e-mail) over the Internet or other public
                        networks is not 100% secure and may be lost, intercepted or altered during transport.
                        Accordingly, {{$siteName}} shall be liable for any damages that you may incur or expenses that
                        you may incur as a result of any transmissions over the Internet or other public networks,
                        including without limitation of transmissions, including exchanging email with {{$siteName}}containing
                        your personal data. Although {{$siteName}} will make commercially reasonable efforts to
                        protect the confidentiality of the information you provide to {{$siteName}} and processes such
                        information in accordance with the {{$siteName}} Privacy Policy, in no case will the information you
                        provide to {{$siteName}} be considered confidential, create any fiduciary obligations for you by {{$siteName}},
                        or lead to any liability to you by {{$siteName}} in the event of inadvertent disclosure of such
                        information by {{$siteName}} or access by a third persons without the consent of {{$siteName}}.<br><b>
                            Cryptocurrency transactions</b><br>
                        {{$siteName}} guarantees the value of cryptocurrency and will bear the loss that arises from the change in prices.<br>
                        The cryptocurrency network is managed by a decentralized network of independent third
                        parties. As soon as a transaction request is sent to the cryptocurrency network through the
                        Services, the cryptocurrency network will automatically terminate or reject the request, and
                        you cannot cancel or otherwise change your transaction request. You acknowledge and
                        agree that {{$siteName}} is not responsible for any errors or omissions that you make in connection
                        with any cryptocurrency transaction initiated through the Services. Services help you send a
                        cryptocurrency transaction request for confirmation in a cryptocurrency network. However,
                        {{$siteName}} does not control the cryptocurrency network and, therefore, cannot and does not
                        guarantee that any transaction request you send through the Services will be executed. You
                        acknowledge and agree that requests for transactions that you send through the Services
                        may not be executed or may be significantly delayed by the cryptocurrency network. When
                        you execute a transaction request through the Services, you authorize us to send a
                        transaction request to the cryptocurrency network in accordance with the instructions that
                        you provide through the Services.<br><b>
                            Third Party Applications</b><br>
                        If you give explicit permission to a third party to connect to your account either through a
                        third party product or through {{$siteName}}, you acknowledge that granting permission to a third
                        party to perform certain actions on your behalf does not relieve you of any of your obligations
                        under this Agreement. In addition, you acknowledge and agree that you will not be
                        responsible for {{$siteName}} and will not relieve {{$siteName}} of any liability arising from the actions or
                        omissions of this third party in connection with the permissions granted by you.<br>
                        <b>
                            Force Majeure</b><br>
                        We are not responsible for delays, malfunctions or interruptions in service, which are directly
                        or indirectly related to any cause or condition beyond our control, including, without
                        limitation, any delays or malfunctions as a result of a natural disaster, civil act or military
                        authorities, acts of terrorism, civil unrest, wars, strikes or other labor disputes, fires,
                        interruptions in telecommunications or Internet services or services of network providers,
                        equipment and/or software failure, other disasters or any other events that occur beyond our
                        reasonable control and should not affect the validity and applicability of any remaining
                        provisions.<br><b>
                            Change of Management</b><br>
                        In the event {{$siteName}} is acquired or merged with a third party, we reserve the right under any of
                        these circumstances to transfer or assign the information we received from you as part of
                        such a merger, acquisition, sale or other change of management.<br>
                        <b>
                            Damages</b><br>
                        You agree to protect, indemnify and secure {{$siteName}}, its independent contractors, service
                        providers and consultants, as well as their respective directors, employees and agents from
                        any claims, damages, costs, obligations and expenses (including but not limited to
                        reasonable attorney fees) arising from or related to:<br>
                        1. Your use of the Site;<br>
                        2. Any user content or feedback you provide;<br>
                        3. Your violation of these Terms;<br>
                        4. Your violation of any rights of another person;<br>
                        5. Your behavior in connection with the site.<br>
                        In some jurisdictions, consumer compensation is limited, so some or all of the above
                        reimbursement provisions may not apply to you. If you are obligated to indemnify us, we will
                        have the right, at our own discretion, to control any action or proceeding and determine
                        whether we want to settle it, and if so, under what conditions.<br>
                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	   <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-1 -->

@endsection
