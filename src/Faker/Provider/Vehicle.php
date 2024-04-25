<?php

namespace CarlWhittick\Faker\Provider;

use Faker\Provider\Base;
use Faker\Provider\DateTime;

class Vehicle extends Base
{
    protected static $makesWithModels = [
      'Ford'     => ['Focus', 'Fiesta', 'Mondeo', 'KA'],
      'Vauxhall' => ['Corsa', 'Astra', 'Zafira', 'Vectra'],
      'VW'       => ['Golf', 'Polo', 'Passat', 'Up', 'Tiguan'],
      'BMW'      => ['3 Series', '1 Series', '5 Series', 'X5', 'X3'],
      'Renault'  => ['Clio', 'Megane', 'Scenic', 'Kangoo', 'Laguna'],
      'Peugeot'  => ['206', '207', '307', '107', '308'],
      'Toyota'   => ['Yaris', 'Corolla', 'Avensis', 'Aygo'],
      'Nissan'   => ['Micra', 'Qashqai', 'Note', 'Juke', 'Leaf'],
      'Honda'    => ['Civic', 'Jazz', 'CRV', 'Accord', 'NSX'],
      'Mercedes' => ['C Class', 'E Class', 'A Class', 'SLK', 'CLK'],
      'Audi'     => ['A3', 'A4', 'A6', 'TT', 'A1'],
      'Mini'     => ['Cooper', 'One', 'Countryman', 'First', 'Roadster'],
      'Fiat'     => ['Punto', '500', 'Panda', 'Stilo', 'Barvo'],
      'Citroen'  => ['Xsara', 'C3', 'C4', 'C1', 'Saxo'],
    ];

    protected static $registrationLocal = [
      // Anglia
      'A' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Birmingham
      'B' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
      ],
      // Cymru (Wales)
      'C' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Deeside
      'D' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y'
      ],
      // Essex
      'E' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
      ],
      // Forest and Fens
      'F' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'P', 'R', 'S', 'T', 'V', 'W', 'X',
        'Y',
      ],
      // Garden of England
      'G' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Hampshire and Dorset
      'H' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'X', 'Y', 'W',
      ],
      // Borehamwood and Northampton
      'K' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // London
      'L' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Manchester and Merseyside
      'M' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
        'V', 'W', 'X', 'Y',
      ],
      // North
      'N' => [
        'A', 'B', 'C', 'D', 'E', 'G', 'H', 'J', 'K', 'L',
        'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y',
      ],
      // Oxford
      'O' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
      ],
      // Preston
      'P' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Reading
      'R' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
      ],
      // Scotland
      'S' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Severn Valley
      'V' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
      ],
      // West of England
      'W' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
      // Personal export
      'X' => [
        'A', 'B', 'C', 'D', 'E', 'F',
      ],
      // Yorkshire
      'Y' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y',
      ],
    ];

    protected static $oldRegistrationLocalePrefix = [
      'A' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'B' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'C' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'D' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'E' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'F' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'G' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'H' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'I' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F',
        'H', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'T', 'U', 'W',
        'X', 'Y', 'Z',
      ],
      'J' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'K' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'L' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'M' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'N' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'O' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'P' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'Q' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'J', 'K', 'L', 'M', 'N',
        'P', 'S',
      ],
      'R' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'S' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'T' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'U' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'V' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'W' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'X' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'Y' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F', 'G',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'V', 'W',
        'X', 'Y', 'Z',
      ],
      'Z' => [
        '', 'A', 'B', 'C', 'D', 'E', 'F',
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
        'P', 'R', 'S', 'T', 'U', 'W',
        'X', 'Y', 'Z',
      ],
    ];

    protected static $sequence = [
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
      'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
      'U', 'V', 'W', 'X', 'Y', 'Z',
    ];

    protected static $registrationTypes = [
      'current',
      'military',
      'military_inverse',
      'prefix',
      // 'suffix',
      'diplomatic',
    ];

    public static function vehicleRegistrationLocale(): string
    {
        $local = static::randomElement(array_keys(static::$registrationLocal));
        return $local . static::randomElement(static::$registrationLocal[$local]);
    }

    public static function vehicleRegistrationLocalePrefix(): string
    {
        $local = static::randomElement(array_keys(static::$oldRegistrationLocalePrefix));
        return $local . static::randomElement(static::$oldRegistrationLocalePrefix[$local]);
    }

    public static function vehicleRegistrationAgeId(): string
    {
        $date = DateTime::dateTimeBetween('1 September 2001');
        $age = $date->format('y');
        $month = $date->format('n');
        if ($month < 3 && $month >= 9) {
            $age = $age + 50;
        }

        return $age;
    }

    public function make(): string
    {
        return static::randomElement(array_keys(static::$makesWithModels));
    }

    public function model(string $make = null): string
    {
        return static::randomElement(static::$makesWithModels[$make ?: static::make()]);
    }

    public function registration(string $registrationType = null): string
    {
        if(!$registrationType) {
            $registrationType = static::randomElement(static::$registrationTypes);
        }

        switch ($registrationType) {
            case 'current':
                $locale = static::vehicleRegistrationLocale();
                $age = static::vehicleRegistrationAgeId();
                $sequence = implode(static::randomElements(static::$sequence, 3));

                return "{$locale}{$age} {$sequence}";
                break;
            case 'military':
                return static::bothify('??##??');
                break;
            case 'military_inverse':
                return static::bothify('##??##');
                break;
            case 'diplomatic':
                $letter = static::randomElement(['X', 'D']);
                $country = static::numberBetween(101, 330);
                $usage = static::numberBetween(350, 944);
                return "{$country}{$letter}{$usage}";
                break;
            case 'prefix':
                $validPrefixLetters = [
                  'A', 'B', 'C', 'D', 'E', 'F', 'G',
                  'H', 'J', 'K', 'L', 'M', 'N', 'P',
                  'R', 'S', 'T', 'V', 'W', 'X', 'Y',
                  'Q', // Indeterminate age
                ];
                $prefix = static::randomElement($validPrefixLetters);
                $numbers = static::numberBetween(21, 998);
                $serial = static::randomElement($validPrefixLetters);
                $locale = static::vehicleRegistrationLocalePrefix();


                return "{$prefix}{$numbers} {$serial}{$locale}";
                break;
        }
    }
}
