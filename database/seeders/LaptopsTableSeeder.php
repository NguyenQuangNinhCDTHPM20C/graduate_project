<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops = [
            [
                'product_id' => 1,
                'cpu_brand' => 'Intel',
                'cpu_series' => 'Core i7',
                'cpu_model' => 'i7-10700K',
                'cpu_base_clock' => '3.80',
                'cpu_cache' => '16MB',
                'cpu_max_clock' => '5.10',
                'cpu_cores' => '8',
                'cpu_threads' => '16',
                'ram_size' => '16',
                'ram_standard' => 'DDR4',
                'ram_speed' => '3200',
                'storage_capacity' => '1000',
                'ram_socket_type' => 'SO-DIMM',
                'storage_type' => 'SSD',
                'display_size' => '15.6"',
                'display_resolution' => '1920x1080',
                'display_technology' => 'I',
                'refresh_rate' => '60',
                'graphics_vram' => '4GB',
                'onboard_graphics' => '0',
                'dedicated_graphics' => 'NVIDIA GeForce GTX 1650',
                'wireless_connectivity' => 'Wi-Fi 6, Bluetooth 5.0',
                'operating_system' => 'Windows 10',
                'dimensions' => '360 x 250 x 20 mm',
                'weight' => '2.2',
                'battery_capacity' => '5000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'cpu_brand' => 'Intel',
                'cpu_series' => 'Core i7',
                'cpu_model' => 'i7-10700K',
                'cpu_base_clock' => '3.80',
                'cpu_cache' => '16MB',
                'cpu_max_clock' => '5.10',
                'cpu_cores' => '8',
                'cpu_threads' => '16',
                'ram_size' => '16',
                'ram_standard' => 'DDR4',
                'ram_speed' => '3200',
                'storage_capacity' => '1000',
                'ram_socket_type' => 'SO-DIMM',
                'storage_type' => 'SSD',
                'display_size' => '15.6"',
                'display_resolution' => '1920x1080',
                'display_technology' => 'IPS',
                'refresh_rate' => '60',
                'graphics_vram' => '4GB',
                'onboard_graphics' => '0',
                'dedicated_graphics' => 'NVIDIA GeForce GTX 1650',
                'wireless_connectivity' => 'Wi-Fi 6, Bluetooth 5.0',
                'operating_system' => 'Windows 10',
                'dimensions' => '360 x 250 x 20 mm',
                'weight' => '2.2',
                'battery_capacity' => '5000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'cpu_brand' => 'Intel',
                'cpu_series' => 'Core i5',
                'cpu_model' => 'i5-10300H',
                'cpu_base_clock' => '2.50',
                'cpu_cache' => '8MB',
                'cpu_max_clock' => '4.50',
                'cpu_cores' => '4',
                'cpu_threads' => '8',
                'ram_size' => '8',
                'ram_standard' => 'DDR4',
                'ram_speed' => '2666',
                'storage_capacity' => '512',
                'ram_socket_type' => 'SO-DIMM',
                'storage_type' => 'SSD',
                'display_size' => '15.6"',
                'display_resolution' => '1920x1080',
                'display_technology' => 'IPS',
                'refresh_rate' => '60',
                'graphics_vram' => '4GB',
                'onboard_graphics' => '0',
                'dedicated_graphics' => 'NVIDIA GeForce GTX 1650 Ti',
                'wireless_connectivity' => 'Wi-Fi 6, Bluetooth 5.0',
                'operating_system' => 'Windows 10',
                'dimensions' => '359 x 249 x 24 mm',
                'weight' => '2.3',
                'battery_capacity' => '5200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'cpu_brand' => 'Apple',
                'cpu_series' => 'M1',
                'cpu_model' => 'Apple M1',
                'cpu_base_clock' => '3.20',
                'cpu_cache' => '16MB',
                'cpu_max_clock' => '4.10',
                'cpu_cores' => '8',
                'cpu_threads' => '8',
                'ram_size' => '16',
                'ram_standard' => 'LPDDR4X',
                'ram_speed' => '4266',
                'storage_capacity' => '512',
                'ram_socket_type' => '',
                'storage_type' => 'SSD',
                'display_size' => '13.3"',
                'display_resolution' => '2560x1600',
                'display_technology' => 'IPS Retina',
                'refresh_rate' => '60',
                'graphics_vram' => '',
                'onboard_graphics' => '1',
                'dedicated_graphics' => '',
                'wireless_connectivity' => 'Wi-Fi 6, Bluetooth 5.0',
                'operating_system' => 'macOS Big Sur',
                'dimensions' => '304.1 x 212.4 x 16.1 mm',
                'weight' => '1.29',
                'battery_capacity' => '5038',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        DB::table('laptops')->insert($laptops);
    }
}