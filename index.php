<?php require_once("indexHeader.php")?>

    <style>
            #divOne {
                background-color: azure;
                height: 75px;
                font-size: 50px;
                line-height: 100px;
                float: left;
                width: 100%;
            }
            #divTwo{
                background-color: lightskyblue;
                height: 100px;
                text-align: center;
                line-height: 100px;
                font-size: 50px;
                float: left;
                width: 100%;
            }
            #divThree{
                background-color: lightblue;
                height: 200px;
                text-align: center;
                line-height: 200px;
                float: left;
                width: 100%;
            }
        </style>

    <div class="divOne">
            <div class="divTwo">

                <form action="handlepost.php" method="post">
                    Name: <input type="text" name="name"><br>
                    School: <input type="text" name="School"><br>
                    FavoriteClass: <input type="text" name="FavoriteClass"><br>
                    <input type="submit">
                </form>
            </div>
            <div class="divTwo">
                two 3
            </div>
            <div class="divTwo">
                three 3
            </div>
            <div class="divThree">
                1 1
            </div>
            <div class="divThree">
                2 2
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>



