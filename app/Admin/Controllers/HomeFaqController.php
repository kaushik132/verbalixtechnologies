<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Homefaq;

class HomeFaqController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Homefaq';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Homefaq());

        $grid->column('id', __('Id'));

        $grid->column('question', __('Question'));

        $grid->column('answer', __('Answer'));

       

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
        $show = new Show(Homefaq::findOrFail($id));

        $show->field('id', __('Id'));

        $show->field('question', __('Question'));

        $show->field('answer', __('Answer'));

        $show->field('created_at', __('Created at'));

        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Homefaq());

        $form->textarea('question', __('Question'));

        $form->textarea('answer', __('Answer'));

        return $form;
    }
}
