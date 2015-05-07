<?php 

	function largestPrimeFactor($n) {
		$primeFactors = array();


		function largestFactor($n) {
			$smallest = smallestFactor($n);
			$primeFactors[] = $smallest;
			//if ($n == $smallest) returns largest prime factor, else calls the function recursively with ($n / $smallest) as param
			return ($n == $smallest) ? max($primeFactors) : largestFactor($n / $smallest);
		}

		//Gets smallest prime factor of $n
		function smallestFactor($n) {
			for ($i = 2; $i <= $n ; $i++) { 
				if ($n % $i == 0) {
					return $i;
				}
			}
		}

		return largestFactor($n);
	}

	echo largestPrimeFactor(600851475143);
?>