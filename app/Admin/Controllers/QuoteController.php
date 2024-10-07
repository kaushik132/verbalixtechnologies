<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Quote;

class QuoteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Quote';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Quote());

              
        $grid->column('quote_name', __('Full Name'));
        $grid->column('quote_country_code', __('Country Code'));
        $grid->column('quote_phone', __('Phone'));
        $grid->column('quote_email', __('Email'));
        $grid->column('quote_message', __('Message'));
     


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
        $show = new Show(Quote::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('quote_name', __('Full Name'));
        $show->field('quote_country_code', __('Country Code'));
        $show->field('quote_phone', __('Phone Number'));
        $show->field('quote_email', __('Email'));
        $show->field('quote_message', __('Message'));
  
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Quote());

        $form->text('quote_name', __('Full Name'));
        $form->text('quote_country_code', __('Country Code'));
        $form->text('quote_phone', __('Phone Number'));
        $form->email('quote_email', __('Email'));
        $form->textarea('quote_message', __('Message'));

        return $form;
    }
}
