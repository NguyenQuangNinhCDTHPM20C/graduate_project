<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['brand_id' => 1,'category_id' => 1,'sub_category_id' => 1,'name' => 'Dell Inspiron 15','slug' => 'dell-inspiron-15','code' => 'DI15','quantity' => 50, 'selling_price' => 23990000,'discount_price' => 16990000,
             'description' => 'Sở hữu thiết kế hiện đại nhưng không kém phần sang trọng, cá tính cùng hiệu năng mạnh mẽ, giá thành lại vô cùng hợp lý, Laptop Dell Inspiron 15 đích thực là sự lựa chọn hoàn hảo dành cho bạn.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 1],
            ['brand_id' => 2,'category_id' => 1,'sub_category_id' => 2,'name' => 'HP Pavilion 15','slug' => 'hp-pavilion-15','code' => 'HP15','quantity' => 30, 'selling_price' => 20490000,'discount_price' => 15790000,'description' => 'Laptop HP Pavilion 15 chính hãng được trang bị pin 3-cell, 41 Wh Li-ion đáp ứng nhu cầu sử dụng của người dùng trong suốt một ngày dài. Nó cũng được trang bị sẵn webcam để hỗ trợ người dùng trong các buổi họp trực tuyến. Sản phẩm phù hợp với cả đối tượng người dùng là học sinh, sinh viên hoặc người đi làm. 
            ', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 2],
            ['brand_id' => 3,'category_id' => 1,'sub_category_id' => 3,'name' => 'Laptop Lenovo Legion 5 15IAH7','slug' => 'laptop-lenovo-legion-5-15iah7','code' => 'LEGION15IAH7','quantity' => 30, 'selling_price' => 32190000,'discount_price' => 24990000,
             'description' => 'Lenovo Legion 5 15ARH7 được hãng tích hợp đầy đủ mọi loại cổng kết nối hiện đại nhất hiện nay bao gồm: 1 cổng HDMI; 1 cổng USB-C/DisplayPort; 3 cổng USB 3.2 cùng 1 cổng LAN 1Gb/s cho tốc độ kết nối Internet cao và ổn định. Các chuẩn kết nối không dây xuất hiện trên máy gồm có Wifi 802.11ax (Wifi 6) cho kết nối mạng không dây ổn định, ít độ trễ và Bluetooth 5.2 giúp kết nối với các thiết bị di động khác nhanh chóng, thuận tiện hơn.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 3],
            ['brand_id' => 6,'category_id' => 1,'sub_category_id' => 4,'name' => 'Laptop Apple MacBook Air 13 inch M1','slug' => 'laptop-apple-macbook-air-13-inch-m1','code' => 'MACM1','quantity' => 100, 'selling_price' => 27990000,'discount_price' => 18290000,
             'description' => 'MacBook Air M1 thực sự là một chiếc ultrabook đẹp và mạnh mẽ của năm 2020. Đây chắc chắn sẽ là công cụ hữu hiệu giúp bạn thực hiện toàn bộ công việc trong ngày của bạn và đem lại những giây phút giải trí cực đã.
             Hiện tại sản phẩm được bán chính hãng tại hệ thống DOUBLNSHOP – nhà bán lẻ uỷ quyền chính thức của Apple tại thị trường Việt Nam, được bảo hành 12 tháng. Bạn có thể đặt hàng trên web DOUBLHP để sở hữu chiếc máy tính này nhé!', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 4],
            ['brand_id' => 2,'category_id' => 2,'sub_category_id' => 8,'name' => 'Wireless Mouse HP Z3700','slug' => 'wireless-mouse-hp-Z3700','code' => 'WLHPZ3700','quantity' => 20, 'selling_price' => 759000,'discount_price' => 340000,
             'description' => 'HP là nhà sản xuất các thiết bị công nghệ nổi tiếng đến từ Mỹ. Bên cạnh những mẫu máy tính laptop hiệu năng mạnh mẽ, HP cũng sản xuất các loại phụ kiện đi kèm. Chuột không dây HP Z3700 là một trong số những sản phẩm mới của nhà HP. Với ưu điểm nhỏ gọn, tiện lợi, chuột HP Z3700 chính hãng là sự lựa chọn không thể thiếu với những người dùng là học sinh, sinh viên, dân văn phòng,... Nếu bạn đang có nhu cầu tìm mua một con chuột không dây thì hãy tham khảo sản phẩm này nhé.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 5],
            ['brand_id' => 3,'category_id' => 2,'sub_category_id' => 6,'name' => 'Rapoo V700 Bluetooth Mechanical Keyboard - 8A','slug' => 'rapoo-v700-bluetooth-mechanical-keyboard-8a','code' => 'KB8A','quantity' => 20, 'selling_price' => 3499000,'discount_price' => 2890000,
             'description' => 'Bàn Phím Cơ Bluetooth Rapoo V700 - 8A có kiểu dáng tối giản cùng cách phối màu độc đáo, kích thước cực kỳ nhỏ gọn không chiếm quá nhiều diện tích khi đặt trên bàn làm việc, dễ dàng bỏ vào balo hay vali để mang theo bất cứ đâu.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 6],
            ['brand_id' => 4,'category_id' => 2,'sub_category_id' => 7,'name' => 'RAM laptop KINGMAX (1x4GB) DDR3 1600MHz','slug' => 'ram-laptop-kingmax-(1x4gb)-DDR3L-1600MHz','code' => 'RKM1X4','quantity' => 20, 'selling_price' => 1712000,'discount_price' => 1250000,
             'description' => 'RAM Laptop Kingston (KVR16LS11/4WP) 4GB (1x4GB) DDR3 1600MHz đảm bảo sẽ là một giải pháp bộ nhớ RAM tuyệt vời dành cho các thiết bị laptop. Công nghệ RAM DDR3 với bus 1600MHz sẽ giúp nâng trải nghiệm đa nhiệm chiếc laptop của bạn lên một tầm cao mới.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 7],
            ['brand_id' => 5,'category_id' => 2,'sub_category_id' => 5,'name' => 'Pin laptop Asus A32-K55','slug' => 'pin-laptop-asus-A32-K55','code' => 'PASUSA32','quantity' => 20, 'selling_price' => 590000,'discount_price' => 590000,
             'description' => 'Pin laptop Asus A32-K55 là loại pin có thể sạc lại, với của công nghệ lithium-ion sử dụng chất điện phân polymer cung cấp năng lượng cao đem lại hiệu suất tối đa cho viên pin của bạn.Pin Laptop Asus A32-K55 thời lượng pin sử dụng được lâu dài, là hàng mới 100%, sản phẩm được đảm bảo tương thích 100% với máy của bạn và đã được kiểm định chất lượng trước khi bán ra.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 8],
        ];
        
        DB::table('products')->insert($products);
    }
}