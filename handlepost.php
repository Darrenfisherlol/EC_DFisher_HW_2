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
                </div>
            </div>

            <div class="divTwo">
                </br>
                <form action="handleget.php" method="GET">
                    FavoriteClass: <input type="text" name="FavoriteClass"><br>
                    <input type="submit">
                </form>

            </div>
        </div>
    </body>
</html>

