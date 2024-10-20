<?php
namespace App\Services;

class ImageUploader{

    public $uploadFileDir = 'public/uploads/';

    public array $errors = [];
    public $fileName;
    public $fileSize;
    public $fileType;
    public $fileTmpPath;
    public $fileExtention;
    public $inputName;
   
    // public function __construct($uploadFileDir)
    // {
        
    //     // $this->fileName = $_FILES['avatar']['name'] ;
    //     // $this->fileSize = $_FILES['avatar']['size'] ;
    //     // $this->fileType = $_FILES['avatar']['type'] ;
    //     // $this->fileTmpPath = $_FILES['avatar']['tmp_name'] ;
    //     // $this->fileExtention = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
    //     // $this->uploadFileDir = 'public/upload/';

    // }
    public function getFile(string $inputName){
    
        $this->inputName = $inputName;
        $this->fileName = $_FILES[$inputName]['name'] ;
        $this->fileSize = $_FILES[$inputName]['size'] ;
        $this->fileType = $_FILES[$inputName]['type'] ;
        $this->fileTmpPath = $_FILES[$inputName]['tmp_name'] ;
        $this->fileExtention = strtolower(pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION));
      
        return $this;      
    }

    public function withExt(array $allowedFileExt){
     
    $fileExtention = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));

        if(!in_array($fileExtention,$allowedFileExt)){
            
               $this->errors = $this->errors + ['Please upload the image with correct extension'];             
            
        }
        return $this;

    }

    public function upload(){
     
        $newFileName = md5(time().$this->fileName).'.'.$this->fileExtention;
        $destPath = $this->uploadFileDir.$newFileName;
        if(!move_uploaded_file($this->fileTmpPath, $destPath )){
            $this->errors = $this->errors + ['unfortunately the file didn\'t uploaded'];
        } 
        $data = $this->uploadFileDir.$this->fileName;
        $_SESSION['avatar'] = $data;

        return $data;
     
    }
  
}