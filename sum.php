<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css"  rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php
    require_once 'init.php';

?>
<body>
    
    <div class="container">
        
        <div class="row">
            <div class="col cs1">

                <!-- <h1>Tính Tổng 1 Số</h1> -->
    
            </div>

            <div class="col cs">


                <h1>Tính Tổng 2 Số</h1>

                <form action = "sum.php" method = "POST">       
                    <h3>Số Thứ Nhất</h3>
                    <input class="number" name="number1" type="number">
                    <h3>Số Thứ Hai</h3>
                    <input class="number" name="number2" type="number">
                    <br/>
                    <input class="btnSubmit" name="submit" type="submit" value = "Submit">
                </form>

    
            </div>
            <div class="col cs2">

            <div class="result">

                <h2>Kết Quả</h2>
                <!-- <input type="text" class="number" name="result" value = "">   -->
                <h1>
                    <?php
                        $s1 = $_POST['number1'];
                        $s2 = $_POST['number2'];
                        echo $s1 + $s2;                              
                    ?>

                </h1>
               
                        
                
            </div>

          
            
           
           

                
                
                <!-- <h1>Tính Tổng 1 Số</h1> -->
    
            </div>
    
            
        </div>


        

      

    </div>
    
</body>
</html>

