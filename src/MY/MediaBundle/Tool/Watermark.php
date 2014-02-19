<?php

namespace MY\MediaBundle\Tool;

/**
 * Description of Watermark
 *
 * @author Vazgen Manukyan <vazgen.manukyan@gmail.com>
 */
class Watermark
{

  const WATERMARK_BIG = 1;
  const WATERMARK_SMALL = 2;

  /**
   *
   * @var string
   */
  protected $watermark_small;

  /**
   *
   * @var string
   */
  protected $watermark_big;

  /**
   * 
   * @return string
   */
  public function getWatermarkSmall()
  {
    return $this->watermark_small;
  }

  /**
   * 
   * @param string $watermark_small
   * @throws \Exception
   */
  public function setWatermarkSmall($watermark_small)
  {
    // check does file exist or not
    if(!file_exists($watermark_small))
    {
      throw new \Exception("watermark file '$watermark_small' does not exist!");
    }
    
    $this->watermark_small = $watermark_small;
  }

  /**
   * 
   * @return string
   */
  public function getWatermarkBig()
  {
    return $this->watermark_big;
  }

  /**
   * 
   * @param string $watermark_big
   * @throws \Exception
   */
  public function setWatermarkBig($watermark_big)
  {
    // check does file exist or not
    if(!file_exists($watermark_big))
    {
      throw new \Exception("watermark file '$watermark_big' does not exist!");
    }
    
    $this->watermark_big = $watermark_big;
  }

  /**
   * 
   * @param type $img_file
   * @param type $filetype
   * @param type $watermark
   */
  public function AddWatermark($img_file, $filetype, $size = Watermark::WATERMARK_BIG)
  {
    switch ($size)
    {
      case Watermark::WATERMARK_SMALL:
        {
          $watermarkImage = $this->watermark_small;
          break;
        }
      case Watermark::WATERMARK_BIG:
        {
          $watermarkImage = $this->watermark_big;
          break;
        }
    }
    $image = getimagesize($img_file);
    $xImg = $image[0];
    $yImg = $image[1];
    switch ($image[2])
    {
      case 1:
        $img = imagecreatefromgif($img_file);
        break;
      case 2:
        $img = imagecreatefromjpeg($img_file);
        break;
      case 3:
        $img = imagecreatefrompng($img_file);
        break;
    }
    
    $r = imagecreatefrompng($watermarkImage);
    $x = imagesx($r);
    $y = imagesy($r);

    $xDest = $xImg - ($xImg / 2 + $x / 2);
    $yDest = $yImg - ($y);
    imageAlphaBlending($img, 1);
    imageAlphaBlending($r, 1);
    imagesavealpha($img, 1);
    imagesavealpha($r, 1);
    imagecopyresampled($img, $r, $xDest, $yDest, 0, 0, $x, $y, $x, $y);
    switch ($filetype)
    {
      case "jpg":
        imagejpeg($img, $img_file, 100);
        break;
      case "jpeg":
        imagejpeg($img, $img_file, 100);
        break;
      case "gif":
        imagegif($img, $img_file);
        break;
      case "png":
        imagepng($img, $img_file);
        break;
    }
    
    imagedestroy($r);
    imagedestroy($img);
  }

}

