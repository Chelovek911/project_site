<body>
    <div class="header_title">
        <div class="intro">
            <div class="items_manufacturing">
                <div class="img_pages">
                    <img src="public\images\about\contacts.jpg">
                </div>
                <div class="description">
                    <div class="container1">
                        <h1 class="title">Контактная информация</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="row_content">
            <div class="content_pages">
                <div class="collumn_contact">
                    <div class="contact_address">
                        <div class="section_address">
                            <div class="icon">
                                <img src="public\images\icons\place.png">
                            </div>
                            <div class="address">
                                <div class="mb-2">
                                    г. Белгород
                                </div>
                                <div>
                                    Михайловское шоссе, 27 а
                                </div>
                            </div>
                        </div>
                        <div class="section_number">
                            <div class="icon">
                                <img src="public\images\icons\telephone.png">
                            </div>
                            <div class="telephone">
                                +7 (4722) 36-42-56
                            </div>
                        </div>
                        <div class="section_link">
                            <div class="icon">
                                <img src="public\images\icons\email.png">
                            </div>
                            <div>
                                <div class="mail mb-3">
                                    <a href="mailto:info@midex.ru.com">info@midex.ru.com</a>
                                </div>
                                <div class="site">
                                    <a href="http://www.xn--90aiamnczpck6bye.xn--p1ai">
                                        www.белспецстиль.рф </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="contact_info">
                        <h4 class="mb-3"> Отдел продаж ДСИЗ:</h4>
                        <p>тел.: +7 (905) 670-60-88</p>
                        <h4 class="mb-3"> Отдел франшиза «Полоскун»:</h4>
                        <p>тел.: +7 (905) 860-10-60</p>
                        <h4 class="mb-3"> Отдел продаж ХоРеКа:</h4>
                        <p>тел.: +7 (905) 671-16-44</p>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="sideform">
                    <h3 class="title_pages m-0">Обсудить сотрудничество</h3>
                    <form simple-form="120" method="post" class="form-validate">
                        <input type="text" name="" id="" value="" class="form-control required" placeholder="Как к вам обращаться? " required aria-required="true" />
                        <input type="text" name="" id="" value="" class="form-control required" placeholder="Адрес эл. почты" required aria-required="true" />
                        <input type="text" name="" id="" value="" class="form-control required" placeholder="Номер телефона " required aria-required="true" />
                        <textarea name="" id="" cols="5" rows="2" class="form-control" placeholder="Сообщение"></textarea>

                        <div class="form-group">
                            <button class="btn_send" type="submit">
                                Отправить заявку
                            </button>
                        </div>
                        <div class="messages" style="display: none;">
                            <div class="error" style="display: none;"></div>
                            <div class="success" style="display: none;"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="map" style="width:100%;height:450px;"></div>

    <div class="bot_nav">
        <ul class="bot_nav_element">
            <li><a href="/" id='ahref'>Продукция</a>
                <span class="divider"></span>
            </li>

            <li>Контакты</li>
        </ul>
    </div>
</body>
<script type="text/javascript">
    ymaps.ready(init);

    var myMap,
        myPlacemark;

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [50.582168, 36.640773],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Создаем метку.
        var myPlacemark = new ymaps.Placemark([50.582168, 36.640773], {
            balloonContent: 'Михайловское шоссе, 27 а',
            iconContent: 'ООО"Мидэкс групп"'

        }, {
            // Красная иконка, растягивающаяся под содержимое.
            preset: "islands#redStretchyIcon"
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>