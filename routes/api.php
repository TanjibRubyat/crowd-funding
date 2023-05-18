<?php

use Illuminate\Http\Request;
use App\Models\HomeTopSlider;
use App\Models\CampaignOverview;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\Api\OurTeamController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\VisitorController;
use App\Http\Controllers\Api\CampaignController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OurInvestorController;
use App\Http\Controllers\Api\PossibilityController;
use App\Http\Controllers\Api\HomeTopSliderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home-top-slider', [HomeTopSliderController::class, 'index']);
Route::post('home-top-slider-store', [HomeTopSliderController::class, 'store']);

Route::post('possibility-store', [PossibilityController::class, 'store']);

//category start
Route::post('category-store', [CategoryController::class, 'store']);
Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories-update/{slug}', [CategoryController::class, 'update']);
Route::get('categories/{slug}', [CategoryController::class, 'show']);
Route::get('product-by-category', [CategoryController::class, 'product_by_cat']);
Route::get('category-delete/{slug}', [CategoryController::class, 'destroy']);
//category end

// product start
Route::post('product-store', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{slug}', [ProductController::class, 'show']);
Route::post('products-update/{slug}', [ProductController::class, 'update']);
Route::get('product-delete/{slug}', [ProductController::class, 'destroy']);
Route::post('product-image-update/{id}', [ProductController::class, 'update_product_image']);
Route::get('product-image-delete/{id}', [ProductController::class, 'delete_product_image']);
// product end

// blog start
Route::post('blog-store', [BlogController::class, 'store']);
Route::get('blogs', [BlogController::class, 'index']);
Route::get('blogs/{id}', [BlogController::class, 'show']);
Route::post('blogs-update/{id}', [BlogController::class, 'update']);
Route::get('blog-delete/{id}', [BlogController::class, 'destroy']);
// blog end

// story start
Route::post('story-store', [StoryController::class, 'store']);
Route::get('stories', [StoryController::class, 'index']);
Route::get('stories/{id}', [StoryController::class, 'show']);
Route::post('stories-update/{id}', [StoryController::class, 'update']);
Route::get('story-delete/{id}', [StoryController::class, 'destroy']);
// story end

// our team start
Route::post('our-team-store', [OurTeamController::class, 'store']);
Route::get('our-team', [OurTeamController::class, 'index']);
Route::get('our-team/{id}', [OurTeamController::class, 'show']);
Route::post('our-team-update/{id}', [OurTeamController::class, 'update']);
Route::get('our-team-delete/{id}', [OurTeamController::class, 'destroy']);
// our team end

// our investor start
Route::post('our-investor-store', [OurInvestorController::class, 'store']);
Route::get('our-investor', [OurInvestorController::class, 'index']);
Route::get('our-investor/{id}', [OurInvestorController::class, 'show']);
Route::post('our-investor-update/{id}', [OurInvestorController::class, 'update']);
Route::get('our-investor-delete/{id}', [OurInvestorController::class, 'destroy']);
Route::get('investor-count', [OurInvestorController::class, 'investor_count']);
// our investor end

Route::get('monthly-blog-reader', [VisitorController::class, 'monthly_blog_reader']);

Route::post('campaign-overview-store', [CampaignController::class, 'campaign_overview']);
Route::post('campaign-about-store', [CampaignController::class, 'campaign_about']);
Route::post('campaign-update', [CampaignController::class, 'campaign_update']);
Route::post('campaign-reward-store', [CampaignController::class, 'campaign_reward']);
Route::post('faq-store', [CampaignController::class, 'faq']);


Route::post('user-register', [UserController::class, 'user_register']);
Route::post('login', [UserController::class, 'login']);
// Route::group(['middleware' => ['auth:sanctum']], function (Request $request) {
    // return $request->user();
    Route::get('logout', [UserController::class, 'logout']);
// });
