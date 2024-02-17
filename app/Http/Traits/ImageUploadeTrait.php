<?php

namespace App\Http\Traits;

trait ImageUploadeTrait {
  public function imageUpload($fileName,$directory) {
    $genrateFileName = time().'_'.$fileName->getClientOriginalName();
    $filePath =  $fileName->move(public_path($directory), $genrateFileName);
    return $genrateFileName;
  }
}