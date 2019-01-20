<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(AdPositionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CollectorsTableSeeder::class);
        $this->call(CollectsTableSeeder::class);
        $this->call(FixturesTableSeeder::class);
        $this->call(LeaguesTableSeeder::class);
        $this->call(LiveMatchesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
