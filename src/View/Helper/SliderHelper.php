<?php
/*
 * CakePHP helper for implementing Image slideshow
 * 
 * Use: Place in app/View/Helper, add public $helpers = ['ImageSlider.Slider']; in the controller,
 * either AppController to use it app-wide, or the individual controller.
 * 
 * Author: Ganesh Routhu 
 * 
 */

namespace ImageSlider\View\Helper;

use Cake\View\Helper;

class SliderHelper extends Helper
{

	public $helpers = ['Html'];

	/*
	* CakePHP Plugin helper function to fetch image slideshow html without links associated with the images
	* @params $images (array)
	* @return html 
	*/
    public function plainSlideShow($images){
	    
		echo $this->Html->css('ImageSlider.image-slider');
		echo $this->Html->script('ImageSlider.image-slider');

		if(!empty($images)) {

			$out = "<div id='sliderFrame'><div id='slider'>";

			foreach ($images as $image) {
				$out .= "<img src='".$image['src']."' alt='".$image['title']."'/>";
			}
		}

		$out .= "</div></div>";
		return $out;
	}

	/*
	* CakePHP Plugin helper function to fetch image slideshow html with links associated with the images
	* @params $images (array)
	* @return html
	*/
	public function linkSlideShow($images) {
	    
		echo $this->Html->css('ImageSlider.image-slider');
		echo $this->Html->script('ImageSlider.image-slider');

		if(!empty($images)) {

			$out = "<div id='sliderFrame'><div id='slider'>";

			foreach ($images as $image) {
				$out .= "<a href='".$image['link']."'><img src='".$image['src']."' alt='".$image['title']."'/></a>";
			}
		}

		$out .= "</div></div>";
		return $out;
	}		
}
?>
