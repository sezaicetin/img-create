<?php
/**
 * Create Image with PHP
 * 
 * @author    Sezai ÇETİN <sezai@3xcode.com>
 * @copyright 2019
 * 
 *  
 */

namespace sezaicetin\Create;

class img
{
    public $sticky = '';

    public function __construct( $sticky=null ) 
    {
        $this->sticky = $sticky;
    }

	public function create( $w=200, $h=100, $d='' ) 
	{	
		if ( file_exists( $d ) ) 
		{
			$mtyp = image_type_to_mime_type( exif_imagetype( $d ) );
			if($mtyp=="image/png")
			{
				header("Content-Type: image/png");
				$source = imagecreatefrompng( $d );
				$width	= imagesx( $source );
				$height	= imagesy( $source );
			
				if($h)
				{
					$w	= '';
					$h	= $h;
					$x  = ( $width * $h ) / $height;
					$y  = $h;
				}
				elseif($w)
				{
					$w	= $w;
					$h	= '';
					$x  = $w;
					$y  = ( $height * $w ) / $width;
				}
			
				$src = imagecreatetruecolor( $x, $y );
				imagecolortransparent( $src, imagecolorallocatealpha( $src, 0, 0, 0, 127 ) );
				imagealphablending( $src, false );
				imagesavealpha( $src, true );
				imagecopyresampled( $src, $source, 0, 0, 0, 0, $x, $y, $width, $height );
				imagepng( $src );
				imagedestroy( $src );
			}
			elseif($mtyp=="image/jpeg")
			{
				header('Content-type: image/jpeg');
				$source = imagecreatefromjpeg( $d );
				$width  = imagesx( $source );
				$height = imagesy( $source) ;
			
				if($h)
				{
					$w	= '';
					$h	= $h;
					$x  = ( $width * $h ) / $height;
					$y  = $h;
				}
				elseif($w)
				{
					$w	= $w;
					$h	= '';
					$x  = $w;
					$y  = ( $height * $w ) / $width;
				}
			
				$src = imagecreatetruecolor( $x, $y );
				imagecopyresampled( $src, $source, 0, 0, 0, 0, $x, $y, $width, $height );
				imagejpeg( $src );
				imagedestroy( $src );
			}
			elseif($mtyp=="image/webp")
			{
				header("Content-Type: image/webp");
				$source = imagecreatefromwebp( $d );
				$width	= imagesx( $source );
				$height	= imagesy( $source );
			
				if($h)
				{
					$w	= '';
					$h	= $h;
					$x  = ( $width * $h ) / $height;
					$y  = $h;
				}
				elseif($w)
				{
					$w	= $w;
					$h	= '';
					$x  = $w;
					$y  = ( $height * $w ) / $width;
				}
			
				$src = imagecreatetruecolor( $x, $y );
				imagecolortransparent( $src, imagecolorallocatealpha( $src, 0, 0, 0, 127 ) );
				imagealphablending( $src, false );
				imagesavealpha( $src, true );
				imagecopyresampled( $src, $source, 0, 0, 0, 0, $x, $y, $width, $height );
				imagewebp( $src );
				imagedestroy( $src );
			}	
			elseif($mtyp=="image/gif")
			{
				header("Content-Type: image/gif");
				$source = imagecreatefromgif( $d );
				$width	= imagesx( $source );
				$height	= imagesy( $source );
			
				if($h)
				{
					$w	= '';
					$h	= $h;
					$x  = ( $width * $h ) / $height;
					$y  = $h;
				}
				elseif($w)
				{
					$w	= $w;
					$h	= '';
					$x  = $w;
					$y  = ( $height * $w ) / $width;
				}
			
				$src = imagecreatetruecolor( $x, $y );
				imagecolortransparent( $src, imagecolorallocatealpha( $src, 0, 0, 0, 127 ) );
				imagealphablending( $src, false );
				imagesavealpha( $src, true );
				imagecopyresampled( $src, $source, 0, 0, 0, 0, $x, $y, $width, $height );
				imagegif( $src );
				imagedestroy( $src );
			}	
			elseif($mtyp=="image/bmp")
			{
				header("Content-Type: image/png");
				$source = imagecreatefrombmp( $d );
				$width	= imagesx( $source );
				$height	= imagesy( $source );
			
				if($h)
				{
					$w	= '';
					$h	= $h;
					$x  = ( $width * $h ) / $height;
					$y  = $h;
				}
				elseif($w)
				{
					$w	= $w;
					$h	= '';
					$x  = $w;
					$y  = ( $height * $w ) / $width;
				}
			
				$src = imagecreatetruecolor( $x, $y );
				imagecolortransparent( $src, imagecolorallocatealpha( $src, 0, 0, 0, 127 ) );
				imagealphablending( $src, false );
				imagesavealpha( $src, true );
				imagecopyresampled( $src, $source, 0, 0, 0, 0, $x, $y, $width, $height );
				imagepng( $src );
				imagedestroy( $src );
			}				
		}
		else
		{
			header("Content-type:image/png");
			$image=imagecreatetruecolor( $w, $h ); 
			imagefill( $image, 0, 0, imagecolorallocate( $image, 221, 221, 221 ) ); 
			for($i=10; $i>=1; $i--) 
			{
				imagefilledellipse( $image, ( $w / 2 ), ( $h / 2 ), ( $i * 14 ), ( $i * 10 ), imagecolorallocate( $image, rand( 50, 255 ), rand( 50, 255 ), rand( 50, 255 ) ) );
			}
			imagestring( $image, rand( 4, 8) , rand( 0, 400 ), rand( 0, 400 ), $this->sticky, imagecolorallocate( $image, rand( 0, 255 ), rand( 0, 255 ), rand( 0, 255 )) );
			imagepng( $image ); 
			imagedestroy( $image );
		}
	}
}
?>