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
        $brawl->image = "https://i.pinimg.com/originals/ce/13/44/ce1344f680b300e3fd18d35a5dd2ad2b.png";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#ff90b3";
        $brawl->image = "https://i.pinimg.com/originals/1b/fd/29/1bfd29c17435ff43754e91205c0df392.png";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#9a348e";
        $brawl->image = "https://eselcine.com/wp-content/uploads/2015/04/goku.png";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#6665dd";
        $brawl->image = "https://i0.pngocean.com/files/158/456/995/sonic-the-hedgehog-s-gameworld-sonic-crackers-sonic-runners-sonic-classic-collection-cartoon-hedgehog.jpg";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#e55934";
        $brawl->image = "https://i.pinimg.com/originals/a9/d5/a2/a9d5a2d95886ceff79335eefa5206d1e.png";
        $brawl->save();

        $brawl = new Brawl;
        $brawl->color = "#29bf12";
        $brawl->image = "https://vignette.wikia.nocookie.net/videojuego/images/6/62/P%C3%A1jaro_Loco.jpg/revision/latest?cb=20171008082209";
        $brawl->save();

        
    }
}
