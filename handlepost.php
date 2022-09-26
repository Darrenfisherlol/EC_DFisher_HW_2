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
                </div>
            </div>
           
        </div>

    </body>
</html>

