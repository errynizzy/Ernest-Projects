package connekt.ernest;

public class Contact_branding {

    // private variables
    public int _id;
    public String _name;
    public String _phone_number;
   // public String _email;
    
    //add new
    
    public String _reg_date;
   
    public String _lat;
    public String _lon;
    public String _rdo_name;
    public String _rdo_number;

    public Contact_branding() {
    }

    // constructor
    public Contact_branding(int id, 
    		String name, 
    		String _phone_number, 
    		//String _email, 
    		String _reg_date ,
    	    
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
	
	this._lat = _lat;
	this._lon = _lon;
	this._rdo_name = _rdo_name;
	this._rdo_number = _rdo_number;

    }

    // constructor
    public Contact_branding(String name, String _phone_number, 
    		//String _email, 
    		String _reg_date ,
	    	
  	      String _lat ,
  	      String _lon ,
  	      String _rdo_name ,
  	      String _rdo_number) {
	this._name = name;
	this._phone_number = _phone_number;
	//this._email = _email;
	
	//add
		this._reg_date = _reg_date;
		
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