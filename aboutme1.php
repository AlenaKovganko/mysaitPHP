<link href="favicon.png" rel="icon">
<style>
    .aboutme {
        margin: 10vw;
        width: 50vw;
        margin-bottom: 1vh;

    }
    img {
        margin-top: 2vh;
        width: 40vw;
    }

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
    .aboutme h4{
        font-size: 2rem;
    }

    .back a {
        text-decoration: none;     
        color: #FFFFFF;
        padding: 0;
        margin: 0;
        font-size: 0.9rem;

    }

</style>
<section class="aboutme">
    <?php
    // Подключение базы данных
    $dbConnect = mysqli_connect("test.loc", "root", "", "altshu_final_project");
    mysqli_query($dbConnect, "SET NAMES 'utf8'");
    $queryId = '1';
    $queryTitle = "SELECT * FROM news WHERE id= '$queryId' ";
    $result = mysqli_query($dbConnect, $queryTitle);
    echo "<div>";
    while ($section = mysqli_fetch_array($result)) {

        echo "<h4 >" . $section['title'] . "</h4>";
        echo "<p >" . $section['text'] . "</p>";
        echo "<img src=" . $section['image_url'] . ">";
    }
    ?>
    </script>
</section>
<section class="back">
    <?php
    echo '<a href="/mysaitPHP/index.php">Go back to the main page</a>';
    ?>
</section>