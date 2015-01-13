package connekt.ernest;

public class Contact_sim {

    // private variables
    public int _id;
    public String _name;
    public String _number;
    public String _reg_date;
  

    public Contact_sim() {
    }

    // constructor
    public Contact_sim(
    		int id, 
    		String _name, 
    		String _number,
    		String _reg_date  ) {
    	
	this._id = id;
	this._name = _name;
	this._number = _number;
	this._reg_date = _reg_date;
	

    }

    // constructor
    public Contact_sim(
    		String _name,
    		String _number,
    		String _reg_date 
  	    ) {
    	this._name = _name;
    	this._number = _number;
		this._reg_date = _reg_date;
		
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
    
  //<--name starts -->
    // getting number
    public String getNumber() {
	return this._number;
    }

    // setting number
    public void setNumber(String number) {
	this._number = number;
    }
  //<--Name ends here -->
    

  
    
    
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
   
 
    
 
}