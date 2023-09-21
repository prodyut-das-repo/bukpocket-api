<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Default page</title>
        <link rel="icon" type="image/x-icon" href="https://hpanel.hostinger.com/favicons/hostinger.png">
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Default page" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100vw;
                height: 100vh;
                min-height: 675px;
                background-color: #F4F5FF;
            }
            p {
                width: 100%;
                left: 0px;
                font-size: 16px;
                font-family: 'DM Sans', sans-serif;
                font-weight: 400;
                letter-spacing: 0px;
                text-align: center;
                vertical-align: top;
                max-width: 550px;
                color: #727586;
                margin: 0px;
            }
            a:hover {
                cursor: pointer;
                color: #673DE6;
                text-decoration: underline;
            }
            h1 {
                font-family: 'DM Sans', sans-serif;
                font-size: 24px;
                font-weight: 700;
                letter-spacing: 0px;
                text-align: center;
                margin: 8px;
            }
            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
            }
            .ic-launch  {
                margin-left: 10.5px;
                width: 21px !important;
                height: 20px !important;
            }
            .link-container {
                margin-top: 32px;
                margin-bottom: 32px;
            }
            .link {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                font-family: 'DM Sans', sans-serif;
                font-style: normal;
                font-weight: 700;
                font-size: 14px;
                color: #673DE6;
                margin-top: 8px;
                text-decoration: none;
            }
            .main-image {
                width: 100%;
                max-width: 650px;
                max-height: 406px;
                height: auto;
            }
            .navigation {
                width: 100%;
                height: 72px;
                display: flex;
                margin: 0;
                padding: 0;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                background-color: #36344D;
            }
            @media screen and (max-width: 580px) and (min-width: 0px) {
                h1, p, .link-container {
                    width: 80%;
                }
            }
            @media screen and (min-width: 650px) and (min-height: 0px) and (max-height: 750px) {
                .link-container {
                    margin-top: 12px;
                }
                h1 {
                    margin-top: 0px;
                    margin-bottom: 0px;
                }
            }
            @import url(https://fonts.googleapis.com/css?family=Signika);

/* basic styling */
.contain {
  margin: auto;
  text-align: center;
  .heading {
    font-size: 25px;
    font-weight: bold;
    font-family: 'Signika', sans-serif;
  }
}

body {
  background: #f3f3f3;
}

/* svg stuff */
path, circle {
  fill: transparent;
  stroke: #222;
  stroke-width: 5;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 1100;
  stroke-dashoffset: 0;
  animation: dash 5s ease;
  width: 100px;
  height: 100px;
  padding: 5px;
  transition: .3s;
  &:hover {
    fill: #222;
  }
}

.cat {
  stroke: #f9c89d;
  &:hover {
    fill: #ffd4aa;
  }
}

.ball {
  stroke: #f99ad5;
  &:hover {
    fill: #ffaad4;
  }
}

@keyframes dash {
  from {
    stroke-dashoffset: 1100;
  }
  to {
    stroke-dashoffset: 0;
  }
}

        </style>
    </head>
    <body>
        <div class="content">
            <div class="contain"> 
    
  <svg width="640" height="480" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
   <g>
    <circle class="ball" r="13.53787" cy="287.50003" cx="279.99998"/>
    <path class="cat" d="m396.35663,311.25821c-13.41742,-10.47318 -28.76758,-3.96683 -43.5509,-4.75632c-12.93182,-11.07962 -28.66629,2.3475 -40.85934,-8.33789c-15.77493,-14.05475 11.56558,-22.86807 5.7373,-39.56415c-0.65771,-24.0419 -10.94836,-45.81717 -21.77539,-66.02428c-7.65988,-16.06839 -4.94803,-34.53508 -7.41699,-51.7166c-8.85388,-12.34473 -17.69766,-27.62405 -7.16412,-42.87289c11.90973,-12.87106 6.30396,-29.77943 1.62924,-44.65391c12.03101,3.54156 25.85321,19.66071 41.68884,16.43285c10.75632,-6.93137 17.29297,-0.08103 19.09409,12.61797c5.64624,16.29109 8.93484,38.5827 26.75375,43.83432c18.70941,5.34254 39.6553,6.52644 54.44867,22.20027c27.06769,25.3474 39.60474,65.31624 38.552,103.83789c2.43921,18.01105 25.04413,8.44919 36.23547,11.10004c18.74976,-0.82904 36.76111,5.06967 54.91443,9.1069c16.20013,4.31042 29.92078,-9.31888 45.14905,-10.9483c2.57037,15.745 -17.41418,22.30164 -28.33221,27.15833c-12.95184,5.51471 -26.98676,5.64691 -40.29266,1.6095c-28.78772,-7.18442 -59.29565,-5.29221 -86.63629,7.31573c-14.76294,5.44357 -29.09103,15.73447 -45.14957,14.43954l-3.02536,-0.77902l0,0l0,0z" />
   </g>
  </svg>
</contain> 
            <h1>Please visit <a 
                    class="link"
                    href="https://bukpocketmedia.com"
                    rel="nofollow"
                >Bukpocket</a></h1>
            
        </div>
    </body>
</html>