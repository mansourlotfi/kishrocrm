			<?php



			function gdate() 
			{
			date_default_timezone_set('Asia/Tehran');

			list($gy,$gm,$gd)=explode('-',date('Y-n-d'));

			//return gregorian_to_jalali($gy,$gm,$gd,$mod='');
			return $j_date_string = gregorian_to_jalali($gy,$gm,$gd,'/');
			}





			function gregorian_to_jalali($gy,$gm,$gd,$mod=''){
			 $g_d_m=array(0,31,59,90,120,151,181,212,243,273,304,334);
			 if($gy>1600){
			  $jy=979;
			  $gy-=1600;
			 }else{
			  $jy=0;
			  $gy-=621;
			 }
			 $gy2=($gm>2)?($gy+1):$gy;
			 $days=(365*$gy) +((int)(($gy2+3)/4)) -((int)(($gy2+99)/100)) +((int)(($gy2+399)/400)) -80 +$gd +$g_d_m[$gm-1];
			 $jy+=33*((int)($days/12053)); 
			 $days%=12053;
			 $jy+=4*((int)($days/1461));
			 $days%=1461;
			 if($days > 365){
			  $jy+=(int)(($days-1)/365);
			  $days=($days-1)%365;
			 }
			 $jm=($days < 186)?1+(int)($days/31):7+(int)(($days-186)/30);
			 $jd=1+(($days < 186)?($days%31):(($days-186)%30));
			 return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
			}


			function gmonth()
			{
			date_default_timezone_set('Asia/Tehran');
			list($gy,$gm,$gd)=explode('-',date('Y-n-d'));

			//return gregorian_to_jalali($gy,$gm,$gd,$mod='');
			$j_date_string = gregorian_to_jalali($gy,$gm,$gd,'/');
			list($Y,$M,$d) = explode('/',$j_date_string);
			$result = $Y.'/'.$M;
			return $result;
			}



?>