<?php

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

Route::get('/about', 'AboutController@index');

Route::get('/contacts', 'ContactsController@index');

Route::get('/books', 'BooksController@index')->name('allbooks');
Route::get('/books/group/{groupID}', 'BooksController@index')->name('books');
Route::get('/books/category/{groupID}/book/{bookID}', 'BooksController@book')->name('book');
Route::get('/books/book/{bookID}/edit', 'BooksController@editBook')->name('editBook');
Route::get('/books/book/{bookID}/delete', 'BooksController@deleteBook')->name('deleteBook');
Route::post('/books/book/{bookID}/edit/confirm', 'BooksController@confirmEditBook')->name('confirmEditBook');
Route::get('/books/add', 'BooksController@addBook')->name('addBook');
Route::post('/books/insert', 'BooksController@insertBook')->name('insertBook');
Route::post('/book/{id}/comment/insert', 'BookController@insertComment')->name('insertComment');
Route::get('/book/comment/delete/{id}', 'BookController@deleteComment')->name('deleteComment');

Route::get('/authors', 'AuthorsController@index')->name('authors');
Route::get('/authors/author/{id}/delete', 'AuthorsController@deleteAuthor')->name('deleteAuthor');
Route::get('/authors/author/{id}/edit', 'AuthorsController@editAuthor')->name('editAuthor');
Route::post('/authors/author/{id}/edit/confirm', 'AuthorsController@confirmEditAuthor')->name('confirmEditAuthor');
Route::get('/authors/add', 'AuthorsController@addAuthor')->name('addAuthor');
Route::post('/authors/insert', 'AuthorsController@insertAuthor')->name('insertAuthor');

Route::get('/groups', 'GroupsController@index')->name('groups');
Route::get('/groups/group/{id}/delete', 'GroupsController@deleteGroup')->name('deleteGroup');
Route::get('/groups/group/{id}/edit', 'GroupsController@editGroup')->name('editGroup');
Route::post('/groups/group/{id}/edit/confirm', 'GroupsController@confirmEditGroup')->name('confirmEditGroup');
Route::get('/groups/add', 'GroupsController@addGroup')->name('addGroup');
Route::post('/groups/insert', 'GroupsController@insertGroup')->name('insertGroup');
