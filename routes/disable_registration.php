<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-12-11 23:43:06
 */

use Illuminate\Support\Facades\Route;

Route::get('/register', static function (): void {
    abort(404);
})->name('register');