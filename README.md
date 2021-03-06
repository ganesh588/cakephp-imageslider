ImageSlider plugin for CakePHP 3.X
================================

It is a helper plugin to implement basic Image Slideshow. 

It contains two types of slideshows, one without links and one with links to the images. 

General Features
----------------

- Uses plugin's javascript and css to embed slideshow in a page
- Text on the images can be added
- Links to the images can be adedd

Installation
------------

### Adding the plugin

You can easily install this plugin by cloning or copying the plugin code into your plugins directory. The folder name in plugins should be ‘ImageSlider’. This directory contains plugin’s src, tests and any other directories.

### Enabling the plugin

After adding the plugin remember to load it in your `config/bootstrap.php` file:

```php
Plugin::load('ImageSlider', ['bootstrap' => true]);
```

This will load the ImageSlider plugin for you.

If you prefer to do this manually, you can load it:

```php
Plugin::load('ImagSlider');
```

### Configuration

After adding the plugin you can add the desired utilities:

```php
// AppController.php or any CustomController.php
public $helpers = [
    'ImageSlider.Slider'
];
```

Usage
-----

After installing the plugin you need to call plugin helper function to place slideshow in your page,

```php
echo $this->Slider->linkSlideShow($images);
```
$images should be an array like below,

$images = array(
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

That's All. You have a basic running image slideshow in your page. 
Cheers!!!!
