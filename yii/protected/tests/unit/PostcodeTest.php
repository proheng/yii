<?php
class Postcodetest extends CDbTestCase // Test Generate model class, AustPostcodes.php
{
	public function testCRUD()
	{
		/*test database insert*/
		$postcode = new AustPostcodes;
		$attri_array = array(
			'Pcode' => '123456',
			'Locality' => 'Locality',
			'State' => 'State',
			'Comments' => 'Comments',
			'DeliveryOffice' => 'Delivery Office',
			'PresortIndicator' => 'Presort Indicator',
			'ParcelZone' => 'Parcel Zone',
			'BSPnumber' => '123456',
			'BSPname' => 'Bspname',
			'Category' => 'Category',
			);
		$postcode->setAttributes($attri_array);
		$this->assertTrue($postcode->save(false));

		/*test read*/
		$retrievePostcode = AustPostcodes::model()->findByPk($postcode->id);
		$this->assertTrue($retrievePostcode instanceof AustPostcodes);
		$this->assertEquals($retrievePostcode->Pcode, $postcode->Pcode);

		/*test update*/
		$postcode->Pcode = strrev($postcode->Pcode);
		$this->assertTrue($postcode->save(false));
		$retrievePostcode = AustPostcodes::model()->findByPk($postcode->id);
		$this->assertTrue($retrievePostcode instanceof AustPostcodes);
		$this->assertEquals($retrievePostcode->Pcode, $postcode->Pcode);

		/*test delete*/		
		$postcode_id = $postcode->id;
		$this->assertTrue($postcode->delete($postcode_id));
		$deleted_postcode = AustPostcodes::model()->findByPk($postcode_id);
		$this->assertNull($deleted_postcode);
	
	}

	public function testGetAll(){
		/*test get all*/
		$all_postcodes = AustPostcodes::model()->findAll();
		$this->assertNotEquals(0, count($all_postcodes));
	}
}