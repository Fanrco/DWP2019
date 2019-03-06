<html>
<head>
<title>PHP Calculator</title>
</head>
<style>
    #Calculator{height: 200px; width: 200px; background-color: darkblue; box-shadow: -10px 10px black; color: white;}
</style>
<body>
    <center>
    <h2>FRANCO'S TRUSTY DUSTY CALCULATOR</h2>
    <div id='Calculator'>
    <form>
        <br>
        <input type='text' name='num1' placehodler='First Number'><br>
        <select name='operation'>
        <option>CHOOSE</option>
        <option>PLUS</option>
        <option>MINUS</option>
        <option>DIVIDED BY</option>
        <option>MULTIPLIED BY</option>
        <option>MODULO</option>
        <option>IS GREATER THAN</option>
        <option>IS LESS THAN</option>
        </select><br>
        <input type='text' name='num2' placehodler='Second Number'><br>
        <button type='submit' name='submit' value='submit'>EQUALS</button>
    </form>
            
    <?php
        function fact($n){
            if($n>12){ return 0;} // avoid too much recursion
            else if($n==0 || $n==1){ return 1;}
            else{ return $n*fact($n-1); }
        }
        if(isset($_GET['submit'])){
            $x1=$_GET['num1'];
            $x2=$_GET['num2'];
            $op=$_GET['operation'];
            switch($op){
                case 'PLUS':
                    echo '<h1>',$x1 + $x2,'</h1>'; break;
                case 'MINUS':
                    echo '<h1>',$x1 - $x2,'</h1>'; break;
                case 'DIVIDED BY':
                    echo '<h1>',$x1 / $x2,'</h1>'; break;
                case 'MULTIPLIED BY':
                    echo '<h1>',$x1 * $x2,'</h1>'; break;
                case 'MODULO':
                    echo '<h1>',$x1 % $x2,'</h1>'; break;
                case 'CHOOSE':
                    if($x1 > 12 || $x2 > 12 || $x2 > $x1){
                        echo 'invalid inputs';
                    }else{
                        echo '<h1>',fact($x1)/(fact($x2)*fact($x1 - $x2)),'</h1>';
                    } break;
                case 'IS GREATER THAN':
                    if($x1 > $x2){ echo '<h1> TRUE </h1>';}
                    else{ echo '<h1> FALSE </h1>';} break;
                 case 'IS LESS THAN':
                    if($x1 < $x2){ echo '<h1> TRUE </h1>';}
                    else{ echo '<h1> FALSE </h1>';} break;   
            }
        }
    ?>
        
    </div>

    
    </center>
</body>
</html>