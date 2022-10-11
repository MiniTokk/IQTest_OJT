<?php

namespace Database\Seeders;

use App\Models\IqTest;
use Illuminate\Database\Seeder;

class IqTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iq_tests=[
            new IqTest(
                  [
                    'id' => 1,
                    'title' => 'Session1' ,
                    'status' => null
                    ]
                ),

                new IqTest(
                    [
                        'id' => 2,
                        'title' => 'Session2' ,
                        'status' => null
                    ]
                ),

                    new IqTest(
                        [
                            'id' => 3,
                            'title' => 'Session3' ,
                            'status' => null
                        ]
                ),

            ];

            foreach ($iq_tests as $iq_test){
                $iq_test->save();
            }

            $session1 = IqTest::find(1);
            $session2 = IqTest::find(2);
            $session3 = IqTest::find(3);

            //Start Session1

            $session1->addChild(
                $session1Q1 = new IqTest(
                    [
                        'title' => '4, 6, 9, 6, 14, 6, ?'
                    ]
                )
            );

            $session1->addChild(
                $session1Q2 = new IqTest(
                    [
                        'title' => '13, 17, 19, 23, 29, ?'
                    ]
                )
            );

            $session1->addChild(
                $session1Q3 = new IqTest(
                    [
                        'title' => '2, 3, 6, 11, 18, 27, ?'
                    ]
                )
            );

            $session1Q1->addChild(
                new IqTest(
                    [
                        'title' => '14',
                        'status' => 0
                    ]
                )
            );  

            $session1Q1->addChild(
                new IqTest(
                    [
                        'title' => '19',
                        'status' => 1
                    ]
                )
            );  

            $session1Q1->addChild(
                new IqTest(
                    [
                        'title' => '9',
                        'status' => 0
                    ]
                )
            );  

            $session1Q2->addChild(
                new IqTest(
                    [
                        'title' => '31',
                        'status' => 1
                    ]
                )
            );  

            $session1Q2->addChild(
                new IqTest(
                    [
                        'title' => '33',
                        'status' => 0
                    ]
                )
            );  

            $session1Q2->addChild(
                new IqTest(
                    [
                        'title' => '30',
                        'status' => 0
                    ]
                )
            );  

            $session1Q3->addChild(
                new IqTest(
                    [
                        'title' => '28',
                        'status' => 0
                    ]
                )
            );  

            $session1Q3->addChild(
                new IqTest(
                    [
                        'title' => '21',
                        'status' => 0
                    ]
                )
            );  

            $session1Q3->addChild(
                new IqTest(
                    [
                        'title' => '38',
                        'status' => 1
                    ]
                )
            );  
            //End Session1

            //Start Session 2
            $session2->addChild(
                $session2Q1 = new IqTest(
                    [
                        'title' => 'Which day is three days before the day immediately following the day two days before the day three days after the day immediately before Friday?'
                    ]
                )
            );

            $session2->addChild(
                $session2Q2 = new IqTest(
                    [
                        'title' => 'What is the name given to a group of HORSES?'
                    ]
                )
            );

            $session2->addChild(
                $session2Q3 = new IqTest(
                    [
                        'title' => 'What is a GOOGOL ?'
                    ]
                )
            );

            $session2Q1->addChild(
                new IqTest(
                    [
                        'title' => 'Tuesday ',
                        'status' => 0
                    ]
                )
            );  

            $session2Q1->addChild(
                new IqTest(
                    [
                        'title' => 'Wednesday ',
                        'status' => 1
                    ]
                )
            );  

            $session2Q1->addChild(
                new IqTest(
                    [
                        'title' => 'Sunday',
                        'status' => 0
                    ]
                )
            );  

            $session2Q2->addChild(
                new IqTest(
                    [
                        'title' => 'rush',
                        'status' => 0
                    ]
                )
            );  

            $session2Q2->addChild(
                new IqTest(
                    [
                        'title' => 'harras ',
                        'status' => 1
                    ]
                )
            );  

            $session2Q2->addChild(
                new IqTest(
                    [
                        'title' => 'husk ',
                        'status' => 0
                    ]
                )
            );  

            $session2Q3->addChild(
                new IqTest(
                    [
                        'title' => 'an albatross',
                        'status' => 0
                    ]
                )
            );  

            $session2Q3->addChild(
                new IqTest(
                    [
                        'title' => 'a folk dance',
                        'status' => 0
                    ]
                )
            );  

            $session2Q3->addChild(
                new IqTest(
                    [
                        'title' => 'a mathematical term',
                        'status' => 1
                    ]
                )
            );  
            //End Session2

            //Start Session3
            $session3->addChild(
                $session3Q1 = new IqTest(
                    [
                        'title' => 'A car travels at a speed of 40 mph over a certain distance and then returns over the same distance at a speed of 60 mph. What is the average speed for the total journey?'
                    ]
                )
            );

            $session3->addChild(
                $session3Q2 = new IqTest(
                    [
                        'title' => ' There is a lake on the surface of which water lilies float. The number of lilies doubles daily. If it takes 48 days to completely occupy the entire area of the lake, how many days will it take to occupy the floor of the lake?'
                    ]
                )
            );

            $session3->addChild(
                $session3Q3 = new IqTest(
                    [
                        'title' => 'There are 5 machines that make 5 parts in 5 minutes. How long does it take to make 100 parts on 100 machines?'
                     ]
                )
            );

            $session3Q1->addChild(
                new IqTest(
                    [
                        'title' => '48 mph',
                        'status' => 1
                    ]
                )
            );  

            $session3Q1->addChild(
                new IqTest(
                    [
                        'title' => '40mph ',
                        'status' => 0
                    ]
                )
            );  

            $session3Q1->addChild(
                new IqTest(
                    [
                        'title' => '60mph',
                        'status' => 0
                    ]
                )
            );  

            $session3Q2->addChild(
                new IqTest(
                    [
                        'title' => '48',
                        'status' => 1
                    ]
                )
            );  

            $session3Q2->addChild(
                new IqTest(
                    [
                        'title' => '40',
                        'status' => 0
                    ]
                )
            );  

            $session3Q2->addChild(
                new IqTest(
                    [
                        'title' => '30 ',
                        'status' => 0
                    ]
                )
            );  

            $session3Q3->addChild(
                new IqTest(
                    [
                        'title' => '15',
                        'status' => 0
                    ]
                )
            );  

            $session3Q3->addChild(
                new IqTest(
                    [
                        'title' => '10',
                        'status' => 0
                    ]
                )
            );  

            $session3Q3->addChild(
                new IqTest(
                    [
                        'title' => '5',
                        'status' => 1
                    ]
                )
            );
            //End of Session3


    }
}
