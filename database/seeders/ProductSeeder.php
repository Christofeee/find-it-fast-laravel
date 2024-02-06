<?php

namespace Database\Seeders;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartPhonesCategoryId = Category::where('name', 'Smart Phones')->first()->id;
        $desktopsCategoryId = Category::where('name', 'Desktops')->first()->id;
        $laptopsCategoryId = Category::where('name', 'Laptops')->first()->id;

        // Seed products
        $products = [
            [
                'name' => 'brand: Apple, model: iPhone 13 Pro',
                'price' => 999.00,
                'short_description' => 'Pro camera and A15 Bionic.',
                'long_description' => 'Processor: Apple A15 Bionic, RAM: 6 GB, Storage: 128 GB SSD, Battery: 3095 mAh, Colour: Graphite',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Samsung, model: Galaxy S21 Ultra',
                'price' => 1199.99,
                'short_description' => 'Powerful with S Pen support.',
                'long_description' => 'Processor: Exynos 2100, RAM: 12 GB, Storage: 256 GB UFS 3.1, Battery: 5000 mAh, Colour: Phantom Black',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Google, model: Pixel 6 Pro',
                'price' => 899.00,
                'short_description' => 'Tensor chip and advanced camera.',
                'long_description' => 'Processor: Google Tensor, RAM: 12 GB, Storage: 128 GB UFS 3.1, Battery: 4600 mAh, Colour: Stormy Black',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: OnePlus, model: 9 Pro',
                'price' => 1069.00,
                'short_description' => 'Hasselblad camera and high-performance.',
                'long_description' => 'Processor: Qualcomm Snapdragon 888, RAM: 8 GB, Storage: 256 GB UFS 3.1, Battery: 4500 mAh, Colour: Morning Mist',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Apple, model: iPhone SE (2nd generation)',
                'price' => 399.00,
                'short_description' => 'Compact with A13 Bionic.',
                'long_description' => 'Processor: Apple A13 Bionic, RAM: 3 GB, Storage: 64 GB NVMe, Battery: 1821 mAh, Colour: Product(RED)',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Xiaomi, model: Mi 11',
                'price' => 699.99,
                'short_description' => 'Feature-packed with high-refresh-rate.',
                'long_description' => 'Processor: Qualcomm Snapdragon 888, RAM: 8 GB, Storage: 128 GB UFS 3.1, Battery: 4600 mAh, Colour: Midnight Gray',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Samsung, model: Galaxy Z Fold 3',
                'price' => 1799.99,
                'short_description' => 'Foldable and water-resistant.',
                'long_description' => 'Processor: Qualcomm Snapdragon 888, RAM: 12 GB, Storage: 256 GB UFS 3.1, Battery: 4400 mAh, Colour: Phantom Black',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Oppo, model: Find X3 Pro',
                'price' => 1199.00,
                'short_description' => 'Microscope camera and 10-bit display.',
                'long_description' => 'Processor: Qualcomm Snapdragon 888, RAM: 12 GB, Storage: 256 GB UFS 3.1, Battery: 4500 mAh, Colour: Gloss Black',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Apple, model: iPhone 13 mini',
                'price' => 699.00,
                'short_description' => 'Compact with A15 Bionic.',
                'long_description' => 'Processor: Apple A15 Bionic, RAM: 4 GB, Storage: 128 GB NVMe, Battery: 2406 mAh, Colour: Pink',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Sony, model: Xperia 1 III',
                'price' => 1199.99,
                'short_description' => '4K HDR display and variable lens.',
                'long_description' => 'Processor: Qualcomm Snapdragon 888, RAM: 12 GB, Storage: 256 GB UFS 3.1, Battery: 4500 mAh, Colour: Frosted Black',
                'category_id' => $smartPhonesCategoryId,
            ],
            [
                'name' => 'brand: Dell, model: XPS 8940',
                'price' => 1299.99,
                'short_description' => 'High-performance desktop for productivity and multimedia tasks.',
                'long_description' => 'CPU: Intel Core i7-10700, RAM: 16 GB, Storage Type: SSD, Storage Size: 512 GB, Colour: Silver',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: HP, model: Pavilion TG01',
                'price' => 999.99,
                'short_description' => 'Affordable desktop with powerful specs for gaming and work.',
                'long_description' => 'CPU: AMD Ryzen 5 3600, RAM: 8 GB, Storage Type: HDD, Storage Size: 1 TB, Colour: Shadow Black',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: ASUS, model: ROG Strix GA15',
                'price' => 1499.99,
                'short_description' => 'Gaming desktop with RGB lighting and high-speed performance.',
                'long_description' => 'CPU: AMD Ryzen 7 5800X, RAM: 16 GB, Storage Type: SSD + HDD, Storage Size: 1 TB + 512 GB, Colour: Eclipse Gray',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: CyberPowerPC, model: Gamer Xtreme VR',
                'price' => 1199.99,
                'short_description' => 'VR-ready gaming desktop with excellent graphics capabilities.',
                'long_description' => 'CPU: Intel Core i5-10400F, RAM: 8 GB, Storage Type: SSD + HDD, Storage Size: 240 GB + 1 TB, Colour: Black',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: Acer, model: Aspire TC-895',
                'price' => 649.99,
                'short_description' => 'Budget-friendly desktop for everyday computing needs.',
                'long_description' => 'CPU: Intel Core i3-10100, RAM: 8 GB, Storage Type: SSD, Storage Size: 256 GB, Colour: Black',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: Lenovo, model: IdeaCentre 5',
                'price' => 799.99,
                'short_description' => 'Versatile desktop for home and office use.',
                'long_description' => 'CPU: AMD Ryzen 5 4600G, RAM: 12 GB, Storage Type: HDD, Storage Size: 1 TB, Colour: Mineral Gray',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: MSI, model: Trident X Plus',
                'price' => 2299.99,
                'short_description' => 'Compact gaming desktop with high-end graphics and performance.',
                'long_description' => 'CPU: Intel Core i7-9700K, RAM: 32 GB, Storage Type: SSD + HDD, Storage Size: 512 GB + 2 TB, Colour: Mystic Light',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: Skytech, model: Archangel Gaming PC',
                'price' => 1149.99,
                'short_description' => 'Gaming desktop with powerful NVIDIA graphics card.',
                'long_description' => 'CPU: AMD Ryzen 5 3600, RAM: 16 GB, Storage Type: SSD, Storage Size: 500 GB, Colour: White',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: Dell, model: Inspiron 3880',
                'price' => 849.99,
                'short_description' => 'Reliable desktop for home and office tasks.',
                'long_description' => 'CPU: Intel Core i5-10400, RAM: 12 GB, Storage Type: SSD + HDD, Storage Size: 256 GB + 1 TB, Colour: Black',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: Alienware, model: Aurora R12',
                'price' => 2799.99,
                'short_description' => 'High-end gaming desktop with customizable lighting.',
                'long_description' => 'CPU: Intel Core i9-11900KF, RAM: 32 GB, Storage Type: SSD + HDD, Storage Size: 1 TB + 2 TB, Colour: Lunar Light',
                'category_id' => $desktopsCategoryId,
            ],
            [
                'name' => 'brand: MSI, model: Thin GF63 12VE-066US',
                'price' => 938.00,
                'short_description' => 'Powerful gaming laptop with sleek design.',
                'long_description' => 'CPU: Core i7, RAM: 16 GB, Storage Type: HD, Storage Size: 512 GB, Colour: Core Black',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: Apple, model: MacBook Air',
                'price' => 689.99,
                'short_description' => 'Ultra-light laptop for on-the-go professionals.',
                'long_description' => 'CPU: Unknown, RAM: 8 GB, Storage Type: HD, Storage Size: 256 GB, Colour: Silver',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: ASUS, model: ROG Strix G16',
                'price' => 1274.03,
                'short_description' => 'High-performance gaming laptop with RGB lighting.',
                'long_description' => 'CPU: Core i7, RAM: 16 GB, Storage Type: HD, Storage Size: 512 GB, Colour: Eclipse Gray',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: acer, model: Nitro 17',
                'price' => 1199.99,
                'short_description' => 'Immersive gaming experience with large display.',
                'long_description' => 'CPU: AMD Ryzen 7, RAM: 16 GB, Storage Type: HD, Storage Size: 1 TB, Colour: Black',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: HP, model: Pavilion X360',
                'price' => 499.99,
                'short_description' => 'Convertible laptop for work and entertainment.',
                'long_description' => 'CPU: Core i5-1130G7, RAM: 8 GB, Storage Type: HD, Storage Size: 256 GB, Colour: Gold',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: Lenovo, model: Chromebook',
                'price' => 114.74,
                'short_description' => 'Compact and affordable Chromebook for daily tasks.',
                'long_description' => 'CPU: MediaTek MT8183, RAM: 4 GB, Storage Type: HD, Storage Size: 32 GB, Colour: Black',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: DELL, model: Inspiron',
                'price' => 899.99,
                'short_description' => 'Versatile laptop for productivity and entertainment.',
                'long_description' => 'CPU: Intel Core i5, RAM: 32 GB, Storage Type: HD, Storage Size: 1000 GB, Colour: Silver',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: Razer, model: Razer Blade 14',
                'price' => 2699.99,
                'short_description' => 'Premium gaming laptop with high-end specs.',
                'long_description' => 'CPU: Ryzen 9 7900X, RAM: 16 GB, Storage Type: HD, Storage Size: 1 TB, Colour: Black',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: Dell, model: XPS 13',
                'price' => 1299.00,
                'short_description' => 'Sleek ultrabook with InfinityEdge display.',
                'long_description' => 'CPU: Intel Core i7, RAM: 16 GB, Storage Type: SSD, Storage Size: 512 GB, Colour: Platinum       Silver',
                'category_id' => $laptopsCategoryId,
            ],
            [
                'name' => 'brand: Lenovo, model: Legion 5',
                'price' => 1149.99,
                'short_description' => 'Gaming powerhouse with AMD Ryzen processor.',
                'long_description' => 'CPU: AMD Ryzen 7 5800H, RAM: 16 GB, Storage Type: SSD, Storage Size: 1 TB, Colour: Phantom Black',
                'category_id' => $laptopsCategoryId,
            ],
        ];

        foreach ($products as $productData) {
            Product::insert($productData);
        }
    }
}

