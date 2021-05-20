<?php

namespace App\Repositories\Commons;


use Illuminate\Support\Carbon;

class Tools
{
    public static function getDaysWeek() : array
    {
        $weekMap = [
            '0' => 'Domingo',
            '1' => 'Lunes',
            '2' => 'Martes',
            '3' => 'Miercoles',
            '4' => 'Jueves',
            '5' => 'Viernes',
            '6' => 'Sabados',
        ];
        return $weekMap;
    }

    public static function getDayStr(int $day) : string
    {
        $days = $this->getDaysWeek();
        return $days[$day];
    }

    public static function getDayInt(string $date) : int
    {
        $newDate =Carbon::parse($date)->toDateTimeString();
        return (INT) $newDate->dayOfWeek;
    }

    public static function getAge(string $date) : int
    {
        $birthdate =Carbon::parse($date)->toDateTimeString();
        $current = Carbon::now();
        return (INT) $current->diffForHumans($birthdate);
    }

    public static function getMenu($role) : array
    {
        switch ($role){
            case "ADMINISTRADOR":
                return [
                    [
                        'name' => 'Administración',
                        'icon' => 'fas fa-cog',
                        'pages' => [
                            [
                                'name' => 'Usuarios',
                                'url' => '/user'
                            ],
                            [
                                'name' => 'Vehiculos',
                                'url' => '/vehicles'
                            ],
                            [
                                'name' => 'Lineas',
                                'url' => '/lines'
                            ],
                            [
                                'name' => 'Relojes',
                                'url' => '/clocks'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Gestión',
                        'icon' => 'fas fa-calendar',
                        'pages' => [
                            [
                                'name' => 'Docentes',
                                'url' => '/teacher'
                            ],
                            [
                                'name' => 'Estudiantes',
                                'url' => '/student'
                            ],
                            [
                                'name' => 'Gestiones',
                                'url' => '/schoolyear'
                            ],
                            [
                                'name' => 'Matriculacion',
                                'url' => '/registration'
                            ],
                            [
                                'name' => 'Horarios',
                                'url' => '/schedule'
                            ],
                        ]
                    ]
                ];
                break;
            case "CONTROL":
                return [
                    [
                        'name' => 'Gestión',
                        'icon' => 'fas fa-suitcase-rolling',
                        'pages' => [
                            [
                                'name' => 'Programaciones',
                                'url' => '/schedules'
                            ],
                            [
                                'name' => 'Marcaciones',
                                'url' => '/markings'
                            ],
                            [
                                'name' => 'Sanciones',
                                'url' => '/sanctions'
                            ],
                        ]
                    ],
                    [
                        'name' => 'Reportes',
                        'icon' => 'fas fa-file',
                        'pages' => [

                            [
                                'name' => 'Tarjetas',
                                'url' => '/reportcards'
                            ],
                            [
                                'name' => 'Atrasos',
                                'url' => '/reportdelayeds'
                            ],
                            [
                                'name' => 'Sanciones',
                                'url' => '/reportsanctions'
                            ],
                        ]
                    ]
                ];
                break;

            default:
                return [];
        }

    }

}
