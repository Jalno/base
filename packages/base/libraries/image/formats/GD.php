<?php
namespace packages\base\Image;

use packages\base\{Image, IO\File};

class GD extends Image {
	/** @var resource image GD resource */
	protected $image;

	/**
	 * Save the image to a file.
	 * 
	 * @param packages\base\IO\File $file
	 * @param int $quality
	 * @return void
	 */
	public function saveToFile(File $file, int $quality = 75): void {
		imagegd($this->image, $file->getPath());
	}

	/**
	 * Get width of current image.
	 * 
	 * @return int in px
	 */
	public function getWidth(): int {
		return imagesx($this->image);
	}

	/**
	 * Get height of current image.
	 * 
	 * @return int in px
	 */
	public function getHeight(): int {
		return imagesy($this->image);
	}

	/**
	 * Resize the image to new width and height
	 * 
	 * @param int $width in px
	 * @param int $height in px
	 * @return packages\base\Image resized image
	 */
	public function resize(int $width, int $height): Image {
		$color = Color::fromRGBA(0,0,0,0);
		$new = new static($width, $height, $color);
		imagecopyresampled($new->image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
		return $new;
	}

	/**
	 * Get color of specified pixel.
	 * 
	 * @param int $x
	 * @param int $y
	 * @return packages\base\Image\Color
	 */
	public function colorAt(int $x , int $y): Color {
		$rgb = imagecolorat($this->image, $x, $y);
		$colors = imagecolorsforindex($this->image, $rgb);
		$colors['alpha'] = round((127 -  $colors['alpha']) / 127);
		return Color::fromRGBA($colors['red'], $colors['green'], $colors['blue'], $colors['alpha']);
	}

	/**
	 * Set color of specified pixel.
	 * 
	 * @param int $x
	 * @param int $y
	 * @param packages\base\Image\Color $color
	 * @return void
	 */
	public function setColorAt(int $x, int $y, Color $color): void {
		$colors = $color->toRGBA();
		$colors[3] = round(127 - ($colors[3] * 127));
		$rgba = imagecolorallocatealpha($this->image, $colors[0], $colors[1], $colors[2], $colors[3]);
		imagesetpixel($this->image,$x, $y, $rgba);
	}
	
	/**
	 * Save the image to a file.
	 * 
	 * @param packages\base\IO\File $file
	 * @param int $quality
	 * @return void
	 */
	public function getExtension(): string {
		return 'gd';
	}

	/**
	 * release the GD resource
	 * 
	 * @return void
	 */
	public function __destruct() {
		if (is_resource($this->image)) {
			imagedestroy($this->image);
		}
	}

	/**
	 * Read the image from constructor file.
	 * 
	 * @return void
	 */
	protected function fromFile(): void {
		$this->image = imagecreatefromgd($this->file->getPath());
	}

	/**
	 * Create new image with provided background color
	 * 
	 * @param int $width
	 * @param int $height
	 * @param packages\base\Image\Color $bg
	 * @return void
	 */
	protected function createBlank(int $width, int $height, Image\Color $bg): void {
		$this->image = imagecreatetruecolor($width, $height);
		$colors = $bg->toRGBA();
		$colors[3] = round(127 - ($colors[3] * 127));
		$rgba = imagecolorallocatealpha($this->image, $colors[0], $colors[1], $colors[2], $colors[3]);
		imagefilledrectangle($this->image, 0, 0, $width, $height, $rgba);
	}

	/**
	 * Copy anthor image to current image;
	 * 
	 * @param packages\base\Image $other source image
	 * @return void
	 */
	protected function fromImage(image $other): void {
		if ($other instanceof self) {
			$this->image = $other->image;
		} else {
			parent::fromImage($other);
		}
	}
}
