package connekt.ernest;

import java.util.ArrayList;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

public class DatabaseHandler_branding extends SQLiteOpenHelper {

    // All Static variables
    // Database Version
    private static final int DATABASE_VERSION = 2;

    // Database Name
    private static final String DATABASE_NAME = "contactsManager_branding";

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
     
    private static final String KEY_LAT = "lat";   
    private static final String KEY_LON = "lon";   
    private static final String KEY_RDO_NAME = "rdo_name";   
    private static final String KEY_RDO_NUMBER = "rdo_number";  
       
       
     
    
   
    
    
    private final ArrayList<Contact_branding> contact_list = new ArrayList<Contact_branding>();

    public DatabaseHandler_branding(Context context) {
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
    public void Add_Contact(Contact_branding contact) {
	SQLiteDatabase db = this.getWritableDatabase();
	ContentValues values = new ContentValues();
	values.put(KEY_NAME, contact.getName()); // Contact Name
	values.put(KEY_PH_NO, contact.getPhoneNumber()); // Contact Phone
	//values.put(KEY_EMAIL, contact.getEmail()); // Contact Email
	
	//new
	values.put(KEY_REG_DATE, contact.getReg_date());
	
	values.put(KEY_LAT, contact.getLat());
	values.put(KEY_LON, contact.getLon());
	values.put(KEY_RDO_NAME, contact.getRdo_name());
	values.put(KEY_RDO_NUMBER, contact.getRdo_number());
	

	// Inserting Row
	db.insert(TABLE_CONTACTS, null, values);
	db.close(); // Closing database connection
    }

    // Getting single contact
    Contact_branding Get_Contact(int id) {
	SQLiteDatabase db = this.getReadableDatabase();

	Cursor cursor = db.query(TABLE_CONTACTS, new String[] { KEY_ID,
		KEY_NAME, 
		KEY_PH_NO, 
		//KEY_EMAIL,
		KEY_REG_DATE,
		
		KEY_LAT,
		KEY_LON,
		KEY_RDO_NAME,
		KEY_RDO_NUMBER
	}, KEY_ID + "=?",
		new String[] { String.valueOf(id) }, null, null, null, null);
	if (cursor != null)
	    cursor.moveToFirst();

	Contact_branding contact = new Contact_branding(Integer.parseInt(cursor.getString(0)),
		cursor.getString(1), 
		cursor.getString(2), 
		cursor.getString(3),
		cursor.getString(4),
		cursor.getString(5),
		cursor.getString(6),
		cursor.getString(7)
		
		
			);
	// return contact
	cursor.close();
	db.close();

	return contact;
    }

    // Getting All Contacts
    public ArrayList<Contact_branding> Get_Contacts() {
	try {
	    contact_list.clear();

	    // Select All Query
	    String selectQuery = "SELECT  * FROM " + TABLE_CONTACTS;

	    SQLiteDatabase db = this.getWritableDatabase();
	    Cursor cursor = db.rawQuery(selectQuery, null);

	    // looping through all rows and adding to list
	    if (cursor.moveToFirst()) {
		do {
		    Contact_branding contact = new Contact_branding();
		    contact.setID(Integer.parseInt(cursor.getString(0)));
		    contact.setName(cursor.getString(1));
		    contact.setPhoneNumber(cursor.getString(2));
		    //contact.setEmail(cursor.getString(3));
		    
		    //add more fields to be looped
		    contact.setReg_date(cursor.getString(3));
		   
		    contact.setLat(cursor.getString(4));
		    contact.setLon(cursor.getString(5));
		    contact.setRdo_name(cursor.getString(6));
		    contact.setRdo_number(cursor.getString(7));
		   
		   
		    
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
    public int Update_Contact(Contact_branding contact) {
	SQLiteDatabase db = this.getWritableDatabase();

	ContentValues values = new ContentValues();
	values.put(KEY_NAME, contact.getName());
	values.put(KEY_PH_NO, contact.getPhoneNumber());
	//values.put(KEY_EMAIL, contact.getEmail());
	
	//new
		values.put(KEY_REG_DATE, contact.getReg_date());
		
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
