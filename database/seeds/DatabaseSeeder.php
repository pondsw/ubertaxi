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
          'password' => '$2y$10$QnZul.swNG8x5yWNL66o/.MJ6JDhdM4Cyn51FQSnM3ql53A76wdD2',
          'type' => 'user',
          'point' => 220,
          'avatar' => '1494249683.jpg'
        ]);
        App\User::create([
          'name' => 'Sitthdiech Phongsamsaun',
          'email' => 'sitthidech.p@ku.th',
          'password' => '$2y$10$LKRBwZ5CS5qWlNkbgLyeRODiUv2I0VuLeh/0rnAhHkAO4Oa2Ib/xe',
          'type' => 'admin',
          'point' => 20
        ]);
        App\User::create([
          'name' => 'Pondsw',
          'email' => 'pungpond_zaa16@hotmail.com',
          'password' => '$2y$10$LKRBwZ5CS5qWlNkbgLyeRODiUv2I0VuLeh/0rnAhHkAO4Oa2Ib/xe',
          'type' => 'user',
          'point' => 300
        ]);
        App\Promotion::create([
          'name' => 'Chinese New Year',
          'detail' => 'type code "CHINA" to get 50 Baht discount. This code can use unlimited times until 28 Feb. 2017',
          'start_date' => '2017-02-01',
          'exp_date' => '2017-02-28',
          'image_path' => '{path}'
        ]);
        App\Promotion::create([
          'name' => 'Happy Halloween',
          'detail' => 'type code "HALLOWEEN" to get 50 Baht discount. This code can use up to 3 times.',
          'start_date' => '2017-08-27',
          'exp_date' => '2017-09-03',
          'image_path' => '{path}'
        ]);
        App\Voucher::create([
          'point' => 200,
          'detail' => 'Tesco discount 200 Baht',
          'exp_date' => '2017-12-31',
          'limit_number_of_use' => 1,
          'image_path' => '{path}'
        ]);
        App\Voucher::create([
          'point' => 350,
          'detail' => 'Major Cineples discount 100 Baht when purchase 2 tickets',
          'exp_date' => '2017-07-31',
          'limit_number_of_use' => 1,
          'image_path' => '{path}'
        ]);

        $promotion = App\Promotion::where('name', '=', 'Chinese New Year')->first();
        if (!is_null($promotion)) {
          $promotion->discount()->save(
            new App\Discount([
              'code' => 'CHINA',
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
        $voucher1 = App\Voucher::find(1);
        $voucher2 = App\Voucher::find(2);
        if (!is_null($user)) {
          App\Owned_voucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher1->id,
            'code' => 'axt4qjhb17de'
          ]);
          App\Owned_voucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher1->id,
            'code' => 'mgdt7k6lbskt'
          ]);
          App\Owned_voucher::create([
            'user_id' => $user->id,
            'voucher_id' => $voucher2->id,
            'code' => 'etfg12sdf5dd'
          ]);
        }

      App\Redeemed_voucher::create([
        'user_id' => 1,
        'code' => 'axt4qjhb17de',
        'voucher_id' => 1,
        'redeem_date' => '2017-05-01'
      ]);




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
