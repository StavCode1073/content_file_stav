<style>
    #ventanainicio{
    width: 100%;
    height: auto;
    background-color: #FFFFFF;
    /*background-attachment: scroll,							fixed;*/
    background-color: #fff;
    background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/baner2.jpg");
    background-position: top left,						center center;
    background-repeat: repeat,							no-repeat;
    background-size: auto,	contain;
    }
    @media screen and (max-width: 980px) {
      #ventanainicio{
      width: 100%;
      height: 400px;
      background-color: #FFFFFF;
      /*background-attachment: scroll,							fixed;*/
      background-color: #fff;
      background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/baner2.jpg");
      background-position: top left,						center center;
      background-repeat: repeat,							no-repeat;
      background-size: auto,	cover;
      }
    }
    @media screen and (max-width: 736px) {
      #ventanainicio{
      width: 100%;
      height: 400px;
      background-color: #FFFFFF;
      /*background-attachment: scroll,							fixed;*/
      background-color: #fff;
      background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/baner2.jpg");
      background-position: top left,						center center;
      background-repeat: repeat,							no-repeat;
      background-size: auto,	cover;
      }
    }
    @media screen and (max-width: 480px) {
      #ventanainicio{
      width: 100%;
      height: 330px;
      background-color: #FFFFFF;
      /*background-attachment: scroll,							fixed;*/
      background-color: #fff;
      background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/baner2.jpg");
      background-position: top left,						center center;
      background-repeat: repeat,no-repeat;
      background-size: auto,	800px;
      }
      .cuadro{
        margin: 0;
      }
    }
    #ventanainicio2{
      background-image: url("<?php echo RUTA_URL;?>/img/baner3.jpg");
      width: 100%;
      height: auto;
      background-position: top left,center center;
      background-repeat: repeat,no-repeat;
    }
  @font-face {
    font-family: "dominne";
    src: url("<?php echo RUTA_URL;?>/fonts/Signika-Regular.ttf") format("truetype");
    }
  *{
    font-family: dominne,Arial, Helvetica, sans-serif;
    }
    .ftco-navbar-light .container{
    /*background-image: url("<?php echo RUTA_URL;?>/img/lineas.png");
    background-position: top left,						center center;
    background-repeat: repeat,							no-repeat;*/
    /*	box-shadow: rgba(0,0,0,0.6)0px 5px 5px;*/
    }
    /*la clase fondo no se esta utilizando*/
  .fondo{
    width: 100%;
    height: auto;
    background-color: #FFFFFF;
    /*background-attachment: scroll,							fixed;*/
    /*background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/mifondo1.4.png");*/
    /*background-position: top left,						center center;*/
    /*background-repeat: repeat,	no-repeat;
    background-size: auto,	contain;*/
    }
    .colorCabezal{
    width: 100%;
    height: auto;
    background-color: #FFFFFF;
   /* background-attachment: scroll,fixed;*/
    background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/mifondo1.6.png");
    background-position: 0 left,center center;
    background-repeat: repeat,repeat;
    background-size: %100,	%100;
    /*background-color: rgb(255, 255, 255);*/
    }
    @media screen and (max-width: 480px) {
        .colorCabezal{
            width: 100%;
            height: auto;
            background-color: #FFFFFF;
            background-attachment: scroll,fixed;
            background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/mifondo_movil2.png");
            background-position: 0 left,center center;
            background-repeat: repeat,repeat;
            background-size: %100,	%100;
            /*background-color: rgb(255, 255, 255);*/
        }
        .sociales{
            color: #000000;
        }
        a.whats{
            color: #000000;
        }
    }
  .banersmall{
    width: 100%;
    height: auto;
    background-color: #FFFFFF;
   /* background-attachment: scroll,fixed;*/
    background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/mifondo1.6.png");
    background-position: 0 left,center center;
    background-repeat: repeat,repeat;
    background-size: %100,	%100;
    /*background-color: rgb(255, 255, 255);*/
    display:none;
  }
  #espacioMenu {
    background-color: #FFFFFF;
   /* background-attachment: scroll,fixed;*/
    background-image: url("../img/overl.png"), url("<?php echo RUTA_URL;?>/img/mifondo1.6.png");
    background-position: 0 left,center center;
    background-repeat: repeat,repeat;
    background-size: %100,	%100;
    /*background-color: rgb(255, 255, 255);*/
  }
    .sombraProduct{
        -webkit-box-shadow: 1px 12px 15px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px 12px 15px -4px rgba(0,0,0,0.75);
        box-shadow: 1px 12px 15px -4px rgba(0,0,0,0.75);
    }
    .sizeimgn{
      width: 70%;

    }
    .sizeimgn2{
      width: 50%;
    }
    .sizeimgn3{
      width: 60%;
    }

  .encabezado-somos{
      width: 100%;
      height: 340px;
      background: #000000;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja.jpg); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* fallback for old browsers */

      background-size: contain;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center center;
      position: relative;
  }
  .encabezado-sscl{
      width: 100%;
      height: 240px;
      background: #000000;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/logo_sscl2.png); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/logo_sscl2.png); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* fallback for old browsers */

      background-size: cover;

    
  }
  .encabezado-vacantes{
      width: 100%;
      height: 240px;
      background: #000000;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/vacantes-small.png); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/vacantes-small.png); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* fallback for old browsers */

      background-size: cover;

    
  }
@media screen and (max-width: 980px) {
  .encabezado-somos{
  width: 100%;
  height: 300px;
  background: #000000;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja-small.jpg); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja-small.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background-size: contain;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  position: relative;
    }
@media screen and (max-width: 480px) {

  .encabezado-somos{
  width: 100%;
  height: 180px;
  background: #000000;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja-small.jpg); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, hsla(0, 0%, 26%, 0.151), hsla(0, 0%, 0%, 0.336)), url(<?php echo RUTA_URL;?>/img/baner-local2-baja-small.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background-size: contain;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  position: relative;
 
}
#wowslider-container1 {
    margin: 0;
  }
}
.parallax-window{

}
.overlay{
top: 0;
left: 0;
right: 0;
bottom: 0;
content: '';
opacity: .7;
background: #0d1128;
}
</style>
