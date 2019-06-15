<?php
$names = [
    ['username' => 'ion',
     'email' => 'ion@mail.com',
     'nickname' => 'Jon', 
     'hobbies' => ['travel', 'reading', 'plants']   
    ],
    ['username' => 'maria',
     'email' => 'maria@mail.com',
     'nickname' => 'Meri',
     'hobbies' => ['driving', 'travel','cats']   
    ],
    ['username' => 'lupu',
     'email' => 'lupu@mail.com',
     'nickname' => 'The_Wolf',
     'hobbies' => ['driving', 'programming','dogs']   
    ],
];

//echo $names[0]['hobbies'][0], '<br>';
//echo '<pre>', var_dump($names), '</pre>';

foreach ($names as $user){
   // var_dump($user);
   echo '<h3>' . $user ['nickname'] . '</h3>'. '<br>';
   foreach ($user['hobbies'] as $hobby){
       echo $hobby, '<br>';
   }
}
