<?php
class Murid{

	public $nilai;

	Function __construct($n){
    	$this->nilai=$n;
    }

    Function grade(){
    	if ($this->nilai >= 1 and $this->nilai <= 30){
    		return $hasil="E"; 
		}
		else if($this->nilai >= 31 and $this->nilai <= 60){
    		return $hasil="D"; 
    	}
    	else if($this->nilai >= 61 and $this->nilai <= 70){
    		return $hasil="C"; 
		}
		else if($this->nilai >= 71 and $this->nilai <= 80){
    		return $hasil="B+"; 
		}
		else if($this->nilai >= 81 and $this->nilai <= 90){
  			 return $hasil="B"; 
		}
		else if ($this->nilai >= 91 and $this->nilai <= 100){
   			 return $hasil="A"; 
		}
}
}
