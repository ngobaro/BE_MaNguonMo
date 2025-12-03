<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "api" middleware group. Enjoy building your API!
|
*/

// Route test đơn giản
Route::get('/test', function () {
    return response()->json(['ok' => true, 'message' => 'API Laravel chạy mượt!']);
});

// Route /posts: Trả fake JSON data (không cần DB)
Route::get('/posts', function () {
    $fakePosts = [
        [
            'id' => 1,
            'title' => 'Bài viết test 1: Hướng dẫn React + Laravel',
            'content' => 'Nội dung dài dòng về fullstack dev, fetch API thành công với CORS đã fix. Ngày 03/12/2025, thời tiết đẹp để code!',
            'author' => 'Grok Bro',
            'created_at' => '2025-12-03 10:00:00'
        ],
        [
            'id' => 2,
            'title' => 'Fake post 2: CORS không còn là ác mộng',
            'content' => 'Hướng dẫn config cors.php, middleware HandleCors, và test fetch từ localhost:3000. Giờ React load data mượt mà, no more "Failed to fetch"!',
            'author' => 'Dev Helper',
            'created_at' => '2025-12-03 14:30:00'
        ],
        [
            'id' => 3,
            'title' => 'Bài cuối: Dữ liệu giả cho test UI',
            'content' => 'React map posts thành cards đẹp, với spinner loading và error handling. Author ẩn danh nếu null. Date format vi-VN: 03/12/2025.',
            'author' => null,  // Test fallback 'Ẩn danh' trong React
            'created_at' => '2025-12-03 16:45:00'
        ]
    ];

    return response()->json($fakePosts);
});