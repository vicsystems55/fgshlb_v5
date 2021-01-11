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
                'firstname' => 'Festus',
               
                'surname' => 'Boman',
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

            [
                'id' => '8888',
                'firstname' => 'Ibrahim',
                'surname' => 'Mairiga',
                'email' => 'executivesecretary@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('executivesecretary2020'),
                
                'email_verified_at' => now(),
                'role' => 'EsOffice',
                'type' => 'standard',
                'ippis_no' => '*****',
                'file_no' => 'FGSHLB-2020-****',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '9999',
                'firstname' => 'Salamatu',
                'surname' => 'Ahmed',
                'email' => 'headofoperations@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('headofoperations2020'),
                
                'email_verified_at' => now(),
                'role' => 'HeadOfOperations',
                'type' => 'standard',
                'ippis_no' => '*****##',
                'file_no' => 'FGSHLB-2020-****##',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '2121',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'loansaccounts1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('loansaccounts2020'),
                
                'email_verified_at' => now(),
                'role' => 'LoansAccounts',
                'type' => 'standard',
                'ippis_no' => '****###',
                'file_no' => 'FGSHLB-2020-***###',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '090999',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'checking1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('checking2020'),
                
                'email_verified_at' => now(),
                'role' => 'Checking',
                'type' => 'standard',
                'ippis_no' => '***####',
                'file_no' => 'FGSHLB-2020-**####',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '667766',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'auditor1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('auditor2020'),
                
                'email_verified_at' => now(),
                'role' => 'InternalAuditor',
                'type' => 'standard',
                'ippis_no' => '*######',
                'file_no' => 'FGSHLB-2020-######',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '8899292',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'cpo1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('auditor2020'),
                
                'email_verified_at' => now(),
                'role' => 'CPO',
                'type' => 'standard',
                'ippis_no' => '#######',
                'file_no' => 'FGSHLB-2020-#######',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '8899292',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'repaymentunit1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('repaymentunit2020'),
                
                'email_verified_at' => now(),
                'role' => 'RepaymentUnit',
                'type' => 'standard',
                'ippis_no' => '########',
                'file_no' => 'FGSHLB-2020-########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '772782',
                'firstname' => 'User01',
                'surname' => '001',
                'email' => 'ict1@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('information2020'),
                
                'email_verified_at' => now(),
                'role' => 'ICT',
                'type' => 'standard',
                'ippis_no' => '#########',
                'file_no' => 'FGSHLB-2020-#########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '338289',
                'firstname' => 'User02',
                'surname' => '002',
                'email' => 'ict2@fgshlb.gov.ng',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('information2020'),
                
                'email_verified_at' => now(),
                'role' => 'ICT',
                'type' => 'standard',
                'ippis_no' => '$#########',
                'file_no' => 'FGSHLB-2020-$#########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
