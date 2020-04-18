<?php

use Illuminate\Database\Seeder;
use App\Brawl;
use App\User;

class BrawlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brawl::truncate();
        User::truncate();

        $user = factory(User::class)->create();

        $brawl = new Brawl;
        $brawl->color = "#ef7a85";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#ff90b3";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#9a348e";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#6665dd";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#e55934";
        $brawl->save();

        
    }
}
