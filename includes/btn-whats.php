<style>
#whatsapp {
    position: fixed;
    z-index: 999;
    width: 4rem;
    bottom: 110px;
    right: 10px;
}

#face {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 70px;
    right: 10px;
}

#insta {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 30px;
    right: 10px;
}

.whats-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 250px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #000;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.whats-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.whats-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.whats-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.whats-float:hover i {
    transform: rotate(360deg);
}


.insta-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 310px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background: #000;
    /* background: linear-gradient(2deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); */
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.insta-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.insta-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.insta-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.insta-float:hover i {
    transform: rotate(360deg);
}


.fb-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 370px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #000;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.fb-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.fb-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.fb-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.fb-float:hover i {
    transform: rotate(360deg);
}

.margen-menu {
    margin: 0 150px;
}

.logo-home {
    max-width: 200px
}

@media (max-width: 800px) {
    .margen-menu {
        margin: 0px;
    }

    .logo-home {
        max-width: 200px
    }
}
</style>

<div class="whats-float">
    <a href="https://wa.me/+14243240006?text=Hola%20me%20gustaría%20una%20cotización." target="_blank">
        <i class="fa-brands fa-whatsapp"></i><span>WhatsApp<br><strong>+14243240006 </strong></span>
    </a>
</div>

<div class="insta-float">
    <a href="https://www.instagram.com/xmdesign.co/" target="_blank">
        <i class="fa-brands fa-instagram"></i><span>Instagram<br><strong>@xmdesign.co</strong></span>
    </a>
</div>

<div class="fb-float">
    <a href="https://www.facebook.com/profile.php?id=100081517936485&paipv=0&eav=AfbSLgJ5Pa6SGrfZ7Jh-virXhhG5nY1nNqms8dmCKfTpHIOUUSIM3V4t-khMogtBqS0" target="_blank">
        <i style="margin: 0px -2px;" class="fa-brands fa-facebook"></i><span>Facebook<br><strong>XM Design Co</strong></span>
    </a>
</div>