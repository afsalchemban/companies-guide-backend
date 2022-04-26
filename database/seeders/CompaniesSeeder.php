<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::unprepared("INSERT INTO `companies` (`id`, `business_name`, `email`, `phone_number`, `landline_number`, `trade_license_number`, `company_activity_id`, `legal_status`, `issued_by`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `sale_id`, `created_at`, `updated_at`) VALUES
        (1, 'Adelia Parisian III', 'koch.geraldine@example.org', '864-289-9486', '248-372-0013', 'Eum rem non voluptatum rerum quia similique sed id. Saepe unde illo veritatis qui a. Qui similique suscipit vel saepe vero ut qui.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Aaron Mitchell', 'Labore eos qui expedita placeat officia. Quidem quo et dolore accusantium voluptate vel. Quasi ut sed ab est temporibus voluptas iste. Nostrum numquam minima aliquid.', 'abshire.manuela@example.org', '208.347.7432', 'Incidunt iusto sunt nobis sit quo laudantium. Nulla magnam est vero quibusdam. Quod ea iure praesentium in occaecati sed est. Ut sed pariatur magni modi ab.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (2, 'Leora Walker', 'lamont58@example.net', '(724) 890-2723', '+1-475-456-2955', 'Deserunt quia est qui dolor sed. Numquam reprehenderit facilis ipsam iste. Qui libero aut fugit consectetur. Non debitis dolores reprehenderit ducimus sed ut unde sequi.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Amelia Hackett', 'In ad ipsum nesciunt nulla quia qui cumque. Non velit consequatur sit modi enim. Sit ullam commodi tempore aliquid. Eligendi qui ratione libero placeat assumenda beatae.', 'shanna.stokes@example.net', '1-938-297-1637', 'Et sed quia enim id iure rem et natus. Et odit amet occaecati consequatur maiores quis sint ad.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (3, 'Fae Predovic', 'sschuster@example.org', '1-757-830-4441', '539.583.2000', 'Dolorem rerum magni cumque est. Omnis autem eveniet deserunt ad est dolores temporibus. Sit aut nisi facere perspiciatis.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Verda Ledner', 'Saepe maxime iste rerum odio sed eaque corrupti. Animi maxime et blanditiis laudantium hic quia. Nihil sunt consectetur ut harum quia aspernatur molestias veniam. Odit praesentium consequatur eum.', 'nschultz@example.net', '(712) 545-7341', 'Sint ipsa ea ratione eaque omnis sit. Dolores praesentium saepe voluptatem voluptates velit ut molestiae a. Omnis voluptate et enim est alias incidunt quia laudantium.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (4, 'Micheal Schowalter', 'uheidenreich@example.net', '(513) 255-4993', '863.731.9705', 'Dolorem et occaecati deleniti est necessitatibus doloremque. Ut tempore quod doloribus a officiis non. Ducimus atque illum magni magnam dolor consequatur. Iusto magnam et est voluptas qui fuga.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gino Prosacco', 'Molestiae et mollitia laborum voluptatem deleniti. Eligendi asperiores quas est dolorum. Earum ipsa aliquam quo quia officiis quo. Corporis nihil aperiam nulla pariatur repellat dignissimos.', 'cathrine.greenfelder@example.net', '1-213-348-3253', 'Sit earum delectus consequatur consectetur eum non. Vel consequatur consequatur officia.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (5, 'Mr. Eric Koelpin', 'bondricka@example.com', '931.588.0183', '+1.520.205.9388', 'Ut qui natus qui quo. Eligendi eaque itaque fuga rerum qui ea possimus sunt. Asperiores dolores aperiam quo nisi enim.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gregory Bode', 'Dolores voluptatem ea officiis perferendis sapiente consequatur. Sed ullam officiis omnis. Similique ut corporis recusandae ut. Omnis qui et dolor earum atque.', 'ulices.paucek@example.net', '352.897.1928', 'Aut iusto quo velit accusamus. Ducimus magnam sint aut. Consequuntur modi aut velit quo et impedit sunt illum.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24');");    
    }
}
