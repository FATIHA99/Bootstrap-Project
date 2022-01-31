
<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__ . '/student.json'), true); 
}

//  recherch by id 
function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function updateUser($data,$id)
{
    $updateUser=[];
    $student=getUsers();
    foreach($student as $i => $user)
    {
         if($user['id']==$id)
         {
             $student[$i]=$updateUser=array_merge($user,$data);
            
         }
         putJson($student);
         return $updateUser;
    }
}



 function putJson($users)
{
    file_put_contents(__DIR__ .'/functions.json', json_encode($student, JSON_PRETTY_PRINT));
}


 //image 
 function uploadImage($file, $user)
 {
     if (isset($_FILES['picture']) && $_FILES['picture']['name']) {
           
         if (!is_dir(__DIR__ . "/images")) {   // si cette direction il existe ou non 
 
             mkdir(__DIR__ . "/images");  //creation diroctory 
         }
 
         // Get the file extension from the filename
         $fileName = $file['name'];
         // Search for the dot in the filename
         $dotPosition = strpos($fileName, '.');
         // Take the substring from the dot position till the end of the string
         $extension = substr($fileName, $dotPosition + 1);
 
         move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user['id']}.$extension");
 
         $user['extension'] = $extension;
         updateUser($user, $user['id']);
     }
 }


?>