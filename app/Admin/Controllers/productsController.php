<?php

namespace App\Admin\Controllers;

use App\Models\products;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class productsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new products());

        $grid->column('id', __('Id'));
        $grid->column('productCode', __('ProductCode'));
        $grid->column('productName', __('ProductName'));
        $grid->column('productLine', __('ProductLine'));
        $grid->column('productScale', __('ProductScale'));
        $grid->column('productVendor', __('ProductVendor'));
        $grid->column('productDescription', __('ProductDescription'));
        $grid->column('quantityInStock', __('QuantityInStock'));
        $grid->column('buyPrice', __('BuyPrice'));
        $grid->column('MSRP', __('MSRP'));

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
        $show = new Show(products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('productCode', __('ProductCode'));
        $show->field('productName', __('ProductName'));
        $show->field('productLine', __('ProductLine'));
        $show->field('productScale', __('ProductScale'));
        $show->field('productVendor', __('ProductVendor'));
        $show->field('productDescription', __('ProductDescription'));
        $show->field('quantityInStock', __('QuantityInStock'));
        $show->field('buyPrice', __('BuyPrice'));
        $show->field('MSRP', __('MSRP'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new products());

        $form->text('productCode', __('ProductCode'));
        $form->text('productName', __('ProductName'));
        $form->text('productLine', __('ProductLine'));
        $form->text('productScale', __('ProductScale'));
        $form->text('productVendor', __('ProductVendor'));
        $form->textarea('productDescription', __('ProductDescription'));
        $form->number('quantityInStock', __('QuantityInStock'));
        $form->decimal('buyPrice', __('BuyPrice'));
        $form->decimal('MSRP', __('MSRP'));

        return $form;
    }
}
