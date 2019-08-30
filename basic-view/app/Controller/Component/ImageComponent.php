<?php  
/* 
 * component to create thumbnails by phpThumb 
 *  
 * @author Sebastian Bechtel <kontakt@sebastian-bechtel.info> 
 * @varsion 1.0 
 * @package default 
 */  
class ImageComponent extends Component { 
    /* 
     * @var array 
     * @access private 
     *  
     * array with allowed mime types 
     */ 
    private $allowed_mime_types = array( 
        'image/jpeg', 
        'image/pjpeg', 
        'image/png', 
        'image/gif',
		'application/pdf' 
    ); 
     
    /* 
     * @var array 
     * @access private 
     *  
     * array with allowed file extensions 
     */ 
    private $allowed_extensions = array( 
        'jpg', 
        'jpeg', 
        'png', 
        'gif',
        'pdf'
    ); 
     
    /* 
     * @var string 
     * @access private 
     *  
     * save paths for thumbnail and upload image 
     */ 
    private $save_paths = array( 
        'upload' => '', 
        'thumb' => '' 
    ); 
     
    /* 
     * @var string 
     * @access private 
     *  
     * path to file 
     */ 
    private $file_path = null; 
     
    /* 
     * @var int 
     * @access public 
     *  
     * thumbnail width 
     */ 
    public $width = 0; 
     
    /* 
     * @var int 
     * @access public 
     *  
     * thumbnail height 
     */ 
    public $height = 0; 
     
    /* 
     * @var mixed 
     * @access private 
     *  
     * zoom crop 
     */ 
    private $zoom_crop = 0; 
     
    /* 
     * @var pointer 
     * @access private 
     *  
     * object pointer for controller 
     */ 
    private $controller = null; 
    
	/*
	 * @var thumbName
	 * @access Public
	 *
	 * To get the thumb name to save the thumbnail.
	*/
	public $thumbName = "";
	
	/*
	 * @var FileName
	 * @access Public
	 *
	 * To get the File name to Upload the file.
	*/
	public $fileName = "";
	 
    /* 
     * @var array 
     * @access public 
     *  
     * array with error messages 
     */ 
    private $errorMsg = array(); 
     
    /* 
     * @access public 
     * @param object pointer &$controller 
     *  
     * init component with controller pointer 
     */ 
	 
	 var $imageQuality = 100;
	 var $imageType = -1;
	 var $extension = "", $uploadPath, $thumbPath = "";
	 
    public function startup(&$controller) { 
        $this->controller = &$controller; 
    } 
     
    /* 
     * @access public 
     * @param string $upload_path 
     * @param string $thumb_path 
     *  
     * set paths for upload and thumb 
	 array	(	'uploadPath' => WWW_ROOT . $this -> productDIR, 
				'fileName' => $imgName,
				'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> productDIR, 
									'thumbName' => $thumbName,
									'width' => 500,
									'thumbHeight' => 500
								)
			);
     */ 
    public function setPaths($array)
	{         
	   
        extract($array);
		#--Check if Directory exists or not---
		if(!empty($uploadPath))
		{
			#--Check if DIR does not exist then create it---
			if(!is_dir($uploadPath)) mkdir($uploadPath);
			#--Check if DIR is Writable---
			if(is_writable($uploadPath))
			{
				$this -> uploadPath = $uploadPath;
				$this -> fileName = $fileName;
				#--If size has to be reduced that is if thumbnail  has to be created---
				if(isset($thumb) && !empty($thumb))
				{
					$this -> thumbPath = $thumb['thumbPath'];
					$this -> thumbName = $thumb['thumbName'];
					$this -> width = $thumb['thumbWidth'];
					$this -> height = $thumb['thumbHeight'];
				}
			}
			else #Dir is not writable---
			{
				return false;
			}
		}
		else #Path to upload file was not found---
		{
			return false;
		}
		if(!empty($upload_path) && is_writable($upload_path) && !empty($thumb_path) && is_writable($thumb_path)) 
		{
			$this->save_paths = array('upload' => $upload_path, 'thumb' => $thumb_path);
			$this -> fileName = $fname;
			$this -> thumbName = $thumbName;
		}
        else
	     return false; 
    } 
     
    /* 
     * @access public 
     * @param string $field 
     * @return mixed destintion or false 
     *  
     * upload image from $this->controller->data array and return success 
     * writes upload path into file_path of component 
     */ 
    public function upload_image($field) { 
        if(empty($field) OR $field === '') return false; 
         
        // get Model and field 
        $exploded = explode('.', $field); 
        if(count($exploded) !== 2) return false; 
         
        list($model, $value) = $exploded; 
         
        // Image data had been send? 
        if(array_key_exists($model, $this->controller->request->data) 
            AND array_key_exists($value, $this->controller->request->data[$model]) 
            AND is_array($this->controller->data[$model][$value])) { 
                // get pointer for lighter code 
                $file = &$this->controller->data[$model][$value]; 
                 
                // does php get any upload errors? 
                if(array_key_exists('error', $file) AND $file['error'] === 0) { 
                    /* 
                     * is the size OK? 
                     * (bigger then 0 and smaller then 'upload_max_filesize' in php.ini 
                     */ 
					 $ini_file_size = substr(ini_get('upload_max_filesize'), 0, -1);
					 $file_size = ceil((int)$file['size']/1000000);
                    /*if($file['size'] === 0 
                        OR (string)(ceil((int)$file['size']/1000000) . 'M') > ini_get('upload_max_filesize'))*/
					if($file['size'] === 0 || $file_size > $ini_file_size)  
                            return  false; 
                    // mimetype ok? 
                    elseif(!in_array($file['type'], $this->allowed_mime_types))  
                        return false; 
                    else { 
                        // get extension 
                        $exploded = explode('.', $file['name']); 
                       $this -> extension = $extension = strtolower(end($exploded)); 

                        // extension allowed? 
                        if(in_array($extension, $this->allowed_extensions)) { 
                            // generate extension 
                           /* $destination = $this->save_paths['upload'] .  
                                md5(microtime()) . '.' . $extension; */
							 $destination = $this -> uploadPath . $this -> fileName . '.' . $extension; 
                             
                            // move file from temp to upload directory 
                            move_uploaded_file($file['tmp_name'], $destination); 
                             
                            // all OK? 
                            if(file_exists($destination))
							{ 
                                // write destination to internal file_path variable and return success 
                                $this->uploadPath = $destination; 
								
								//--Check if Thumbnail has to be Generated---
								if(!empty($this -> thumbPath))
								{
									return $this -> generateThumbFile();
								}
								else
								{
                                	return $this -> fileName . '.' . $extension; 
								}
                            } 
                        } 
                        return false; 
                    } 
                } else return false; 
            } 
        return false; 
    } 
     	
	function saveImage($im)
	{
		$quality = "";
		$type = $this -> imageType;
		$filename = $this -> thumbPath . $this -> thumbName . "." . $this -> extension;
		$res = null;
		// ImageGIF is not included into some GD2 releases, so it might not work
		// output png if gifs are not supported
		if(!function_exists('imagegif')) $type = 3;
		
		switch ($type)
		{
			case 1:
				$res = imagegif($im,$filename);
			  break;
			case 2:
				$res = imagejpeg($im,$filename, $this -> imageQuality);
			  break;
			case 3:
			  if (PHP_VERSION >= '5.1.2') {
				// Convert to PNG quality.
				// PNG quality: 0 (best quality, bigger file) to 9 (worst quality, smaller file)
				$this -> imageQuality = 9 - min( round($quality / 10), 9 );
				$res = imagepng($im, $filename, $this -> imageQuality);
			  }
			  else {
				  $res = imagepng($im, $filename);
			  }
			  break;
		}
		return $res;
	}
	
	function ImageCreateFromType($type, $filename)
	{
		$im = null;
		switch ($type)
		{
			case 1:
			 $im = ImageCreateFromGif($filename);
			 break;
			case 2:
			 $im = ImageCreateFromJpeg($filename);
			 break;
			case 3:
			 $im = ImageCreateFromPNG($filename);
			 break;
		}
		return $im;
	}
	
	// generate thumb from image and save it
	function generateThumbFile()
	{
		$fromName = $this -> uploadPath;
		$newWidth = $this -> width;
		$newHeight = $this -> height;
	  	// get source image size (width/height/type)
		// origImgType 1 = GIF, 2 = JPG, 3 = PNG
		list($orig_x, $orig_y, $origImgType, $img_sizes) = @getimagesize($fromName);
		
		// should we override thumb image type?
		$this -> imageType = ($this -> imageType != -1 ? $this -> imageType : $origImgType);
		
		
		if ($orig_x > $newWidth or $orig_y > $newHeight)
		{
			// resize
			$per_x = $orig_x / $newWidth;
			$per_y = $orig_y / $newHeight;
			if ($per_y > $per_x) {
			  $newWidth = $orig_x / $per_y;
			}
			else {
			  $newHeight = $orig_y / $per_x;
			}
		
		}
		else {
			// keep original sizes, i.e. just copy
			//@copy($fromName, $toName);
			return $this -> thumbName . "." . $this -> extension;
		}
		
		if ($this -> imageType == 1) {
		// should use this function for gifs (gifs are palette images)
		$ni = imagecreate($newWidth, $newHeight);
		}
		else {
		// Create a new true color image
		$ni = imagecreatetruecolor($newWidth,$newHeight);
		}
		
		// Fill image with white background (255,255,255)
		$white = imagecolorallocate($ni, 255, 255, 255);
		imagefilledrectangle( $ni, 0, 0, $newWidth, $newHeight, $white);
		// Create a new image from source file
		$im = $this -> ImageCreateFromType($origImgType, $fromName); 
		// Copy the palette from one image to another
		imagepalettecopy($ni,$im);
		// Copy and resize part of an image with resampling
		imagecopyresampled(
		$ni, $im,             // destination, source
		0, 0, 0, 0,           // dstX, dstY, srcX, srcY
		$newWidth, $newHeight,       // dstW, dstH
		$orig_x, $orig_y);    // srcW, srcH
		
		// save thumb file
		$res = $this -> saveImage($ni);
		
		if(isset($temp)) {
			unlink($tmpfname); // this removes the file
		}
		
		if($res) $res = $this -> thumbName . "." . $this -> extension;
		
		return $res;
	}
	
	/** FUNCTION TO CREATE THUMBNAIL DYNAMICALLY---
	*/
	function createThumbnail($fromName, $max_x, $max_y)
	{
		// get source image size (width/height/type)
		// orig_img_type 1 = GIF, 2 = JPG, 3 = PNG
		list($orig_x, $orig_y, $orig_img_type, $img_sizes) = @GetImageSize($fromName);
		
		// should we override thumb image type?
		$imageType = $orig_img_type;
		
		// check for allowed image types
		if ($orig_img_type < 1 or $orig_img_type > 3) die("Image type not supported");
		
		if ($orig_x > $max_x or $orig_y > $max_y) {
			// resize
			$per_x = $orig_x / $max_x;
			$per_y = $orig_y / $max_y;
			if ($per_y > $per_x) {
			  $max_x = $orig_x / $per_y;
			}
			else {
			  $max_y = $orig_y / $per_x;
			}		
		}
		elseif ($orig_x <= $max_x || $orig_y <= $max_y)
		{
			$max_x = $orig_x;
			$max_y = $orig_y;
		}
		
		if ($imageType == 1) {
		// should use this function for gifs (gifs are palette images)
		$ni = imagecreate($max_x, $max_y);
		}
		else {
		// Create a new true color image
		$ni = ImageCreateTrueColor($max_x,$max_y);
		}
		
		// Fill image with white background (255,255,255)
		$white = imagecolorallocate($ni, 255, 255, 255);
		imagefilledrectangle( $ni, 0, 0, $max_x, $max_y, $white);
		// Create a new image from source file
		$im = $this -> ImageCreateFromType($orig_img_type,$fromName); 
		// Copy the palette from one image to another
		imagepalettecopy($ni,$im);
		// Copy and resize part of an image with resampling
		imagecopyresampled(
		$ni, $im,             // destination, source
		0, 0, 0, 0,           // dstX, dstY, srcX, srcY
		$max_x, $max_y,       // dstW, dstH
		$orig_x, $orig_y);    // srcW, srcH
		
		// save thumb file
		$this -> showThumbnail($imageType, $ni);
		
		if($temp) {
		unlink($tmpfname); // this removes the file
		}
	}
	
	function showThumbnail($type, $im)
	{
		$res = null;
		
		// ImageGIF is not included into some GD2 releases, so it might not work
		// output png if gifs are not supported
		if(!function_exists('imagegif')) $type = 3;
		
		switch ($type) {
			case 1:
				header("Content-type: image/gif");
				$res = ImageGIF($im);
			  	break;
			case 2:
				header("Content-type: image/jpeg");
				$res = ImageJPEG($im, NULL, $this -> imageQuality);
			  	break;
			case 3:
			  if (PHP_VERSION >= '5.1.2') {
				// Convert to PNG quality.
				// PNG quality: 0 (best quality, bigger file) to 9 (worst quality, smaller file)
				#$quality = 9 - min( round($quality / 10), 9 );
				  header("Content-type: image/png");
				  $res = ImagePNG($im);
			  }
			  else {
				  header("Content-type: image/png");
				  $res = ImagePNG($im);
			  }
			  break;
		}
		
		die($res);
		
		}
} 
?>