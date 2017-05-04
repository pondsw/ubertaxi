<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::create([
          'name' => 'nathaporn',
          'email' => 'nathaporn.w@ku.th',
          'password' => '$2y$10$QnZul.swNG8x5yWNL66o/.MJ6JDhdM4Cyn51FQSnM3ql53A76wdD2'
        ]);
        App\Promotion::create([
          'name' => 'Ubernight',
          'detail' => 'type code "UBERNIGHT" during 6 p.m. - 5 a.m. to get 50 Baht discount',
          'start_date' => '2017-05-10',
          'exp_date' => '2017-05-24'
        ]);
        App\Promotion::create([
          'name' => 'Happy Halloween',
          'detail' => 'type code "HALLOWEEN" to get 50 Baht discount. This code can use up to 3 times.',
          'start_date' => '2017-08-27',
          'exp_date' => '2017-09-03'
        ]);
        App\Voucher::create([
          'code' => 'axt4qjhb17de',
          'detail' => 'Tesco discount 200 Baht',
          'exp_date' => '2017-12-31',
          'limit_number_of_use' => 1
        ]);
        App\Voucher::create([
          'code' => 'etfg12sdf5dd',
          'detail' => 'Major Cineples discount 100 Baht when purchase 2 tickets',
          'exp_date' => '2017-07-31',
          'limit_number_of_use' => 1
        ]);

        $promotion = App\Promotion::where('name', '=', 'Ubernight')->first();
        if (!is_null($promotion)) {
          $promotion->discount()->save(
            new App\Discount([
              'code' => 'UBERNIGHT',
              'amount' => 50,
              'limit_number_of_use' => 0
            ])
          );
        }

        $promotion = App\Promotion::where('name', '=', 'Happy Halloween')->first();
        if (!is_null($promotion)) {
          $promotion->discount()->save(
            new App\Discount([
              'code' => 'HALLOWEEN',
              'amount' => 50,
              'limit_number_of_use' => 3
            ])
          );
        }

        $user = App\User::first();
        $voucher1 = App\Voucher::where('code', '=', 'axt4qjhb17de')->first();
        $voucher2 = App\Voucher::where('code', '=', 'etfg12sdf5dd')->first();
        if (!is_null($user)) {
          App\Owned_voucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher1->id
          ]);
          App\Owned_voucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher2->id
          ]);
        }




        // $singer = App\Singer::where('name', '=', 'Maroon 5')->first();
        // if (!is_null($singer)) {
        //     $singer->albums()->saveMany([
        //         new App\Album(['name' => 'Songs About Jane']),
        //         new App\Album(['name' => "It Won't Be Soon Before Long"]),
        //         new App\Album(['name' => 'The B-Side Collection']),
        //         new App\Album(['name' => 'Hands All Over']),
        //         new App\Album(['name' => 'Overexposed']),
        //         new App\Album(['name' => 'V'])
        //     ]);
        //
        //     $album = App\Album::where('name', '=', 'Songs About Jane')->first();
        //     $album->songs()->saveMany([
        //         new App\Song([
        //             'name' => "This Love",
        //             'lyric' => "Lyric ... (This Love)"
        //         ]),
        //         new App\Song([
        //             'name' => 'She Will Be Loved',
        //             'lyric' => 'Lyric ... (She Will Be Loved)'
        //         ]),
        //         new App\Song([
        //             'name' => "Not Coming Home",
        //             'lyric' => "Lyric ... (Not Coming Home)"
        //         ]),
        //     ]);
        //
        //     $album = App\Album::where('name', '=' , 'Hands All Over')->first();
        //     $album->songs()->saveMany([
        //         new App\Song([
        //             'name' => "If I Ain't Got You",
        //             'lyric' => "Lyric ... (If I Ain't Got You)"
        //         ]),
        //         new App\Song([
        //             'name' => 'Runaway',
        //             'lyric' => 'Lyric ... (Runaway)'
        //         ]),
        //         new App\Song([
        //             'name' => "Don't Know Nothing",
        //             'lyric' => "Lyric ... (Don't Know Nothing)"
        //         ]),
        //     ]);
        // }

    }
}
