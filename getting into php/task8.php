<?php

$total_array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
print("Array to declare:\n");
foreach( $total_array as $num ) {
    foreach( $num as $value ) {
        print($value." ");
    }
    print("\n");
}

print("Numbers:\n");

for( $i = 3; $i >= 1; $i-- )
   {
    for( $j = 1; $j <= $i; $j++ )
    {
        print($j." ");
    }
    print("\n");
   }

   print("Letters:\n");
   $word='A';
   
   for( $i = 0; $i < 3; $i++ )
      {
       for( $j = 0; $j <= $i; $j++ )
       {
           print($word++." ");
       }
       print("\n");
      }