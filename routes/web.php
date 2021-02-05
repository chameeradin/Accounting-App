<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;

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

Route::get('/', [BranchController::class, 'index'])->name('branches');
Route::get('branch/{branch}/edit', [BranchController::class, 'edit'])->name('branch.edit');
Route::post('/branch/{branch}', [BranchController::class, 'update'])->name('branch');
