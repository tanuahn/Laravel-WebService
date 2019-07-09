<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 05/07/19
 * Time: 11:24
 */

namespace App\Http\Repositiries;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);
}
