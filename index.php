<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="favicon.png" rel="icon">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <link rel="stylesheet" href="./assets/css/styleModal.css">
    <link rel="stylesheet" href="./assets/CSS/styleHeader.css">
    <style>

    </style>

    <title>website development </title>
</head>

<body>
    <header>
        <nav class="nav">
            <ul class="list">
                <li>
                    <a href="#first">Work</a>
                </li>
                <li>
                    <a href="#second">About</a>
                </li>
                <li>
                    <a href="#third">Blog</a>
                </li>
                <li>
                    <a href="#four">Contact</a>
                </li>
            </ul>
        </nav>
        <section class="header">
            <h1>
                <b>I develop awesome <br>
                    websites that <br>
                    make an inpact</b>
            </h1>

            <p> Hi! I'm Alena, a Full Stack Developer
                <br>
                based in Russia. I create information systems
                <br>
                for fast-growing startups.
            </p>
            <form>
                <input type="button" class="b_write_me" value="Write me!" onclick="showModalWin()">
            </form>
            <!-- <button class="b_write_me" > Write me!
                <img src="https://static.thenounproject.com/png/4093-200.png" alt="✉" width="17" />
            </button> -->
            <div id="popupWin" class="modalwin">
                <form method="POST">
                    <h1 style="text-align: center"> FEEDBACK </h1>
                    <div>
                        <label>
                            <input name="first_name" type="text" name="nameUsers" id="feedback" placeholder="  Имя" required />
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="last_name" type="text" name="nameUsers" id="feedback" placeholder="  Фамилия" required />
                        </label>
                    </div>
                    <div>
                        <label>
                            <input name="email" type="email" id="feedback" id="email" placeholder="  email" required name="email" />
                        </label>
                    </div>
                    <div id="tellus">
                    
                        <textarea name="note">

                            </textarea>
                    </div>
                    <button type="submit"> отправить </button>
                    <!-- <input type="submit"  value="Submit">Submit</button> -->
                </form>


            </div>
            <script>
                function showModalWin() {
                    var darkLayer = document.createElement('body'); // слой затемнения
                    darkLayer.id = 'shadow'; // id чтобы подхватить стиль
                    document.body.appendChild(darkLayer); // включаем затемнение
                    let btnFeedback = document.querySelector("#btnFeedback");

                    let win = document.querySelector("#popupWin");
                    win.style.display = 'block';
                    document.body.appendChild(win);

                    let btn = document.querySelector("button");
                    console.log(btn);

                    darkLayer.onclick = function() { // при клике на слой затемнения все исчезнет
                        darkLayer.parentNode.removeChild(darkLayer); // удаляем затемнение
                        win.style.display = 'none'; // делаем окно невидимым
                        return false;
                    };
                    document.addEventListener('submit', function() {
                        alert('Спасибо мы свяжемся с Вами')
                    })


                }
            </script>
            <?php

            if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) || isset($_POST['note'])) {
                // Переменные с формы
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $note = $_POST['note'];

                // Параметры для подключения
                $db_host = "localhost";
                $db_user = "root"; // Логин БД
                $db_password = ""; // Пароль БД
                $db_base = 'altshu_final_project'; // Имя БД
                $db_table = "users"; // Имя Таблицы БД

                try {
                    // Подключение к базе данных
                    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
                    // Устанавливаем корректную кодировку
                    $db->exec("set names utf8");
                    // Собираем данные для запроса
                    $data = array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'note' => $note);
                    // Подготавливаем SQL-запрос
                    $query = $db->prepare("INSERT INTO $db_table (first_name, last_name, email, note) values (:first_name, :last_name, :email, :note)");
                    // Выполняем запрос с данными
                    $query->execute($data);
                    // Запишим в переменую, что запрос отрабтал
                    $result = true;
                } catch (PDOException $e) {
                    // Если есть ошибка соединения или выполнения запроса, выводим её
                    print "Ошибка!: " . $e->getMessage() .
                        "<br/>";
                }

                if ($result) {
                    // echo "Успех. Информация занесена в базу данных";
                }
            }
            ?>
            <img class="headerimg" src="./assets/images/photo.webp">

        </section>

    </header>
    <main id="main">

        <section class="
        reviews-skills">
            <article class="
            reviews">
                <h4>Reviews</h4>
                <img src="./UI-elements/icons/star.png" width="10" height="10" alt="img">
                <img src="./UI-elements/icons/star.png" width="10" height="10" alt="img">
                <img src="./UI-elements/icons/star.png" width="10" height="10" alt="img">
                <img src="./UI-elements/icons/star.png" width="10" height="10" alt="img">
                <img src="./UI-elements/icons/star.png" width="10" height="10" alt="img"> <br>
                Working with Alena was interesting. She is a high-organized person,<br>
                that can create simple websites with Yii-2 and React.js technologies.
            </article>
            <article class="skills">
                <h3>Develop websites for fast growing digital startups</h3>
                <ul class="skills-numbers">
                    <li> 2+ <br> </li>
                    <li> 2+ </li>
                    <li> 5 </li>
                </ul>
                <ul class="skills-text">
                    <li> Months of experience </li>
                    <li> Projects completed</li>
                    <li> Technologies learnt </li>
                </ul>
                <ul class="skills-icons">
                    <li>HTML + CSS</li>
                    <li> JS, react </li>
                    <li>PHP, YII</li>
                    <li>MySQL</li>
                </ul>
            </article>
        </section>
        <section class="working">
            <article id="first">
                <h3> Bringing great results for every client. </h3>
                <div class="work1">
                    <img src="./assets/images/fotoFarmer.jpg" class="imgWork">
                </div>
            </article>
        </section>

        <section class="servise">
            <article id="second">
                <h3>Pushing the boundaries of your potential</h3>

                <h4>Memorabilia </h4>
                <p>Choose from easy, affordable options for merch like custom tees and sets of pins.</p>
                <h4> Branding </h4>
                <p>Refresh your logo, revamp your website, and even your letterhead— develop a cohesive aesthetic for
                    your brand.</p>
                <h4>Visual Aids </h4>
                <p>Make your point more convincingly with branded flyers, slides, catalogues, infographics</p>
                <h4>Packaging</h4>
                <p>Rethink labels, boxes, signage, and everything that'll help your product make a great first
                    impression.</p>

            </article>
        </section>

        <section class="design">
            <article id="third">
                <section class="aboutMe">
                    <?php
                    echo '<a href="/mysaitPHP/aboutme.php">Как  я стала разработчиком</a>';
                    ?>
                </section>
                <section class="aboutMe">
                    <?php
                    echo '<a href="/mysaitPHP/design.php">Дизайн в разработке сайтов</a>';
                    ?>
                </section>
                <section class="aboutMe">
                    <?php
                    echo '<a href="/mysaitPHP/websait.php">Разновидности мобильных приложений</a>';
                    ?>
                </section>

            </article>
        </section>

    </main>
    <footer>
        <section class="footer" id="four">
            <ul class="link">
                <li> <a href="mailto:alena_kovganko@mail.ru">alena_kovganko@mail.ru </a></li>
                <li> <a href="https://github.com/AlenaKovganko"> GitHub </a> </li>
                <li> <a href="https://vk.com/alena_kovganko87"> VK </a> </li>

            </ul>
        </section>
    </footer>


</body>

</html>