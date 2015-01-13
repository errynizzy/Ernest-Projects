package connekt.ernest;

public class Contact_scratch_cards {

    // private variables
    public int _id;
    public String _name;
    public String _phone_number;
   // public String _email;
    
    //add new
    
    public String _reg_date;
    public String _serial_number;
    public String _phone2;
    public String _gender;
    public String _dob;
    public String _address;
    public String _id_type;
    public String _id_number;
    public String _business_name;
    public String _business_type;
    public String _items;
    public String _lat;
    public String _lon;
    public String _rdo_name;
    public String _rdo_number;

    public Contact_scratch_cards() {
    }

    // constructor
    public Contact_scratch_cards(int id, 
    		String name, 
    		String _phone_number, 
    		//String _email, 
    		String _reg_date ,
    	    String _serial_number ,
    	      String _phone2 ,
    	      String _gender ,
    	      String _dob ,
    	      String _address ,
    	      String _id_type ,
    	      String _id_number ,
    	      String _business_name ,
    	      String _business_type ,
    	      String _items ,
    	      String _lat ,
    	      String _lon ,
    	      String _rdo_name ,
    	      String _rdo_number ) {
    	
	this._id = id;
	this._name = name;
	this._phone_number = _phone_number;
	//this._email = _email;
	//add
	this._reg_date = _reg_date;
	this._serial_number = _serial_number;
	this._phone2 = _phone2;
	this._gender = _gender;
	this._dob = _dob;
	this._address = _address;
	this._id_type = _id_type;
	this._id_number = _id_number;
	this._business_name = _business_name;
	this._business_type = _business_type;
	this._items = _items;
	this._lat = _lat;
	this._lon = _lon;
	this._rdo_name = _rdo_name;
	this._rdo_number = _rdo_number;

    }

    // constructor
    public Contact_scratch_cards(String name, String _phone_number, 
    		//String _email, 
    		String _reg_date ,
	    	String _serial_number ,
  	      String _phone2 ,
  	      String _gender ,
  	      String _dob ,
  	      String _address ,
  	      String _id_type ,
  	      String _id_number ,
  	      String _business_name ,
  	      String _business_type ,
  	      String _items ,
  	      String _lat ,
  	      String _lon ,
  	      String _rdo_name ,
  	      String _rdo_number) {
	this._name = name;
	this._phone_number = _phone_number;
	//this._email = _email;
	
	//add
		this._reg_date = _reg_date;
		this._serial_number = _serial_number;
		this._phone2 = _phone2;
		this._gender = _gender;
		this._dob = _dob;
		this._address = _address;
		this._id_type = _id_type;
		this._id_number = _id_number;
		this._business_name = _business_name;
		this._business_type = _business_type;
		this._items = _items;
		this._lat = _lat;
		this._lon = _lon;
		this._rdo_name = _rdo_name;
		this._rdo_number = _rdo_number;
    }
    
    //<--ID starts -->
    // getting ID 
    public int getID() {
	return this._id;
    }

    // setting id
    public void setID(int id) {
	this._id = id;
    }
    //<--ID ends-->

    
  //<--name starts -->
    // getting name
    public String getName() {
	return this._name;
    }

    // setting name
    public void setName(String name) {
	this._name = name;
    }
  //<--Name ends here -->
    

  //<--Phone number starts -->
    // getting phone number
    public String getPhoneNumber() {
	return this._phone_number;
    }
  
    // setting phone number
    public void setPhoneNumber(String phone_number) {
	this._phone_number = phone_number;
    }
  //<--Phone Number ends here -->
    

  //<--email starts -->
    // getting email
   // public String getEmail() {
	//return this._email;
   // }

    // setting email
   // public void setEmail(String email) {
	//this._email = email;
   // }
  //<--email ends -->
    
    
  //<--reg date starts-->
    // getting _reg_date
    public String getReg_date() {
	return this._reg_date;
    }

    // setting _reg_date
    public void setReg_date(String reg_date) {
	this._reg_date = reg_date;
    }
  //<--reg date ends -->
    
  //<--_serial_number starts -->
    // getting _serial_number
    public String getSerial_number() {
	return this._serial_number;
    }

    // setting _serial_number
    public void setSerial_number(String serial_number) {
	this._serial_number = serial_number;
    }
  //<--_serial_number ends -->
    
    
  //<--_phone2 starts -->
    // getting _phone2
    public String getPhone2() {
	return this._phone2;
    }

    // setting _phone2
    public void setPhone2(String phone2) {
	this._phone2 = phone2;
    }
  //<--_phone2 ends -->
    
  //<--_gender starts -->
    // getting _gender
    public String getGender() {
	return this._gender;
    }

    // setting _gender
    public void setGender(String gender) {
	this._gender = gender;
    }
  //<--_gender ends -->
    
  //<--_dob starts -->
    // getting _dob
    public String getDob() {
	return this._dob;
    }

    // setting _dob
    public void setDob(String dob) {
	this._dob = dob;
    }
  //<--_dob ends -->
    
  //<--_address starts -->
    // getting _address
    public String getAddress() {
	return this._address;
    }

    // setting _address
    public void setAddress(String address) {
	this._address = address;
    }
  //<--_address ends -->
    
    
  //<--_id_type starts -->
    // getting _id_type
    public String getId_type() {
	return this._id_type;
    }

    // setting _id_type
    public void setId_type(String id_type) {
	this._id_type = id_type;
    }
  //<--_id_type ends -->
    
    
    //<--_id_number starts -->
    // getting _id_number
    public String getId_number() {
	return this._id_number;
    }

    // setting _id_number
    public void setId_number(String id_number) {
	this._id_number = id_number;
    }
  //<--_id_number ends -->
    
    
  //<--_business_name starts -->
    // getting _business_name
    public String getBusiness_name() {
	return this._business_name;
    }

    // setting _business_name
    public void setBusiness_name(String business_name) {
	this._business_name = business_name;
    }
  //<--_business_name ends -->
    
    
  //<--_business_type starts -->
    // getting _business_type
    public String getBusiness_type() {
	return this._business_type;
    }

    // setting _business_type
    public void setBusiness_type(String business_type) {
	this._business_type = business_type;
    }
  //<--_business_type ends -->
    
    
  //<--_items starts -->
    // getting _items
    public String getItems() {
	return this._items;
    }

    // setting _items
    public void setItems(String items) {
	this._items = items;
    }
  //<--_items ends -->
    
    
  
    
    
  //<--_lat starts -->
    // getting _lat
    public String getLat() {
	return this._lat;
    }

    // setting _lat
    public void setLat(String lat) {
	this._lat = lat;
    }
  //<--_lat ends  -->
    
    
  //<--_lon starts -->
    // getting _lon
    public String getLon() {
	return this._lon;
    }

    // setting _lon
    public void setLon(String lon) {
	this._lon = lon;
    }
  //<--_lon ends  -->
    
    
  //<--_rdo_name starts -->
    // getting _rdo_name
    public String getRdo_name() {
	return this._rdo_name;
    }

    // setting _rdo_name
    public void setRdo_name(String rdo_name) {
	this._rdo_name = rdo_name;
    }
  //<--_rdo_name ends  -->
    
    //<--_rdo_number starts -->
    // getting _rdo_number
    public String getRdo_number() {
	return this._rdo_number;
    }

    // setting _rdo_number
    public void setRdo_number(String rdo_number) {
	this._rdo_number = rdo_number;
    }
  //<--_rdo_number ends  -->

}