<?php
class Photo {
	public $fichierImage, $fichierImagette, $legende;
	public function __construct(string $fichierImage, string $fichierImagette, string $legende){
		$this->fichierImage = $fichierImage;
		$this->fichierImagette = $fichierImagette;
		$this->legende = $legende;
	}
}
?>
