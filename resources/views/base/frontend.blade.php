<!DOCTYPE html><!--[if lt IE 7 ]>
<html id="top" lang="en" class="no-js ie6"> <![endif]--><!--[if IE 7 ]>
<html id="top" lang="en" class="no-js ie7"> <![endif]--><!--[if IE 8 ]>
<html id="top" lang="en" class="no-js ie8"> <![endif]--><!--[if IE 9 ]>
<html id="top" lang="en" class="no-js ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html id="top" lang="en" class="no-js"> <!--<![endif]-->

    <head>


        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ Config::get('base::frontend.favicon') }}">

        <script src="/assets/js/vendor/html5shiv.js"></script>
        <script src="/assets/js/vendor/respond.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    </head>


    <body class="body">



        <div id="container">
            <div class="container-bg">

                 {{-- Header section --}}
                @yield('header')


                {{-- Middle section --}}
                @yield('middle')



            </div>
        </div>


    </body>
</html>