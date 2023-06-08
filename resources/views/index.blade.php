@extends('layout.app')
@push('style')
<style>
    @keyframes pulse{
        0%{
            transform: scale(1);
        }
        25%{
            transform: scale(1.2)
        }
        50%{
            transform: scale(1.4)
        }
        75%{
            transform: scale(1.2)
        }
        100%{
            transform: scale(1)
        }
    }

    .pulse-btn{
        animation: pulse 2s linear infinite;
    }
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
   @vite(['resources/css/app.css'])
<style id='wcf-normalize-frontend-global-inline-css'>
    :root {
        --ast-global-color-0: #046bd2;
        --ast-global-color-1: #045cb4;
        --ast-global-color-2: #1e293b;
        --ast-global-color-3: #334155;
        --ast-global-color-4: #f9fafb;
        --ast-global-color-5: #FFFFFF;
        --ast-global-color-6: #e2e8f0;
        --ast-global-color-7: #cbd5e1;
        --ast-global-color-8: #94a3b8;
    }
</style>
<style id='wcf-checkout-template-inline-css'>
    .wcf-embed-checkout-form .woocommerce #payment #place_order:before {
        content: "\e902";
        font-family: "cartflows-icon" !important;
        margin-right: 10px;
        font-size: 16px;
        font-weight: 500;
        top: 0px;
        position: relative;
    }
</style>
<style>
    p#billing_last_name_field {
        display: none !important;
    }

    p#billing_company_field {
        display: none !important;
    }

    p#billing_country_field {
        display: none !important;
    }

    p#billing_address_2_field {
        display: none !important;
    }

    p#billing_city_field {
        display: none !important;
    }

    p#billing_state_field {
        display: none !important;
    }

    p#billing_postcode_field {
        display: none !important;
    }

    p#billing_email_field {
        display: none !important;
    }
</style>

<style>
    .woocommerce-product-gallery {
        opacity: 1 !important;
    }
</style>
@endpush
@section('page_content')
@error('phone')
    <h4 style="text-align: center"><span class="text-danger" style="color: red">সঠিক নাম্বার লিখুন</span>
        <span class="text-danger" style="color: red">Exp:01700000000</span></h4>
@enderror
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627" />
                <feFuncG type="table" tableValues="0 0.49803921568627" />
                <feFuncB type="table" tableValues="0 0.49803921568627" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1" />
                <feFuncG type="table" tableValues="0 1" />
                <feFuncB type="table" tableValues="0 1" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                <feFuncG type="table" tableValues="0 1" />
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1" />
                <feFuncG type="table" tableValues="0 0.27843137254902" />
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0" />
                <feFuncG type="table" tableValues="0 0.64705882352941" />
                <feFuncB type="table" tableValues="0 1" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1" />
                <feFuncG type="table" tableValues="0 0.94901960784314" />
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                <feFuncG type="table" tableValues="0 1" />
                <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1" />
                <feFuncG type="table" tableValues="0 0.66274509803922" />
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                <feFuncA type="table" tableValues="1 1" />
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in" />
        </filter>
    </defs>
</svg>


<div class="cartflows-container">

    <div data-elementor-type="wp-post" data-elementor-id="26" class="elementor elementor-26">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-6a51efb elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="6a51efb" data-element_type="section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e36877c"
                    data-id="e36877c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-153f31f elementor-widget elementor-widget-heading"
                            data-id="153f31f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="">
                                <style>
                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                    .elementor-heading-title {
                                        padding: 0;
                                        margin: 0;
                                        line-height: 1
                                    }

                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                        color: inherit;
                                        font-size: inherit;
                                        line-height: inherit
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                        font-size: 15px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                        font-size: 19px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                        font-size: 29px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                        font-size: 39px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                        font-size: 59px
                                    }
                                </style>
                                <h1 class="elementor-heading-title elementor-size-xl">দীর্ঘদিনের চেষ্টায় একটা সন্তান
                                    লাভ হচ্ছে না ?😔<br>
                                </h1>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2cffa3d elementor-widget elementor-widget-image"
                            data-id="2cffa3d" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                    .elementor-widget-image {
                                        text-align: center
                                    }

                                    .elementor-widget-image a {
                                        display: inline-block
                                    }

                                    .elementor-widget-image a img[src$=".svg"] {
                                        width: 48px
                                    }

                                    .elementor-widget-image img {
                                        vertical-align: middle;
                                        display: inline-block
                                    }
                                </style> <img decoding="async" width="1024" height="888"
                                    src="https://ineedbaby.com/wp-content/uploads/2023/05/আল্লাহ-প্রদত্ত-কুদরতি-ফুল-ইনশা-আল্লাহ-আপনাকে-এবার-ফলাফল-দেবে-1024-×-988-px-1024-×-888-px.png"
                                    class="attachment-full size-full" alt="" loading="lazy"
                                    srcset="https://ineedbaby.com/wp-content/uploads/2023/05/আল্লাহ-প্রদত্ত-কুদরতি-ফুল-ইনশা-আল্লাহ-আপনাকে-এবার-ফলাফল-দেবে-1024-×-988-px-1024-×-888-px.png 1024w, https://ineedbaby.com/wp-content/uploads/2023/05/আল্লাহ-প্রদত্ত-কুদরতি-ফুল-ইনশা-আল্লাহ-আপনাকে-এবার-ফলাফল-দেবে-1024-×-988-px-1024-×-888-px-300x260.png 300w, https://ineedbaby.com/wp-content/uploads/2023/05/আল্লাহ-প্রদত্ত-কুদরতি-ফুল-ইনশা-আল্লাহ-আপনাকে-এবার-ফলাফল-দেবে-1024-×-988-px-1024-×-888-px-768x666.png 768w, https://ineedbaby.com/wp-content/uploads/2023/05/আল্লাহ-প্রদত্ত-কুদরতি-ফুল-ইনশা-আল্লাহ-আপনাকে-এবার-ফলাফল-দেবে-1024-×-988-px-1024-×-888-px-600x520.png 600w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-dd71a77 elementor-widget elementor-widget-heading"
                            data-id="dd71a77" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-large">অনেক চেষ্টা করার পরেও যাদের
                                    বাচ্চা কন্সিভ হচ্ছে না, আল্লাহর কুদরতি ফুলটি ব্যাবহারে আপনিও দেখবেন সন্তানের
                                    মুখ, ইনশা আল্লাহ।
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e65a04c elementor-align-center elementor-widget elementor-widget-button"
                            data-id="e65a04c" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="#orderform"
                                        class="pulse-btn elementor-button-link elementor-button elementor-size-sm"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">অর্ডার করুন</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-e053509 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="e053509" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5970725"
                                    data-id="5970725" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e1bcb8a elementor-widget elementor-widget-heading"
                                            data-id="e1bcb8a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">"মরিয়ম
                                                    ফুলকে" ‘প্রফেটিক মেডিসিন’ তথা নবী (সা.) নির্দেশিত ওষুধ বলা হয়
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-383a3c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="383a3c4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-217c33c"
                                    data-id="217c33c" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-dcf167d elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="dcf167d" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                                    .elementor-widget-image-box .elementor-image-box-content {
                                                        width: 100%
                                                    }

                                                    @media (min-width:768px) {

                                                        .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
                                                        .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                            display: -webkit-box;
                                                            display: -ms-flexbox;
                                                            display: flex
                                                        }

                                                        .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                            text-align: right;
                                                            -webkit-box-orient: horizontal;
                                                            -webkit-box-direction: reverse;
                                                            -ms-flex-direction: row-reverse;
                                                            flex-direction: row-reverse
                                                        }

                                                        .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                                            text-align: left;
                                                            -webkit-box-orient: horizontal;
                                                            -webkit-box-direction: normal;
                                                            -ms-flex-direction: row;
                                                            flex-direction: row
                                                        }

                                                        .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                                            margin: auto
                                                        }

                                                        .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                                            -webkit-box-align: start;
                                                            -ms-flex-align: start;
                                                            align-items: flex-start
                                                        }

                                                        .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                                            -webkit-box-align: center;
                                                            -ms-flex-align: center;
                                                            align-items: center
                                                        }

                                                        .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                                            -webkit-box-align: end;
                                                            -ms-flex-align: end;
                                                            align-items: flex-end
                                                        }
                                                    }

                                                    @media (max-width:767px) {
                                                        .elementor-widget-image-box .elementor-image-box-img {
                                                            margin-left: auto !important;
                                                            margin-right: auto !important;
                                                            margin-bottom: 15px
                                                        }
                                                    }

                                                    .elementor-widget-image-box .elementor-image-box-img {
                                                        display: inline-block
                                                    }

                                                    .elementor-widget-image-box .elementor-image-box-title a {
                                                        color: inherit
                                                    }

                                                    .elementor-widget-image-box .elementor-image-box-wrapper {
                                                        text-align: center
                                                    }

                                                    .elementor-widget-image-box .elementor-image-box-description {
                                                        margin: 0
                                                    }
                                                </style>
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/trs-Infertility.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">বন্ধ্যাত্ব থেকে মুক্তি
                                                            দেয়</h3>
                                                        <p class="elementor-image-box-description">অনেক চেষ্টা করার
                                                            পরেও যাদের বাচ্চা কন্সিভ হচ্ছে না,মরিওন ফুল হতে পারে
                                                            তাদের জন্য আল্লাহ প্রদত্ত শ্রেষ্ঠ নেয়ামত</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8400b73"
                                    data-id="8400b73" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-d349fa4 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="d349fa4" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="600" height="600"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/1578973557-211-e.jpg"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">সন্তান সম্ভবা নারীদের
                                                            জন্য আল্লাহ প্রদত্ত কুদরতি ফুল</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-479b3e2"
                                    data-id="479b3e2" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cf906a6 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="cf906a6" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="782" height="495"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/natural-childbirth.webp"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">সহজে নরমাল ডেলিভারী হয়
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7e4ec11 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7e4ec11" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-86deef2"
                                    data-id="86deef2" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e7dd7e3 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="e7dd7e3" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/sexual-transmitted-disease.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <p class="elementor-image-box-description">প্রসবকালীন ব্যথা
                                                            লাঘব হয় এবং সহজে প্রসব হয়</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c7156f4"
                                    data-id="c7156f4" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e988879 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="e988879" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/vitamins.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">শরীরের বিভিন্ন
                                                            ভিটামিনের ঘাটতি পূরণ করে।</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ea228d8"
                                    data-id="ea228d8" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e40cd3c elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="e40cd3c" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/account-restriction.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">বার্ধক্য দূরীকরণে
                                                            সাহায্য করে।</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7125373 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7125373" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8e47cba"
                                    data-id="8e47cba" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-566ecf5 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="566ecf5" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/sexual-transmitted-disease.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">যৌন শক্তি ভেতর থেকে
                                                            জাগরিত করে।</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ceda39"
                                    data-id="9ceda39" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2e2fcf0 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="2e2fcf0" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/shuttle.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">ফুলটি একেবারেই
                                                            অরগানিক, তাই কোন পার্শ্বপ্রতিক্রিয়া নেই</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d617b9"
                                    data-id="7d617b9" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-65cc146 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="65cc146" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/thunderbolt.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">এটি প্রচুর শক্তি
                                                            যোগায়।<br><span style="white-space: normal;">মহিলাদের
                                                                জরায়ুর গঠন মজবুত করে</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-01d08ce elementor-widget elementor-widget-heading"
                            data-id="01d08ce" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">মরিয়ম ফুলের ব্যাবহার
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2779c77 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="2779c77" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                    .elementor-widget-divider {
                                        --divider-border-style: none;
                                        --divider-border-width: 1px;
                                        --divider-color: #2c2c2c;
                                        --divider-icon-size: 20px;
                                        --divider-element-spacing: 10px;
                                        --divider-pattern-height: 24px;
                                        --divider-pattern-size: 20px;
                                        --divider-pattern-url: none;
                                        --divider-pattern-repeat: repeat-x
                                    }

                                    .elementor-widget-divider .elementor-divider {
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex
                                    }

                                    .elementor-widget-divider .elementor-divider__text {
                                        font-size: 15px;
                                        line-height: 1;
                                        max-width: 95%
                                    }

                                    .elementor-widget-divider .elementor-divider__element {
                                        margin: 0 var(--divider-element-spacing);
                                        -ms-flex-negative: 0;
                                        flex-shrink: 0
                                    }

                                    .elementor-widget-divider .elementor-icon {
                                        font-size: var(--divider-icon-size)
                                    }

                                    .elementor-widget-divider .elementor-divider-separator {
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: flex;
                                        margin: 0;
                                        direction: ltr
                                    }

                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center
                                    }

                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                    .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                    .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                        display: block;
                                        content: "";
                                        border-bottom: 0;
                                        -webkit-box-flex: 1;
                                        -ms-flex-positive: 1;
                                        flex-grow: 1;
                                        border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                        -webkit-box-flex: 0;
                                        -ms-flex-positive: 0;
                                        flex-grow: 0;
                                        -ms-flex-negative: 100;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-left .elementor-divider__element {
                                        margin-left: 0
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                        -webkit-box-flex: 0;
                                        -ms-flex-positive: 0;
                                        flex-grow: 0;
                                        -ms-flex-negative: 100;
                                        flex-shrink: 100
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                        content: none
                                    }

                                    .elementor-widget-divider--element-align-right .elementor-divider__element {
                                        margin-right: 0
                                    }

                                    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                        border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                    }

                                    .elementor-widget-divider--separator-type-pattern {
                                        --divider-border-style: none
                                    }

                                    .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                    .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                    .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                        width: 100%;
                                        min-height: var(--divider-pattern-height);
                                        -webkit-mask-size: var(--divider-pattern-size) 100%;
                                        mask-size: var(--divider-pattern-size) 100%;
                                        -webkit-mask-repeat: var(--divider-pattern-repeat);
                                        mask-repeat: var(--divider-pattern-repeat);
                                        background-color: var(--divider-color);
                                        -webkit-mask-image: var(--divider-pattern-url);
                                        mask-image: var(--divider-pattern-url)
                                    }

                                    .elementor-widget-divider--no-spacing {
                                        --divider-pattern-size: auto
                                    }

                                    .elementor-widget-divider--bg-round {
                                        --divider-pattern-repeat: round
                                    }

                                    .rtl .elementor-widget-divider .elementor-divider__text {
                                        direction: rtl
                                    }
                                </style>
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7d4f7c8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7d4f7c8" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f109826"
                                    data-id="f109826" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2a89272 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="2a89272" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/reproduction.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">গর্ভধারণের জন্যঃ</h3>
                                                        <p class="elementor-image-box-description">💜মহিলাদের পিরিয়ড
                                                            শেষ হবার ৩-৫ দিন পর রাতে ঘুমানোর আগে সম্পূর্ণ ফুল
                                                            পরিমাণমতো পানিতে ভিজিয়ে রেখে,শেষরাতে (ফজরের আজানের আগে)
                                                            সেই পানি খেতে হবে। <br>
                                                            💜শুধুমাত্র মহিলারা এই পানি খাবে।<br>
                                                            💜প্রতি মাসে তিনরাত করে পর পর ৩ মাস খেতে হবে।<br>
                                                            💜পানি খাওয়া শেষে ফুলটি উঠিয়ে রাখলে এটি আবার আগের মতো
                                                            শুকিয়ে যাবে।<br><br>
                                                            🔰এভাবে একটি ফুল অনেক দিন ব্যবহার করা যাবে।
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cf0c37b"
                                    data-id="cf0c37b" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-246a00c elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="246a00c" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">নরমাল ডেলিভারির জন্য
                                                            দুই ভাবে ব্যাবহার করতে হয়ঃ</h3>
                                                        <p class="elementor-image-box-description"> 🔰গর্ভকালীন
                                                            সময়ঃ🔰<br> 💜গর্ভকালীন সময়ে প্রতি সোমবার ও বৃহস্পতিবার
                                                            ঘুমাতে যাওয়ার আগে কুসুম গরম পানিতে সম্পূর্ণ ফুলটি
                                                            ভিজিয়ে রেখে তাহাজ্জুতের নামাজের সময় খেতে হবে।<br> <br>
                                                            🔰প্রসবকালীন সময়ঃ<br>💜কোন বা*চ্চা জ*ন্মের সময় যখন
                                                            ডেলিভারি ব্যথা উঠে তখন ফুলটিকে ডেলিভারি রুমে কোন খোলা
                                                            বাসনে কুসুম গরম পানিতে ভিজিয়ে রাখতে হবে। ভিজালে ফুলটি
                                                            আস্তে আস্তে ফুটতে থাকবে এবং যার ডেলিভারি হবে তার জরায়ুর
                                                            মুখ খুলতে থাকবে। যতই ভিজতে থাকবে ও প্রষ্ফুটিত হতে থাকবে
                                                            আল্লাহ্ তাআলার দয়ায় মরিয়ম ফুলের বরকতে বাচ্চার জন্ম
                                                            খুব সহজ  ভাবেই হবে</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-3e21a38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3e21a38" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3b49ed8"
                                    data-id="3b49ed8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-151be5f elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                            data-id="151be5f" data-element_type="widget"
                                            data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                            data-widget_type="image-carousel.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                                    .elementor-widget-image-carousel .swiper-container {
                                                        position: static
                                                    }

                                                    .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
                                                        line-height: inherit
                                                    }

                                                    .elementor-widget-image-carousel .swiper-slide {
                                                        text-align: center
                                                    }

                                                    .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
                                                        max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                                    }
                                                </style>
                                                <div class="elementor-image-carousel-wrapper swiper-container"
                                                    dir="ltr">
                                                    <div class="elementor-image-carousel swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                                    class="swiper-slide-image" src="#" alt="" />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5baaccb"
                                    data-id="5baaccb" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-60320bf elementor-align-center elementor-widget elementor-widget-button"
                            data-id="60320bf" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="#orderform"
                                        class="pulse-btn elementor-button-link elementor-button elementor-size-sm"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">অর্ডার করুন</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0953cf2 elementor-widget elementor-widget-heading"
                            data-id="0953cf2" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">গুরুত্বপূর্ণ রিভিউ</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-81151be elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                            data-id="81151be" data-element_type="widget"
                            data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                            data-widget_type="image-carousel.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                    <div class="elementor-image-carousel swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{asset('images/review1.jpg')}}"
                                                    alt="mob" /></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="https://ineedbaby.com/wp-content/uploads/2023/05/facebook_messenger_chat-4.png"
                                                    alt="facebook_messenger_chat" /></figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="https://ineedbaby.com/wp-content/uploads/2023/05/mob.png"
                                                    alt="mob" /></figure>
                                        </div>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                          </svg>
                                           <span
                                            class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                          </svg>
                                           <span
                                            class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b54698d elementor-widget elementor-widget-heading"
                            data-id="b54698d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">মাননীয়/মাননীয়া আরোগ্য দান
                                    বা সন্তান দানের মালিক একমাত্র আল্লাহ পাক। মরিয়ম ফুল কোন মেডিসিন নয়। তবে এটার
                                    ঔষধী গুণ অনেক। আল্লাহর উপর ভরসা রেখে নিয়ম অনুযায়ী খেলে অনেক ধরনের সুফল পাওয়া
                                    যায়। </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a093e0b elementor-widget elementor-widget-heading"
                            data-id="a093e0b" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">তবে আলহামদুলিল্লাহ এই
                                    ফুলের ব্যাবহারে অনেকে সুফল পেয়েছেন এবং পাচ্ছেন । কুদরতি মরিয়ম ফুলের উছিলায় এবার
                                    আপনিও আপনার সমস্যার সমাধান পাবেন ইনশা আল্লাহ। </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b7710ff elementor-widget elementor-widget-heading"
                            data-id="b7710ff" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">নিয়মিত মূল্যঃ-
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-59a57b5 elementor-widget elementor-widget-heading"
                            data-id="59a57b5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">১৫০০ টাকা

                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ed31329 elementor-widget elementor-widget-heading"
                            data-id="ed31329" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">বর্তমান মূল্যে: ৯৫০/-


                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3ad8fc0 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="3ad8fc0" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="#orderform"
                                        class="pulse-btn elementor-button-link elementor-button elementor-size-sm"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">অর্ডার করুন</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-c0db1f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c0db1f7" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e32977d"
                                    data-id="e32977d" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-30a5482 elementor-widget elementor-widget-heading"
                                            data-id="30a5482" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">ফোনে
                                                    অর্ডার করতে কল করুন

                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0e14c02 elementor-widget elementor-widget-heading"
                                            data-id="0e14c02" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default"><a
                                                        href="#">Phone: 01606-562640</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ab7c76e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="ab7c76e" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ff9b382"
                    data-id="ff9b382" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2c79ff8 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="2c79ff8" data-element_type="section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ec11ca"
                    data-id="5ec11ca" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-89e9379 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="89e9379" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-938104d"
                                    data-id="938104d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ad517bb elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="ad517bb" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/delivery.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">All bangladesh Home
                                                            Delivery</h3>
                                                        <p class="elementor-image-box-description">Delivery charge
                                                            only 50 tk (All BD) </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-241f6c7"
                                    data-id="241f6c7" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4810405 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="4810405" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/order.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">Order Online </h3>
                                                        <p class="elementor-image-box-description">place order
                                                            easily

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-818bd5c"
                                    data-id="818bd5c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-eefe196 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                            data-id="eefe196" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <figure class="elementor-image-box-img"><img decoding="async"
                                                            width="512" height="512"
                                                            src="https://ineedbaby.com/wp-content/uploads/2023/05/cash-on-delivery.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy" /></figure>
                                                    <div class="elementor-image-box-content">
                                                        <h3 class="elementor-image-box-title">Cash On delivery</h3>
                                                        <p class="elementor-image-box-description">Pay after
                                                            receiving the parcel

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3a47f06 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="3a47f06" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c43309"
                    data-id="0c43309" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-02895fc elementor-widget elementor-widget-heading"
                            data-id="02895fc" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">অর্ডার করতে নিচের ফরমটি
                                    পূরন করুন</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f0fe7d8 elementor-widget elementor-widget-checkout-form"
                            data-id="f0fe7d8" data-element_type="widget" id="orderform"
                            data-widget_type="checkout-form.default">
                            <div class="elementor-widget-container">
                                <div class="wcf-el-checkout-form cartflows-elementor__checkout-form">
                                    <div id="wcf-embed-checkout-form"
                                        class="wcf-embed-checkout-form wcf-embed-checkout-form-two-column  wcf-field-default">
                                        <!-- CHECKOUT SHORTCODE -->

                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <form name="checkout" method="GET"
                                                class="checkout woocommerce-checkout"
                                                action="{{route('order')}}"
                                                enctype="multipart/form-data">

                                                <div class="wcf-col2-set col2-set" id="customer_details">
                                                    <div class="wcf-col-1 col-1">
                                                        <div class="woocommerce-billing-fields">

                                                            <h3>Billing details</h3>



                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <p class="form-row form-row-first wcf-column-100 validate-required"
                                                                    id="billing_first_name_field"
                                                                    data-priority="10"><label
                                                                        for="billing_first_name" class=""> নাম লিখুন&nbsp;<abbr
                                                                            class="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input required
                                                                            type="text" class="input-text "
                                                                            name="name"
                                                                            id="billing_first_name" placeholder=""
                                                                            value=""
                                                                            autocomplete="given-name" /></span></p>

                                                                <p class="form-row form-row-wide address-field wcf-column-100 validate-required"
                                                                    id="billing_address_1_field" data-priority="50">
                                                                    <label for="billing_address_1" class="">ঠিকানা&nbsp; লিখুন<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input
                                                                            type="text" class="input-text "
                                                                            name="address"
                                                                            id="billing_address_1"
                                                                            placeholder="রোড: গ্রাম: থানা: জেলা:"
                                                                            value=""
                                                                            required
                                                                            autocomplete="address-line1" /></span>
                                                                </p>

                                                                <p class="form-row form-row-wide wcf-column-100 validate-required validate-phone"
                                                                    id="billing_phone_field" data-priority="100">
                                                                    <label for="billing_phone"
                                                                        class="">Phone&nbsp;<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input
                                                                            type="tel" class="input-text "
                                                                            name="phone" id="billing_phone"
                                                                            placeholder="" value="" required
                                                                            autocomplete="tel" /></span>
                                                                            <span>
                                                                                @error('phone')
                                                                                <span class="text-danger" style="color: red">{{ $message }}</span>
                                                                                <span class="text-danger" style="color: red">Exp:01700000000</span>
                                                                            @enderror
                                                                            </span>
                                                                        </p>
                                                                {{-- <p class="form-row form-row-wide wcf-column-100 wcf-hide-field validate-email"
                                                                    id="billing_email_field" data-priority="110">
                                                                    <label for="billing_email" class="">Email
                                                                        address&nbsp;<span
                                                                            class="optional">(optional)</span></label><span
                                                                        class="woocommerce-input-wrapper"><input
                                                                            type="email" class="input-text "
                                                                            name="billing_email" id="billing_email"
                                                                            placeholder="" value=""
                                                                            autocomplete="email username" /></span>
                                                                </p> --}}
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="wcf-col-2 col-2">


                                                        <div class="woocommerce-additional-fields">
                                                            <div
                                                                class="woocommerce-additional-fields__field-wrapper">
                                                                <p class="form-row notes thwcfd-field-wrapper thwcfd-field-textarea"
                                                                    id="order_comments_field" data-priority="">
                                                                    <label for="order_comments" class="">Order
                                                                        notes&nbsp;<span
                                                                            class="optional">(optional)</span></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <textarea
                                                                            name="note"
                                                                            class="input-text " id="order_comments"
                                                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                                                            rows="2" cols="5"></textarea></span></p>
                                                            </div>


                                                            {{-- <input type="hidden" class="input-hidden _wcf_flow_id"
                                                                name="_wcf_flow_id" value="24"><input type="hidden"
                                                                class="input-hidden _wcf_checkout_id"
                                                                name="_wcf_checkout_id" value="26"> --}}
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class='wcf-order-wrap'>



                                                    <h3 id="order_review_heading">Your order</h3>


                                                    <div id="order_review"
                                                        class="woocommerce-checkout-review-order">
                                                        <table
                                                            class="shop_table woocommerce-checkout-review-order-table"
                                                            data-update-time="1686025349">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        <div class="quantity">

                                                                          <span>1</span>
                                                                        </div>
                                                                        <a href="https://ineedbaby.com/cart/?remove_item=9397096e929f292f1e8d716f8f90abfd&amp;_wpnonce=81131f37fa"
                                                                            class="remove" title="Remove this item"
                                                                            data-product_id="98"
                                                                            data-product_sku="">&times;</a>&nbsp;
                                                                        <span class="cqoc_product_name">মরিয়ম
                                                                            ফুল</span>&nbsp;
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span
                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                    class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span><input type="hidden" name="p_price" value="{{$p_price}}" step="1" required><span>{{$p_price}}</span></bdi></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>

                                                                <tr class="cart-subtotal">
                                                                    <th>মোট</th>
                                                                    <td><span
                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                    class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{$p_price}}</bdi></span>
                                                                    </td>
                                                                </tr>




                                                                <tr class="woocommerce-shipping-totals shipping">
                                                                    <th>ডেলিভারি চার্জ</th>
                                                                    <td data-title="Shipping">
                                                                        <ul id="shipping_method"
                                                                            class="woocommerce-shipping-methods">
                                                                            <li>
                                                                                <input type="hidden"
                                                                                    name="shipping_price"
                                                                                    data-index="0"
                                                                                    id="shipping_method_0_flat_rate2"
                                                                                    value="{{$s_price}}"
                                                                                    class="shipping_method" /><label
                                                                                    for="shipping_method_0_flat_rate2"> <span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>{{$s_price}}</bdi></span></label>
                                                                            </li>
                                                                        </ul>


                                                                    </td>
                                                                </tr>






                                                                <tr class="order-total">
                                                                    <th>সর্বমোট</th>
                                                                    <td><strong><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>1,000.00</bdi></span></strong>
                                                                    </td>
                                                                </tr>


                                                            </tfoot>
                                                        </table>
                                                        <div id="payment" class="woocommerce-checkout-payment">
                                                            <ul class="wc_payment_methods payment_methods methods">
                                                                <li class="wc_payment_method payment_method_cod">
                                                                    <input id="payment_method_cod" type="radio"
                                                                        class="input-radio" name="payment_method"
                                                                        value="cod" checked='checked'
                                                                        data-order_button_text="" />

                                                                    <label for="payment_method_cod">
                                                                        ক্যাশ অন ডেলিভারি </label>
                                                                    <div class="payment_box payment_method_cod">
                                                                        <p>পণ্য হতে পেয়ে টাকা পরিশোধ করুন</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="form-row place-order">
                                                                <noscript>
                                                                    Since your browser does not support JavaScript,
                                                                    or it is disabled, please ensure you click the
                                                                    <em>Update Totals</em> button before placing
                                                                    your order. You may be charged more than the
                                                                    amount stated above if you fail to do so.
                                                                    <br /><button type="submit" class="button alt"
                                                                        name="woocommerce_checkout_update_totals"
                                                                        value="Update totals">Update totals</button>
                                                                </noscript>

                                                                <div
                                                                    class="woocommerce-terms-and-conditions-wrapper">
                                                                    <div class="woocommerce-privacy-policy-text">
                                                                        <p>Your personal data will be used to
                                                                            process your order, support your
                                                                            experience throughout this website, and
                                                                            for other purposes described in our <a
                                                                                href="https://ineedbaby.com/?page_id=3"
                                                                                class="woocommerce-privacy-policy-link"
                                                                                target="_blank">privacy policy</a>.
                                                                        </p>
                                                                    </div>
                                                                </div>


                                                                <button type="submit" class="button alt" style="display: flex; justify-content: center;align-items: center;cursor: pointer;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px; margin-right: 8px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                                                    </svg>
                                                                   <p style="padding: 0;margin: 0"> অর্ডার সম্পূর্ন করুন&nbsp;&nbsp;&#2547;&nbsp;1,000.00</p></button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-67471a6 elementor-shape-circle elementor-fixed elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                            data-id="67471a6" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;fixed&quot;}"
                            data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.6.6 - 08-06-2022 */
                                    .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                    .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                    .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                        line-height: 1;
                                        font-size: 0
                                    }

                                    .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                        display: inline-grid
                                    }

                                    .elementor-widget-social-icons .elementor-grid {
                                        grid-column-gap: var(--grid-column-gap, 5px);
                                        grid-row-gap: var(--grid-row-gap, 5px);
                                        grid-template-columns: var(--grid-template-columns);
                                        -webkit-box-pack: var(--justify-content, center);
                                        -ms-flex-pack: var(--justify-content, center);
                                        justify-content: var(--justify-content, center);
                                        justify-items: var(--justify-content, center)
                                    }

                                    .elementor-icon.elementor-social-icon {
                                        font-size: var(--icon-size, 25px);
                                        line-height: var(--icon-size, 25px);
                                        width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                        height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                    }

                                    .elementor-social-icon {
                                        --e-social-icon-icon-color: #fff;
                                        display: -webkit-inline-box;
                                        display: -ms-inline-flexbox;
                                        display: inline-flex;
                                        background-color: #818a91;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        align-items: center;
                                        -webkit-box-pack: center;
                                        -ms-flex-pack: center;
                                        justify-content: center;
                                        text-align: center;
                                        cursor: pointer
                                    }

                                    .elementor-social-icon i {
                                        color: var(--e-social-icon-icon-color)
                                    }

                                    .elementor-social-icon svg {
                                        fill: var(--e-social-icon-icon-color)
                                    }

                                    .elementor-social-icon:last-child {
                                        margin: 0
                                    }

                                    .elementor-social-icon:hover {
                                        opacity: .9;
                                        color: #fff
                                    }

                                    .elementor-social-icon-android {
                                        background-color: #a4c639
                                    }

                                    .elementor-social-icon-apple {
                                        background-color: #999
                                    }

                                    .elementor-social-icon-behance {
                                        background-color: #1769ff
                                    }

                                    .elementor-social-icon-bitbucket {
                                        background-color: #205081
                                    }

                                    .elementor-social-icon-codepen {
                                        background-color: #000
                                    }

                                    .elementor-social-icon-delicious {
                                        background-color: #39f
                                    }

                                    .elementor-social-icon-deviantart {
                                        background-color: #05cc47
                                    }

                                    .elementor-social-icon-digg {
                                        background-color: #005be2
                                    }

                                    .elementor-social-icon-dribbble {
                                        background-color: #ea4c89
                                    }

                                    .elementor-social-icon-elementor {
                                        background-color: #d30c5c
                                    }

                                    .elementor-social-icon-envelope {
                                        background-color: #ea4335
                                    }

                                    .elementor-social-icon-facebook,
                                    .elementor-social-icon-facebook-f {
                                        background-color: #3b5998
                                    }

                                    .elementor-social-icon-flickr {
                                        background-color: #0063dc
                                    }

                                    .elementor-social-icon-foursquare {
                                        background-color: #2d5be3
                                    }

                                    .elementor-social-icon-free-code-camp,
                                    .elementor-social-icon-freecodecamp {
                                        background-color: #006400
                                    }

                                    .elementor-social-icon-github {
                                        background-color: #333
                                    }

                                    .elementor-social-icon-gitlab {
                                        background-color: #e24329
                                    }

                                    .elementor-social-icon-globe {
                                        background-color: #818a91
                                    }

                                    .elementor-social-icon-google-plus,
                                    .elementor-social-icon-google-plus-g {
                                        background-color: #dd4b39
                                    }

                                    .elementor-social-icon-houzz {
                                        background-color: #7ac142
                                    }

                                    .elementor-social-icon-instagram {
                                        background-color: #262626
                                    }

                                    .elementor-social-icon-jsfiddle {
                                        background-color: #487aa2
                                    }

                                    .elementor-social-icon-link {
                                        background-color: #818a91
                                    }

                                    .elementor-social-icon-linkedin,
                                    .elementor-social-icon-linkedin-in {
                                        background-color: #0077b5
                                    }

                                    .elementor-social-icon-medium {
                                        background-color: #00ab6b
                                    }

                                    .elementor-social-icon-meetup {
                                        background-color: #ec1c40
                                    }

                                    .elementor-social-icon-mixcloud {
                                        background-color: #273a4b
                                    }

                                    .elementor-social-icon-odnoklassniki {
                                        background-color: #f4731c
                                    }

                                    .elementor-social-icon-pinterest {
                                        background-color: #bd081c
                                    }

                                    .elementor-social-icon-product-hunt {
                                        background-color: #da552f
                                    }

                                    .elementor-social-icon-reddit {
                                        background-color: #ff4500
                                    }

                                    .elementor-social-icon-rss {
                                        background-color: #f26522
                                    }

                                    .elementor-social-icon-shopping-cart {
                                        background-color: #4caf50
                                    }

                                    .elementor-social-icon-skype {
                                        background-color: #00aff0
                                    }

                                    .elementor-social-icon-slideshare {
                                        background-color: #0077b5
                                    }

                                    .elementor-social-icon-snapchat {
                                        background-color: #fffc00
                                    }

                                    .elementor-social-icon-soundcloud {
                                        background-color: #f80
                                    }

                                    .elementor-social-icon-spotify {
                                        background-color: #2ebd59
                                    }

                                    .elementor-social-icon-stack-overflow {
                                        background-color: #fe7a15
                                    }

                                    .elementor-social-icon-steam {
                                        background-color: #00adee
                                    }

                                    .elementor-social-icon-stumbleupon {
                                        background-color: #eb4924
                                    }

                                    .elementor-social-icon-telegram {
                                        background-color: #2ca5e0
                                    }

                                    .elementor-social-icon-thumb-tack {
                                        background-color: #1aa1d8
                                    }

                                    .elementor-social-icon-tripadvisor {
                                        background-color: #589442
                                    }

                                    .elementor-social-icon-tumblr {
                                        background-color: #35465c
                                    }

                                    .elementor-social-icon-twitch {
                                        background-color: #6441a5
                                    }

                                    .elementor-social-icon-twitter {
                                        background-color: #1da1f2
                                    }

                                    .elementor-social-icon-viber {
                                        background-color: #665cac
                                    }

                                    .elementor-social-icon-vimeo {
                                        background-color: #1ab7ea
                                    }

                                    .elementor-social-icon-vk {
                                        background-color: #45668e
                                    }

                                    .elementor-social-icon-weibo {
                                        background-color: #dd2430
                                    }

                                    .elementor-social-icon-weixin {
                                        background-color: #31a918
                                    }

                                    .elementor-social-icon-whatsapp {
                                        background-color: #25d366
                                    }

                                    .elementor-social-icon-wordpress {
                                        background-color: #21759b
                                    }

                                    .elementor-social-icon-xing {
                                        background-color: #026466
                                    }

                                    .elementor-social-icon-yelp {
                                        background-color: #af0606
                                    }

                                    .elementor-social-icon-youtube {
                                        background-color: #cd201f
                                    }

                                    .elementor-social-icon-500px {
                                        background-color: #0099e5
                                    }

                                    .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                        border-radius: 10%
                                    }

                                    .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                        border-radius: 50%
                                    }
                                </style>
                                <div class="elementor-social-icons-wrapper elementor-grid">
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-phone elementor-animation-push elementor-repeater-item-52d22fc"
                                            href="tel:+8801872784255" target="_blank">
                                            <span class="elementor-screen-only">Phone</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- @vite(['resources/js/app.js']) --}}
<script src="{{asset('libraries/app.js')}}"></script>

<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.6.6", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "e_import_export": true, "additional_custom_breakpoints": true, "e_hidden_wordpress_widgets": true, "theme_builder_v2": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true, "page-transitions": true, "notes": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/ineedbaby.com\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description", "woocommerce_notices_elements": [] }, "post": { "id": 26, "title": "%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A7%9F%E0%A6%AE%20%E0%A6%AB%E0%A7%81%E0%A6%B2%20%E2%80%93%20%E0%A6%AE%E0%A6%B0%E0%A6%BF%E0%A7%9F%E0%A6%AE%20%E0%A6%AB%E0%A7%81%E0%A6%B2", "excerpt": "", "featuredImage": false } };
</script>
@vite(['resources/js/frontend.js'])
@endsection


