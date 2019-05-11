<?php

use Illuminate\Database\Seeder;

class ZdMerchantBillTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zd_merchant_bill')->delete();
        
        \DB::table('zd_merchant_bill')->insert(array (
            0 => 
            array (
                'id' => 43,
                'driver_id' => 5531,
                'order_id' => 1117,
                'merchant_id' => 110,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '100.00',
                'money' => '100.00',
                'arrival_warehouse_time' => '2018-07-23 16:15:00',
                'create_time' => '2018-07-23 15:42:02',
                'modify_time' => NULL,
            ),
            1 => 
            array (
                'id' => 44,
                'driver_id' => 5503,
                'order_id' => 1130,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '350.00',
                'money' => '350.00',
                'arrival_warehouse_time' => '2018-07-24 17:00:00',
                'create_time' => '2018-07-24 09:10:25',
                'modify_time' => '2018-07-24 09:10:25',
            ),
            2 => 
            array (
                'id' => 45,
                'driver_id' => 5401,
                'order_id' => 1110,
                'merchant_id' => 114,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '350.00',
                'money' => '350.00',
                'arrival_warehouse_time' => '2018-07-25 00:00:00',
                'create_time' => '2018-07-24 09:46:51',
                'modify_time' => NULL,
            ),
            3 => 
            array (
                'id' => 46,
                'driver_id' => 5526,
                'order_id' => 1129,
                'merchant_id' => 115,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '380.00',
                'money' => '380.00',
                'arrival_warehouse_time' => '2018-07-24 17:47:00',
                'create_time' => '2018-07-24 09:48:08',
                'modify_time' => NULL,
            ),
            4 => 
            array (
                'id' => 47,
                'driver_id' => 5511,
                'order_id' => 1124,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '200.00',
                'money' => '200.00',
                'arrival_warehouse_time' => '2018-07-23 17:10:00',
                'create_time' => '2018-07-25 09:55:48',
                'modify_time' => NULL,
            ),
            5 => 
            array (
                'id' => 48,
                'driver_id' => 5405,
                'order_id' => 1209,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '2.00',
                'money' => '2.00',
                'arrival_warehouse_time' => '2018-07-25 15:40:00',
                'create_time' => '2018-07-25 15:15:08',
                'modify_time' => NULL,
            ),
            6 => 
            array (
                'id' => 49,
                'driver_id' => 5503,
                'order_id' => 1206,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '500.00',
                'money' => '500.00',
                'arrival_warehouse_time' => '2018-07-25 13:00:00',
                'create_time' => '2018-07-25 15:15:18',
                'modify_time' => NULL,
            ),
            7 => 
            array (
                'id' => 50,
                'driver_id' => 5488,
                'order_id' => 1149,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '410.00',
                'money' => '410.00',
                'arrival_warehouse_time' => '2018-07-25 20:09:00',
                'create_time' => '2018-07-25 15:15:24',
                'modify_time' => NULL,
            ),
            8 => 
            array (
                'id' => 51,
                'driver_id' => 5404,
                'order_id' => 1142,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '450.00',
                'money' => '450.00',
                'arrival_warehouse_time' => '2018-07-25 19:00:00',
                'create_time' => '2018-07-25 15:15:30',
                'modify_time' => NULL,
            ),
            9 => 
            array (
                'id' => 52,
                'driver_id' => 5405,
                'order_id' => 1212,
                'merchant_id' => 132,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '450.00',
                'money' => '450.00',
                'arrival_warehouse_time' => '2018-07-25 16:00:00',
                'create_time' => '2018-07-25 15:36:08',
                'modify_time' => NULL,
            ),
            10 => 
            array (
                'id' => 53,
                'driver_id' => 5531,
                'order_id' => 1137,
                'merchant_id' => 110,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '100.23',
                'money' => '100.23',
                'arrival_warehouse_time' => '2018-07-26 18:00:00',
                'create_time' => '2018-07-26 10:47:35',
                'modify_time' => '2018-07-26 10:47:35',
            ),
            11 => 
            array (
                'id' => 54,
                'driver_id' => 5401,
                'order_id' => 1248,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '2.00',
                'money' => '2.00',
                'arrival_warehouse_time' => '2018-07-26 13:26:00',
                'create_time' => '2018-07-26 11:25:58',
                'modify_time' => NULL,
            ),
            12 => 
            array (
                'id' => 55,
                'driver_id' => 5503,
                'order_id' => 1253,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '20.32',
                'money' => '20.32',
                'arrival_warehouse_time' => '2018-07-26 14:55:00',
                'create_time' => '2018-07-26 16:04:55',
                'modify_time' => NULL,
            ),
            13 => 
            array (
                'id' => 56,
                'driver_id' => 5367,
                'order_id' => 1139,
                'merchant_id' => 110,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '200.00',
                'money' => '200.00',
                'arrival_warehouse_time' => '2018-07-26 18:00:00',
                'create_time' => '2018-07-26 16:05:29',
                'modify_time' => NULL,
            ),
            14 => 
            array (
                'id' => 57,
                'driver_id' => 5488,
                'order_id' => 1256,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '2.00',
                'money' => '2.00',
                'arrival_warehouse_time' => '2018-07-26 15:00:00',
                'create_time' => '2018-07-26 16:22:47',
                'modify_time' => NULL,
            ),
            15 => 
            array (
                'id' => 58,
                'driver_id' => 5390,
                'order_id' => 1257,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '600.00',
                'money' => '600.00',
                'arrival_warehouse_time' => '2018-07-26 15:35:00',
                'create_time' => '2018-07-26 17:42:08',
                'modify_time' => NULL,
            ),
            16 => 
            array (
                'id' => 59,
                'driver_id' => 5526,
                'order_id' => 1244,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '650.00',
                'money' => '650.00',
                'arrival_warehouse_time' => '2018-07-26 10:50:00',
                'create_time' => '2018-07-27 10:00:21',
                'modify_time' => NULL,
            ),
            17 => 
            array (
                'id' => 60,
                'driver_id' => 5404,
                'order_id' => 1167,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '29.00',
                'money' => '29.00',
                'arrival_warehouse_time' => '2018-07-26 13:26:00',
                'create_time' => '2018-07-27 10:00:53',
                'modify_time' => NULL,
            ),
            18 => 
            array (
                'id' => 61,
                'driver_id' => 5404,
                'order_id' => 1166,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '29.00',
                'money' => '29.00',
                'arrival_warehouse_time' => '2018-07-25 13:26:00',
                'create_time' => '2018-07-27 10:01:03',
                'modify_time' => NULL,
            ),
            19 => 
            array (
                'id' => 62,
                'driver_id' => 5390,
                'order_id' => 1260,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '233.00',
                'money' => '233.00',
                'arrival_warehouse_time' => '2018-07-26 16:20:00',
                'create_time' => '2018-07-27 10:26:27',
                'modify_time' => NULL,
            ),
            20 => 
            array (
                'id' => 63,
                'driver_id' => 5503,
                'order_id' => 1300,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '500.00',
                'money' => '500.00',
                'arrival_warehouse_time' => '2018-07-27 09:45:00',
                'create_time' => '2018-07-27 14:57:05',
                'modify_time' => NULL,
            ),
            21 => 
            array (
                'id' => 64,
                'driver_id' => 5531,
                'order_id' => 1302,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '20.12',
                'money' => '20.12',
                'arrival_warehouse_time' => '2018-07-27 14:40:00',
                'create_time' => '2018-07-27 15:01:43',
                'modify_time' => NULL,
            ),
            22 => 
            array (
                'id' => 65,
                'driver_id' => 5415,
                'order_id' => 1273,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '0.00',
                'money' => '0.00',
                'arrival_warehouse_time' => '2018-07-26 17:15:00',
                'create_time' => '2018-07-27 16:12:22',
                'modify_time' => NULL,
            ),
            23 => 
            array (
                'id' => 66,
                'driver_id' => 5415,
                'order_id' => 1272,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '200.00',
                'money' => '200.00',
                'arrival_warehouse_time' => '2018-07-26 17:15:00',
                'create_time' => '2018-07-27 16:12:32',
                'modify_time' => NULL,
            ),
            24 => 
            array (
                'id' => 67,
                'driver_id' => 5531,
                'order_id' => 1303,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '200.00',
                'money' => '200.00',
                'arrival_warehouse_time' => '2018-07-27 18:30:00',
                'create_time' => '2018-07-27 17:17:15',
                'modify_time' => NULL,
            ),
            25 => 
            array (
                'id' => 68,
                'driver_id' => 5365,
                'order_id' => 1320,
                'merchant_id' => 129,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '31.00',
                'money' => '31.00',
                'arrival_warehouse_time' => '2018-07-28 10:45:00',
                'create_time' => '2018-07-28 10:33:13',
                'modify_time' => NULL,
            ),
            26 => 
            array (
                'id' => 69,
                'driver_id' => 5503,
                'order_id' => 1351,
                'merchant_id' => 101,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '360.00',
                'money' => '360.00',
                'arrival_warehouse_time' => '2018-07-31 11:10:00',
                'create_time' => '2018-07-31 14:22:36',
                'modify_time' => NULL,
            ),
            27 => 
            array (
                'id' => 71,
                'driver_id' => 5404,
                'order_id' => 1748,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '29.00',
                'money' => '29.00',
                'arrival_warehouse_time' => '2018-08-31 16:00:00',
                'create_time' => '2018-09-04 16:07:46',
                'modify_time' => NULL,
            ),
            28 => 
            array (
                'id' => 72,
                'driver_id' => 5390,
                'order_id' => 1813,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '40.00',
                'money' => '40.00',
                'arrival_warehouse_time' => '2018-09-04 16:42:00',
                'create_time' => '2018-09-04 16:44:07',
                'modify_time' => NULL,
            ),
            29 => 
            array (
                'id' => 73,
                'driver_id' => 5519,
                'order_id' => 1943,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-05 10:00:00',
                'create_time' => '2018-09-05 09:47:00',
                'modify_time' => NULL,
            ),
            30 => 
            array (
                'id' => 74,
                'driver_id' => 5519,
                'order_id' => 1946,
                'merchant_id' => 109,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-05 10:00:00',
                'create_time' => '2018-09-05 10:13:06',
                'modify_time' => NULL,
            ),
            31 => 
            array (
                'id' => 75,
                'driver_id' => 5390,
                'order_id' => 1912,
                'merchant_id' => 101,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-04 18:20:00',
                'create_time' => '2018-09-06 16:34:41',
                'modify_time' => '2018-09-06 16:34:41',
            ),
            32 => 
            array (
                'id' => 76,
                'driver_id' => 5471,
                'order_id' => 2064,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-12 12:00:00',
                'create_time' => '2018-09-12 14:40:12',
                'modify_time' => '2018-09-12 14:40:12',
            ),
            33 => 
            array (
                'id' => 77,
                'driver_id' => 5519,
                'order_id' => 2065,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-12 12:10:00',
                'create_time' => '2018-09-12 16:12:41',
                'modify_time' => '2018-09-12 16:12:41',
            ),
            34 => 
            array (
                'id' => 78,
                'driver_id' => 5519,
                'order_id' => 2067,
                'merchant_id' => 102,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-12 15:00:00',
                'create_time' => '2018-09-12 16:16:36',
                'modify_time' => '2018-09-12 16:16:36',
            ),
            35 => 
            array (
                'id' => 79,
                'driver_id' => 5519,
                'order_id' => 2069,
                'merchant_id' => 108,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '50.00',
                'money' => '50.00',
                'arrival_warehouse_time' => '2018-09-12 17:00:00',
                'create_time' => '2018-09-13 08:49:55',
                'modify_time' => '2018-09-13 08:49:55',
            ),
            36 => 
            array (
                'id' => 80,
                'driver_id' => 5499,
                'order_id' => 2059,
                'merchant_id' => 102,
                'charge_type' => 1,
                'task_type' => 2,
                'merchant_money' => '500.00',
                'money' => '500.00',
                'arrival_warehouse_time' => '2018-09-12 12:45:00',
                'create_time' => '2018-09-13 12:09:24',
                'modify_time' => '2018-09-13 12:09:24',
            ),
            37 => 
            array (
                'id' => 81,
                'driver_id' => 5422,
                'order_id' => 2117,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '110.00',
                'money' => '110.00',
                'arrival_warehouse_time' => '2018-09-14 15:40:00',
                'create_time' => '2018-09-14 17:07:55',
                'modify_time' => NULL,
            ),
            38 => 
            array (
                'id' => 82,
                'driver_id' => 5422,
                'order_id' => 2118,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '110.00',
                'money' => '110.00',
                'arrival_warehouse_time' => '2018-09-15 15:40:00',
                'create_time' => '2018-09-15 16:56:03',
                'modify_time' => NULL,
            ),
            39 => 
            array (
                'id' => 83,
                'driver_id' => 5422,
                'order_id' => 2120,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '110.00',
                'money' => '110.00',
                'arrival_warehouse_time' => '2018-09-17 15:40:00',
                'create_time' => '2018-09-17 15:25:07',
                'modify_time' => NULL,
            ),
            40 => 
            array (
                'id' => 84,
                'driver_id' => 5370,
                'order_id' => 2036,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '233.00',
                'money' => '233.00',
                'arrival_warehouse_time' => '2018-09-17 10:50:00',
                'create_time' => '2018-09-17 15:25:42',
                'modify_time' => NULL,
            ),
            41 => 
            array (
                'id' => 85,
                'driver_id' => 5404,
                'order_id' => 2033,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 1,
                'merchant_money' => '450.00',
                'money' => '450.00',
                'arrival_warehouse_time' => '2018-09-17 19:00:00',
                'create_time' => '2018-09-17 15:37:03',
                'modify_time' => '2018-09-17 15:37:03',
            ),
            42 => 
            array (
                'id' => 86,
                'driver_id' => 5488,
                'order_id' => 2430,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 0,
                'merchant_money' => '410.00',
                'money' => '410.00',
                'arrival_warehouse_time' => '2018-10-03 20:09:00',
                'create_time' => '2018-09-27 16:48:25',
                'modify_time' => '2018-09-27 16:48:25',
            ),
            43 => 
            array (
                'id' => 87,
                'driver_id' => 5404,
                'order_id' => 2429,
                'merchant_id' => 113,
                'charge_type' => 1,
                'task_type' => 0,
                'merchant_money' => '450.00',
                'money' => '450.00',
                'arrival_warehouse_time' => '2018-10-03 19:00:00',
                'create_time' => '2018-09-27 17:00:17',
                'modify_time' => '2018-09-27 17:00:17',
            ),
            44 => 
            array (
                'id' => 88,
                'driver_id' => 5471,
                'order_id' => 2441,
                'merchant_id' => 115,
                'charge_type' => 1,
                'task_type' => 0,
                'merchant_money' => '320.00',
                'money' => '320.00',
                'arrival_warehouse_time' => '2018-10-03 19:00:00',
                'create_time' => '2018-09-27 17:08:51',
                'modify_time' => '2018-09-27 17:08:51',
            ),
            45 => 
            array (
                'id' => 89,
                'driver_id' => 5390,
                'order_id' => 2443,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 0,
                'merchant_money' => '33.00',
                'money' => '33.00',
                'arrival_warehouse_time' => '2018-10-03 18:25:00',
                'create_time' => '2018-09-27 17:09:01',
                'modify_time' => '2018-09-27 17:09:01',
            ),
            46 => 
            array (
                'id' => 90,
                'driver_id' => 5405,
                'order_id' => 2427,
                'merchant_id' => 111,
                'charge_type' => 1,
                'task_type' => 0,
                'merchant_money' => '266.00',
                'money' => '266.00',
                'arrival_warehouse_time' => '2018-10-03 16:52:00',
                'create_time' => '2018-09-27 17:09:23',
                'modify_time' => '2018-09-27 17:09:23',
            ),
        ));
        
        
    }
}