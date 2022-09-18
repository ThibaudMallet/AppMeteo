<?php
namespace App\Model;

class Weather
{
    /**
     * Retourne le tableau de prévisions
     * 
     * @return array Le tableau de prévisions
     */
    public static function getWeatherData(): array
    {
        return self::$weatherData;
    }

    /**
     * Retourne une prévision selon son id
     * 
     * @param int $index L'index de la prévision
     * 
     * @return null|array Null si non trouvé ou les infos de la prévision demandée
     */
    public static function getWeatherByCityIndex(int $index): ?array
    {
        if (!isset(self::$weatherData[$index])) {
            return null;
        }

        return self::$weatherData[$index];
    }

    /**
     * @var [][] Tableau de tableau des prévisions
     */
    private static $weatherData = [
        [
            'city' => 'Annecy',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => -4,
            'max' => 2,
        ],

        [
            'city' => 'Biarritz',
            'weather' => 'rain',
            'date' => '29-01-2020',
            'min' => -5,
            'max' => 0,
        ],

        [
            'city' => 'Bordeaux',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => 0,
            'max' => 10,
        ],

        [
            'city' => 'Bruxelles',
            'weather' => 'storm',
            'date' => '29-01-2020',
            'min' => -3,
            'max' => 5,
        ],

        [
            'city' => 'Chambéry',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => -2,
            'max' => 6,
        ],

        [
            'city' => 'Grenoble',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => -3,
            'max' => 3,
        ],

        [
            'city' => 'Lille',
            'weather' => 'clouds',
            'date' => '29-01-2020',
            'min' => 1,
            'max' => 7,
        ],

        [
            'city' => 'Lyon',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 12,
        ],

        [
            'city' => 'Marseille',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => -5,
            'max' => 5,
        ],

        [
            'city' => 'Metz',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => 2,
            'max' => 7,
        ],

        [
            'city' => 'Montpellier',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => 3,
            'max' => 11,
        ],

        [
            'city' => 'Nantes',
            'weather' => 'sun-cloud',
            'date' => '29-01-2020',
            'min' => 0,
            'max' => 6,
        ],

        [
            'city' => 'Nice',
            'weather' => 'snow',
            'date' => '29-01-2020',
            'min' => -3,
            'max' => 3,
        ],

        [
            'city' => 'Paris',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => 2,
            'max' => 11,
        ],

        [
            'city' => 'Rouen',
            'weather' => 'sun',
            'date' => '29-01-2020',
            'min' => 0,
            'max' => 8,
        ],

        [
            'city' => 'Toulouse',
            'weather' => 'shower',
            'date' => '29-01-2020',
            'min' => 1,
            'max' => 9,
        ],
    ];
}
