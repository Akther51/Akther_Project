<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/', 'FrontController@saveAdminLogin');
//Route::get('/register','FrontController@register');

Route::get('/','FrontController@frontIndex');

Route::get('/front/menu/about-content','FrontController@aboutContent');
Route::get('/front/menu/portfolio-content','FrontController@portfolioContent');
Route::get('/front/menu/blog-content','FrontController@blogContent');
Route::get('/front/menu/icon-content','FrontController@iconContent');
Route::get('/front/menu/typography','FrontController@Typography');
Route::get('/front/menu/contact','FrontController@ContactUS');

Route::get('/admin/category/add-category','CategoryController@AddCategory');
Route::get('/admin/category/manage-category','CategoryController@ManageCategory');
Route::post('/category/save-category','CategoryController@SaveCategoryInfo');
Route::get('/category/Unpublished-category/{id}','CategoryController@UnpublishedCategoryInfo');
Route::get('/category/published-category/{id}','CategoryController@publishedCategoryInfo');
Route::get('/category/edit-category/{id}','CategoryController@EditCategoryInfo');
Route::post('/category/update-Category','CategoryController@updateCategoryInfo');
Route::get('/category/delete-Category/{id}','CategoryController@deleteCategoryInfo');

Route::get('/admin/blog/add-blog', 'BlogController@AddBlogInfo');
Route::get('/admin/blog/manage-blog', 'BlogController@ManageBlogInfo');
Route::post('/blog/save-blog', 'BlogController@SaveBlogInformation');

