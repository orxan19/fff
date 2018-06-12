<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminDisplayFilter;
use App\Category;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;

/**
 * Class Pages
 *
 * @property \App\Model\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Categories extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Categories';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-sitemap');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $table= AdminDisplay::datatables('categories')->setDisplaySearch(true)
            ->setColumns([
                AdminColumn::text('id', '#'),
                AdminColumn::link('name','name'),
                AdminColumn::text('color', 'color')->setWidth('150px'),
                AdminColumn::text('icon','Icon')
            ]);
        return $table;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
    $form = AdminForm::panel();
        $form->addBody([
            AdminFormElement::text('name', 'Name')->required(),
            AdminFormElement::text('icon', 'icon')->required(),
            AdminFormElement::text('color', 'color')->required(),
        ]);
      return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    public function onDelete(){

    }
}
