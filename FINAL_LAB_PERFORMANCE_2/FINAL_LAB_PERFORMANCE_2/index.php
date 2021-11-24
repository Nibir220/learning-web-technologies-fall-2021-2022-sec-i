<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">

  <title>Calculator</title>
</head>
<body>
  <main class="container">
    <div id="calculator">
      <header class="top-part">
        <div class="top">
          <div class="window">
            <div class="close button" role="button">
              <i class="fas fa-times"></i> 
            </div>
          </div>
        </div>
        
        <div class="screen">
          <div class="history-screen">
            <input id="history" name="history" type="text" value="" disabled>
          </div>
          <div class="main-screen">
            <input id="main" name="main" value="" type="text" disabled>
          </div>
        </div>
        
      </header>

      <section class="bottom-part">
        <div class="features">
          <div class="main-menu">
            <div class="row">
              <div id="clear-entry" class="button sign" data-value="CE" role="button">CE</div>
              <div id="clear" class="button sign" data-value="C" role="button">C</div>
              <div id="clear-element" class="button image sign" data-value="CS" role="button">
                <i class="fas fa-backspace"></i>
              </div>
              <div id="divide" class="button image sign" data-value="/" role="button">
                <i class="fas fa-divide"></i>
              </div>
            </div>
            <div class="row">
              <div class="button number" role="button" data-value="7">7</div>
              <div class="button number" role="button" data-value="8">8</div>
              <div class="button number" role="button" data-value="9">9</div>
              <div id="multiply" class="button image sign" data-value="*" role="button">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="button number" role="button" data-value="4">4</div>
              <div class="button number" role="button" data-value="5">5</div>
              <div class="button number" role="button" data-value="6">6</div>
              <div id="minus" class="button image sign" data-value="-" role="button">
                <i class="fas fa-minus"></i>
              </div>
            </div>
            <div class="row">
              <div class="button number" role="button" data-value="1">1</div>
              <div class="button number" role="button" data-value="2">2</div>
              <div class="button number" role="button" data-value="3">3</div>
              <div id="plus" class="button image sign" data-value="+" role="button">
                <i class="fas fa-plus"></i>
              </div>
            </div>
            <div class="row">
              <div id="plus-minus" class="button image sign" data-value="+-" role="button">
                <i class="fas fa-plus"></i>/<i class="fas fa-minus"></i>
              </div>
              <div class="button number" role="button" data-value="0">0</div>
              <div id="dot" class="button dot sign" data-value="." role="button">.</div>
              <div id="equal" class="button image equals sign" data-value="=" role="button">
                <i class="fas fa-equals"></i>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  
</body>
</html>
