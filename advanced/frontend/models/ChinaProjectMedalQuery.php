<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Chinaprojectmedal]].
 *
 * @see Chinaprojectmedal
 */
class ChinaProjectMedalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Chinaprojectmedal[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Chinaprojectmedal|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
