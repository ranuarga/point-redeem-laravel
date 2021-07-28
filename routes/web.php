<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');
Route::get('activity', 'MemberActivityController@index')->name('activity');
Route::get('reward', 'MemberRewardController@index')->name('reward');
Route::get('article/{id}', 'MemberArticleController@show')->name('article');

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login')->name('login.post');
Route::get('register', 'RegisterController@index')->name('register');
Route::post('register', 'RegisterController@store')->name('register.post');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::middleware('auth:member')->group(function () {
    Route::get('reward/redeem/{id}', 'MemberRewardController@redeem')->name('reward.redeem');

    Route::get('my-article', 'MemberArticleController@index')->name('my-article');
    Route::get('my-article/create', 'MemberArticleController@create')->name('my-article.create');
    Route::post('my-article/store', 'MemberArticleController@storeWeb')->name('my-article.store');
    Route::get('my-article/{id}/edit', 'MemberArticleController@edit')->name('my-article.edit');
    Route::post('my-article/{id}/update', 'MemberArticleController@updateWeb')->name('my-article.update');
    Route::get('my-article/{id}/delete', 'MemberArticleController@destroy')->name('my-article.delete');

    Route::post('comment/{article_id}', 'MemberArticleController@writeComment')->name('comment.store');

    Route::get('point-history', 'MemberHistoryController@pointHistory')->name('point-history');
    Route::get('reward-history', 'MemberHistoryController@rewardHistory')->name('reward-history');

    Route::get('my-account', 'MemberController@myAccount')->name('my-account');
    Route::post('my-account', 'MemberController@updateMyAccount')->name('my-account.update');
});

Route::get('admin/login', 'LoginController@showAdminLoginForm')->name('admin.login');
Route::post('admin/login', 'LoginController@adminLogin')->name('admin.login.post');

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('logout', 'LoginController@adminLogout')->name('admin.logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('activity', 'ActivityController@index')->name('admin.activity');
    
    Route::get('member', 'MemberController@index')->name('admin.member');
    Route::get('member/{id}/point-history', 'MemberController@pointHistory')->name('admin.member.point-history');

    Route::get('reward', 'RewardController@index')->name('admin.reward');
    Route::get('reward/create', 'RewardController@create')->name('admin.reward.create');
    Route::post('reward/store', 'RewardController@storeWeb')->name('admin.reward.store');
    Route::get('reward/{id}/edit', 'RewardController@edit')->name('admin.reward.edit');
    Route::post('reward/{id}/update', 'RewardController@updateWeb')->name('admin.reward.update');
    Route::get('reward/{id}/delete', 'RewardController@destroy')->name('admin.reward.delete');
    
    Route::get('redeem-request', 'RedeemRequestController@index')->name('admin.redeem-request');
    Route::get('redeem-request/{id}/accept', 'RedeemRequestController@accept')->name('admin.redeem-request.accept');
    Route::get('redeem-request/{id}/deny', 'RedeemRequestController@deny')->name('admin.redeem-request.deny');
    
    Route::get('article', 'ArticleController@index')->name('admin.article');
    Route::get('article/{id}/comment', 'ArticleController@articleComment')->name('admin.article.comment');
});