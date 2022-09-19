<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه اول</title>
    <style>
        /* CSS */
        .button-64 {
            align-items: center;
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            border: 0;
            border-radius: 8px;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            box-sizing: border-box;
            color: #FFFFFF;
            display: flex;
            font-family: Phantomsans, sans-serif;
            font-size: 20px;
            justify-content: center;
            line-height: 1em;
            max-width: 100%;
            min-width: 140px;
            padding: 3px;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            cursor: pointer;
        }
        .button-64:active,
        .button-64:hover {
            outline: 0;
        }

        .button-64 span {
            background-color: rgb(5, 6, 45);
            padding: 16px 24px;
            border-radius: 6px;
            width: 100%;
            height: 100%;
            transition: 300ms;
        }

        .button-64:hover span {
            background: none;
        }

        @media (min-width: 768px) {
            .button-64 {
                font-size: 24px;
                min-width: 196px;
            }
        }
        /*
Thanks to: Usama Tahir
https://medium.com/@AmJustSam
*/

        *{
            margin: 0;
            padding: 0;
        }

        html{
            width: 100vw;
            height: 100vh;
        }

        /* CSS which you need for blurred box */
        body{
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: top;
            background-image:url(http://bit.ly/2gPLxZ4);
            width: 100%;
            height: 100%;
            font-family: Arial, Helvetica;
            letter-spacing: 0.02em;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
        }

        .blurred-box{
            position: relative;
            width: 250px;
            height: 350px;
            top: calc(50% - 175px);
            left: calc(50% - 125px);
            background: inherit;
            border-radius: 2px;
            overflow: hidden;
        }

        .blurred-box:after{
            content: '';
            width: 300px;
            height: 300px;
            background: inherit;
            position: absolute;
            left: -25px;
            left position
            right: 0;
            top: -25px;
            top position
            bottom: 0;
            box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
            filter: blur(10px);
        }


        /* Form which you dont need */
        .user-login-box{
            position: relative;
            margin-top: 50px;
            text-align: center;
            z-index: 1;
        }
        .user-login-box > *{
            display: inline-block;
            width: 200px;
        }

        .user-icon{
            width: 100px;
            height: 100px;
            position: relative;
            border-radius: 50%;
            background-size: contain;
            background-image: url(https://pbs.twimg.com/profile_images/725321660484583424/ArQ4fM3k.jpg);
        }

        .user-name{
            margin-top: 15px;
            margin-bottom: 15px;
            color: white;
        }

        input.user-password{
            width: 120px;
            height: 18px;
            opacity: 0.4;
            border-radius: 2px;
            padding: 5px 15px;
            border: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            overflow: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            transform: rotate(-45deg);
        }

        .star {
            --star-color: var(--primary-color);
            --star-tail-length: 6em;
            --star-tail-height: 2px;
            --star-width: calc(var(--star-tail-length) / 6);
            --fall-duration: 9s;
            --tail-fade-duration: var(--fall-duration);
            position: absolute;
            top: var(--top-offset);
            left: 0;
            width: var(--star-tail-length);
            height: var(--star-tail-height);
            color: var(--star-color);
            background: linear-gradient(45deg, currentColor, transparent);
            border-radius: 50%;
            filter: drop-shadow(0 0 6px currentColor);
            transform: translate3d(104em, 0, 0);
            animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
        }
        @media screen and (max-width: 750px) {
            .star {
                animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
            }
        }
        .star:nth-child(1) {
            --star-tail-length: 6.22em;
            --top-offset: 59.19vh;
            --fall-duration: 6.573s;
            --fall-delay: 2.041s;
        }
        .star:nth-child(2) {
            --star-tail-length: 5.01em;
            --top-offset: 72.16vh;
            --fall-duration: 10.224s;
            --fall-delay: 2.811s;
        }
        .star:nth-child(3) {
            --star-tail-length: 6.75em;
            --top-offset: 74.6vh;
            --fall-duration: 6.182s;
            --fall-delay: 5.106s;
        }
        .star:nth-child(4) {
            --star-tail-length: 6.23em;
            --top-offset: 89.62vh;
            --fall-duration: 7.754s;
            --fall-delay: 8.147s;
        }
        .star:nth-child(5) {
            --star-tail-length: 6.5em;
            --top-offset: 80.05vh;
            --fall-duration: 10.516s;
            --fall-delay: 3.29s;
        }
        .star:nth-child(6) {
            --star-tail-length: 5.57em;
            --top-offset: 71.96vh;
            --fall-duration: 11.476s;
            --fall-delay: 8.859s;
        }
        .star:nth-child(7) {
            --star-tail-length: 5.23em;
            --top-offset: 77.75vh;
            --fall-duration: 11.578s;
            --fall-delay: 8.475s;
        }
        .star:nth-child(8) {
            --star-tail-length: 7.11em;
            --top-offset: 29.94vh;
            --fall-duration: 8.517s;
            --fall-delay: 7.447s;
        }
        .star:nth-child(9) {
            --star-tail-length: 5.89em;
            --top-offset: 48.82vh;
            --fall-duration: 6.712s;
            --fall-delay: 6.203s;
        }
        .star:nth-child(10) {
            --star-tail-length: 6.6em;
            --top-offset: 41.3vh;
            --fall-duration: 10.401s;
            --fall-delay: 8.082s;
        }
        .star:nth-child(11) {
            --star-tail-length: 5.96em;
            --top-offset: 16.4vh;
            --fall-duration: 7.178s;
            --fall-delay: 3.52s;
        }
        .star:nth-child(12) {
            --star-tail-length: 6.54em;
            --top-offset: 76.49vh;
            --fall-duration: 7.059s;
            --fall-delay: 4.163s;
        }
        .star:nth-child(13) {
            --star-tail-length: 5.5em;
            --top-offset: 1.22vh;
            --fall-duration: 11.21s;
            --fall-delay: 6.151s;
        }
        .star:nth-child(14) {
            --star-tail-length: 5.57em;
            --top-offset: 25.95vh;
            --fall-duration: 6.517s;
            --fall-delay: 8.306s;
        }
        .star:nth-child(15) {
            --star-tail-length: 5.97em;
            --top-offset: 11.26vh;
            --fall-duration: 6.423s;
            --fall-delay: 0.982s;
        }
        .star:nth-child(16) {
            --star-tail-length: 6.69em;
            --top-offset: 79.23vh;
            --fall-duration: 6.944s;
            --fall-delay: 8.204s;
        }
        .star:nth-child(17) {
            --star-tail-length: 5.86em;
            --top-offset: 70.2vh;
            --fall-duration: 9.511s;
            --fall-delay: 4.103s;
        }
        .star:nth-child(18) {
            --star-tail-length: 6.24em;
            --top-offset: 6.27vh;
            --fall-duration: 9.947s;
            --fall-delay: 9.773s;
        }
        .star:nth-child(19) {
            --star-tail-length: 6.29em;
            --top-offset: 16.7vh;
            --fall-duration: 6.154s;
            --fall-delay: 3.097s;
        }
        .star:nth-child(20) {
            --star-tail-length: 6.16em;
            --top-offset: 34.87vh;
            --fall-duration: 11.178s;
            --fall-delay: 1.565s;
        }
        .star:nth-child(21) {
            --star-tail-length: 6.78em;
            --top-offset: 58.37vh;
            --fall-duration: 6.503s;
            --fall-delay: 9.602s;
        }
        .star:nth-child(22) {
            --star-tail-length: 6.72em;
            --top-offset: 39.98vh;
            --fall-duration: 8.389s;
            --fall-delay: 2.236s;
        }
        .star:nth-child(23) {
            --star-tail-length: 6.05em;
            --top-offset: 46.36vh;
            --fall-duration: 11.046s;
            --fall-delay: 5.115s;
        }
        .star:nth-child(24) {
            --star-tail-length: 5.48em;
            --top-offset: 55.66vh;
            --fall-duration: 11.431s;
            --fall-delay: 1.162s;
        }
        .star:nth-child(25) {
            --star-tail-length: 6.96em;
            --top-offset: 35vh;
            --fall-duration: 8.552s;
            --fall-delay: 8.692s;
        }
        .star:nth-child(26) {
            --star-tail-length: 5.86em;
            --top-offset: 89vh;
            --fall-duration: 11.579s;
            --fall-delay: 2.602s;
        }
        .star:nth-child(27) {
            --star-tail-length: 5.32em;
            --top-offset: 69.42vh;
            --fall-duration: 8.547s;
            --fall-delay: 1.661s;
        }
        .star:nth-child(28) {
            --star-tail-length: 7.08em;
            --top-offset: 77.49vh;
            --fall-duration: 7.179s;
            --fall-delay: 7.928s;
        }
        .star:nth-child(29) {
            --star-tail-length: 7.2em;
            --top-offset: 71.06vh;
            --fall-duration: 10.976s;
            --fall-delay: 8.383s;
        }
        .star:nth-child(30) {
            --star-tail-length: 7.45em;
            --top-offset: 12.77vh;
            --fall-duration: 11.046s;
            --fall-delay: 0.973s;
        }
        .star:nth-child(31) {
            --star-tail-length: 7.04em;
            --top-offset: 77.98vh;
            --fall-duration: 10.554s;
            --fall-delay: 7.342s;
        }
        .star:nth-child(32) {
            --star-tail-length: 5.68em;
            --top-offset: 84.27vh;
            --fall-duration: 6.465s;
            --fall-delay: 9.315s;
        }
        .star:nth-child(33) {
            --star-tail-length: 5.61em;
            --top-offset: 21.62vh;
            --fall-duration: 6.671s;
            --fall-delay: 7.587s;
        }
        .star:nth-child(34) {
            --star-tail-length: 6.19em;
            --top-offset: 21.94vh;
            --fall-duration: 10.371s;
            --fall-delay: 4.509s;
        }
        .star:nth-child(35) {
            --star-tail-length: 7.45em;
            --top-offset: 89.93vh;
            --fall-duration: 11.962s;
            --fall-delay: 7.413s;
        }
        .star:nth-child(36) {
            --star-tail-length: 5.54em;
            --top-offset: 3.72vh;
            --fall-duration: 6.614s;
            --fall-delay: 5.098s;
        }
        .star:nth-child(37) {
            --star-tail-length: 6.75em;
            --top-offset: 25.67vh;
            --fall-duration: 6.515s;
            --fall-delay: 2.577s;
        }
        .star:nth-child(38) {
            --star-tail-length: 6.75em;
            --top-offset: 72.27vh;
            --fall-duration: 8.58s;
            --fall-delay: 0.946s;
        }
        .star:nth-child(39) {
            --star-tail-length: 7.25em;
            --top-offset: 0.22vh;
            --fall-duration: 11.343s;
            --fall-delay: 0.561s;
        }
        .star:nth-child(40) {
            --star-tail-length: 6.34em;
            --top-offset: 31.02vh;
            --fall-duration: 10.506s;
            --fall-delay: 8.872s;
        }
        .star:nth-child(41) {
            --star-tail-length: 5.63em;
            --top-offset: 42.38vh;
            --fall-duration: 9.922s;
            --fall-delay: 2.529s;
        }
        .star:nth-child(42) {
            --star-tail-length: 7.04em;
            --top-offset: 55.2vh;
            --fall-duration: 8.869s;
            --fall-delay: 3.215s;
        }
        .star:nth-child(43) {
            --star-tail-length: 6.09em;
            --top-offset: 28.78vh;
            --fall-duration: 6.581s;
            --fall-delay: 1.735s;
        }
        .star:nth-child(44) {
            --star-tail-length: 5.53em;
            --top-offset: 56.92vh;
            --fall-duration: 10.496s;
            --fall-delay: 4.217s;
        }
        .star:nth-child(45) {
            --star-tail-length: 5.51em;
            --top-offset: 15vh;
            --fall-duration: 6.462s;
            --fall-delay: 5.684s;
        }
        .star:nth-child(46) {
            --star-tail-length: 6.15em;
            --top-offset: 6.41vh;
            --fall-duration: 6.202s;
            --fall-delay: 0.981s;
        }
        .star:nth-child(47) {
            --star-tail-length: 7.01em;
            --top-offset: 47.32vh;
            --fall-duration: 8.476s;
            --fall-delay: 5.901s;
        }
        .star:nth-child(48) {
            --star-tail-length: 6.97em;
            --top-offset: 44.57vh;
            --fall-duration: 6.066s;
            --fall-delay: 5.877s;
        }
        .star:nth-child(49) {
            --star-tail-length: 6.33em;
            --top-offset: 30.36vh;
            --fall-duration: 6.974s;
            --fall-delay: 3.199s;
        }
        .star:nth-child(50) {
            --star-tail-length: 7.14em;
            --top-offset: 64.3vh;
            --fall-duration: 8.951s;
            --fall-delay: 6.001s;
        }
        .star::before, .star::after {
            position: absolute;
            content: "";
            top: 0;
            left: calc(var(--star-width) / -2);
            width: var(--star-width);
            height: 100%;
            background: linear-gradient(45deg, transparent, currentColor, transparent);
            border-radius: inherit;
            animation: blink 2s linear infinite;
        }
        .star::before {
            transform: rotate(45deg);
        }
        .star::after {
            transform: rotate(-45deg);
        }

        @keyframes fall {
            to {
                transform: translate3d(-30em, 0, 0);
            }
        }
        @keyframes tail-fade {
            0%, 50% {
                width: var(--star-tail-length);
                opacity: 1;
            }
            70%, 80% {
                width: 0;
                opacity: 0.4;
            }
            100% {
                width: 0;
                opacity: 0;
            }
        }
        @keyframes blink {
            50% {
                opacity: 0.6;
            }
        }
        .all{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>
<body>

<div class="all">
    @foreach(\App\Models\Category::where('is_active' , 1)->orderBy('order_number' , 'asc')->get() as $cat)
    <a href="{{route('blog')}}?category={{$cat->slug}}" ><button class="button-64" role="button" style="margin-bottom: 2rem"><span class="text">{{$cat->title}} ({{$cat->articles()->count()}})</span></button></a>
    @endforeach
</div>
</body>
</html>
