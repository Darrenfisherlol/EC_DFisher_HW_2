<?php require_once("indexHeader.php")?>

        <!-- Post echo php -->
       
    <div class="divOne">
            <div class="divTwo">
            </div>
            <div class="divTwo">
                <div>       
                    Hi <?php echo $_POST["name"]; ?><br>

                    <?php
                        function getClass() {
                        ?>
                        Your school is: <?php echo $_POST["School"]; ?><br>
                        <?php
                        }
                        getClass(); 
                    ?>

                    Your favorite class is <?php echo $_GET["FavoriteClass"]; ?>
                    Welcome <?php echo $_GET["name"]; ?>!
                    Your email address is <?php echo $_GET["School"]; ?>

                </div>
            </div>
        </div>
    </body>
</html>

