<!DOCTYPE html><!--[if lt IE 7 ]>
<html id="top" lang="en" class="no-js ie6"> <![endif]--><!--[if IE 7 ]>
<html id="top" lang="en" class="no-js ie7"> <![endif]--><!--[if IE 8 ]>
<html id="top" lang="en" class="no-js ie8"> <![endif]--><!--[if IE 9 ]>
<html id="top" lang="en" class="no-js ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html id="top" lang="en" class="no-js"> <!--<![endif]-->

    <head>
        {{-- Page Meta Data --}}
        @include('seo::frontend.partials._meta')

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ Config::get('base::frontend.favicon') }}">

        {{-- Header Css files --}}
        @include('base::layouts.partials.header_styles')

        {{-- Header Javascript files --}}
        @include('base::layouts.partials.header_scripts')

        {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
        <script src="/assets/js/vendor/html5shiv.js"></script>
        <script src="/assets/js/vendor/respond.min.js"></script>
        <![endif]-->

        {{-- Header Snippets --}}
        @include('base::layouts.partials.header_snippets')
    </head>


    <body class="{{ (Package::exists('site')) ? site('theme') : '' }}">

        {{-- Analytics --}}
        @include('seo::frontend.partials.analytics')

        <div id="container">
            <div class="container-bg">

                {{-- Header section --}}
                @include('base::layouts.partials.header')

                {{-- Banner section --}}
                @yield('banner')

                {{-- Middle section --}}
                @include('base::layouts.partials.middle')

                {{-- Footer Main section --}}
                @include('base::layouts.partials.footer')

            </div>
        </div>

        {{-- Utilities, js / ie warning, modal ect --}}
        @include('base::layouts.blocks.utilities')

        {{-- Footer Javascript files --}}
        @include('base::layouts.partials.footer_scripts')

        {{-- Footer Snippets --}}
        @include('base::layouts.partials.footer_snippets')

    </body>
</html>