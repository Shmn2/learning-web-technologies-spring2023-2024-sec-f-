<?php

print("Stars:\n");
for( $i = 0; $i < 3; $i++ )
    {
        for( $j = 0; $j <=$i; $j++ )
        {
            print("*");
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