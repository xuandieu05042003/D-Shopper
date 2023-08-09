<?php

namespace App\Admin\Controllers;

use App\Models\payments;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class paymentsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'payments';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new payments());

        $grid->column('id', __('Id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('checkNumber', __('CheckNumber'));
        $grid->column('paymentDate', __('PaymentDate'));
        $grid->column('amount', __('Amount'));

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
        $show = new Show(payments::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('checkNumber', __('CheckNumber'));
        $show->field('paymentDate', __('PaymentDate'));
        $show->field('amount', __('Amount'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new payments());

        $form->number('customer_id', __('Customer id'));
        $form->text('checkNumber', __('CheckNumber'));
        $form->datetime('paymentDate', __('PaymentDate'))->default(date('Y-m-d H:i:s'));
        $form->decimal('amount', __('Amount'));

        return $form;
    }
}
