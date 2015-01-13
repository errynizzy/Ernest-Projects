package connekt.ernest;

import java.util.ArrayList;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

public class Checkin_List extends Activity {
    Button add_btn;
    ListView Contact_listview;
    ArrayList<Contact_checkin> contact_data = new ArrayList<Contact_checkin>();
    Contact_Adapter cAdapter;
    DatabaseHandler_checkin db;
    String Toast_msg;
    String uname;
    String upass;
    EditText pos_number;
    String get_number;
    ImageButton imageButton_Chk, imageButton_chk_list;
    TextView tv;
    
    String  reg_date;
    String  name;
    String  phone2;
    String  gender;
    String  dob;
    String  address;
    String  id_type;
    String  business_type;
    String  id_number;
    String  business_name;
    String  items;
    String  lat;
    String  lon;
    String  rdo_name;
    String  rdo_number;
    
    
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
	setContentView(R.layout.main_chekin_list);
	
	tv = (TextView) findViewById(R.id.tv);
	
	pos_number = (EditText) findViewById(R.id.pos_number);
	imageButton_Chk = (ImageButton) findViewById(R.id.imageButton_Chk);
	imageButton_chk_list = (ImageButton) findViewById(R.id.imageButton_chk_list);
	 add_btn = (Button) findViewById(R.id.add_btn);
	 Contact_listview = (ListView) findViewById(R.id.list);
	 Contact_listview.setItemsCanFocus(false);
	//next = getIntent().getStringExtra("go");
	// Contact_listview.setVisibility(View.VISIBLE);
	 add_btn.setVisibility(View.GONE);
	
	
		
	}
	

    

    public void Call_My_Blog(View v) {
	Intent intent = new Intent(Checkin_List.this, My_Blog_checkin.class);
	startActivity(intent);
	finish();

    }

    public void Set_Referash_Data() {
	contact_data.clear();
	db = new DatabaseHandler_checkin(this);
	ArrayList<Contact_checkin> contact_array_from_db = db.Get_Contacts();

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
	    
	    Contact_checkin cnt = new Contact_checkin();
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
	cAdapter = new Contact_Adapter(Checkin_List.this, R.layout.listview_row_checkin,
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

    public class Contact_Adapter extends ArrayAdapter<Contact_checkin> {
	Activity activity;
	int layoutResourceId;
	Contact_checkin user;
	ArrayList<Contact_checkin> data = new ArrayList<Contact_checkin>();

	public Contact_Adapter(Activity act, int layoutResourceId,
		ArrayList<Contact_checkin> data) {
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

	    holder.edit.setOnClickListener(new OnClickListener() {

		@Override
		public void onClick(View v) {
		    // TODO Auto-generated method stub
		    Log.i("Edit Button Clicked", "**********");

		    Intent update_user = new Intent(activity,
			    Add_Update_User_checkin1.class);
		    update_user.putExtra("called", "update");
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
				    DatabaseHandler_checkin dBHandler = new DatabaseHandler_checkin(
					    activity.getApplicationContext());
				    dBHandler.Delete_Contact(user_id);
				    Checkin_List.this.onResume();

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
