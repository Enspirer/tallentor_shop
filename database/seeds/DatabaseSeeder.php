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
        $this->call(UsersTableSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(AppSettingsSeeder::class);
        $this->call(AttributesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(BusinessSettingsSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(GeneralSettingsSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(PoliciesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(SeoSettingsSeeder::class);
        $this->call(OauthAccessTokensSeeder::class);
        $this->call(OauthClientsSeeder::class);
        $this->call(OauthPersonalAccessClientsSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(AuthorsSeeder::class);

    }
}
