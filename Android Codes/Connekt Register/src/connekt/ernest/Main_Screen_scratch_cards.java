package connekt.ernest;

import java.util.ArrayList;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

public class Main_Screen_scratch_cards extends Activity {
    Button add_btn;
    ListView Contact_listview;
    ArrayList<Contact_scratch_cards> contact_data = new ArrayList<Contact_scratch_cards>();
    Contact_Adapter cAdapter;
    DatabaseHandler_scratch_cards db;
    String Toast_msg;
    
    @Override
 	public void onBackPressed() {
 	 
 	            	  Intent i = new Intent(getApplicationContext(),
 	            			 MainActivity.class);
 						startActivity(i);
 						finish();
 	}
	

    @Override
    public void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.main_scratch_cards);
	 final SharedPreferences preferences ;
		String PREFS_NAME = "com.example.sp.LoginPrefs";
		 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

	     //String uname = getIntent().getExtras().getString("USERNAME");
	     final String number = getIntent().getExtras().getString("number");
	     final String name = getIntent().getExtras().getString("name");
	
	try {
	    Contact_listview = (ListView) findViewById(R.id.list);
	    Contact_listview.setItemsCanFocus(false);
	   add_btn = (Button) findViewById(R.id.add_btn);

	    Set_Referash_Data();

	} catch (Exception e) {
	    // TODO: handle exception
	    Log.e("some error", "" + e);
	}
	
	add_btn.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
		Intent add_user = new Intent(Main_Screen_scratch_cards.this,
			Add_Update_User_scratch_cards.class);
		add_user.putExtra("called", "add");
		add_user.putExtra("number", number);
		add_user.putExtra("name", name);
		add_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(add_user);
		finish();
	    }
	});
	

    }

    public void Call_My_Blog(View v) {
	Intent intent = new Intent(Main_Screen_scratch_cards.this, My_Blog.class);
	startActivity(intent);
	finish();

    }

    public void Set_Referash_Data() {
	contact_data.clear();
	db = new DatabaseHandler_scratch_cards(this);
	ArrayList<Contact_scratch_cards> contact_array_from_db = db.Get_Contacts();

	for (int i = 0; i < contact_array_from_db.size(); i++) {

	    int tidno = contact_array_from_db.get(i).getID();
	    String name = contact_array_from_db.get(i).getName();
	    String mobile = contact_array_from_db.get(i).getPhoneNumber();
	    //String email = contact_array_from_db.get(i).getEmail();
	    //add new
	    String reg_date = contact_array_from_db.get(i).getReg_date();   
    	String serial_number = contact_array_from_db.get(i).getSerial_number();  
	      String phone2 = contact_array_from_db.get(i).getPhone2(); 
	      String gender = contact_array_from_db.get(i).getGender(); 
	      String dob  = contact_array_from_db.get(i).getDob();
	      String address = contact_array_from_db.get(i).getAddress(); 
	      String id_type = contact_array_from_db.get(i).getId_type(); 
	      String id_number = contact_array_from_db.get(i).getId_number(); 
	      String business_name  = contact_array_from_db.get(i).getBusiness_name();
	      String business_type  = contact_array_from_db.get(i).getBusiness_type();
	      String items = contact_array_from_db.get(i).getItems(); 
	      String lat = contact_array_from_db.get(i).getLat(); 
	      String lon = contact_array_from_db.get(i).getLon();
	      String rdo_name  = contact_array_from_db.get(i).getRdo_name();
	      String rdo_number = contact_array_from_db.get(i).getRdo_number();
	    
	    Contact_scratch_cards cnt = new Contact_scratch_cards();
	    cnt.setID(tidno);
	    cnt.setName(name);
	    //cnt.setEmail(email);
	    cnt.setPhoneNumber(mobile);
	    //add new
	    cnt.setReg_date(reg_date);
	    cnt.setSerial_number(serial_number);
	    cnt.setPhone2(phone2);
	    cnt.setGender(gender);
	    cnt.setDob(dob);
	    cnt.setAddress(address);
	    cnt.setId_type(id_type);
	    cnt.setId_number(id_number);
	    cnt.setBusiness_name(business_name);
	    cnt.setBusiness_type(business_type);
	    cnt.setItems(items);
	    cnt.setLat(lat);
	    cnt.setLon(lon);
	    cnt.setRdo_name(rdo_name);
	    cnt.setRdo_number(rdo_number);
	    
	    contact_data.add(cnt);
	}
	db.close();
	cAdapter = new Contact_Adapter(Main_Screen_scratch_cards.this, R.layout.listview_row,
		contact_data);
	Contact_listview.setAdapter(cAdapter);
	cAdapter.notifyDataSetChanged();
    }

    public void Show_Toast(String msg) {
	Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
    }

    @Override
    public void onResume() {
	// TODO Auto-generated method stub
	super.onResume();
	Set_Referash_Data();

    }

    public class Contact_Adapter extends ArrayAdapter<Contact_scratch_cards> {
	Activity activity;
	int layoutResourceId;
	Contact_scratch_cards user;
	ArrayList<Contact_scratch_cards> data = new ArrayList<Contact_scratch_cards>();

	public Contact_Adapter(Activity act, int layoutResourceId,
		ArrayList<Contact_scratch_cards> data) {
	    super(act, layoutResourceId, data);
	    this.layoutResourceId = layoutResourceId;
	    this.activity = act;
	    this.data = data;
	    notifyDataSetChanged();
	}

	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
	    View row = convertView;
	    UserHolder holder = null;

	    if (row == null) {
		LayoutInflater inflater = LayoutInflater.from(activity);

		row = inflater.inflate(layoutResourceId, parent, false);
		holder = new UserHolder();
		holder.name = (TextView) row.findViewById(R.id.user_name_txt);
		holder.name.setTextSize(14.0f);
		//holder.email = (TextView) row.findViewById(R.id.user_email_txt);
		holder.number = (TextView) row.findViewById(R.id.user_mob_txt);
		//mine
		
		
		
		
		holder.edit = (Button) row.findViewById(R.id.btn_update);
		holder.delete = (Button) row.findViewById(R.id.btn_delete);
		row.setTag(holder);
	    } else {
		holder = (UserHolder) row.getTag();
	    }
	    user = data.get(position);
	    holder.edit.setTag(user.getID());
	    holder.delete.setTag(user.getID());
	    holder.name.setText(user.getName());
	  //  holder.email.setText(user.getEmail());
	    holder.number.setText(user.getPhoneNumber());

	    final SharedPreferences preferences ;
		String PREFS_NAME = "com.example.sp.LoginPrefs";
		 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

	     //String uname = getIntent().getExtras().getString("USERNAME");
	     final String number = getIntent().getExtras().getString("number");
	     final String name = getIntent().getExtras().getString("name");
	    holder.edit.setOnClickListener(new OnClickListener() {

		@Override
		public void onClick(View v) {
		    // TODO Auto-generated method stub
		    Log.i("Edit Button Clicked", "**********");

		    Intent update_user = new Intent(activity,
			    Add_Update_User_scratch_cards.class);
		    update_user.putExtra("called", "update");
		    update_user.putExtra("number", number);
		    update_user.putExtra("name", name);
		    update_user.putExtra("USER_ID", v.getTag().toString());
		    activity.startActivity(update_user);
		    finish();

		}
	    });
	    holder.delete.setOnClickListener(new OnClickListener() {

		@Override
		public void onClick(final View v) {
		    // TODO Auto-generated method stub

		    // show a message while loader is loading

		    AlertDialog.Builder adb = new AlertDialog.Builder(activity);
		    adb.setTitle("Delete?");
		    adb.setMessage("Are you sure you want to delete ");
		    final int user_id = Integer.parseInt(v.getTag().toString());
		    adb.setNegativeButton("Cancel", null);
		    adb.setPositiveButton("Ok",
			    new AlertDialog.OnClickListener() {
				@Override
				public void onClick(DialogInterface dialog,
					int which) {
				    // MyDataObject.remove(positionToRemove);
				    DatabaseHandler_scratch_cards dBHandler = new DatabaseHandler_scratch_cards(
					    activity.getApplicationContext());
				    dBHandler.Delete_Contact(user_id);
				    Main_Screen_scratch_cards.this.onResume();

				}
			    });
		    adb.show();
		}

	    });
	    return row;

	}

	class UserHolder {
	    TextView name;
	    //TextView email;
	    TextView number;
	    //new text view
	    
	    
	    
	    Button edit;
	    Button delete;
	}

    }

}
