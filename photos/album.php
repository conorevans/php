<?php
class Album{
	public $photos = array();
	public $descriptions = array();
	
	public function __construct(string $descriptions, string $rep){
		
		//create associative array of files and their descriptions
		$file = fopen($descriptions, "r");
		while($line = fgets($file)){
			$explode = explode(" : ", $line);
			$this->descriptions[$explode[0]] = $explode[1];
		}
		fclose($file);
		
		//read through each image file and add to photo array
		$id_rep = opendir($rep);
		while ($image = readdir($id_rep)) {
			$pos = strpos($image,'Small');
			$pos2 = strpos($image, 'thumb');
			if($pos !== false OR $pos2 !== false){
				if($pos !== false){
					$grandeImage = substr($image,0,-9) . ".jpg";
				}
				else if($pos2 !== false){
					$grandeImage = substr($image,6);
				}
				//create photo object with caption value depending on whether its description is found 
				//in the associative array
				if(isset($this->descriptions[$grandeImage])){
					$photo = new Photo($grandeImage,$image,$this->descriptions[$grandeImage]);
					array_push($this->photos,$photo);
				}
				else{
					$photo = new Photo($grandeImage,$image,$image);
					array_push($this->photos,$photo);
				}
			}
		}
		closedir($id_rep);
	}
}
?>
