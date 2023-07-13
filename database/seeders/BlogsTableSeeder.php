<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            ['category_id' => 3,'sub_category_id' => 9,'author' => 'John Doe','title' => 'Tin tức đầu tiên','slug' => 'tin-tuc-dau-tien','image' => 'assets/blog/Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'Khách hàng là rất quan trọng, sản phẩm sẽ được theo dõi bởi khách hàng.','created_at' => now(),'updated_at' => now(),],
            ['category_id' => 3,'sub_category_id' => 10,'author' => 'Jane Smith','title' => 'Tin tức thứ hai','slug' => 'tin-tuc-thu-hai','image' => 'assets/blog/Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'Sản phẩm phải phù hợp về mặt tiêu dùng đồng thời phải có những yếu tố mà người dùng cần','created_at' => now(),'updated_at' => now(),],
            ['category_id' => 3,'sub_category_id' => 11,'author' => 'Jane Smith','title' => 'Tin tức thứ ba','slug' => 'tin-tuc-thu-ba','image' => 'assets/blog/Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'Bộ phân tích logic GoLogicXL giúp kiểm tra kỹ thuật số và gỡ lỗi nhanh chóng và dễ dàng. Bộ phân tích logic tốt nhất giúp giải quyết các vấn đề thiết kế mạch một cách nhanh chóng. Máy phân tích logic NCI tìm thấy các lỗi về thời gian mà các Công cụ Đo lường và Kiểm tra khác bỏ qua.','created_at' => now(),'updated_at' => now(),],
        ];

        DB::table('blogs')->insert($blogs);
    }
}