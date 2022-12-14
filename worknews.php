<link href="favicon.png" rel="icon">
<style>
    .back {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 10vw;
        margin-top: 3vh;
        width: 12vw;
        height: 5vw;
        border: 1px black solid;
        background: #6C85AC;
        border-radius: 15px;
        font-size: 2rem;
    }

    .back a {
        text-decoration: none;
        color: #FFFFFF;
        padding: 0;
        margin: 0;
        font-size: 0.9rem;

    }

    .fd {
        margin-left: 100px;
        float: left;
    }

    input {
        width: 12vw;
        height: 3vw;
    }

    .field {
        clear: both;
        text-align: right;
        line-height: 25px;
    }

    label {
        float: left;
    }
</style>

<section class="fd">
    <form method="POST">
        <h1 style="text-align: center"> WORK NEWS </h1>
        <h4> Создание новости</h4>
        <div class="field">

            <label> title </label>
            <input name="title" type="text" placeholder="  title" />

        </div>
        <div class="field">
            <label> descript </label>
            <input name="description" type="text" placeholder="  Краткое описание" />

        </div>
        <div class="field">
            <label> image_url </label>
            <input name="image_url" type="text" placeholder=" Ссылка на картинку" />

        </div>
        <div class="field">
            <label> text </label>
            <input name="text" type="text" placeholder="  текст" />

        </div>
        <div class="field">
            <label> created_at </label>
            <input name="created_at" type="text" placeholder="  дата создания" />

        </div>
        <div class="field">
            <label> updated_at </label>
            <input name="updated_at" type="text" placeholder="  дата редакции" />

        </div>
        <div class="field">
            <label> user_id </label>
            <input name="user_id" type="text" placeholder="  номер пользователя" />

        </div>

        <button type="submit"> отправить </button>
        <!-- <input type="submit"  value="Submit">Submit</button> -->
    </form>
    <section class="back">
        <?php
        echo '<a href="/mysaitPHP/index.php">Go back to the main page</a>';
        ?>
    </section>
    <?php

    if (isset($_POST['title']) || isset($_POST['description']) ||  isset($_POST['image_url']) || isset($_POST['text']) || isset($_POST['created_at']) ||  isset($_POST['updated_at']) || isset($_POST['user_id'])) {
        // Переменные с формы
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image_url = $_POST['image_url'];
        $text = $_POST['text'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];
        $user_id = $_POST['user_id'];


        // Параметры для подключения
        $db_host = "localhost";
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_base = 'altshu_final_project'; // Имя БД
        $db_table = "news"; // Имя Таблицы БД

        try {
            // Подключение к базе данных
            $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
            // Устанавливаем корректную кодировку
            $db->exec("set names utf8");
            // Собираем данные для запроса
            $data = array('title' => $title, 'description' => $description, 'image_url' => $image_url, 'text' => $text, 'created_at' => $created_at, 'updated_at' => $updated_at, 'user_id' => $user_id);
            // Подготавливаем SQL-запрос
            $query = $db->prepare("INSERT INTO $db_table (title, description, image_url, text, created_at, updated_at, user_id) values (:title, :description, :image_url, :text, :created_at, :updated_at, :user_id)");
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
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "altshu_final_project";
    $db_table = "news"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM `news` WHERE id > 10";

    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    ?>
</section>