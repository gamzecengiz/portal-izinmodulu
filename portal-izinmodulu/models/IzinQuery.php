<?php


namespace kouosl\izinmodulu\models;


/**
 * This is the ActiveQuery class for [[Izin]].
 *
 * @see Izin
 */
class IzinQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Izin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Izin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
