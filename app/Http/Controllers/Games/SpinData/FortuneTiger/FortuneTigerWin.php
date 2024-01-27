<?php

namespace App\Http\Controllers\Games\SpinData\FortuneTiger;

class FortuneTigerWin
{
    /**
     * @return array
     */
    public static function getWin(): array
    {
        return [
            [
                [
                    "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_1",  "Symbol_0", "Symbol_6", "Symbol_1", "Symbol_0", "Symbol_6"
                ],
                [1, 5, 9],
                [
                    [
                        "index" => 4,
                        "test" => "case 1",
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 4,
                        "multiply" => 0,
                        "win_amount" => 0.8,
                        "active_icon" => [
                            1,
                            5,
                            9
                        ]
                    ]
                ], [], 2, 3
            ],
            [
                [
                    "Symbol_3",
                    "Symbol_0",
                    "Symbol_4",
                    "Symbol_3",
                    "Symbol_0",
                    "Symbol_4",
                    "Symbol_4",
                    "Symbol_0",
                    "Symbol_5"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_4",
                        "test" => "case 2",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 8,
                        "multiply" => 0,
                        "win_amount" => 1.6, //Show 6 which is wrong
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                2,
                8
            ],
            [
                [
                    "Symbol_2", "Symbol_4", "Symbol_5", "Symbol_2", "Symbol_1", "Symbol_4", "Symbol_3", "Symbol_3", "Symbol_3"
                ],
                [7, 8, 9],
                [
                    [
                        "index" => 3,
                        "name" => "Symbol_3",
                        "test" => "case 3",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 10,
                        "multiply" => 0,
                        "win_amount" => 2,
                        "active_icon" => [
                            7,
                            8,
                            9
                        ]
                    ]
                ],
                [],
                2,
                10
            ],
            [
                [
                    "Symbol_3", "Symbol_3", "Symbol_3", "Symbol_6", "Symbol_5", "Symbol_2", "Symbol_4", "Symbol_4", "Symbol_1"
                ],
                [1, 2, 3],
                [
                    [
                        "index" => 2,
                        "name" => "Symbol_3",
                        "test" => "case 4",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 10,
                        "multiply" => 0,
                        "win_amount" => 4,
                        "active_icon" => [
                            1,
                            2,
                            3
                        ]
                    ]
                ],
                [],
                2,
                10
            ],
            [
                [
                    "Symbol_2", "Symbol_5", "Symbol_0", "Symbol_5", "Symbol_0", "Symbol_4", "Symbol_2", "Symbol_4", "Symbol_3"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_2",
                        "test" => "case 5",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 25,
                        "multiply" => 0,
                        "win_amount" => 5, //changed from 4
                        "active_icon" => [
                            3,
                            5,
                            7
                        ]
                    ]
                ],
                [],
                2,
                25
            ],
            [
                [
                    "Symbol_2", "Symbol_4", "Symbol_6", "Symbol_2", "Symbol_6", "Symbol_6", "Symbol_6", "Symbol_0", "Symbol_2"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_6",
                        "test" => "case 6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 3,
                        "multiply" => 0,
                        "win_amount" => 0.6,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                2,
                3
            ],
            [
                [
                    "Symbol_2", "Symbol_2", "Symbol_4", "Symbol_2", "Symbol_0", "Symbol_4", "Symbol_3", "Symbol_3", "Symbol_3"
                ],
                [7, 8, 9],
                [
                    [
                        "index" => 3,
                        "name" => "Symbol_3",
                        "test" => "case 7",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 10,
                        "multiply" => 0,
                        "win_amount" => 2,
                        "active_icon" => [
                            7,
                            8,
                            9
                        ]
                    ]
                ],
                [],
                2,
                10
            ],
            [
                [
                    "Symbol_3", "Symbol_4", "Symbol_2", "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_2", "Symbol_2", "Symbol_4"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_2",
                        "test" => "case 8",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 50,
                        "multiply" => 0,
                        "win_amount" => 9,
                        "active_icon" => [
                            3,
                            5,
                            7
                        ]
                    ]
                ],
                [],
                6,
                50
            ],
            [
                [
                    "Symbol_2", "Symbol_2", "Symbol_2", "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_2", "Symbol_2", "Symbol_4"
                ],
                [1,2, 7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_2",
                        "test" => "case 8",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 25,
                        "multiply" => 0,
                        "win_amount" => 9,
                        "active_icon" => [
                            1,
                            2,
                            3,
                            5,
                            7
                        ]
                    ]
                ],
                [],
                6,
                25
            ],
            [
                [
                    "Symbol_2", "Symbol_6", "Symbol_2", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_4", "Symbol_2"
                ],
                [4, 5, 6],
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_5",
                        "test" => "case 9",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 5,
                        "multiply" => 0,
                        "win_amount" => 1,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ],
                [],
                0,
                5
            ],
            //SUPERMEGAWIN 1:50
            [
                [
                    "Symbol_0", "Symbol_0", "Symbol_3", "Symbol_4", "Symbol_0", "Symbol_5", "Symbol_6", "Symbol_1", "Symbol_0"
                ],
                [1, 5, 9],
                [
                    [
                        "index" => 4,
                        "name" => "Symbol_2",
                        "test" => "case 10",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 250,
                        "multiply" => 0,
                        "win_amount" => 50,
                        "active_icon" => [
                            1,
                            5,
                            9
                        ]
                    ]
                ],
                [],
                0,
                250
            ],
            //SUPERMEGAWIN 1:50
            [
                [
                    "Symbol_0", "Symbol_0", "Symbol_3", "Symbol_4", "Symbol_0", "Symbol_5", "Symbol_6", "Symbol_1", "Symbol_0"
                ],
                [1, 5, 9],
                [
                    [
                        "index" => 4,
                        "name" => "Symbol_2",
                        "test" => "case 11",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 250,
                        "multiply" => 0,
                        "win_amount" => 50,
                        "active_icon" => [
                            1,
                            5,
                            9
                        ]
                    ]
                ],
                [],
                0,
                250
            ],
            [
                [
                    "Symbol_2", "Symbol_2", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_2", "Symbol_5", "Symbol_1", "Symbol_5"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_5",
                        "test" => "case 12",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 5,
                        "multiply" => 0,
                        "win_amount" => 1,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                0,
                5
            ],
            [
                [
                    "Symbol_3", "Symbol_0", "Symbol_2", "Symbol_3", "Symbol_0", "Symbol_3", "Symbol_5", "Symbol_4", "Symbol_5"
                ],
                [4, 5, 6],
                //SUPERWIN 1:20
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_3",
                        "test" => "case 13",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 10,
                        "multiply" => 0,
                        "win_amount" => 50,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ],
                [],
                0,
                10
            ],
            [
                [
                    "Symbol_4", "Symbol_3", "Symbol_1", "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_1", "Symbol_2", "Symbol_5"
                ],
                [7, 5, 3],
                //SUPERMEGAWIN 1:20 diferente
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_3",
                        "test" => "case 14",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 100,
                        "multiply" => 0,
                        "win_amount" => 20,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                0,
                100
            ],
        ];
    }
}
