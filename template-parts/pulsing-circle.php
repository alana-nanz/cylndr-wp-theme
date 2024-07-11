<div class="pulse-container">
  <div class="pulse-box">
    <svg class="pulse-svg" width="50px" height="50px" viewBox="0 0 50 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    
    <style>
    /* <![CDATA[ */

.pulse-box {
  float: left;
  width: 50%;
  height: 250px;
  display: flex;
  justify-content: center;
  align-items: center;
}
/* pulse in SVG */
svg.pulse-svg {
  overflow: visible;
  width: 20px;
  height: 20px;
}

@media screen and (min-width: 2000px) {
  svg.pulse-svg {
    overflow: visible;
    width: 30px;
    height: 30px;
  }
}

  svg.pulse-svg .first-circle {
    fill: #0000fd;
    transform: scale(0.5);
    transform-origin: center center;
    animation: pulse-me 3s linear infinite;
  }
 svg.pulse-svg .second-circle {
     fill: #0000fd;
    transform: scale(0.5);
    transform-origin: center center;
    animation: pulse-me 3s linear infinite;
    animation-delay: 1s;
  }
 svg.pulse-svg .third-circle {
       fill: #0000fd;
    transform: scale(0.5);
    transform-origin: center center;
    animation: pulse-me 3s linear infinite;
    animation-delay: 2s;
  }


/* pulse in CSS */
.pulse-css {  
  width: 30px;
  height:  30px;
  border-radius:  15px;
  background: #0000fd;
  position: relative;
}

  .pulse-css:before,
  .pulse-css:after {
    content: "";
    width: 30px;
   height:  30px;
    border-radius:  15px;
    background-color: #0000fd;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    transform: scale(0.5);
    transform-origin: center center;
    animation: pulse-me 3s linear infinite;
  }
  .pulse-css:after {
    animation-delay: 2s;
  }


@keyframes pulse-me {
  0% {
    transform: scale(0.5);
    opacity: 0;
  }
  50% {
    opacity: 0.1;
  }
  70% {
    opacity: 0.09;
  }
  100% {
    transform: scale(5);
    opacity: 0;
  }
}

    /* ]]> */
  </style>
  
      <circle class="circle first-circle" fill="#0000fd" cx="25" cy="25" r="25"></circle>
      <circle class="circle second-circle" fill="#0000fd" cx="25" cy="25" r="25"></circle>
      <circle class="circle third-circle" fill="#0000fd" cx="25" cy="25" r="25"></circle>
      <circle class="circle" fill="#0000fd" cx="25" cy="25" r="25"></circle>
    </svg>
  </div>
</div>
   
