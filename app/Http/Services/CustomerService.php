<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 05/07/19
 * Time: 11:31
 */

namespace App\Http\Services;


interface CustomerService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);

}