<?php 

	function biggestPalindromeNumber() {
		$bigPalindrome = 0;
		for ($i=999; $i > 99 ; $i--) { 
			for ($j=999; $j > 99 ; $j--) { 
				$n = $i * $j;
				if (isPalindromeNum($n) && $n > $bigPalindrome) {
					$bigPalindrome = $n;
				}
			}
		}
		return $bigPalindrome;
	}
	function isPalindromeNum($n){
		$n = strval($n);
		$len = strlen($n);
		$arr = str_split($n);
		for ($i=0; $i < $len/2; $i++) { 
			if ($arr[$i] != $arr[$len - 1 - $i]) {
				return false;
			}
		}
		return true;
	}

	echo biggestPalindromeNumber();
?>