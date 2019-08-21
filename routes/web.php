<?php
Route::get('/','PagesController@firstPage');
Route::get('/registrationPage','PagesController@registraionPage');
Route::get('/logPage','PagesController@loginPage')->name('login.Page');
Route::get('/registrationProcess','registration_insertion@userRegistraion');
Route::get('/loginUserChecking','loginUser@uservarification');
// admin profilePageRouting
Route::get('/adminProfilePage', 'adminProfileController@viewProfile')->name('admin.profile');

// all registers list
Route::get('/registerList','RegistrationController@register')->name('admin.homePage');
// admin Book showing
Route::get('/adminBookList', 'viewAllBooksInList@showBooksList');
// adding book in book Store
Route::get('/addBookInBookStore', 'addBookController@insertBooks');
Route::get('/insertingBooksInfo', 'insertBooksItem@insertingAll');
//Book searching process
Route::get('/adminProfilePage/live_search', 'LiveSearch@index');
Route::get('/adminProfilePage/live_search/action', 'LiveSearch@action')->name('live_search.action');
//customer finding process
Route::get('/adminProfilePage/live_searchCustomer', 'LiveSearchCustomer@index');
Route::get('/adminProfilePage/live_searchCustomer/action', 'LiveSearchCustomer@action')->name('live_searchCs.action');
//customerView
Route::get('/customerView', 'customerView@customView')->name('customerView.profile');
//delete Books
Route::get('/adminBookList/DeleteBooks', 'deleteBookFromList@deLeteBook');
