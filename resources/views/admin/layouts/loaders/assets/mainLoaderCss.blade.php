<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .spinner {
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        background: #aceaffd;
        width: 100%;
        min-height: 100vh;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
    }
    .bar {
        width: 10px;
        height: 70px;
        background: #3F0033;
        display: inline-block;
        transform-origin: bottom center;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
       box-shadow:5px 10px 20px inset rgb(119,49,68);
        animation: loader 1.2s linear infinite;
    }
    .bar1 {
        animation-delay: 0.1s;
    }
    .bar2 {
        animation-delay: 0.2s;
    }
    .bar3 {
        animation-delay: 0.3s;
    }
    .bar4 {
        animation-delay: 0.4s;
    }
    .bar5 {
        animation-delay: 0.5s;
    }
    .bar6 {
        animation-delay: 0.6s;
    }
    .bar7 {
        animation-delay: 0.7s;
    }
    .bar8 {
        animation-delay: 0.8s;
    }

    @keyframes loader {
        0% {
            transform: scaleY(0.1);
            background: ;
        }
        50% {
            transform: scaleY(1);
            background: A2594F;
        }
        100% {
            transform: scaleY(0.1);
            background: transparent;
        }
    }

</style>
