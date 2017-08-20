<?php

//comment
// users
$users = [];
  $users['Names'] = ['males' => ['John', 'Jim', 'Aleks', 'Barak'],
                     'females' => ['Marry', 'Helen', 'Kate', 'Ann']];
  $users['Surnames'] = ['Smith', 'Tramp', 'Adams', 'Black'];
  $users['Gender'] = ['mr', 'mrs'];

// cars
$cars = [];
    $cars ['Mersedes'] = ['SLS' => ['color' => 'red', 'year' => '1998'],
                          'CLS' => ['color' => 'black', 'year' => '2001']];
    $cars ['BMW'] = ['M3' => ['color' => 'yellow', 'year' => '2014'],
                     'M5' => ['color' => 'silver', 'year' => '2012']];
    $cars ['Opel'] = ['Omega' => ['color' => 'pink', 'year' => '2011'],
                      'Astra' => ['color' => 'green', 'year' => '2002']];

//garage
$garage = [
      'Kharkiv' => ['metal' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ],
                 'bricks' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ]
      ],
      'Kiev' =>  ['metal' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ],
                'bricks' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ]
      ],
      'Poltava' => ['metal' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ],
                 'bricks' => [
                    ['color' => 'grey', 'parking' => 6, 'width' => 7500, 'height' => 2500, 'length' => 15000 ],
                    ['color' => 'yellow', 'parking' => 4, 'width' => 10500, 'height' => 2500, 'length' => 13000 ],
                    ['color' => 'black', 'parking' => 3, 'width' => 7500, 'height' => 2500, 'length' => 10000 ]
                   ]
      ]
    ];
function owner($users){
  $gender = array_rand(array_flip($users['Gender']));
  if ($gender == 'mr') {
     $names = array_rand(array_flip($users['Names']['males']));
   } else $names = array_rand(array_flip($users['Names']['females']));
   $surnames = array_rand(array_flip($users['Surnames']));

  return 'Dear  ' . $gender. ' '. $names . ' ' . $surnames . '!';
}


function randGarage($array) {
  $arr = [];
  $city = array_rand($array); //city
  $arr[] =$city;
  $build = array_rand($array[$city]);
  $arr[] = $build;
  $rand_build = array_rand($array[$city][$build]);//color
  $arr[] = $array[$city][$build][$rand_build];
  return $arr;
};

function garageText($array) {
  $characteristics = [];
  $otherdescr = '';
  foreach($array[2] as $key => $value) {
    $characteristics[] = '<p>' . $key . " - " . $value . "</p>";

  }
  if(isset($array[2]['width']) && isset($array[2]['height']) && isset($array[2]['length'])) {
    $width = mmTometer($array[2]['width']);
    $length = mmTometer($array[2]['length']);
    $height = mmTometer($array[2]['height']);
    $square = $width * $length;
    $volume = $square * $height;
    $otherdescr = "<p>Square - " . $square . " square meters</p><p>Volume - " . $volume . " cubic meters</p>";

  }
  $description = implode("\n", $characteristics);
  $text = "<h4>Your garage in " . $array[0] . " consist of " . $array[1] . "</h4>" . "<h4>Other garage features: ". "</h4><p>" . $description . "</p><p>" . $otherdescr . "</p>";
    return $text;
}
function mmTometer($int) {
  $int = $int / 1000;
  return $int;
}

function convertYear($num = false)
  {
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(strlen($num) > 4) {
        echo "Please enter correct year";
        exit;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand');
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    return implode(' ', $words);
  }
//this function converts the numerous year in word-year))

function cars($cars)
  {
    $mark = array_rand($cars);
    $model = array_rand($cars[$mark]);
    $year = $cars[$mark][$model]['year'];
    return $mark." ".$model.", production year is ".convertYear($year);
  }

function input($users, $cars, $garage) {

  $count_garage = rand(1, 5);

  echo "<p>" . $users .' You have ' . $count_garage . ' garages: </p>';
  for ($i=1; $i <= $count_garage ; $i++) {
    $rand_garage = randGarage($garage);
    echo "<p>".garageText($rand_garage)."</p>";
      $parking_count = $rand_garage[2]['parking'];
        $count_car = rand(1, $parking_count);
        echo '<h4>In this garage you have next cars: </h4>';
    for ($j=1; $j <= $parking_count; $j++){
      if ($j > $count_car) {
        echo '<p>#' . $j. ' no car at this place '."</p>";
      } else {
          echo '<p>#'.$j.' car: '.cars($cars)."</p>";
      }
    }
  }
}

