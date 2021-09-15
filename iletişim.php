<?php
include 'header.php';


$sql = "SELECT * FROM iletisim";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {

    ?>
    <main>
        <section class="iletişim">
            <div class="container">
                <div class="iletişim">
                    <h1>İletişim</h1>
                    <div class="center">
                        <p class="footer-hak1" style="font-size: 20px">

                            Gsm 1 : <?php echo $row["tel"];?>

                            <br>
                            Mail : <?php echo $row["mail"];?>
                            <br>
                            Adres : <?php echo $row["adres"];?>

                            <br>
                            şube 2 : <?php echo $row["sube"];?>
                            <br>

                            <br>
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