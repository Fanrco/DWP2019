<html>

<body style="font-family:'Courier New'; font-size:16px;">
    <font face='Courier New'> </font>
    
<center>

    <?php
    
        class Car {
            
            private $brand;
            private $model;
            private $year;
            public $cost_in_USD;
            
            function __construct($_brand,$_model,$_year,$_cost_in_USD){
                $this->brand =       $_brand;
                $this->model =       $_model;
                $this->year  =       $_year;
                $this->cost_in_USD = $_cost_in_USD;
            }
            
            function name(){
                return $this->year.' '.$this->brand.' '.$this->model;
            }
            
            function cost_in_EUR(){
                return $this->cost_in_USD*0.88;
            }
            
            function cost_in_EUR_to_USD($price){
                $this->cost_in_USD=(int)($price*(1/0.88));
                return $this->cost_in_USD;
            }
            
        }
        
        $cars = [];
        $cars[0] = new Car('Ford','Prefect',1939,2000);
        $cars[1] = new Car('Dodge','Charger',1969,150000);
        $cars[2] = new Car('Mitzubishi','Eclipse Spyder', 2003, 1500);
    
        //iterate through cars array
        for($i=0;$i<3;$i++){
        echo 'Vehicle ',$i+1,':', '<br>';
        echo $cars[$i]->name(),'<br>';
        echo $cars[$i]->cost_in_EUR(),' USD <br>';
        $cars[$i]->cost_in_EUR_to_USD(5000*($i+1));
        echo'Cost of the vehicle has been changed to '.$cars[$i]->cost_in_USD.' USD', '<br>', '<br>';
        }
    
        //beepbeep
        echo ".-'--`-._<br>'-O---O--'";
    
    ?>  
</center>

</body>
</html>