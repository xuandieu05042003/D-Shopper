<?php

namespace App\Admin\Controllers;

use App\Models\customers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class customersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'customers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new customers());

        $grid->column('id', __('Id'));
        $grid->column('customerName', __('CustomerName'));
        $grid->column('contactLastName', __('ContactLastName'));
        $grid->column('contactFirstName', __('ContactFirstName'));
        $grid->column('phone', __('Phone'));
        $grid->column('addressLine1', __('AddressLine1'));
        $grid->column('addressLine2', __('AddressLine2'));
        $grid->column('city', __('City'));
        $grid->column('state', __('State'));
        $grid->column('postalCode', __('PostalCode'));
        $grid->column('country', __('Country'));
        $grid->column('salesRepEmployeeNumber', __('SalesRepEmployeeNumber'));
        $grid->column('creditLimit', __('CreditLimit'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('photo', __('Photo'));
        $grid->column('attach', __('Attach'));
        $grid->column('sex', __('Sex'));
        $grid->column('interests', __('Interests'));

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
        $show = new Show(customers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customerName', __('CustomerName'));
        $show->field('contactLastName', __('ContactLastName'));
        $show->field('contactFirstName', __('ContactFirstName'));
        $show->field('phone', __('Phone'));
        $show->field('addressLine1', __('AddressLine1'));
        $show->field('addressLine2', __('AddressLine2'));
        $show->field('city', __('City'));
        $show->field('state', __('State'));
        $show->field('postalCode', __('PostalCode'));
        $show->field('country', __('Country'));
        $show->field('salesRepEmployeeNumber', __('SalesRepEmployeeNumber'));
        $show->field('creditLimit', __('CreditLimit'));
        $show->field('avatar', __('Avatar'));
        $show->field('photo', __('Photo'));
        $show->field('attach', __('Attach'));
        $show->field('sex', __('Sex'));
        $show->field('interests', __('Interests'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new customers());

        $form->text('customerName', __('CustomerName'));
        $form->text('contactLastName', __('ContactLastName'));
        $form->text('contactFirstName', __('ContactFirstName'));
        $form->mobile('phone', __('Phone'));
        $form->text('addressLine1', __('AddressLine1'));
        $form->text('addressLine2', __('AddressLine2'));
        $form->text('city', __('City'));
        $form->text('state', __('State'));
        $form->text('postalCode', __('PostalCode'));
        $form->text('country', __('Country'));
        $form->number('salesRepEmployeeNumber', __('SalesRepEmployeeNumber'));
        $form->decimal('creditLimit', __('CreditLimit'));
        $form->textarea('avatar', __('Avatar'));
        $form->text('photo', __('Photo'));
        $form->text('attach', __('Attach'));
        $form->text('sex', __('Sex'));
        $form->text('interests', __('Interests'));

        return $form;
    }
}
