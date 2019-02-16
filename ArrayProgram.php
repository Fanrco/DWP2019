<html>

<body style="font-family:'Courier New'; font-size:16px;">
    <font face='Courier New'> </font>
    
<center>
    
    <?php
    //1d functions
    function array_avg($a){
        return array_sum($a)/count($a);
    }
    
    //2d functions
    function count2D($a){
        return count($a)*count($a);
    }
    
    function array_sum2D($a){
        $len = count($a)-1;
        $sum = 0;
        foreach (range(0,$len) as $row) {
        foreach (range(0,$len) as $col) {
            $sum += $a[$row][$col];
        }
        }
        return $sum;
    }
    function array_avg2D($a){
        return array_sum2D($a)/count2D($a);
    }
    
    //declare arrays and size variable
    $a2d = array();
    $a1d = array();
    $n = 10;
    
    //create a 1d array of size n with random values and print it
    echo '1D array =<br>';
    foreach (range(0,$n-1) as $row){
        $a1d[$row] = rand(0,9);
        echo $a1d[$row],' ';
    }
    echo '<br><br>';
    
    //calculate data
    echo 'Size of Array: ',count($a1d),    '<br>';
    echo 'Sum of Values: ',array_sum($a1d),'<br>';
    echo 'Average Value: ',array_avg($a1d),'<br><br>';

    //create square 2d array of size nxn with random values and print it
    echo '2D array =<br>';
    foreach (range(0,$n-1) as $row) {
        foreach (range(0,$n-1) as $col) {
            $a2d[$row][$col] = rand(0,9);
            echo $a2d[$row][$col],' ';
        }
        echo '<br>';
    }
    echo '<br>';
    
    //calculate data
    echo 'Size of Array: ', count($a2d),' * ',count($a2d),' = ',count2D($a2d),'<br>';
    echo 'Sum of Values: ', array_sum2D($a2d),'<br>';
    echo 'Average Value: ', array_avg2D($a2d);
    
    ?>  
    
</center>

</body>
</html>