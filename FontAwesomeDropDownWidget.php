<?php
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 02.06.2016
 * Time: 15:34
 */

namespace wokster\fontawesomedropdown;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\base\Widget as BaseWidget;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class FontAwesomeDropDownWidget extends BaseWidget
{
  /**
   * @var Model the data model that this widget is associated with.
   */
  public $model;

  /**
   * @var string the model attribute that this widget is associated with.
   */
  public $attribute;

  /**
   * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
   */
  public $name;

  /**
   * @var string the input value.
   */
  public $value;

  /**
   * @var string|null Selector pointing to textarea to initialize redactor for.
   * Defaults to null meaning that textarea does not exist yet and will be
   * rendered by this widget.
   */
  public $selector;

  /**
   * @var array the HTML attributes for the input tag.
   * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
   */
  public $options = [];

  /**
   * @inheritdoc
   */
  public function init()
  {
    if ($this->name === null && !$this->hasModel() && $this->selector === null) {
      throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
    }
    if (!isset($this->options['id'])) {
      $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
    }
    if ($this->selector === null) {
      $this->selector = '#' . $this->options['id'];
    }
    if($this->value === null && $this->hasModel()){
      $this->value = $this->model->{$this->attribute};
    }

    parent::init();
  }

  /**
   * @inheritdoc
   */
  public function run()
  {
      if ($this->hasModel()) {
        $input = Html::activeHiddenInput($this->model,$this->attribute,$this->options);
      } else {
        $input = Html::hiddenInput($this->name, $this->value,$this->options);
      }
    $this->view->registerAssetBundle('rmrevin\yii\fontawesome\AssetBundle');
    $this->view->registerJs("
      $('.font_awesome_choice').on('click',function(){
        var icon_code = $(this).data('icon');
        $('#font_awesome_choice').modal('hide');
        $('#".$this->options['id']."').val(icon_code);
        $('#btn_font_awesome_choice').html('chosen <i class=\"fa fa-adjust\" aria-hidden=\"true\"></i>, click to choice another one');
      });
    ");
    return $this->render('@vendor/wokster/yii2-fontawesome-dropdown-widget/view',[
        'input'=>$input,
        'value'=>$this->value,
    ]);
  }

  protected function hasModel()
  {
    return $this->model instanceof Model && $this->attribute !== null;
  }
}
