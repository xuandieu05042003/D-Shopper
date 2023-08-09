<?php

namespace App\Admin\Controllers;

use App\Models\orders;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ordersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'orders';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new orders());

        $grid->column('id', __('Id'));
        $grid->column('orderDate', __('OrderDate'));
        $grid->column('requiredDate', __('RequiredDate'));
        $grid->column('shippedDate', __('ShippedDate'));
        $grid->column('status', __('Status'));
        $grid->column('comments', __('Comments'));
        $grid->column('customer_id', __('Customer id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(orders::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('orderDate', __('OrderDate'));
        $show->field('requiredDate', __('RequiredDate'));
        $show->field('shippedDate', __('ShippedDate'));
        $show->field('status', __('Status'));
        $show->field('comments', __('Comments'));
        $show->field('customer_id', __('Customer id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new orders());

        $form->datetime('orderDate', __('OrderDate'))->default(date('Y-m-d H:i:s'));
        $form->datetime('requiredDate', __('RequiredDate'))->default(date('Y-m-d H:i:s'));
        $form->datetime('shippedDate', __('ShippedDate'))->default(date('Y-m-d H:i:s'));
        $form->text('status', __('Status'));
        $form->textarea('comments', __('Comments'));
        $form->number('customer_id', __('Customer id'));

        return $form;
    }
}
