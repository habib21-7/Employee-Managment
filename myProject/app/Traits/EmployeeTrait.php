<?php
namespace App\Traits;


Trait EmployeeTrait
{
     function saveImage($photo,$folder): string
    {
        $file_extension =  $photo ->  getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_name);

        return $file_name;
    }
}
