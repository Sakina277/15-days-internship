<?php 
   
		$a=$_POST["txt1"];
        $b=$_POST["txt2"];
        $c=$_POST["txt3"];
        $d=$_POST["txt4"];
		$sum=$a+$b+$c+$d;
		$percentage=($sum/400)*100;
				if($sum<=100){
					echo "Out of 400 your total is $sum.You are fail";

				}

				else if($sum >100 && $sum<=150	){
				 echo "Out of 400 your total is $sum and your percentage is $percentage.Your grade is C and you  are PASS";
				}
				else if($sum>150 && $sum<=320){
				echo "Out of 400 your total is $sum and your percentageis $percentage.Your grade is B and you are PASS";

				}
				else if($sum>320 && $sum<=400){
					echo "Out of 400 your total is $sum and your percentageis $percentage .Your grade is A and you are PASS";
				}
				else if(!is_numeric($sum)){
					echo "Not a valid input please enter Number between 1-100";
				}
			
			
?>