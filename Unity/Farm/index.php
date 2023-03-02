<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Jeff_Farm_game</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <link href="./../../_res/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        /* 背景 */
        background-color: #fff;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 1) 100%), url(https://i.pinimg.com/originals/b8/1a/a4/b81aa44ba47c8ebb93c4525a96904101.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;

    }

    header nav ul li {
        font-size: 18px;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        margin: 0px 10px;
    }


    .nav-item {
        position: relative;
    }

    .nav-item :after {
        content: " ";
        position: absolute;
        right: 50%;
        left: 50%;
        bottom: -5px;
        border-bottom: 4px solid rgb(123, 20, 240);
        transition: .3s;
    }

    .nav-item :hover::after {
        right: 0%;
        left: 0%;
    }

    #banner {
        height: 500px;
        background-image: url(../../_img/Mineral\ Town.jpg);
        background-position: center center;
        background-size: cover;

    }
    </style>

</head>

<body
    style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.5) 0%,rgba(255,255,255,1) 100%), url(https://i.pinimg.com/originals/b8/1a/a4/b81aa44ba47c8ebb93c4525a96904101.jpg);">
    <h1 style="text-align: center;margin-top:75px;color:blule;text-decoration: underline;">四季物語</h1>
    <div id="unity-container" class="unity-desktop">
        <canvas id="unity-canvas" width=960 height=600></canvas>
        <div id="unity-loading-bar">
            <div id="unity-logo"></div>
            <div id="unity-progress-bar-empty">
                <div id="unity-progress-bar-full"></div>
            </div>
        </div>
        <div id="unity-warning"> </div>
        <div id="unity-footer">
            <div id="unity-webgl-logo"></div>
            <div id="unity-fullscreen-button"></div>
            <div id="unity-build-title">Jeff_Farm_game</div>
        </div>
        <p class="text-center ">
        <a class="btn  btn-primary w-25" style="margin-right: 80px;" href="javascript:history.back()">返回上一頁</a>
    </p>
    </div>
    <script>
    var container = document.querySelector("#unity-container");
    var canvas = document.querySelector("#unity-canvas");
    var loadingBar = document.querySelector("#unity-loading-bar");
    var progressBarFull = document.querySelector("#unity-progress-bar-full");
    var fullscreenButton = document.querySelector("#unity-fullscreen-button");
    var warningBanner = document.querySelector("#unity-warning");

    // Shows a temporary message banner/ribbon for a few seconds, or
    // a permanent error message on top of the canvas if type=='error'.
    // If type=='warning', a yellow highlight color is used.
    // Modify or remove this function to customize the visually presented
    // way that non-critical warnings and error messages are presented to the
    // user.
    function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
            warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
            if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
            setTimeout(function() {
                warningBanner.removeChild(div);
                updateBannerVisibility();
            }, 5000);
        }
        updateBannerVisibility();
    }

    var buildUrl = "Build";
    var loaderUrl = buildUrl + "/Output_web.loader.js";
    var config = {
        dataUrl: buildUrl + "/Output_web.data.unityweb",
        frameworkUrl: buildUrl + "/Output_web.framework.js.unityweb",
        codeUrl: buildUrl + "/Output_web.wasm.unityweb",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "Jeff_Farm_game",
        productVersion: "1.0",
        showBanner: unityShowBanner,
    };

    // By default Unity keeps WebGL canvas render target size matched with
    // the DOM size of the canvas element (scaled by window.devicePixelRatio)
    // Set this to false if you want to decouple this synchronization from
    // happening inside the engine, and you would instead like to size up
    // the canvas DOM size and WebGL render target sizes yourself.
    // config.matchWebGLToCanvasSize = false;

    if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:

        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content =
            'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
        container.className = "unity-mobile";

        // To lower canvas resolution on mobile devices to gain some
        // performance, uncomment the following line:
        // config.devicePixelRatio = 1;

        canvas.style.width = window.innerWidth + 'px';
        canvas.style.height = window.innerHeight + 'px';

        unityShowBanner('WebGL builds are not supported on mobile devices.');
    } else {
        // Desktop style: Render the game canvas in a window that can be maximized to fullscreen:

        canvas.style.width = "960px";
        canvas.style.height = "600px";
    }

    loadingBar.style.display = "block";

    var script = document.createElement("script");
    script.src = loaderUrl;
    script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
            progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
            loadingBar.style.display = "none";
            fullscreenButton.onclick = () => {
                unityInstance.SetFullscreen(1);
            };
        }).catch((message) => {
            alert(message);
        });
    };
    document.body.appendChild(script);
    </script>
</body>

</html>