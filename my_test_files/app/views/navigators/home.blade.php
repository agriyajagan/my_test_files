@extends('layouts.master-fixed')

@section('meta')
@parent
<meta name="description" content="Want to adopt a baby? Adoption Navigators helps expand your reach for domestic infant adoptions even in independent or private adopting situations." />
<link rel="canonical" href="http://adoption.com/" />
@stop

@section('styles')
@parent
{{ HTML::style( App\Libraries\Helper::asset('css/navigators.css') ) }}
@stop

@section('scripts')
@parent
<script>
    jQuery('.carousel').carousel();
</script>
@stop

@section('content')

<div id="NavigatorsLogo" class="row text-center">
    <img src="{{ App\Libraries\Helper::asset('img/navigators/enlarge-logo.png') }}" class="img-responsive" />
</div>

<h1 class="navi-mainheading">Want to adopt a baby? Adoption Navigators helps expand your reach for domestic infant adoptions even in independent or private adopting situations.</h1>

<div class="clearfix pr">
    <div class="newtopimage">&nbsp;</div>
    <div class="navigatorform">
        <form class="navi-form" role="form" onSubmit="return validation();" action="" method="post">
            <?php
			$show = 'block';
            if (Session::get('type') == 'success') {
				$show = 'none';
                ?>
            <div class="success-message text-center">
                    <h3>THANK YOU</h3>
                    <p>A member of the Adoption Navigators team will contact you within one business day.</p>
                </div>
                <?php
            } else if (Session::get('type') == 'error') {
				$show = 'block';
                ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                    <?php echo Session::get('message'); ?>
                </div>
                <?php
            } 
			
                ?>
			<div style="display:<?php echo $show; ?>">
            	<h5>Free Consultation</h5>
                <p>Enter your details to be contacted by an Adoption Navigator.</p>
                <div class="clearfix">
                    <input type="hidden" name="vid" value="6202">
                    <input type="hidden" name="lid" value="5239">
                    <input type="hidden" name="aid" value="25541">
        <!--                    <input type="hidden" name="successredirecturl" value="{{ Url::to('/navigators') }}">
                        <input type="hidden" name="rejectredirecturl" value="{{ Url::to('/navigators') }}">-->
                         <div class="form-group">
                    <input type="text" placeholder="First Name..." name="LastName" id="first_name" required="required" class="form-control input-field"/>
                    </div>
                     <div class="form-group">
                    <input type="text" placeholder="Last Name..." name="FirstName" id="last_name" required="required"  class="form-control input-field"/>
                    </div>
                     <div class="form-group">
                    <input type="email" placeholder="Email..." name="Email" id="email" required="required"  class="form-control input-field"/>
                    </div>
                     <div class="form-group">
                    <input type="tel" placeholder="Phone Number..." name="PhoneNumber" id="phone" required="required"  class="form-control input-field"/>
                    </div>

                            <div class="newtop-space checkbox no-mar clearfix">
                            <label for="iagree">
                            <input type="checkbox" id="iagree" name="" required="required" value="1" checked="checked" />
                                I agree to the <a href="http://adoption.com/terms-of-service/">Terms of Service</a> &amp;
                                <a href="http://adoption.com/privacy-notice/">Privacy Policy</a>
                            </label>
                        </div>
                        <div class="checkbox clearfix">
                        <label for="subscribe">
                            <input type="checkbox" id="subscribe" required="required" name="Subscribed"  value="Yes" checked="checked" />
                            Subscribe to our newsletter</label>
                        </div>
                        <div class="clearfix">
                            <input type="submit" value="submit" class="btn submitbutton"  name="submit_btn" id="submit_btn" />
                        </div>
                    </div>
            </div>        
        </form>
        <div class="newtop-space navi-contactdtls clearfix">
            <p><span>PHONE : </span><a href="tel:18006722678">1-800-67-ADOPT (22678)</a></p>
            <p><span>EMAIL : </span><a href="mailto:navigators@adoption.com">navigators@adoption.com</a></p>
        </div>
    </div>
</div>

<div class="clsCategoryList">
    <div class="clsContentHeading">
        <h2 class="textb">Why you'll love Adoption Navigators.</h2>
        <p class="top-desc">Adoption Navigators helps qualified hopeful parents expand their exposure to potential birth parents and decrease adoption wait times.</p>
    </div>

    <div class="clearfix">
        <ul class="clsLftSideList clearfix">
            <li class="clsHart col-lg-6 col-md-6 col-sm-6 col-xs-12">Premier advertising exposure on Adoption.com</li>
            <li class="clsuser col-lg-5 col-md-6 col-sm-6 col-xs-12">Connect with more potential birth parents</li>
            <li class="clsNature col-lg-6 col-md-6 col-sm-6 col-xs-12">16 years experience helping families grow</li>
            <li class="clsLoading col-lg-6 col-md-6 col-sm-6 col-xs-12">Custom video created by our team with your video clips and photos</li>
            <li class="clsEdit col-lg-6 col-md-6 col-sm-6 col-xs-12">Compelling storytelling to communicate your story</li>
            <li class="clsDobUsers col-lg-6 col-md-6 col-sm-6 col-xs-12">1-on-1 coaching and training on adoption risks, birth parent communication, etc.</li>
            <li class="clsSearchIcon col-lg-6 col-md-6 col-sm-6 col-xs-12">Search engine marketing on Google, Bing, and Yahoo</li>
            <li class="clsSettings col-lg-6 col-md-6 col-sm-6 col-xs-12">Social media marketing on YouTube, Facebook, Twitter, Pintrest, and Instagram</li>
            <li class="clsMsgBox col-lg-6 col-md-6 col-sm-6 col-xs-12">Tools to empower grassroots networking to help you find an adoption situation</li>
            <li class="clsArrows col-lg-6 col-md-6 col-sm-6 col-xs-12">Help setting up a fundraising campaign to assist with the cost of adoption</li>
        </ul>
    </div>

    <div class="clsBottBanner">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"> <img class="img-responsive" alt="" src="{{ App\Libraries\Helper::asset('img/navigators/banner-img-1.png') }}"> </div>
                <div class="item"> <img class="img-responsive" alt="" src="{{ App\Libraries\Helper::asset('img/navigators/banner-img-2.png') }}"> </div>
                <div class="item"> <img class="img-responsive" alt="" src="{{ App\Libraries\Helper::asset('img/navigators/banner-img-3.png') }}"> </div>
                <div class="item"> <img class="img-responsive" alt="" src="{{ App\Libraries\Helper::asset('img/navigators/banner-img-4.png') }}"> </div>
                <div class="item"> <img class="img-responsive" alt="" src="{{ App\Libraries\Helper::asset('img/navigators/banner-img-5.png') }}"> </div>
            </div>
        </div>
    </div>

</div>
<script type='text/javascript'>(function () {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function (e) {
            if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                var w = new PCWidget({c: '9d7ba551-2f4f-484e-80fa-829a15143905', f: true});
                done = true;
            }
        };
    })();
</script>
@stop