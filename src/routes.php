<?php

Route::get('page/{key}', function($key){
	return Page::send($key);
});