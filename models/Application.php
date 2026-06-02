<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property string $created_at
 * @property int $user_id
 * @property int $status_id
 * @property int $pet_type_id
 * @property int $servis_type_id
 * @property string $date
 * @property string $time
 * @property int $pay_type_id
 *
 * @property Feedback[] $feedbacks
 * @property PayType $payType
 * @property PetType $petType
 * @property ServisType $servisType
 * @property Status $status
 * @property User $user
 */
class Application extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'date', 'time'], 'safe'],
            [['user_id', 'status_id', 'pet_type_id', 'servis_type_id', 'date', 'time', 'pay_type_id'], 'required'],
            [['user_id', 'status_id', 'pet_type_id', 'servis_type_id', 'pay_type_id'], 'integer'],
            [['pay_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayType::class, 'targetAttribute' => ['pay_type_id' => 'id']],
            [['pet_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PetType::class, 'targetAttribute' => ['pet_type_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id']],
            [['servis_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServisType::class, 'targetAttribute' => ['servis_type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'pet_type_id' => 'Pet Type ID',
            'servis_type_id' => 'Servis Type ID',
            'date' => 'Date',
            'time' => 'Time',
            'pay_type_id' => 'Pay Type ID',
        ];
    }

    /**
     * Gets query for [[Feedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::class, ['application_id' => 'id']);
    }

    /**
     * Gets query for [[PayType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayType()
    {
        return $this->hasOne(PayType::class, ['id' => 'pay_type_id']);
    }

    /**
     * Gets query for [[PetType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetType()
    {
        return $this->hasOne(PetType::class, ['id' => 'pet_type_id']);
    }

    /**
     * Gets query for [[ServisType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServisType()
    {
        return $this->hasOne(ServisType::class, ['id' => 'servis_type_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

}
