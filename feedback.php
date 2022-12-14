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
    .aboutme h4{
        font-size: 2rem;
    }
    table {
        border: 1px #6C85AC solid;
        width: 40vw;
    }
    TD, TH {
    padding: 5px; /* Поля вокруг текста */
    border: 1px #6C85AC solid; /* Рамка вокруг ячеек */
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
    /* .aboutme h4{
        font-size: 2rem;
    } */

    .back a {
        text-decoration: none;     
        color: #FFFFFF;
        padding: 0;
        margin: 0;
        font-size: 0.9rem;

    }

</style>
<section class="aboutme">
    <h4> FEEDBACK </h4>
    <?php
    // Подключение базы данных
    $dbConnect = mysqli_connect("test.loc", "root", "", "altshu_final_project");
    mysqli_query($dbConnect, "SET NAMES 'utf8'");
    $queryTitle = "SELECT * FROM users";
    $result = mysqli_query($dbConnect, $queryTitle);
    echo "<div>";
    echo "<table>";
    echo "<head>
    <tr>
    <th>first_name</th>
    <th>last_name</th>
    <th>email </th>
    <th>note </th>

    </tr>
    
    
    </head>";

    while ($user = mysqli_fetch_array($result)) {

        echo "<tr >" . "<td >" . $user['first_name'] . "</td ><td >" .$user['last_name'] . "</td ><td >" . $user['email'] . "</td ><td >" . $user['note'] . "</td >";
       
    }
    echo "</tbody></table>";
    ?>
    </script>
    <img src="./assets/images/feedback.jpg">
</section>

<section class="back">
    <?php
    echo '<a href="/mysaitPHP/index.php">Go back to the main page</a>';
    ?>
</section>