<?php


namespace frontend\widgets\article;
 
/**
 * �Զ��������б����
 */
 
use frontend\models\Article;
use frontend\models\ArticleForm;
use yii\base\Widget;
use yii\data\Pagination;
use yii\helpers\Url;
use Yii;
 
class ArticleWidget extends Widget
{
 
    //�����б��ı���
    public $title = '';
 
    public function run()
    {
        
        
        //��ȡ�����б�����
        $res = ArticleForm::getList();
        //���������б�����
        $result['title'] = $this->title?$this->title: 'new article';
        $result['more'] = Url::to(['article/view']);
        $result['body'] = $res?$res:[];
 
             
        return $this->render('index',['data'=>$result]);
    }
}