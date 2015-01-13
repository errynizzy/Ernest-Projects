package connekt.ernest;

import java.util.ArrayList;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

public class DatabaseHandler_checkin extends SQLiteOpenHelper {

    // All Static variables
    // Database Version
    private static final int DATABASE_VERSION = 5;

    // Database Name
    private static final String DATABASE_NAME = "contactsManager_checkinnn";

    // Contacts table name
    private static final String TABLE_CONTACTS = "contacts";

    // Contacts Table Columns names
    private static final String KEY_ID = "id";
    private static final String KEY_NAME = "name";
    private static final String KEY_PH_NO = "phone_number";
    //private static final String KEY_EMAIL = "email";
    //add new fields here
    //...
    private static final String KEY_REG_DATE = "reg_date";   
    private static final String KEY_SERIAL_NUMBER = "serial_number";   
    private static final String KEY_PHONE2 = "phone2";   
    private static final String KEY_GENDER = "gender";   
    private static final String KEY_DOB = "dob";   
    private static final String KEY_ADDRESS = "address";  
    private static final String KEY_ID_TYPE = "id_type";   
    private static final String KEY_ID_NUMBER = "id_number";   
    private static final String KEY_BUSINESS_NAME = "business_name";  
    private static final String KEY_BUSINESS_TYPE = "business_type";   
    private static final String KEY_ITEMS = "items";   
    private static final String KEY_LAT = "lat";   
    private static final String KEY_LON = "lon";   
    private static final String KEY_RDO_NAME = "rdo_name";   
    private static final String KEY_RDO_NUMBER = "rdo_number";  
       
       
     
    
   
    
    
    private final ArrayList<Contact_checkin> contact_list = new ArrayList<Contact_checkin>();

    public DatabaseHandler_checkin(Context context) {
	super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    // Creating Tables
    @Override
    public void onCreate(SQLiteDatabase db) {
	String CREATE_CONTACTS_TABLE = "CREATE TABLE " + TABLE_CONTACTS + "("
		+ KEY_ID 
		+ " INTEGER PRIMARY KEY," 
		+ KEY_NAME + " TEXT,"
		+ KEY_PH_NO + " TEXT," 
		//+ KEY_EMAIL + " TEXT," 
		+ KEY_REG_DATE + " TEXT,"
		+ KEY_SERIAL_NUMBER + " TEXT,"
		+ KEY_PHONE2 + " TEXT,"
		+ KEY_GENDER + " TEXT,"
		+ KEY_DOB + " TEXT,"
		+ KEY_ADDRESS + " TEXT,"
		+ KEY_ID_TYPE + " TEXT,"
		+ KEY_ID_NUMBER + " TEXT,"
		+ KEY_BUSINESS_NAME + " TEXT,"
		+ KEY_BUSINESS_TYPE + " TEXT,"
		+ KEY_ITEMS + " TEXT,"
		+ KEY_LAT + " TEXT,"
		+ KEY_LON + " TEXT,"
		+ KEY_RDO_NAME + " TEXT,"
		+ KEY_RDO_NUMBER + " TEXT"
		
		+")";
	db.execSQL(CREATE_CONTACTS_TABLE);
    }

    // Upgrading database
    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
	// Drop older table if existed
	db.execSQL("DROP TABLE IF EXISTS " + TABLE_CONTACTS);

	// Create tables again
	onCreate(db);
    }

    /**
     * All CRUD(Create, Read, Update, Delete) Operations
     */

    // Adding new contact
    public void Add_Contact(Contact_checkin contact) {
	SQLiteDatabase db = this.getWritableDatabase();
	ContentValues values = new ContentValues();
	values.put(KEY_NAME, contact.getName()); // Contact Name
	values.put(KEY_PH_NO, contact.getPhoneNumber()); // Contact Phone
	//values.put(KEY_EMAIL, contact.getEmail()); // Contact Email
	
	//new
	values.put(KEY_REG_DATE, contact.getReg_date());
	values.put(KEY_SERIAL_NUMBER, contact.getSerial_number());
	values.put(KEY_PHONE2, contact.getPhone2());
	values.put(KEY_GENDER, contact.getGender());
	values.put(KEY_DOB, contact.getDob());
	values.put(KEY_ADDRESS, contact.getAddress());
	values.put(KEY_ID_TYPE, contact.getId_type());
	values.put(KEY_ID_NUMBER, contact.getId_number());
	values.put(KEY_BUSINESS_NAME, contact.getBusiness_name());
	values.put(KEY_BUSINESS_TYPE, contact.getBusiness_type());
	values.put(KEY_ITEMS, contact.getItems());
	values.put(KEY_LAT, contact.getLat());
	values.put(KEY_LON, contact.getLon());
	values.put(KEY_RDO_NAME, contact.getRdo_name());
	values.put(KEY_RDO_NUMBER, contact.getRdo_number());
	

	// Inserting Row
	db.insert(TABLE_CONTACTS, null, values);
	db.close(); // Closing database connection
    }

    // Getting single contact
    Contact_checkin Get_Contact(int id) {
	SQLiteDatabase db = this.getReadableDatabase();

	Cursor cursor = db.query(TABLE_CONTACTS, new String[] { KEY_ID,
		KEY_NAME, 
		KEY_PH_NO, 
		//KEY_EMAIL,
		KEY_REG_DATE,
		KEY_SERIAL_NUMBER,
		KEY_PHONE2,
		KEY_GENDER,
		KEY_DOB,
		KEY_ADDRESS,
		KEY_ID_TYPE,
		KEY_ID_NUMBER,
		KEY_BUSINESS_NAME,
		KEY_BUSINESS_TYPE,
		KEY_ITEMS,
		KEY_LAT,
		KEY_LON,
		KEY_RDO_NAME,
		KEY_RDO_NUMBER
	}, KEY_ID + "=?",
		new String[] { String.valueOf(id) }, null, null, null, null);
	if (cursor != null)
	    cursor.moveToFirst();

	Contact_checkin contact = new Contact_checkin(Integer.parseInt(cursor.getString(0)),
		cursor.getString(1), 
		cursor.getString(2), 
		cursor.getString(3),
		cursor.getString(4),
		cursor.getString(5),
		cursor.getString(6),
		cursor.getString(7),
		cursor.getString(8),
		cursor.getString(9),
		cursor.getString(10),
		cursor.getString(11),
		cursor.getString(12),
		cursor.getString(13),
		cursor.getString(14),
		cursor.getString(15),
		cursor.getString(16),
		cursor.getString(17)
		
		
			);
	// return contact
	cursor.close();
	db.close();

	return contact;
    }

    // Getting All Contacts
    public ArrayList<Contact_checkin> Get_Contacts() {
	try {
	    contact_list.clear();

	    // Select All Query
	    String selectQuery = "SELECT  * FROM " + TABLE_CONTACTS;

	    SQLiteDatabase db = this.getWritableDatabase();
	    Cursor cursor = db.rawQuery(selectQuery, null);

	    // looping through all rows and adding to list
	    if (cursor.moveToFirst()) {
		do {
		    Contact_checkin contact = new Contact_checkin();
		    contact.setID(Integer.parseInt(cursor.getString(0)));
		    contact.setName(cursor.getString(1));
		    contact.setPhoneNumber(cursor.getString(2));
		    //contact.setEmail(cursor.getString(3));
		    
		    //add more fields to be looped
		    contact.setReg_date(cursor.getString(3));
		    contact.setSerial_number(cursor.getString(4));
		    contact.setPhone2(cursor.getString(5));
		    contact.setGender(cursor.getString(6));
		    contact.setDob(cursor.getString(7));
		    contact.setAddress(cursor.getString(8));
		    contact.setId_type(cursor.getString(9));
		    contact.setId_number(cursor.getString(10));
		    contact.setBusiness_name(cursor.getString(11));
		    contact.setBusiness_type(cursor.getString(12));
		    contact.setItems(cursor.getString(13));
		    contact.setLat(cursor.getString(14));
		    contact.setLon(cursor.getString(15));
		    contact.setRdo_name(cursor.getString(16));
		    contact.setRdo_number(cursor.getString(17));
		   
		   
		    
		    // Adding contact to list
		    contact_list.add(contact);
		} while (cursor.moveToNext());
	    }

	    // return contact list
	    cursor.close();
	    db.close();
	    return contact_list;
	} catch (Exception e) {
	    // TODO: handle exception
	    Log.e("all_contact", "" + e);
	}

	return contact_list;
    }

    // Updating single contact
    public int Update_Contact(Contact_checkin contact) {
	SQLiteDatabase db = this.getWritableDatabase();

	ContentValues values = new ContentValues();
	values.put(KEY_NAME, contact.getName());
	values.put(KEY_PH_NO, contact.getPhoneNumber());
	//values.put(KEY_EMAIL, contact.getEmail());
	
	//new
		values.put(KEY_REG_DATE, contact.getReg_date());
		values.put(KEY_SERIAL_NUMBER, contact.getSerial_number());
		values.put(KEY_PHONE2, contact.getPhone2());
		values.put(KEY_GENDER, contact.getGender());
		values.put(KEY_DOB, contact.getDob());
		values.put(KEY_ADDRESS, contact.getAddress());
		values.put(KEY_ID_TYPE, contact.getId_type());
		values.put(KEY_ID_NUMBER, contact.getId_number());
		values.put(KEY_BUSINESS_NAME, contact.getBusiness_name());
		values.put(KEY_BUSINESS_TYPE, contact.getBusiness_type());
		values.put(KEY_ITEMS, contact.getItems());
		values.put(KEY_LAT, contact.getLat());
		values.put(KEY_LON, contact.getLon());
		values.put(KEY_RDO_NAME, contact.getRdo_name());
		values.put(KEY_RDO_NUMBER, contact.getRdo_number());

	// updating row
	return db.update(TABLE_CONTACTS, values, KEY_ID + " = ?",
		new String[] { String.valueOf(contact.getID()) });
    }

    // Deleting single contact
    public void Delete_Contact(int id) {
	SQLiteDatabase db = this.getWritableDatabase();
	db.delete(TABLE_CONTACTS, KEY_ID + " = ?",
		new String[] { String.valueOf(id) });
	db.close();
    }

    // Getting contacts Count
    public int Get_Total_Contacts() {
	String countQuery = "SELECT  * FROM " + TABLE_CONTACTS;
	SQLiteDatabase db = this.getReadableDatabase();
	Cursor cursor = db.rawQuery(countQuery, null);
	cursor.close();

	// return count
	return cursor.getCount();
    }

}
