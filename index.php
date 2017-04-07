<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>doodle</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="manifest" href="./manifest.json">
    <meta name="theme-color" content="#E91E63">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <!-- This is surreal every time -->
    <!-- Add to homescreen for Chrome on Android. Fallback for manifest.json -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="doodle">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="doodle">
    <!-- Homescreen icons -->
    <link rel="apple-touch-icon" sizes="192x192" href="./images/manifest/icon-192x192.png">
    <!-- Tile icon for Windows 8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="./images/manifest/icon-192x192.png">
    <meta name="msapplication-TileColor" content="#E91E63">
    <meta name="msapplication-tap-highlight" content="no">

    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/doodle/sw.js', {scope: '/doodle/'}).then(_ => {
          console.log('service worker is cool 🐳');
        }).catch(e => {
          console.error('service worker is not so cool 🔥', e);
          throw e;
        });
      }
    </script>
  </head>
  <body>
    <div class="horizontal" style="margin-top: 10px;" id="topSection">
      <div id="colorsContainer"></div>
      <span id="buttonsContainer">
        <button id="buttonSettings">
          <svg viewBox="0 0 24 24"><path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path></svg>
        </button>
        <button id="buttonAbout">
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"></path></svg>
        </button>
      </span>
    </div>

    <div class="preamble">
      <div id="what" class="preamble-text" hidden>
        There's this thing called a Buddha board, which is a weird surface you paint on
        with water. As time passes, the water evaporates and your doodle
        disappears. No-pressure doodling.<br><br>
        My favourite is to turn on the colour loop and basically play snake without dying.<br>
        Made with 👾 by <a href="https://twitter.com/anil_ku_in">Anil Kumar</a>. 👀
<!--         this on <a href="https://github.com/notwaldorf/doodle">GitHub</a>. -->
      </div>
      <div id="settings" class="preamble-text" hidden>
        Press: <b>X</b> to reset the doodle, <b>C</b> to change the active colour.
        <div class="horizontal">
          <div class="slider-wrapper">
            <span class="slider-title">decay (<span id="decayDisplay" class="slider-value">10s</span>)</span>
            <input id="decay" type="range" min="1" max="30" step="1" value="10">
          </div>
          <div class="slider-wrapper">
            <span class="slider-title">size (<span id="pixelSizeDisplay" class="slider-value">16px</span>)</span>
            <input id="pixelSize" type="range" min="11" max="90" step="1" value="16">
          </div>
          <div class="slider-wrapper">
            <span class="slider-title">colour loop (<span id="cycleDisplay" class="slider-value">0s</span>)</span>
            <input id="cycle" type="range" min="0" max="5" step="0.1" value="0">
          </div>
        </div>
      </div>
    </div>
    <noscript>
      <style>
        #what { display: block !important; }
      </style>
      <br>
      <div class="preamble-text" >
        But...you need JavaScript enabled for the board to work 😓.
      </div>
    </noscript>
    <div id="container"></div>
  </body>
  <script src="./app.js"></script>
</html>
