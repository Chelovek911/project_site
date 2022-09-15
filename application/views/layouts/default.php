<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>


    <meta name="author" content="Script Tutorials"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/public/styles/main.scss" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/public/scripts/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
    <script src="/public/scripts/slick.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="placemark.js" type="text/javascript"></script>
    <script src="/public/scripts/scripts.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>

<header>
    <div class="top">
        <div class="navbar container1 <?php

        if ($_SERVER['REQUEST_URI'] == '/') {
            echo 'bg_1';
        } else echo 'bg-light' ?>  ">
            <a href="/" class="logo"><img src="public\images\about\logo-midex.png"
                                          style="border-style: none; max-width: 100%;"></a>
            <div class="menu_icon">
                <span></span>
            </div>
            <div class="allnav">
                <div class="allmenu">
                    <div class="dropdown1 pb-3 pt-3" style="height: 100%;">
                        <button id="open-button" class="dropbtn1 <?php

                        if ($_SERVER['REQUEST_URI'] == '/') {
                            echo 'bg_2';
                        } else echo 'bg-light' ?>  ">О компании
                        </button>
                        <div id="opencontent" class="dropdown-content hide">

                            <a class="menu_a" href="#home">О нас</a>
                            <a class="menu_a" href="#about">Партнерам</a>

                        </div>
                    </div>
                    <div class="dropdown1 pb-3 pt-3">
                        <button class="dropbtn1 <?php

                        if ($_SERVER['REQUEST_URI'] == '/') {
                            echo 'bg_2';
                        } else echo 'bg-light' ?>  ">Продукция
                        </button>
                        <div id="myDropdown1" class="dropdown-content hide">
                            <a href="#home">Дерматологические средства индивидуальной защиты</a>
                            <a href="#about">ТМС для пищевой промышленности</a>
                            <a href="#contact">ТМС для тяжелой промышленности</a>
                            <a href="#contact">ТМС для гостиниц, ресторанов и клининга</a>
                            <a href="#contact">ТМС Жилищно-коммунального хозяйства</a>
                            <a href="#contact">ТМС для транспорта</a>
                        </div>
                    </div>
                    <div class="dropdown1 pb-2 pt-3">

                        <button onclick="myFunction()" class=" dropbtn2  <?php

                        if ($_SERVER['REQUEST_URI'] == '/') {
                            echo 'bg_2';
                        } else echo 'bg-light' ?>  "><img name='img' src="public\images\about\ico_logo_poloskun.png">
                        </button>
                        <div id="drop" class="dropdown-content1 hide1">
                            <a href="#home">Бытовая химия</a>
                            <a href="#about">Дилеры</a>

                        </div>
                    </div>
                    <div id="nav" class="dropdown1 pb-3 pt-3  ">
                        <a href="/manufacturing" class="dropbtn1 <?php

                        if ($_SERVER['REQUEST_URI'] == '/') {
                            echo 'bg_2 ';
                        } else echo 'bg-light' ?>  " <?php

                        if ($_SERVER['REQUEST_URI'] == '/manufacturing') {
                            echo 'style="color: #1c8bff;" ';
                        }
                        ?>>Контрактное производство</a>

                    </div>
                    <div class="dropdown1 pb-3 pt-3 ">
                        <button type="button" class="dropbtn1 <?php

                        if ($_SERVER['REQUEST_URI'] == '/') {
                            echo 'bg_2 ';
                        } else echo 'bg-light' ?>  " <?php

                        if ($_SERVER['REQUEST_URI'] == '/contacts') {
                            echo 'style="color: #1c8bff;" ';
                        }
                        ?>>Контакты
                        </button>
                        <div id="myDropdown3" class="dropdown-content hide">
                            <a href="/contacts">Головной офис</a>
                            <a href="#about">Дилеры</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>


<?php echo $content; ?>

<footer class="fixed-bottom" style="position:relative ;">
    <div class="container  ">
        <div class="row ">
            <div class="col m-4">
                <p class="m-2">2016 – 2022 © ООО «Мидэкс групп»</p>
            </div>
        </div>
    </div>
</footer>
<script>
    // Get all the menus into an array, just once:
    let menus = Array.prototype.slice.call(document.querySelectorAll(".dropdown-content"));

    let openMenu = null;

    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function hideAllMenus() {
        // Get all the dropdowns into an array.
        menus.forEach(function (dropdown) {
            // If the element currently is not hidden
            if (!dropdown.classList.contains("hide")) {
                openMenu = dropdown;
                dropdown.classList.add('hide'); // Hide it
            }
        });
    }


    // Close the dropdown menu if the user clicks outside of it
    document.addEventListener("click", function (event) {

        hideAllMenus(); // Hide all the menus


        if (event.target.classList.contains('dropbtn1')) {
            if (event.target.nextElementSibling === openMenu) {
                event.target.nextElementSibling.classList.add("hide");
                openMenu = null;
            } else {
                // Go to the next element that is a sibling of the one that got clicked (the menu)
                // and toggle the use of the `hide` CSS class
                event.target.nextElementSibling.classList.remove("hide"); // Show the one that was clicked
                openMenu = event.target.nextElementSibling;
            }
        }
    });
    /*function show(target) {
          hideAllMenus(); // Hide all the menus
          if (target.id == 'drop') {
              if (target.classList.contains('dropbtn2')) {
                  if (target.nextElementSibling === openMenu) {
                      target.nextElementSibling.classList.add("hide");
                      openMenu = null;
                  } else {
                      // Go to the next element that is a sibling of the one that got clicked (the menu)
                      // and toggle the use of the `hide` CSS class
                      target.nextElementSibling.classList.remove("hide"); // Show the one that was clicked
                      openMenu = target.nextElementSibling;
                  }
              }
          }
      }*/

    //------------------------------------------menu burger-------------------------------------------
    const menuIcon = document.querySelector('.menu_icon');
    if (menuIcon) {
        const allMenu = document.querySelector('.allmenu');
        menuIcon.addEventListener("click", function (e) {
            allMenu.classList.toggle("active");
            menuIcon.classList.toggle("active1")
        });
    }

    //-------------------------------------------------------------------------------------------------//

    function myFunction() {
        var element = document.getElementById("drop");
        if (element.classList.contains('hide1')) {
            element.classList.remove("hide1");

        } else {
            element.classList.add('hide1');
        }
    }

    document.addEventListener("mouseup", function (event) {
        var obj = document.getElementById("drop");
        if (!obj.contains(event.target)) {
            var e = document.getElementById("drop");
            e.classList.add('hide1');
        }
    });
    /*document.addEventListener(click(function(e) {
        var el = document.querySelectorAll('.dropdown-content1');
        for (a in el) {
            let contains = a.classList.contains('hide1');
            if (contains) {} else {
                alert(1);
            }
        }


    }));*/
</script>


</html>