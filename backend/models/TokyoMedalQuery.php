<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[World]].
 *
 * @see World
 */
class TokyoMedalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return World[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return World|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
