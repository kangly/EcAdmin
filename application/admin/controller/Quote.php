<?php
/**
 * Created by PhpStorm.
 * User: kangly
 * Date: 2019/08/27
 * Time: 10:01
 */

namespace app\admin\controller;

class Quote extends Admin
{
    public function index()
    {
        return $this->fetch();
    }

    public function quoteList()
    {
        return $this->fetch();
    }

    public function editQuote()
    {
        return $this->fetch();
    }

    public function saveQuote()
    {

    }

    public function deleteQuote()
    {

    }

    public function category()
    {
        return $this->fetch();
    }

    public function editCategory()
    {
        return $this->fetch();
    }

    public function saveCategory()
    {

    }

    public function deleteCategory()
    {

    }
}