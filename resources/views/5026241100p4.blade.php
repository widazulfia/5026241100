<!DOCTYPE html>
<html lang="en">

<head>
    <title>Netflix Plan Wireframe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/tms4zhk.css">
    <style>
        body {
            font-family: "titillium-web", sans-serif;
            font-style: normal;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            text-align: center;
            width: 100%;
            padding: 50px 20px;
        }

        h1 {
            letter-spacing: 2px;
            font-weight: 900;
            -webkit-text-stroke: 0.3px #222;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-size: 32px;
            color: #222;
        }

        .subtitle {
            color: #888;
            font-size: 16px;
            margin-bottom: 70px;
        }

        .pricing-wrapper {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .card {
            border: 2px solid #a0a0a0;
            width: 260px;
            padding: 60px 25px;
            box-sizing: border-box;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card h2 {
            font-size: 22px;
            margin: 0;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .price {
            color: #999;
            font-size: 15px;
            margin: 15px 0 35px 0;
        }

        .btn {
            display: inline-block;
            width: 130px;
            padding: 14px 0;
            text-decoration: none;
            font-weight: 700;
            font-size: 17px;
            border-radius: 2px;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-align: center;
        }

        .btn-gray {
            background-color: #bcbcbc;
            color: white;
        }

        .btn-red {
            background-color: #ef5b5b;
            color: white;
        }

        .features {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .features li {
            font-size: 15px;
            color: #555;
            margin-bottom: 18px;
            line-height: 1.4;
        }

        .features li b {
            font-weight: 700;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>SELECT A PLAN</h1>
        <p class="subtitle">No commitments, cancel anytime. Everything on Netflix for one low price.</p>

        <div class="pricing-wrapper">
            <div class="card">
                <h2>BASIC</h2>
                <p class="price">$9/Month</p>
                <a href="#" class="btn btn-gray">YOUR PLAN</a>
                <ul class="features">
                    <li><b>Good</b> video and sound quality</li>
                    <li><b>Up to</b> 720p (HD) resolution</li>
                    <li><b>Up to</b> 3 supported devices</li>
                    <li><b>Up to</b> 1 download devices</li>
                    <li><b>Up to</b> 1 device can watch at the same time</li>
                </ul>
            </div>

            <div class="card">
                <h2>STANDARD</h2>
                <p class="price">$16/Month</p>
                <a href="#" class="btn btn-red">UPGRADE</a>
                <ul class="features">
                    <li><b>Great</b> video and sound quality</li>
                    <li><b>Up to</b> 1080p (Full HD) resolution</li>
                    <li><b>Up to</b> 4 supported devices</li>
                    <li><b>Up to</b> 2 download devices</li>
                    <li><b>Up to</b> 2 device can watch at the same time</li>
                </ul>
            </div>

            <div class="card">
                <h2>PREMIUM</h2>
                <p class="price">$24/Month</p>
                <a href="#" class="btn btn-red">UPGRADE</a>
                <ul class="features">
                    <li><b>Best</b> video and sound quality</li>
                    <li><b>Up to</b> 4K (Ultra HD) + HDR resolution</li>
                    <li><b>Up to</b> 4 supported devices</li>
                    <li><b>Up to</b> 4 download devices</li>
                    <li><b>Up to</b> 6 device can watch at the same time</li>
                    <li><b>Including</b> spatial audio</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
