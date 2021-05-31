<html>
 <head>
	<meta charset="UTF-8">
	<title>E-Peri</title>
	<link rel='stylesheet' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'><link rel="stylesheet" href="./style.css">
 </head>
 <style>
 .pad-top-20 {
  padding-top: 20px;
}
.pad-btm-20 {
  padding-bottom: 20px;
}
.pad-sep-20 {
  padding-top: 20px;
  padding-bottom: 20px;
}
.pad-top-40 {
  padding-top: 40px;
}
.pad-btm-40 {
  padding-bottom: 40px;
}
.pad-sep-40 {
  padding-top: 40px;
  padding-bottom: 40px;
}
.pad-top-60 {
  padding-top: 60px;
}
.pad-btm-60 {
  padding-bottom: 60px;
}
.pad-sep-60 {
  padding-top: 60px;
  padding-bottom: 60px;
}
.pad-top-80 {
  padding-top: 80px;
}
.pad-btm-80 {
  padding-bottom: 80px;
}
.pad-sep-80 {
  padding-top: 80px;
  padding-bottom: 80px;
}
.pad-top-100 {
  padding-top: 100px;
}
.pad-btm-100 {
  padding-bottom: 100px;
}
.pad-sep-100 {
  padding-top: 100px;
  padding-bottom: 100px;
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
}
html,
body {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  color: #fff;
  overflow: hidden;
  background-color: #222;
  font-size: 14px;
  position: relative;
  font-family: 'Roboto', Helvetica, Arial, sans-serif;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  font-weight: 300;
  color: #22A7F0;
}
.fix-middle {
  position: absolute;
  padding: 10px;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 3;
}
.dialog {
  color: #222;
  -webkit-perspective: 1200px;
  -moz-perspective: 1200px;
  -ms-perspective: 1200px;
  -o-perspective: 1200px;
  perspective: 1200px;
  z-index: 1000;
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -moz-transition: opacity 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -ms-transition: opacity 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: opacity 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.dialog,
.dialog .dialog-front,
.dialog .dialog-back {
  width: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  padding: 0;
  margin: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.dialog.dialog-effect-in {
  -webkit-animation: showDialog 1000ms linear both;
  -moz-animation: showDialog 1000ms linear both;
  -ms-animation: showDialog 1000ms linear both;
  animation: showDialog 1000ms linear both;
}
.dialog.shakeit {
  -webkit-animation: shakeDialog 300ms linear both;
  -moz-animation: shakeDialog 300ms linear both;
  -ms-animation: shakeDialog 300ms linear both;
  animation: shakeDialog 300ms linear both;
}
.dialog .dialog-content {
  width: 300px;
  background: #fff;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #ffffff 59%, #e5e5e5 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(59%, #ffffff), color-stop(100%, #e5e5e5));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #ffffff 59%, #e5e5e5 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #ffffff 59%, #e5e5e5 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #ffffff 59%, #e5e5e5 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #ffffff 59%, #e5e5e5 100%);
  /* W3C */
  border-radius: 6px;
  -webkit-box-shadow: 0 2px 12px -3px rgba(0, 0, 0, 0.6);
  -moz-box-shadow: 0 2px 12px -3px rgba(0, 0, 0, 0.6);
  -ms-box-shadow: 0 2px 12px -3px rgba(0, 0, 0, 0.6);
  box-shadow: 0 2px 12px -3px rgba(0, 0, 0, 0.6);
  padding: 20px 25px;
}
.dialog .dialog-front,
.dialog .dialog-back {
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: all 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -moz-transition: all 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -ms-transition: all 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.dialog .dialog-front {
  -webkit-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -moz-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -ms-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -o-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  z-index: 900;
}
.dialog .dialog-back {
  -webkit-transform: translate(-50%, -50%) rotateY(-180deg);
  -moz-transform: translate(-50%, -50%) rotateY(-180deg);
  -ms-transform: translate(-50%, -50%) rotateY(-180deg);
  -o-transform: translate(-50%, -50%) rotateY(-180deg);
  z-index: 800;
}
.dialog.flip .dialog-front {
  z-index: 800;
  visibility: hidden;
  -webkit-transform: translate(-50%, -50%) rotateY(180deg);
  -moz-transform: translate(-50%, -50%) rotateY(180deg);
  -ms-transform: translate(-50%, -50%) rotateY(180deg);
  -o-transform: translate(-50%, -50%) rotateY(180deg);
}
.dialog.flip .dialog-back {
  z-index: 900;
  visibility: visible;
  -webkit-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -moz-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -ms-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
  -o-transform: translate(-50%, -50%) rotateX(0deg) rotateY(0deg);
}
.dialog.dialog-effect-out {
  z-index: 1;
  opacity: 0;
  visibility: hidden;
}
.dialog.dialog-effect-out .dialog-front {
  -webkit-transform: translate(-50%, -20%) rotateX(-30deg);
  -moz-transform: translate(-50%, -20%) rotateX(-30deg);
  -ms-transform: translate(-50%, -20%) rotateX(-30deg);
  -o-transform: translate(-50%, -20%) rotateX(-30deg);
}
.dialog.dialog-effect-out .dialog-back {
  -webkit-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(-180deg);
  -moz-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(-180deg);
  -ms-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(-180deg);
  -o-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(-180deg);
}
.dialog.dialog-effect-out.flip .dialog-front {
  -webkit-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(180deg);
  -moz-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(180deg);
  -ms-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(180deg);
  -o-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(180deg);
}
.dialog.dialog-effect-out.flip .dialog-back {
  -webkit-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(0deg);
  -moz-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(0deg);
  -ms-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(0deg);
  -o-transform: translate(-50%, -20%) rotateX(-30deg) rotateY(0deg);
}
.dialog.dialog-effect-out .dialog-content {
  background: #00B16A;
}
.dialog.dialog-effect-out .dialog-content .dialog-form {
  visibility: hidden;
}
.dialog .dialog-form {
  -webkit-animation: swooshUp30 300ms linear both;
  -moz-animation: swooshUp30 300ms linear both;
  -ms-animation: swooshUp30 300ms linear both;
  animation: swooshUp30 300ms linear both;
  -webkit-animation-delay: 300ms;
  -moz-animation-delay: 300ms;
  -ms-animation-delay: 300ms;
  animation-delay: 300ms;
}
.dialog .dialog-form legend {
  margin-bottom: 40px;
  font-size: 26px;
  font-weight: 300;
  color: #222;
  border-bottom: none;
}
.dialog .dialog-form .form-group {
  margin-bottom: 20px;
  position: relative;
}
.dialog .dialog-form .form-group .form-control {
  color: #222;
  background-color: transparent;
  border: none;
  border-bottom: 2px solid #222;
  border-radius: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  box-shadow: none;
}
.dialog .dialog-form .form-group label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}
.dialog .dialog-form .form-group.has-error .error-msg {
  display: block;
}
.dialog .dialog-form .form-group.has-error label {
  color: #E74C3C;
}
.dialog .dialog-form .form-group.has-error .form-control {
  border-color: #E74C3C;
}
.dialog .dialog-form .form-group .checkbox label {
  padding-left: 40px;
}
.dialog .dialog-form .form-group .checkbox input[type="checkbox"] {
  width: 20px;
  height: 20px;
  background: none;
  border: 2px solid #222;
  margin-left: -40px;
  -webkit-appearance: none;
  appearance: none;
}
.dialog .dialog-form .form-group .checkbox input[type="checkbox"]:hover {
  background-color: #e6e6e6;
}
.dialog .dialog-form .form-group .checkbox input[type="checkbox"]:checked {
  background-color: #222;
}
.dialog .dialog-form .form-group .checkbox input[type="checkbox"]:disabled {
  background-color: #6f6f6f;
  border-color: #555555;
}
.dialog .dialog-form .error-msg {
  position: absolute;
  top: 50%;
  left: 0;
  right: auto;
  background-color: #E74C3C;
  color: #fff;
  padding: 10px;
  z-index: 3;
  max-width: 150px;
  border-radius: 3px;
  -webkit-transform: translate(-110%, -50%);
  -moz-transform: translate(-110%, -50%);
  -ms-transform: translate(-110%, -50%);
  transform: translate(-110%, -50%);
  -webkit-animation: swooshleft 200ms ease-in-out both;
  -moz-animation: swooshleft 200ms ease-in-out both;
  -ms-animation: swooshleft 200ms ease-in-out both;
  animation: swooshleft 200ms ease-in-out both;
  display: none;
}
.dialog .dialog-form .error-msg:after {
  position: absolute;
  content: '';
  top: 50%;
  right: 0;
  -webkit-transform: translate(97%, -50%);
  -moz-transform: translate(97%, -50%);
  -ms-transform: translate(97%, -50%);
  transform: translate(97%, -50%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #E74C3C;
}
.dialog .dialog-form .btn {
  font-weight: 700;
  border-width: 0;
  border-radius: 0;
  text-transform: uppercase;
  -webkit-transition: all 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -moz-transition: all 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -ms-transition: all 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.2s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.dialog .dialog-form .btn.btn-default {
  color: #fff;
  background-color: #446CB3;
  margin: 0 -10%;
  width: 120%;
  outline: none;
}
.dialog .dialog-form .btn.btn-default:hover {
  background-color: #222;
  color: #fff;
}
.dialog .dialog-form .btn.btn-default:active,
.dialog .dialog-form .btn.btn-default:focus {
  background-color: #222;
  color: #fff;
}
@-webkit-keyframes swooshUp30 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-moz-keyframes swooshUp30 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes swooshUp30 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes swooshleft {
  0% {
    -webkit-transform: translate(-90%, -50%);
    -moz-transform: translate(-90%, -50%);
    -ms-transform: translate(-90%, -50%);
    transform: translate(-90%, -50%);
  }
  100% {
    -webkit-transform: translate(-110%, -50%);
    -moz-transform: translate(-110%, -50%);
    -ms-transform: translate(-110%, -50%);
    transform: translate(-110%, -50%);
  }
}
@-moz-keyframes swooshleft {
  0% {
    -webkit-transform: translate(-90%, -50%);
    -moz-transform: translate(-90%, -50%);
    -ms-transform: translate(-90%, -50%);
    transform: translate(-90%, -50%);
  }
  100% {
    -webkit-transform: translate(-110%, -50%);
    -moz-transform: translate(-110%, -50%);
    -ms-transform: translate(-110%, -50%);
    transform: translate(-110%, -50%);
  }
}
@keyframes swooshleft {
  0% {
    -webkit-transform: translate(-90%, -50%);
    -moz-transform: translate(-90%, -50%);
    -ms-transform: translate(-90%, -50%);
    transform: translate(-90%, -50%);
  }
  100% {
    -webkit-transform: translate(-110%, -50%);
    -moz-transform: translate(-110%, -50%);
    -ms-transform: translate(-110%, -50%);
    transform: translate(-110%, -50%);
  }
}
@-webkit-keyframes shakeDialog {
  0% {
    left: 51%;
  }
  25% {
    left: 49%;
  }
  50% {
    left: 51%;
  }
  100% {
    left: 50%;
  }
}
@-moz-keyframes shakeDialog {
  0% {
    left: 51%;
  }
  25% {
    left: 49%;
  }
  50% {
    left: 51%;
  }
  100% {
    left: 50%;
  }
}
@keyframes shakeDialog {
  0% {
    left: 51%;
  }
  25% {
    left: 49%;
  }
  50% {
    left: 51%;
  }
  100% {
    left: 50%;
  }
}
/* Generated with Bounce.js. Edit at https://goo.gl/KtDT8H */
@-webkit-keyframes showDialog {
  0% {
    -webkit-transform: matrix3d(0.8, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.8, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  7.61% {
    -webkit-transform: matrix3d(0.907, 0, 0, 0, 0, 0.907, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.907, 0, 0, 0, 0, 0.907, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  11.41% {
    -webkit-transform: matrix3d(0.948, 0, 0, 0, 0, 0.948, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.948, 0, 0, 0, 0, 0.948, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  15.12% {
    -webkit-transform: matrix3d(0.976, 0, 0, 0, 0, 0.976, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.976, 0, 0, 0, 0, 0.976, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  18.92% {
    -webkit-transform: matrix3d(0.996, 0, 0, 0, 0, 0.996, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.996, 0, 0, 0, 0, 0.996, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  22.72% {
    -webkit-transform: matrix3d(1.008, 0, 0, 0, 0, 1.008, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.008, 0, 0, 0, 0, 1.008, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  30.23% {
    -webkit-transform: matrix3d(1.014, 0, 0, 0, 0, 1.014, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.014, 0, 0, 0, 0, 1.014, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  50.25% {
    -webkit-transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  70.27% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
@keyframes showDialog {
  0% {
    -webkit-transform: matrix3d(0.8, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.8, 0, 0, 0, 0, 0.8, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  7.61% {
    -webkit-transform: matrix3d(0.907, 0, 0, 0, 0, 0.907, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.907, 0, 0, 0, 0, 0.907, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  11.41% {
    -webkit-transform: matrix3d(0.948, 0, 0, 0, 0, 0.948, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.948, 0, 0, 0, 0, 0.948, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  15.12% {
    -webkit-transform: matrix3d(0.976, 0, 0, 0, 0, 0.976, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.976, 0, 0, 0, 0, 0.976, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  18.92% {
    -webkit-transform: matrix3d(0.996, 0, 0, 0, 0, 0.996, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.996, 0, 0, 0, 0, 0.996, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  22.72% {
    -webkit-transform: matrix3d(1.008, 0, 0, 0, 0, 1.008, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.008, 0, 0, 0, 0, 1.008, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  30.23% {
    -webkit-transform: matrix3d(1.014, 0, 0, 0, 0, 1.014, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.014, 0, 0, 0, 0, 1.014, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  50.25% {
    -webkit-transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  70.27% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
}
#successful_login,
#successful_registration {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.6s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -moz-transition: opacity 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.6s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -ms-transition: opacity 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.6s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: opacity 0.4s cubic-bezier(0.25, 0.5, 0.5, 0.9), visibility 0.6s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
#successful_login.active,
#successful_registration.active {
  opacity: 1;
  visibility: visible;
}
 </style>
 <body>
<center>
<div id="dialog" class="dialog dialog-effect-in">
<div class="dialog-front">
    <div class="dialog-content">
      <form id="register_form" class="dialog-form" action="register.php" method="POST">
        <fieldset>
          <legend>Register</legend>
          <div class="form-group">
            <label for="username" class="control-label">Username:</label>
            <input type="text" id="username" class="form-control" name="username" required="required"/> 
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password:</label>
            <input type="password" id="password" class="form-control" name="password" required="required"/>
          </div>
          <div class="pad-btm-20">
            <input type="submit" class="btn btn-default btn-block btn-lg" value="Continue"/>
          </div>
          <div class="text-center">
            <p>Return to <a href="login.php" class="link user-actions"><strong>log in page</strong></a>?</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
 </div>
</center>
 </body>
</html>
<!--<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = ($_POST['username']);
$password = ($_POST['password']);
echo "Username entered is: " . $username. "<br/>";
echo "Password entered is: " . $password;
}
?> user privacy breach ehe -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$username = ($_POST['username']);
$password = ($_POST['password']);
$bool = true;
$db_name = "deliverydb"; 
$db_username = "root"; 
$db_pass = ""; 
$db_host = "localhost"; 
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or 
die(mysqli_error()); //Connect to server
$query = "SELECT * from users";
$results = mysqli_query($con, $query); //Query the users table
while($row = mysqli_fetch_array($results)) //display all rows from query
{
$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
if($username == $table_users) // checks if there are any matching fields
{
$bool = false; // sets bool to false
Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
}
}
if($bool) // checks if bool is true
{
mysqli_query($con, "INSERT INTO users (username, password) VALUES 
('$username','$password')"); //Inserts the value to table users
Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
}
}
?>