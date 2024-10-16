<?php

namespace Database\Seeders;
use App\Models\Character;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Character::factory(20)->create();

        User::factory()->create([            
            'name' => 'Nolan',            
            'email' => 'soulardnolan@gmail',            
            'password' => Hash::make('123456789'),        
        ]);        
        User::factory()->create([            
            'name' => 'Equinox',            
            'email' => 'equinoxnono@gmail.com',            
            'password' => Hash::make('123456789'),        
        ]);

        // $c = new Character ;
        // $c->price = 54.99 ;
        // $c->label = 'tomioka';
        // $c ->desc = "pilier de l'eau"  ;
        // $c ->birth_date = '2001-08-20'  ;
        // $c ->image_path = 'https://static.wikia.nocookie.net/kimetsu-no-yaiba/images/5/55/Water_Breathing_%28Zenshuchuten%29-1-.png/revision/latest?cb=2020
        // 0618200015&path-prefix=fr'  ;     
        // $c -> save() ;

        // $c = new Character ;
        // $c->price = 15.99  ;
        // $c->label = 'tanjiro' ;
        // $c ->desc = 'trop fort' ;
        // $c ->birth_date = '1996-03-27' ;
        // $c ->image_path = 'https://demon-slayer.fr/wp-content/uploads/2022/07/zenitsu-demon-slayer-png.png' ;                                            
        // $c -> save() ;

        // $c = new Character ;
        // $c->price = 20.99  ;
        // $c->label = 'zenitsu' ;
        // $c ->desc = 'electrecite' ;
        // $c ->birth_date = '2001-11-07' ;
        // $c ->image_path = 'https://demon-slayer.fr/wp-content/uploads/2022/07/zenitsu-demon-slayer-png.png' ;
        // $c -> save() ;



         // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

