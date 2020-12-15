<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            [
                'id' => '10001',
                'firstname' => 'Super',
               
                'surname' => 'Admin',
                'email' => 'admin001@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Super-Admin',
                'type' => 'standard',
                'ippis_no' => '11-22-33-44',
                'file_no' => 'FGSHLB-2020-2300',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10002',
                'firstname' => 'Sample',
                'surname' => 'ES',
                'email' => 'samplees@fgshlb.com',
        
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'ES-Registry',
                'type' => 'standard',
                'ippis_no' => '11-22-33-45',
                'file_no' => 'FGSHLB-2020-2301',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice',
                'email' => 'sampledeskoffice@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'military',
                'ippis_no' => '11-22-33-46',
                'file_no' => 'FGSHLB-2020-2311',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice8',
                'email' => 'sampledeskoffice6@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'ministry',
                'ippis_no' => '11-22-33-99',
                'file_no' => 'FGSHLB-2020-4000',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10033',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice2',
                'email' => 'sampledeskoffice2@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'fishloan',
                'ippis_no' => '11-22-33-47',
                'file_no' => 'FGSHLB-2020-2332',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10044',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice3',
                'email' => 'sampledeskoffice3@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'building',
                'ippis_no' => '11-22-33-48',
                'file_no' => 'FGSHLB-2020-2310',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10055',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice4',
                'email' => 'sampledeskoffice4@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'home',
                'ippis_no' => '11-22-33-49',
                'file_no' => 'FGSHLB-2020-2390',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10066',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice5',
                'email' => 'sampledeskoffice5@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'purchasing',
                'ippis_no' => '11-22-33-50',
                'file_no' => 'FGSHLB-2020-2356',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10004',
                'firstname' => 'Sample',
                'surename' => 'AccountsOffice',
                'email' => 'sampleaccountsoffice@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Accounts',
                'type' => 'standard',
                'ippis_no' => '11-22-33-90',
                'file_no' => 'FGSHLB-2020-3303',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10005',
                'firstname' => 'Sample',
                'surname' => 'User',
                'email' => 'sampleuser@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Applicant',
                'type' => 'standard',
                'ippis_no' => '11-22-33-88',
                'file_no' => 'FGSHLB-2020-2200',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10006',
                'firstname' => 'Sample',
                'surname' => 'User2',
                'email' => 'sampleuser2@fgshlb.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Applicant',
                'type' => 'standard',
                'ippis_no' => '11-22-33-1',
                'file_no' => 'FGSHLB-2020-3300',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
