<?php  
function counting_smoothies_for_hipsters($smoothies, $hipsters){
	if($smoothies > $hipsters){
	$result = ($smoothies - $smoothies % $hipsters) / $hipsters;
	return	"Каждый хипстер выпьет по ".$result." смузи";
	}elseif ($smoothies == $hipsters) {
		return	"Каждый хипстер выпьет по ".$smoothies." смузи";
	}else{
		return "Хипстеры не будут пить смузи, так как смузи на всех не хватит";
	}
}

echo counting_smoothies_for_hipsters(9, 5);