<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("
        INSERT INTO `subscription` (`company_id`, `package_id`, `start_date`, `end_date`, `status`) VALUES
        (1, 2, '1975-09-16', '1984-01-30', 'active'),
        (2, 2, '2005-05-13', '1987-10-25', 'expired'),
        (3, 3, '1992-03-20', '2010-07-11', 'active'),
        (4, 1, '2021-05-22', '1973-05-31', 'active'),
        (5, 1, '1977-07-13', '1988-12-20', 'expired'),
        (6, 2, '2021-01-23', '1986-03-22', 'active'),
        (7, 2, '2016-08-08', '2012-06-22', 'active'),
        (8, 3, '1983-01-24', '2009-01-20', 'expired'),
        (9, 2, '1972-08-24', '1993-06-30', 'expired'),
        (10, 3, '2021-07-08', '1980-06-16', 'expired'),
        (11, 1, '2022-02-17', '2005-04-20', 'expired'),
        (12, 2, '2009-01-16', '2013-09-30', 'active'),
        (13, 2, '2020-10-05', '1980-08-25', 'active'),
        (14, 2, '2005-12-21', '1975-03-10', 'expired'),
        (15, 3, '1979-04-30', '2015-02-09', 'active'),
        (16, 1, '2000-10-15', '1980-09-30', 'active'),
        (17, 3, '2008-10-16', '1991-08-27', 'active'),
        (18, 1, '2005-05-26', '2014-12-20', 'expired'),
        (19, 3, '2003-11-26', '2017-03-24', 'active'),
        (20, 2, '2001-11-29', '2005-01-12', 'active'),
        (21, 2, '1991-08-28', '1976-03-26', 'expired'),
        (22, 3, '2001-10-19', '1996-03-23', 'active'),
        (23, 3, '1979-04-11', '1992-04-02', 'expired'),
        (24, 3, '2020-06-26', '1983-07-20', 'active'),
        (25, 2, '2013-10-04', '1976-06-13', 'expired'),
        (26, 3, '2007-09-30', '1976-07-10', 'active'),
        (27, 1, '1974-09-14', '2006-08-18', 'active'),
        (28, 2, '1989-10-17', '2001-06-24', 'active'),
        (29, 1, '1970-09-01', '2011-05-06', 'active'),
        (30, 1, '2007-10-16', '1978-07-19', 'expired'),
        (31, 1, '2015-03-12', '2013-03-23', 'expired'),
        (32, 2, '1979-03-27', '1976-12-22', 'expired'),
        (33, 1, '2013-12-26', '1975-09-02', 'active'),
        (34, 2, '2007-06-13', '1997-01-04', 'active'),
        (35, 3, '2006-04-29', '2015-01-03', 'active'),
        (36, 1, '1978-12-10', '2012-04-29', 'active'),
        (37, 1, '2002-10-14', '1977-11-18', 'active'),
        (38, 2, '1982-12-24', '2001-12-23', 'expired'),
        (39, 3, '1994-10-07', '2008-11-02', 'active'),
        (40, 1, '2008-08-30', '1998-07-21', 'expired'),
        (41, 3, '1988-09-11', '1997-05-05', 'active'),
        (42, 3, '2017-05-24', '1988-01-02', 'expired'),
        (43, 3, '2002-03-14', '2008-08-05', 'expired'),
        (44, 2, '1973-03-19', '1982-04-17', 'expired'),
        (45, 3, '2007-09-08', '2010-02-01', 'expired'),
        (46, 1, '2004-07-14', '1976-11-08', 'expired'),
        (47, 2, '2001-02-19', '2022-03-01', 'expired'),
        (48, 3, '1971-09-04', '1992-08-10', 'expired'),
        (49, 2, '1977-10-09', '1988-10-20', 'active'),
        (50, 1, '2018-10-23', '2011-03-09', 'active');");
    }
}
