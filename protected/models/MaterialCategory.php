<?php

/**
 * This is the model class for table "material_category".
 *
 * The followings are the available columns in table 'material_category':
 * @property string $org_id
 * @property string $mcat_id
 * @property string $parent_mcat_id
 * @property string $mcat_code
 * @property string $mcat_desc
 * @property string $inventory_account
 * @property string $revenue_account
 * @property string $expense_account
 * @property string $is_bought
 * @property string $is_sold
 * @property string $is_built
 * @property string $is_stocked
 * @property string $is_asset
 * @property string $material_type_code
 * @property string $mcat_level
 * @property string $sort_order
 *
 * The followings are the available model relations:
 * @property Material[] $materials
 * @property Organization $org
 * @property Account $inventoryAccount
 * @property Account $revenueAccount
 * @property MaterialCategory $parentMcat
 * @property MaterialCategory[] $materialCategories
 * @property MaterialType $materialTypeCode
 * @property Account $expenseAccount
 */
class MaterialCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MaterialCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'material_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('org_id, mcat_id', 'required'),
			array('org_id, material_type_code', 'length', 'max'=>4),
			array('mcat_id, parent_mcat_id', 'length', 'max'=>5),
			array('mcat_code, inventory_account, revenue_account, expense_account', 'length', 'max'=>10),
			array('mcat_desc', 'length', 'max'=>60),
			array('is_bought, is_sold, is_built, is_stocked, is_asset', 'length', 'max'=>1),
			array('mcat_level', 'length', 'max'=>2),
			array('sort_order', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('org_id, mcat_id, parent_mcat_id, mcat_code, mcat_desc, inventory_account, revenue_account, expense_account, is_bought, is_sold, is_built, is_stocked, is_asset, material_type_code, mcat_level, sort_order', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'materials' => array(self::HAS_MANY, 'Material', 'mcat_id'),
			'org' => array(self::BELONGS_TO, 'Organization', 'org_id'),
			'inventoryAccount' => array(self::BELONGS_TO, 'Account', 'inventory_account'),
			'revenueAccount' => array(self::BELONGS_TO, 'Account', 'revenue_account'),
			'parentMcat' => array(self::BELONGS_TO, 'MaterialCategory', 'parent_mcat_id'),
			'materialCategories' => array(self::HAS_MANY, 'MaterialCategory', 'parent_mcat_id'),
			'materialTypeCode' => array(self::BELONGS_TO, 'MaterialType', 'material_type_code'),
			'expenseAccount' => array(self::BELONGS_TO, 'Account', 'expense_account'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'org_id' => 'Org',
			'mcat_id' => 'Mcat',
			'parent_mcat_id' => 'Parent Mcat',
			'mcat_code' => 'Mcat Code',
			'mcat_desc' => 'Mcat Desc',
			'inventory_account' => 'Inventory Account',
			'revenue_account' => 'Revenue Account',
			'expense_account' => 'Expense Account',
			'is_bought' => 'Is Bought',
			'is_sold' => 'Is Sold',
			'is_built' => 'Is Built',
			'is_stocked' => 'Is Stocked',
			'is_asset' => 'Is Asset',
			'material_type_code' => 'Material Type Code',
			'mcat_level' => 'Mcat Level',
			'sort_order' => 'Sort Order',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('org_id',$this->org_id,true);
		$criteria->compare('mcat_id',$this->mcat_id,true);
		$criteria->compare('parent_mcat_id',$this->parent_mcat_id,true);
		$criteria->compare('mcat_code',$this->mcat_code,true);
		$criteria->compare('mcat_desc',$this->mcat_desc,true);
		$criteria->compare('inventory_account',$this->inventory_account,true);
		$criteria->compare('revenue_account',$this->revenue_account,true);
		$criteria->compare('expense_account',$this->expense_account,true);
		$criteria->compare('is_bought',$this->is_bought,true);
		$criteria->compare('is_sold',$this->is_sold,true);
		$criteria->compare('is_built',$this->is_built,true);
		$criteria->compare('is_stocked',$this->is_stocked,true);
		$criteria->compare('is_asset',$this->is_asset,true);
		$criteria->compare('material_type_code',$this->material_type_code,true);
		$criteria->compare('mcat_level',$this->mcat_level,true);
		$criteria->compare('sort_order',$this->sort_order,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}