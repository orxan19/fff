<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminDisplayFilter;
use App\Category;
use App\Post;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;
use Auth;
/**
 * Class Pages
 *
 * @property \App\Model\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Posts extends Section implements Initializable
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
    protected $title = 'Posts';

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
        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
         $model->user_id=Auth::id();
        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $table= AdminDisplay::datatables('posts')->setDisplaySearch(true)
               ->with('category')->with('user')
            ->setColumns([
                AdminColumn::text('id', '#'),
                AdminColumn::link('title','title'),
                AdminColumn::text('user.name','user'),
                AdminColumn::text('description', 'Description')->setWidth('150px'),
                AdminColumn::text('category.name','Category')->append(
                    AdminColumn::filter('category_id')
                )->setWidth('200px'),
            ])->paginate(20);

        $table->setFilters(
            AdminDisplayFilter::related('category_id')->setModel(Category::class)
        );
        return $table;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
    $form=AdminForm::panel();
        $form->addBody([
            AdminFormElement::hidden('user_id',''),
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::file('source','Source')->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                return 'videos';
            })->required(),
            AdminFormElement::ckeditor('description', 'Description'),
            AdminFormElement::select('category_id', 'Category', Category::class)->setDisplay('name'),
            AdminFormElement::image('image', 'Şəkil')->setUploadSettings([
                'widen' => [1024, function ($constraint) {
                    $constraint->upsize();
                }],
                'fit' => [231, 340, function ($constraint) {
                    $constraint->upsize();
                    $constraint->aspectRatio();
                }]
            ]) ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                return 'images';
            })
        ])->setHtmlAttribute('enctype', 'multipart/form-data');
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
