<head>

    <meta charset="utf-8">
    <title><?php echo $name;?></title>
    <meta name="description" content="Transform the World with SOIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta property="og:image" content="path/to/image.jpg">


    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="128x128" href="assets/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="384x384" href="assets/android-chrome-384x384.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://socialissues.finance/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Financing Social SOIS">
    <meta property="og:description" content="Transform the World with SOIS">
    <meta property="og:image" content="https://socialissues.financepath/assets/facebook.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="socialissues.finance">
    <meta property="twitter:url" content="https://socialissues.finance/">
    <meta name="twitter:title" content="Financing Social SOIS">
    <meta name="twitter:description" content="Transform the World with SOIS">
    <meta name="twitter:image" content="https://socialissues.financepath/assets/twitter.jpg">

    <link rel="canonical" href="https://socialissues.finance">
    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Catamaran:300,400,600,700,900', 'Raleway:100,700', 'Roboto:700,900'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement;
        _html.className = _html.className.replace("no-js","js");
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <style>.preloader{width: 100%;height: 100%;position: fixed;background-color: #fff;z-index: 9999;}

        .dropdown button {
            background-color: #253849;
            min-width: 130px;
            width: max-content;
            height: 40px;
            border-radius: 5px;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            justify-content: space-evenly;
        }
        .dropdown button img {
            margin: 0 5px 0 0;
        }
        .dropdown button img,
        .dropdown-content li img {
            width: 28px;
        }
        .dropdown button,
        .dropdown-content li {
            display: flex;
            align-items: center;
            font-size: 14px;
            font-family: "Open Sans", sans-serif;
            font-family: "Noto Sans JP", sans-serif;
            font-family: "Noto Sans Arabic", sans-serif;
            font-family: "Noto Sans KR", sans-serif;
            font-weight: 500;
        }
        .arrow-down {
            width: 0;
            height: 0;
            display: inline-block;
            vertical-align: middle;
            border-style: solid;
            border-width: 4px 4px 0 4px;
            border-color: #fff transparent transparent transparent;
            margin: 0 0 0 5px;
        }

        .dropdown button:hover {
            cursor: pointer;
            background-color: #3c5b77;
        }
        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            margin: 1px 0 0 0;
            padding: 0;
            background-color: #f5f5f5;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            overflow-y: scroll;
            max-height: 315px;
            max-width: 165px;
        }
        /* Style for the dropdown content items */
        .dropdown-content li {
            color: black;
            text-decoration: none;
            justify-content: end;
        }
        .dropdown-content li img {
            margin: 0 20px 0px 20px;
        }
        /* Style for the dropdown content items on hover */
        .dropdown-content li:hover {
            background-color: #f1f1f1;
            cursor: pointer;
            color: blue;
            border-radius: 5px;
        }
        /* Show the dropdown content when the dropdown button is clicked */
        .dropdown:focus-within .dropdown-content {
            display: block;
        }
        /* Animate the dropdown content */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .dropdown-content {
            animation: slideIn 0.3s ease-out;
        }
        /* Scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
            height: 10px;
        }
        ::-webkit-scrollbar-thumb {
            border-radius: 8px;
            background: #c2c9d2;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* fundo semi-transparente */
            z-index: 1000; /* alto z-index para sobrepor outros elementos */
        }
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 5px;
            text-align: center;
        }
        .popup-content img {
            max-width: 450px;
            height: auto;
        }
        .btn-custom {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: black;
            text-align: center; /* Centraliza o texto horizontalmente */
            text-decoration: none;
            background-color: yellow;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: color 0.3s, background-color 0.3s;
            margin: 10px; /* Espaçamento entre os botões */
            border-radius: 4px; /* Borda arredondada */
            line-height: 1; /* Alinha verticalmente o texto */
            vertical-align: middle; /* Alinha verticalmente o texto */
        }
        .btn-custom::before {
            content: '\1F525'; /* Código Unicode do emoji de fogo */
            font-size: 18px;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .btn-custom:hover {
            color: red; /* Mudança de cor do texto ao passar o mouse */
            background-color: #f0e68c; /* Mudança de cor de fundo ao passar o mouse */
        }
        .btn-custom:hover::before {
            opacity: 1; /* Mostra o ícone de fogo ao passar o mouse */
        }
    </style>

</head>
<div class="popup-container" id="popup">
    <div class="popup-content">
        <a href="https://www.pinksale.finance/launchpad/bsc/0xd34ebb5911b866759d2E1039DA954555021457b5" target="_blank">
        <img src="assets/img/presale.jpeg" alt="Popup Image">
        </a>
        <br><br>
        <button onclick="closePopup()">Close</button>
    </div>
</div>