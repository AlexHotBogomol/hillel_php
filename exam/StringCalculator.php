<?php
	/*Необходимо написать класс для подсчета и группировки слов в предложении.
	Например: “Лето, наступило у нас лето”
	Результат должен быть в виде массива:
	[‘лето’] => 2,
	[‘наступило’] => 1,
	[‘у’] => 1,
	[‘нас’] => 1 */

	class StringCalculator
	{
		private const SEPARATORS = [",", ".", ";"];
		static function calculateWords($string)
		{
			$string = mb_strtolower($string);
			$words = explode(" ", $string);
			$words = str_replace (self::SEPARATORS, "", $words);
			$result = [];
			foreach ($words as $word) {
				if(!isset($result[$word])){
					$result[$word] = 1;
				}else{
					$result[$word]++;
				}
			}
			return $result;
		}	
	}