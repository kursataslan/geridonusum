<?php
include 'header.php';


$sql = "SELECT * FROM hakkimizda";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    ?>

    <main>
        <section class="hakkımızda">
            <div class="container">
                <div class="hakyazı">
                    <h1>Hakkımızda</h1>
                    <div class="center">
                        <p class="footer-hak1" style="font-size: 20px">

                            <?php echo $row["hakkimizda"];?>
                            <br>
                            Misyonumuz:

                            <br>

                            <?php echo $row["misyon"];?>


                            <br>

                            Vizyonumuz:

                            <br>

                            <?php echo $row["vizyon"];?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
}
include 'footer.php';
?>