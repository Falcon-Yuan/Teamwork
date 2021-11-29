<?php


namespace frontend\models;
 
/**
 * ���±���ģ��
 */
 
use frontend\models\Article;
use yii\base\Model;
 
class ArticleForm extends Model
{
    public $id;
    public $title;
    public $content;
 
    public $_lastError="";
 
    public function rules()
    {
        return [
            [['id','title','content'],'required'],
            [['id'],'integer'],
            ['title','string','min'=>1,'max'=>60],
        ];
    }
     
     public static function getList( $orderBy = ['id'=> SORT_DESC])
    {
        $model = new Article();
        //�����ѯ���
        //��ѯ�ֶ�
        $select = ['id', 'title','content'];
        $res = $model->find()
          ->select($select)
          ->orderBy($orderBy)
          ->asArray()
          ->all();

        //�ѻ�ȡ�������ݷ��س�ȥ
        return $res?:[];
 
    }
}
