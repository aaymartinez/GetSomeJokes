<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/purple/pace-theme-fill-left.min.css" integrity="sha512-HLyHAKt0FPlOdSTY2sAk0JRrhlyL6VhE9QMwktcuxrradAJD4WimHEEcUyDpsLAkLMkHTOIUPFPzrfP0eb7zBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Get Some Jokes</title>

    <style>
        body {
            font-family: 'Kavoon';
            font-size: 40px;
            background: #212529;
            color: #FFFFFF;
            overflow: hidden;
        }

        .hide {
            display: none;
        }

        .main {
            height: 100vh;
            width: 100vw;
            text-align: center;
            white-space: nowrap;
        }

        .joke {
            display: flex;
            height: 100vh;
            width: 100vw;
            white-space: initial;
        }

        .inside {
            padding: 50px 40px;
            margin: auto;
        }

        .twopart .delivery {
            color: red;
        }

        .note {
            color: lightgrey;
            margin: 5px;
            font-size: 20px;
            font-weight: initial;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="note">Refresh to get another joke.</div>
        <div class="joke">
            <div class="inside">
                <div class="twopart hide">
                    <div class="setup"></div>
                    <div class="delivery"></div>
                </div>

                <div class="single hide"></div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

    <script>
        var url = 'https://v2.jokeapi.dev/joke/Any';

        let response = fetch(url)
            .then((response) => response.json())
            .then((data) => {
                console.log(data)
                console.log(data.type)
                if (data.type == 'twopart') {
                    $('.twopart .setup').html(data.setup);
                    $('.twopart .delivery').html(data.delivery);
                    $('.twopart').removeClass('hide');
                } else {
                    $('.single').html(data.joke);
                    $('.single').removeClass('hide');
                }
            });
    </script>

</body>

</html>