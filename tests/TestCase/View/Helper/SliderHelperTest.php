<?php
/*
 * CakePHP helper test case for implementing Image slideshow
 * 
 * Author: Ganesh Routhu 
 * 
 */

namespace ImageSlider\Test\Testcase\View\Helper;

use ImageSlider\View\Helper\SliderHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;
use Cake\View\Helper;

class SliderHelperTest extends TestCase
{

	public $helper = null;

	// Instantiating the plugin helper	
	public function setUp()
    {
        parent::setUp();
        $View = new View();
        $this->helper = new SliderHelper($View);
    }


	// Testing plainSlideShow function
	public function testPlainSlideShow()
	{
		$testData = array(
			array(
				'src'=>'img/image-slider-1.jpg',
				'title' => 'image slider 1'
			),
			array(
				'src'=>'img/image-slider-2.jpg',
				'title' => 'image slider 2'
			),
			array(
				'src'=>'img/image-slider-3.jpg',
				'title' => 'image slider 3'
			),
		);

		$this->assertTextContains('sliderFrame',$this->helper->plainSlideShow($testData), 'plain slide show Success');
	}

	// Testing linkSlideShow function
	public function testLinkPlainSlideShow()
	{
		$testData = array(
			array(
				'src'=>'img/image-slider-1.jpg',
				'title' => 'image slider 1',
				'link' => 'http://www.google.com'
			),
			array(
				'src'=>'img/image-slider-2.jpg',
				'title' => 'image slider 2',
				'link' => 'http://www.google.com'
			),
			array(
				'src'=>'img/image-slider-3.jpg',
				'title' => 'image slider 3',
				'link' => 'http://www.google.com'
			),
		);

		$this->assertTextContains('sliderFrame',$this->helper->linkSlideShow($testData), 'link slide show Success');
	}
			
}
?>
