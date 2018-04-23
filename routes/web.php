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

Route::get('/','HomeController@index')->name('home'); 
Route::get('/about','AboutController@index')->name('about'); 
Route::get('/blog','BlogController@index')->name('blog'); 
Route::get('/contact','ContacController@index')->name('contact'); 
Route::get('/portofolio','PortofolioController@index')->name('portofolio'); 
Auth::routes();

Route::middleware(['auth'])->group(function(){
		Route::prefix('admin')->group(function(){

		Route::get('dashboard','Admin\dashboardController@index')->name("admin.dashboard");

		Route::get('absensi','Admin\AbsensiController@index')->name("admin.absensi");
		Route::get('absensi/create','Admin\AbsensiController@create')->name("admin.absensi.create");
		Route::post('absensi/create','Admin\AbsensiController@save')->name("admin.absensi.save");
		Route::get('absensi/edit/{id}','Admin\AbsensiController@edit')->name("admin.absensi.edit");
		Route::put('absensi/edit/{id}','Admin\AbsensiController@update')->name("admin.absensi.update");
		Route::delete('absensi/delete/{id}','Admin\AbsensiController@delete')->name("admin.absensi.delete");

	Route::prefix('master')->group(function(){
		Route::get('divisi','Admin\Master\DivisiController@index')->name("admin.master.divisi");
		Route::get('divisi/create','Admin\Master\DivisiController@create')->name("admin.master.divisi.create");
		Route::post('divisi/create','Admin\Master\DivisiController@save')->name("admin.master.divisi.save");
		Route::get('divisi/edit/{id}','Admin\Master\DivisiController@edit')->name("admin.master.divisi.edit");
		Route::put('divisi/edit/{id}','Admin\Master\DivisiController@update')->name("admin.master.divisi.update");
		Route::delete('divisi/delete/{id}','Admin\Master\DivisiController@delete')->name("admin.master.divisi.delete");

		Route::get('pegawai','Admin\Master\PegawaiController@index')->name("admin.master.pegawai");
		Route::get('pegawai/create','Admin\Master\PegawaiController@create')->name("admin.master.pegawai.create");
		Route::post('pegawai/create','Admin\Master\PegawaiController@save')->name("admin.master.pegawai.save");
		Route::get('pegawai/edit/{id}','Admin\Master\PegawaiController@edit')->name("admin.master.pegawai.edit");
		Route::put('pegawai/edit/{id}','Admin\Master\PegawaiController@update')->name("admin.master.pegawai.update");
		Route::delete('pegawai/delete/{id}','Admin\Master\PegawaiController@delete')->name("admin.master.pegawai.delete");


		Route::get('jabatan','Admin\Master\JabatanController@index')->name("admin.master.jabatan");
		Route::get('jabatan/create','Admin\Master\JabatanController@create')->name("admin.master.jabatan.create");
		Route::post('jabatan/create','Admin\Master\JabatanController@save')->name("admin.master.jabatan.save");
		Route::get('jabatan/edit/{id}','Admin\Master\JabatanController@edit')->name("admin.master.jabatan.edit");
		Route::put('jabatan/edit/{id}','Admin\Master\JabatanController@update')->name("admin.master.jabatan.update");
		Route::delete('jabatan/delete/{id}','Admin\Master\JabatanController@delete')->name("admin.master.jabatan.delete");

		Route::get('gaji','Admin\Master\GajiController@index')->name("admin.master.gaji");
		Route::get('gaji/create','Admin\Master\GajiController@create')->name("admin.master.gaji.create");
		Route::post('gaji/create','Admin\Master\GajiController@save')->name("admin.master.gaji.save");
		Route::get('gaji/edit/{id}','Admin\Master\GajiController@edit')->name("admin.master.gaji.edit");
		Route::put('gaji/edit/{id}','Admin\Master\GajiController@update')->name("admin.master.gaji.update");
		Route::delete('gaji/delete/{id}','Admin\Master\GajiController@delete')->name("admin.master.gaji.delete");

	
		});

	Route::prefix('option')->group(function(){
		Route::get('slider','Admin\Option\SliderController@index')->name("admin.option.slider");
		Route::get('slider/create','Admin\Option\SliderController@create')->name("admin.option.slider.create");
		Route::post('slider/create','Admin\Option\SliderController@save')->name("admin.option.slider.save");
		Route::get('slider/edit/{id}','Admin\Option\SliderController@edit')->name("admin.option.slider.edit");
		Route::put('slider/edit/{id}','Admin\Option\SliderController@update')->name("admin.option.slider.update");
		Route::delete('slider/delete/{id}','Admin\Option\SliderController@delete')->name("admin.option.slider.delete");

		Route::get('blog','Admin\Option\BlogController@index')->name("admin.option.blog");
		Route::get('blog/create','Admin\Option\BlogController@create')->name("admin.option.blog.create");
		Route::post('blog/create','Admin\Option\BlogController@save')->name("admin.option.blog.save");
		Route::get('blog/edit/{id}','Admin\Option\BlogController@edit')->name("admin.option.blog.edit");
		Route::put('blog/edit/{id}','Admin\Option\BlogController@update')->name("admin.option.blog.update");
		Route::delete('blog/delete/{id}','Admin\Option\BlogController@delete')->name("admin.option.blog.delete");

		Route::get('contact','Admin\Option\ContactController@index')->name("admin.option.contact");
		Route::get('contact/create','Admin\Option\ContactController@create')->name("admin.option.contact.create");
		Route::post('contact/create','Admin\Option\ContactController@save')->name("admin.option.contact.save");
		Route::get('contact/edit/{id}','Admin\Option\ContactController@edit')->name("admin.option.contact.edit");
		Route::put('contact/edit/{id}','Admin\Option\ContactController@update')->name("admin.option.contact.update");
		Route::delete('contact/delete/{id}','Admin\Option\ContactController@delete')->name("admin.option.contact.delete");

		Route::get('portofolio','Admin\Option\PortofolioController@index')->name("admin.option.portofolio");
		Route::get('portofolio/create','Admin\Option\PortofolioController@create')->name("admin.option.portofolio.create");
		Route::post('portofolio/create','Admin\Option\PortofolioController@save')->name("admin.option.portofolio.save");
		Route::get('portofolio/edit/{id}','Admin\Option\PortofolioController@edit')->name("admin.option.portofolio.edit");
		Route::put('portofolio/edit/{id}','Admin\Option\PortofolioController@update')->name("admin.option.portofolio.update");
		Route::delete('portofolio/delete/{id}','Admin\Option\PortofolioController@delete')->name("admin.option.portofolio.delete");

		});
	});
});

