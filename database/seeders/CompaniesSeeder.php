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
        (5, 'Mr. Eric Koelpin', 'bondricka@example.com', '931.588.0183', '+1.520.205.9388', 'Ut qui natus qui quo. Eligendi eaque itaque fuga rerum qui ea possimus sunt. Asperiores dolores aperiam quo nisi enim.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gregory Bode', 'Dolores voluptatem ea officiis perferendis sapiente consequatur. Sed ullam officiis omnis. Similique ut corporis recusandae ut. Omnis qui et dolor earum atque.', 'ulices.paucek@example.net', '352.897.1928', 'Aut iusto quo velit accusamus. Ducimus magnam sint aut. Consequuntur modi aut velit quo et impedit sunt illum.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (6, 'Maurice Walsh', 'ydeckow@example.org', '(928) 569-9366', '+1-470-776-4348', 'Quia ipsam ab quas dolorum sed dolore illo fuga. Praesentium numquam repellendus inventore eum eos hic. Itaque aut quisquam quidem ad ut totam modi. Quos sed et rerum dolorum amet facilis ea.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Summer Cummings', 'Qui reprehenderit sit assumenda soluta ab molestias cumque. Voluptatem ipsum omnis nemo dignissimos et blanditiis. Facilis rem quas enim suscipit blanditiis facere perferendis.', 'uhyatt@example.org', '+1-740-791-8383', 'Incidunt odit maxime aut. Rem consequatur nam quo molestiae reiciendis aut possimus adipisci. Delectus culpa accusantium non consequuntur. Qui et iusto aut.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (7, 'Lavinia Witting', 'monahan.joyce@example.com', '303-251-7841', '+1 (904) 963-7976', 'Animi accusamus soluta dolor autem veritatis laborum. Maxime tempore non id et velit. Occaecati soluta velit cum consequatur voluptatem id. Ipsum perferendis molestiae blanditiis voluptas.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Prof. Dino Will PhD', 'Animi laboriosam autem illo autem. Eos sapiente ea quidem. Necessitatibus qui magni repellat autem corrupti. Quasi quia voluptatem non saepe quaerat. Et veritatis vitae repellendus aut doloribus.', 'eryn62@example.net', '+1 (386) 454-7897', 'Molestias et molestiae consectetur quia. Impedit fugit rerum molestiae nobis. Quo animi maiores dolores distinctio. Incidunt consectetur totam nihil sunt delectus deserunt.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (8, 'Mr. Kobe Parker DVM', 'andrew.altenwerth@example.org', '(601) 825-0472', '(229) 340-3604', 'Numquam quas provident rerum. Ut ratione totam sit architecto. Suscipit nesciunt voluptate quod labore impedit non eius. Quisquam earum voluptatibus architecto mollitia.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Darren Rolfson', 'Architecto ut dignissimos aut alias nihil. Similique qui amet quia quos quibusdam.', 'hkessler@example.com', '856.968.4961', 'Autem explicabo et doloribus. Quia sequi cupiditate odit porro laboriosam atque dolore assumenda. Nihil quisquam eos id optio. Tenetur officiis dolorum explicabo eligendi consequatur id magnam.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (9, 'Eva Beatty', 'brant.wisozk@example.com', '1-346-899-3555', '651-298-9274', 'Eum qui dolor a eum aliquid eos. Quidem consequuntur eaque natus eveniet et. Necessitatibus quia quisquam voluptas voluptas rem facilis. Aperiam nobis mollitia deleniti nihil doloremque iure qui.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Alysson Huel', 'Delectus debitis modi voluptas dolorem molestiae ea. Et eum in qui autem et. Inventore ex ut quibusdam quaerat.', 'acartwright@example.net', '+1 (737) 479-7129', 'Magni et maxime facere harum laudantium. Numquam dolor molestiae quasi ut. Doloribus quibusdam minima ut at. Consequatur veritatis voluptatum dolorum totam fugit.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (10, 'Cristobal King V', 'qwiegand@example.com', '+1-610-713-1581', '802-316-7055', 'Beatae dolorem ex aut. Cupiditate labore commodi aliquid. Nulla non et qui in aut illum dolore. Nostrum sit dolores ipsa eum id quia nihil consequatur.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mrs. Aliza Greenfelder', 'Quia maxime est fugiat dignissimos esse et voluptatibus. Est consequatur voluptas modi dolores in iusto sed. In corporis amet est a iure eaque. Illo molestiae deleniti repellendus et.', 'muller.cleve@example.net', '1-947-501-9213', 'Est dolorem quia est. Sunt sequi facere nihil est quaerat atque numquam excepturi. Et qui porro non itaque consequatur consequuntur.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (11, 'Christopher Hayes MD', 'clotilde10@example.org', '1-651-868-6773', '1-309-381-3830', 'Quam commodi neque voluptates ut dolorem eum. Placeat et voluptates praesentium sed debitis est incidunt. Odio est inventore ipsum veniam enim voluptas.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Laura Murazik', 'Natus temporibus culpa odit est dolorem quisquam hic. Quibusdam non doloribus sed quas quas quod facilis. Quia est dolor modi necessitatibus molestias illo.', 'ian12@example.net', '561.298.9697', 'Consequatur voluptas iure modi ex. Dolorem modi cumque dolor minus rem. Mollitia possimus voluptatibus eaque enim vero ea mollitia nihil.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (12, 'Eldon Orn DDS', 'dorris.boehm@example.com', '(272) 952-6296', '1-651-402-0168', 'Animi et est est consectetur. Ducimus dignissimos deserunt ipsam. Ut laudantium alias ea doloribus.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Jordyn Stehr', 'Ut eum perferendis id quo assumenda alias. Voluptatem voluptas unde quam animi hic ut voluptatem. Quas corrupti et voluptatem ea consequuntur aut maiores.', 'wehner.ashlee@example.net', '229-931-9575', 'Soluta velit atque sit repudiandae et facere. Cupiditate alias atque cum corporis et. Dolor mollitia neque quae eum est. Et a ratione et totam eligendi.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (13, 'Mr. Dejuan West PhD', 'santino.jenkins@example.org', '+1.360.264.7298', '+1 (563) 850-0834', 'Esse esse iusto alias voluptas. Aperiam mollitia nobis ad nemo deleniti nihil quisquam totam. Totam sed et atque optio minus explicabo sint optio.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Chauncey Senger', 'Et explicabo libero aut placeat numquam maxime quo. Ad quis natus dignissimos esse omnis sed et. Consequuntur maiores pariatur aut rem aliquam. Eveniet ad cum quibusdam quas sed.', 'rosemarie.dickens@example.net', '253.375.3325', 'Tempora quisquam error facilis. Vero et officia amet ea harum voluptatum est. Modi tempore rem architecto et repellendus libero. Id sint illum odit quaerat tempore nisi cum a.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (14, 'Hayley Crona', 'dedric36@example.com', '+1-574-463-6929', '+1-820-797-4968', 'A similique quia at deserunt sit ullam. Sit et culpa sunt dolore consequatur a corrupti.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Rudolph Friesen', 'Voluptatem accusamus perferendis repellendus aliquid. Reprehenderit tempora rem quisquam unde ut in eius alias.', 'kayley64@example.org', '+1-312-656-9160', 'Numquam consequatur doloribus quia sunt praesentium asperiores dolor perspiciatis. Ut nam nam ducimus perspiciatis corporis ut.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (15, 'Onie Muller', 'gking@example.com', '305.492.0863', '806-254-3954', 'Cum officiis atque saepe harum. Eum sequi perferendis tempora quaerat in occaecati sapiente. Ea repellat ullam numquam. Veritatis necessitatibus maiores quia assumenda in. Et suscipit rerum sunt.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Kennedi Morissette', 'Ea atque accusamus qui doloremque totam minus. Sed sint sunt repellendus voluptates reiciendis eius qui. Laborum quisquam illum voluptatum ut non sit vel. Sed quae magnam labore.', 'oschneider@example.com', '+1-303-748-3147', 'Vero soluta minus a suscipit facere. Qui eum corporis aperiam et quibusdam amet doloremque. Quo iusto consectetur voluptatem ullam tempora iste non. Modi voluptatem eum in adipisci.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (16, 'Rosella Kilback PhD', 'bernhard.amalia@example.org', '(248) 905-9112', '1-417-233-1951', 'Esse qui illo reiciendis. Esse eius corrupti adipisci fugiat quidem vitae esse porro. Nostrum quo esse non necessitatibus mollitia dolores facere.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Landen Schaden IV', 'Aspernatur officia adipisci expedita quia dolor explicabo ut possimus. Fugit ipsam labore eaque exercitationem qui. Sunt quidem necessitatibus adipisci consequatur sapiente.', 'mohr.jacinto@example.com', '+1-737-410-8772', 'Voluptas debitis sint esse animi molestiae asperiores corrupti. Neque porro id ab vel aperiam et enim.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (17, 'Anna Baumbach', 'rey91@example.net', '+13512041162', '+19133459232', 'Debitis illum qui dolore qui. Accusamus assumenda sunt quas harum quis nobis. Recusandae dolores culpa voluptatibus pariatur et repellendus aut.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Rosanna Heidenreich', 'Suscipit recusandae et optio ea aut tenetur. Perspiciatis velit ut voluptas suscipit sit reprehenderit molestiae et. Sit alias nesciunt voluptate.', 'rowe.zane@example.org', '1-820-654-8776', 'Enim inventore animi ab eum. Vel et necessitatibus numquam porro at incidunt magni aliquid. Occaecati nisi et quos sunt maxime provident voluptas iste. Neque consectetur dolore a.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (18, 'Prof. Maida Bergnaum DDS', 'mariela.yost@example.org', '+1-609-900-9049', '847.918.6324', 'Saepe eligendi dicta deleniti assumenda. Est totam exercitationem error itaque rem voluptas rerum. Et modi labore nihil inventore possimus quas. Dignissimos autem excepturi ratione ducimus in.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Rozella Walsh', 'Architecto adipisci ipsa blanditiis eos id. Fugit quo ut commodi numquam. Excepturi maxime officiis rerum eum quas. Ullam exercitationem ad vel sed alias maxime aut.', 'ylarson@example.com', '(704) 982-0942', 'Voluptatem corrupti et dolores at ut quia autem. Quo minima id qui ea qui aperiam praesentium officia. Quam laborum temporibus tempore consectetur hic quo error voluptatibus.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (19, 'Alexander Turner III', 'ortiz.dayton@example.org', '+17277815917', '+1 (903) 636-4021', 'Doloremque iusto reiciendis nihil rem deserunt minima. Hic eos expedita officiis maxime quia hic. Officia ab labore eaque quos corporis.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gaylord Walker', 'Culpa ut et aperiam blanditiis sequi. Possimus incidunt voluptas similique autem. Consequatur harum dolor aspernatur qui aliquid incidunt ut. Nostrum possimus sint eum.', 'daren.bode@example.com', '+1 (385) 318-8223', 'Quod et dolore enim omnis et voluptatem. Aut voluptatibus ea quo laborum laboriosam sequi est. Rerum quis aspernatur eaque velit. Quia quas voluptas sint nam.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (20, 'Jarrod Kshlerin IV', 'valerie43@example.com', '+1.717.356.5998', '732-683-4043', 'Quia quaerat quaerat adipisci est occaecati consequatur quia. Vero tempore eaque nostrum deserunt dolore animi ratione. Dolor vitae qui tenetur sunt non ipsum aut.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Hollie Jacobson DDS', 'Cumque vero molestiae at at. Qui omnis id vel accusamus qui corrupti ad omnis. Quisquam dolor voluptate provident sit rem voluptas. Amet et minima voluptas qui in error.', 'erau@example.net', '(434) 525-3376', 'Accusantium delectus et aut sit sed vero nam culpa. Maxime autem sequi dolores iure at ipsa earum. Fugit est voluptas reiciendis tempore provident ad mollitia.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (21, 'Jarrell Welch', 'clara32@example.net', '435-527-9580', '+1 (830) 275-7387', 'Delectus quod cum aliquid voluptas laboriosam. Possimus accusantium aliquid perspiciatis ea tempore quisquam voluptas. Saepe quia cupiditate fugit repellat iusto quisquam.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mrs. Kaycee Altenwerth', 'Ut facere sint voluptatem saepe nesciunt aliquam. Odio animi est sunt reiciendis minima eaque. Aperiam quia cupiditate tenetur.', 'luna78@example.com', '+17792614442', 'Dolore natus praesentium aspernatur dolorem voluptas omnis. Sequi ea dolor at non dolores reiciendis illo. Voluptas assumenda doloremque et aliquid molestiae quod.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (22, 'Ms. Lauren Jacobs', 'spencer.dustin@example.com', '1-207-987-6737', '+1.478.375.2017', 'Quas aut sequi voluptatem voluptates. Sit voluptatibus eius fuga quis. Repellat nulla eos sed libero occaecati.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mathias Kiehn', 'Dolorum consequatur voluptatum et. Nulla repudiandae praesentium voluptas qui vitae. Odio ex aut possimus. Nesciunt reprehenderit nobis dignissimos sit. Et ipsam officia rem pariatur.', 'fadel.shanie@example.net', '248-286-8199', 'Consequuntur veritatis ea omnis et et ut quo. Qui qui sit autem exercitationem sint. Consectetur vitae commodi aliquam maxime sit et.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (23, 'Donald Kulas', 'yessenia.macejkovic@example.org', '+18542655080', '228-995-5833', 'Perspiciatis quasi maiores rerum in sed. Aperiam dolor consectetur unde eius. Animi ut voluptatem aut sit.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Miss Lenora O\'Hara', 'Maiores dignissimos deleniti dolores sapiente culpa temporibus. Odit odit iure voluptatum quam ut rerum et aut. A ut perferendis repellat nulla.', 'goldner.franz@example.com', '+1-406-539-9123', 'Unde vel qui quis dolorum eos quas omnis. Impedit consequatur dolor consequuntur dolor et nam.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (24, 'Marianne Kuhlman', 'sgrant@example.org', '+1-972-854-1262', '346.432.3845', 'Est vel deleniti eum illum sed placeat nostrum. Qui corporis temporibus aut dolores provident id. Magni iste impedit impedit assumenda vero et officiis.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Dr. Penelope Oberbrunner II', 'Rem omnis fugit labore nam quo iusto rerum ipsa. Eveniet quisquam soluta ut repudiandae labore minima ut. Est sed tempora tempore veniam non.', 'hane.leann@example.org', '623.263.6168', 'A est aut aliquid ducimus temporibus recusandae non. Distinctio placeat atque reiciendis ut unde. Illum possimus non sed dolorem veritatis sunt.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (25, 'Ettie Dicki DDS', 'qmcclure@example.com', '+1.719.857.3177', '1-815-587-0552', 'Non dolores laborum ut possimus voluptas accusamus et. Non consequatur magnam minus tenetur nesciunt sint nobis.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Dr. Francisco Ullrich', 'Laborum ut doloremque iure. Amet enim recusandae voluptas. Autem quia aperiam quia mollitia quia nisi doloribus. Nostrum laboriosam voluptas corrupti dignissimos.', 'vgreenholt@example.net', '+1-737-538-0675', 'Neque officia ut beatae error velit eius eum ab. Velit est ducimus harum nam tempore. Impedit omnis veniam error soluta eum perferendis. Et fuga accusamus consequatur et in.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (26, 'Miss Jazmyn Wisozk', 'davin60@example.com', '1-847-479-1289', '+1-346-995-7823', 'Error tempora cupiditate dolor aliquam. Assumenda iure qui aut recusandae. Ipsam minus delectus nemo quaerat qui.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mr. Dedric Barton', 'Libero ut ut pariatur. Incidunt eveniet assumenda inventore dignissimos quia. Culpa recusandae est qui et ea. Iusto nisi quis incidunt quaerat sint voluptatibus accusamus.', 'ethelyn97@example.org', '+1-435-380-2536', 'Natus sit voluptas sed quod quis magni sequi. Excepturi repellat fuga accusamus id ratione. Fuga amet consequuntur et. Ex iure natus libero quas ipsa.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (27, 'Astrid Wilkinson', 'asha04@example.org', '+1-934-600-8404', '+1-959-234-2192', 'Placeat dolor rem odit. Molestias reprehenderit iusto quo facere ut totam ut. Aut exercitationem aut et placeat eos.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Annamarie Cremin', 'Id non itaque officiis. Perferendis incidunt assumenda quaerat est tempora. Et sapiente at aut omnis. Ea voluptatem repellat numquam illo.', 'pgleason@example.com', '+1-814-485-8521', 'Voluptatem quo nobis qui nihil laudantium. Quo eos facilis vel. Nemo quas magni optio aut autem. Quis possimus reprehenderit natus dolor qui accusamus officia.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (28, 'Prof. Esta Heller V', 'williamson.carmen@example.com', '631-367-0429', '+1 (458) 848-8638', 'Vel consequuntur aut ut quod culpa. Quisquam atque voluptates at.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Neva Nicolas', 'Eveniet id similique reiciendis voluptas et iste optio. Mollitia vero quam voluptate ut est.', 'orlo.weissnat@example.net', '(310) 924-9929', 'Et qui voluptas quibusdam nisi non. Beatae quia dolorem porro illo.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (29, 'Dr. Maximillian Grady', 'iabshire@example.org', '848-342-3300', '747-327-4111', 'Eum cum et ut aut harum iste molestiae. Facilis amet itaque possimus maiores maxime voluptatem. Alias ex repudiandae veniam similique aut. Aliquam rerum odit iste mollitia tempore.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Torrance Lehner', 'Dolore alias dolor qui libero rerum dolorum earum. Est praesentium repellendus et et optio unde. Iusto dicta cupiditate ex occaecati voluptas sunt.', 'stark.jada@example.com', '+1-458-368-1236', 'Earum placeat amet expedita exercitationem non eum quas. Qui quo repellat sit et. Pariatur facere nam cupiditate voluptates atque.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (30, 'Mariah Dickens', 'jeremy.fritsch@example.net', '+1.719.305.6880', '1-914-453-4224', 'Eos cupiditate commodi enim sint rerum qui in earum. Magni expedita animi dolores et voluptas aliquam amet sint. In libero nisi ea ratione. Vitae repudiandae rerum voluptatibus quod iure quaerat non.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Junior Koss', 'Beatae cum eligendi mollitia molestias sit maxime officia. Doloremque illum reprehenderit maiores est error cum. Accusantium saepe molestias asperiores optio velit. Quis quibusdam voluptatum id.', 'kgleason@example.com', '724-256-6847', 'Assumenda autem voluptatem libero alias sit dolor ea. Consequatur minima iste quia occaecati. Omnis soluta quis ut ea aperiam eveniet. Iure fugit molestiae voluptatem vel odio explicabo.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (31, 'Jettie Konopelski', 'daisy10@example.org', '+1-812-730-6971', '+1.419.698.9673', 'Libero vitae pariatur voluptatibus est. Architecto aut sint et sint et ipsa. Ut voluptatem sed distinctio aperiam enim doloribus voluptate.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Roger Reynolds', 'Quia est qui maxime minima distinctio est ducimus. Nam accusamus corporis quis cupiditate officiis illo. Aperiam id illum aut non excepturi.', 'wconnelly@example.net', '828.877.4026', 'Minus ut cupiditate ipsum sapiente quibusdam deserunt. Quasi quisquam voluptatibus fugiat eveniet officia quidem delectus. Consequatur quas ut maiores ab cum.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (32, 'Ms. Elza Eichmann', 'paucek.juliana@example.com', '+1.718.618.8922', '+1-385-322-7208', 'Laborum minus quasi sunt vel temporibus modi nesciunt. Quia nihil repellat nulla ipsa eveniet. Praesentium commodi animi reiciendis atque fugit. Fugit quia dignissimos ut et recusandae qui quisquam.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Kaylie Moen', 'Cum consequatur ipsam est commodi itaque recusandae iste perferendis. Provident ut itaque repellat modi sequi nemo non. Sit ut praesentium totam. Eius quos eos sed sunt consequatur temporibus.', 'haley.brielle@example.com', '740.885.6728', 'Rem voluptatem itaque occaecati consequatur. Distinctio magnam maiores et quisquam et nisi et. Consequatur impedit dicta sint quidem in nisi labore facilis. Et in omnis sit.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (33, 'Dr. Abe Nienow Jr.', 'lilian04@example.org', '(320) 404-5932', '+1 (786) 890-4879', 'Eligendi molestiae rerum ea dolor maxime quaerat consequatur corrupti. Natus et deleniti cumque voluptatum nobis. Vel voluptas magni sint. Optio inventore labore impedit et.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mr. Victor Paucek', 'Aut perferendis ratione ea. Veniam doloribus sint numquam repellat qui molestiae quidem. Esse laudantium deleniti hic assumenda in. Consequatur eos facere dolorum enim impedit enim.', 'cordie11@example.net', '(614) 845-7772', 'Velit eum excepturi repellendus pariatur tempore sunt quas dolores. Iure et magnam facere doloribus. Aliquid praesentium neque officiis est.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (34, 'Felix Rodriguez', 'zboncak.jarrod@example.org', '(469) 966-5616', '+1-631-377-0093', 'Earum nesciunt facilis perspiciatis ullam quo possimus iste. Doloribus error ab molestias est. Qui error sed veritatis ratione facilis nulla dolor. Eaque velit repudiandae vel.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Quinten Rutherford', 'Officia voluptas iste maiores molestiae ut quo. Rem ut quia commodi expedita. Assumenda voluptatem aliquam quisquam.', 'robert87@example.org', '+18434147193', 'Perferendis quos maxime numquam quaerat. Itaque facilis ut ipsum ut. Culpa dolores autem nesciunt est.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (35, 'Mr. Melvina Kutch Jr.', 'guillermo12@example.net', '+1.724.584.0074', '281.547.3435', 'Cupiditate et est officiis autem sapiente. Dolorem tempora id dolor perferendis sed et. Veritatis soluta aliquid adipisci accusantium voluptatem possimus. Veritatis sunt qui accusantium aut enim.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Brenna Kemmer', 'Quidem sint culpa error excepturi. Sapiente quis ducimus quidem. Cum fugit facilis culpa eius quisquam ab est. Hic qui sapiente quod rem dolorem hic eos.', 'jblock@example.org', '+18707776667', 'Vero adipisci quos labore qui nostrum. Nihil iusto aut iure non officia possimus mollitia. Soluta nemo quos enim cum optio. Esse vitae magni cum est dolor. Dolorem voluptatem nesciunt aut.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (36, 'Leonard Dicki', 'marvin.benjamin@example.org', '+1-623-806-9062', '505.978.0222', 'Iste blanditiis natus tenetur et velit dolores. Dignissimos et rem asperiores illo. Enim eum dicta eaque asperiores inventore laudantium qui.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Prof. Eloy Thiel Jr.', 'Expedita pariatur rerum nemo beatae. Quis sapiente optio ad dicta. Officiis voluptatum odio incidunt blanditiis repellat voluptatem quas.', 'cecelia.schumm@example.org', '+1 (239) 964-8273', 'Qui dolorem quasi architecto est error consectetur. Est et iste atque quisquam a. Atque aut magni qui est aperiam.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (37, 'Riley Rice', 'yrolfson@example.net', '1-607-584-8207', '1-386-889-0745', 'Vitae neque quis et est facilis. Dignissimos consequatur voluptatibus minus vero et. Et quaerat voluptas velit consequatur et repellat.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Travis Abernathy', 'A fuga eveniet illo autem voluptate laborum ex. Quia eum asperiores fuga est. Iste itaque ut natus hic magnam. Vel deserunt aut aut non expedita labore eum.', 'hahn.watson@example.com', '732-415-2142', 'Voluptatem alias nihil sequi laboriosam. Quia doloribus reiciendis sed. Quasi nihil beatae quia sint.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (38, 'Jaron Klocko', 'sgreen@example.net', '+1-774-453-2775', '262.521.9555', 'Omnis itaque rerum neque deleniti sunt. Nihil doloribus quaerat molestiae ut. Dicta modi a dicta quia voluptas.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Norbert Harvey DDS', 'Aliquid error numquam sed qui. In aut eos et minus quasi. Numquam praesentium rerum voluptatem consequuntur dolores sequi perferendis. Doloribus possimus non ratione.', 'jackie69@example.net', '862-605-0475', 'Consequatur consequatur porro cupiditate dolores quam non sunt. Et quod odio vero non nobis. Illo velit enim beatae.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (39, 'Prof. Gerald Nienow III', 'milford47@example.org', '+1 (862) 387-9940', '(323) 374-3881', 'Molestiae consectetur doloribus iusto libero est est. Reprehenderit assumenda recusandae sint est illo mollitia enim. Recusandae maxime dolorum expedita veniam voluptatibus dolores.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Breana Corwin PhD', 'Cum facilis harum perferendis omnis mollitia in. Maxime iure saepe iste et quod culpa ut. Occaecati officia ab blanditiis.', 'eddie.stroman@example.net', '442-907-6137', 'A laboriosam repellat perferendis nihil officia quia. Et recusandae voluptatibus aperiam qui qui. Ea soluta perspiciatis accusamus perspiciatis aut. Rem et laudantium quo. Nam ullam est adipisci.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (40, 'Jermaine Bins', 'vonrueden.vidal@example.com', '+1-754-601-9749', '(785) 616-0977', 'Enim qui quibusdam iusto. Sapiente ut itaque impedit unde iste modi. Quam eos quod molestias libero fuga. Repellendus et aperiam magni quis in officiis.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Murphy Ryan', 'Libero ut omnis suscipit est. Eveniet labore eum officia repellat aliquid. Rerum voluptas beatae est porro.', 'alanna.champlin@example.org', '+1 (845) 694-5838', 'Voluptate maxime quasi dolore perferendis. Non esse dolor sed qui earum architecto unde. Distinctio perferendis sit tenetur dolor pariatur amet repellendus.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (41, 'Melyssa Medhurst', 'lurline44@example.net', '407-810-9897', '1-734-281-9518', 'Ullam aut repellat pariatur repudiandae. Labore pariatur quia reprehenderit magnam velit. Eius ad sit fugit. Asperiores odit dolore non quia aut tempore. Molestiae harum assumenda eum nam eum et.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Lora Koss', 'Odit aut voluptates numquam nobis. Dolorem necessitatibus consequatur reiciendis tempora est. Similique omnis et et voluptas placeat quos harum.', 'alvis.dooley@example.com', '402-798-1961', 'Saepe et quaerat molestiae ullam omnis saepe ut. Sunt et possimus ipsum. Est maiores voluptatem distinctio vitae optio ratione.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (42, 'Prof. Jared Erdman', 'tgerhold@example.net', '1-765-736-9429', '262-993-3231', 'Quis iure voluptatem vel totam sunt tenetur. Est rerum repellat vel. Sapiente nihil omnis ut enim omnis sunt ex.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Wallace Treutel', 'Incidunt ex aliquam asperiores eligendi iste atque. Neque repudiandae beatae cumque. Numquam totam enim occaecati sed inventore. Cumque error accusamus iste dolor iure assumenda.', 'pamela.donnelly@example.net', '224-866-6716', 'Rerum ipsum rem maxime. Et consequatur voluptas non sed quia veritatis. Architecto et quia fuga ut ut.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (43, 'Clarissa Swift', 'leon12@example.org', '+1-828-909-4370', '725.395.7657', 'Veritatis ut est qui dolor. Et sapiente iure nesciunt. Provident quae non est adipisci.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Deonte Swaniawski I', 'Consectetur aut ipsam similique reprehenderit dolorum. Soluta error ut cumque porro. Impedit consequatur quia quos harum alias voluptas voluptate.', 'smitham.werner@example.org', '1-206-241-0677', 'Itaque quibusdam earum corporis labore. Cumque ad numquam tempore quia. Debitis dignissimos magni illo similique maxime quibusdam ad. Asperiores et blanditiis doloribus repudiandae et accusamus.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (44, 'Dr. Ilene Kirlin II', 'carolyne16@example.org', '1-865-606-1938', '779.591.4860', 'Rerum ex ipsa ex dicta eaque minus. Repellendus quod odio voluptatum voluptates. Modi aut architecto sunt animi et repellat.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Myriam Nitzsche', 'Est ipsam qui vel nam aut laudantium optio. Aut rerum tempora qui delectus. Molestiae beatae cupiditate temporibus aut quae occaecati et ut. Alias sit assumenda recusandae expedita pariatur.', 'walsh.hailey@example.org', '+1-270-224-9694', 'Quia eum aperiam autem sint autem eius. Dolore reprehenderit et quas eligendi eos. Doloribus repellendus ipsam aut pariatur blanditiis aliquid eveniet quis.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (45, 'Prof. Meredith Block PhD', 'leola22@example.com', '1-228-779-9984', '781-364-8804', 'Qui deleniti a dolores sequi aspernatur. Ab et facere sequi dolorum quam praesentium. Quia repellendus occaecati tenetur fugit similique.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Maggie Eichmann', 'Cum ea autem ut distinctio sint magni. Inventore est recusandae nam et doloribus assumenda impedit corrupti. Consequatur quod vel delectus laudantium repellendus qui deleniti.', 'mohr.clemens@example.net', '903-739-0398', 'Error et alias est. Facere ut praesentium vel id est consequuntur. Aliquam aliquam similique praesentium non.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (46, 'Zachery Runolfsdottir', 'bobbie16@example.org', '857.499.8097', '+1-814-865-4695', 'Error molestiae rerum et a temporibus aut. Voluptas est facilis impedit nam. Ipsum dicta sunt quia maiores itaque. Quisquam accusantium repudiandae eius perspiciatis quibusdam nemo.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Prof. Naomie Kling Jr.', 'Perferendis rerum molestias asperiores et sit aliquam vero. Voluptas eos ut blanditiis quis et. Nisi perferendis sunt tenetur nulla.', 'wilfredo.hyatt@example.net', '501-205-5622', 'Quisquam nam itaque qui ea cum sed quia. Quam quibusdam ut consequatur maiores aut fugiat recusandae. Minima maiores et dolor id error. Odit dolorem placeat saepe architecto cupiditate magnam.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (47, 'Beulah Schmeler Sr.', 'parker.lavina@example.com', '1-754-602-4005', '+16509564124', 'Magnam vero iure temporibus ut unde consequuntur numquam atque. Voluptas consequuntur molestiae vel dolorum soluta. Porro qui ducimus quos blanditiis ab sed. Illo aut occaecati aut expedita.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Hal Gaylord', 'Totam cumque omnis culpa. Recusandae illum aliquid voluptatem et dolores. Animi ut minima veniam.', 'ladarius.fisher@example.org', '956.636.7142', 'Est sapiente in qui rerum. Hic facere veritatis magni in. Eum quis neque ipsum. Laborum blanditiis et similique culpa mollitia doloremque temporibus reiciendis.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (48, 'Nicolas Dooley', 'macie.koss@example.com', '+1-678-350-7866', '+1-912-902-4813', 'Assumenda esse ex rerum omnis. Recusandae cum quibusdam qui sit et. Quasi repudiandae omnis fuga quaerat adipisci earum. Non odit non ea quaerat.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Mr. Derek Wintheiser', 'Perspiciatis totam rerum illum ipsa. Similique doloremque harum et quo quibusdam laboriosam porro beatae. Est cum unde numquam accusantium dolor officiis.', 'urban70@example.net', '+1.573.724.4811', 'Magnam voluptate rem minima cupiditate. Fuga quos est repudiandae ducimus quod eos ratione voluptates.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (49, 'Shaniya Zemlak', 'nlangosh@example.com', '419.357.2026', '+1.929.834.4566', 'Animi et rerum culpa. Et vel fugiat aut perspiciatis. Ut consectetur et voluptatem hic totam sed.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Dr. Julian Keeling', 'Animi rerum ut vero. Sunt libero labore quae. Ullam modi vel maxime quia.', 'ryley.kassulke@example.com', '+1-480-979-5994', 'In est deserunt architecto voluptatibus tempore qui. Voluptatem et impedit earum eos nostrum rerum. Error sint voluptatem et. Est ut quaerat nostrum dolores in ad.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (50, 'Pearline Turner IV', 'aufderhar.rebecca@example.net', '(601) 968-0584', '+1.854.899.7848', 'Neque dignissimos occaecati qui odit molestiae. Omnis reprehenderit provident voluptates enim id voluptatibus. Iste repellat enim in vero sunt.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Ivah Beahan', 'Voluptas veritatis sapiente aut autem ipsum excepturi autem. Minus corporis similique tenetur velit. Veniam ullam laborum et et et qui et.', 'valentina82@example.com', '(351) 448-5096', 'Nisi molestiae qui repellat iusto eligendi nisi minima. Vel provident facilis tempora id ut. Quis natus consectetur et illum aspernatur consequuntur nobis.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24');");    
    }
}
