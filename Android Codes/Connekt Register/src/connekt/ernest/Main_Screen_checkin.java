package connekt.ernest;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.text.Html;
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

public class Main_Screen_checkin extends Activity {
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
    ImageButton imageButton_Chk, imageButton_chk_list, imageButton_My_Dropped_list;
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
    String  rdo_number, p_number;
    
    
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
	setContentView(R.layout.main_checkin);
	
	tv = (TextView) findViewById(R.id.tv);
	
	pos_number = (EditText) findViewById(R.id.pos_number);
	p_number = pos_number.getText().toString();
	imageButton_Chk = (ImageButton) findViewById(R.id.imageButton_Chk);
	imageButton_chk_list = (ImageButton) findViewById(R.id.imageButton_chk_list);
	imageButton_My_Dropped_list =  (ImageButton) findViewById(R.id.imageButton_My_Dropped_list);
	 add_btn = (Button) findViewById(R.id.add_btn);
	 Contact_listview = (ListView) findViewById(R.id.list);
	 Contact_listview.setItemsCanFocus(false);
	//next = getIntent().getStringExtra("go");
	
	final SharedPreferences preferences ;
	String PREFS_NAME = "com.example.sp.LoginPrefs";
	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);
      uname = getIntent().getExtras().getString("name");
     upass = getIntent().getExtras().getString("number");
	
	if(uname == null){
		tv.setVisibility(View.GONE);
		add_btn.setVisibility(View.GONE);
		
		
	}
	else{
		add_btn.setVisibility(View.GONE);
		Contact_listview.setVisibility(View.GONE);
	//sub = next.substring(24, 35);
	
		/*tv.setText("Your name: " 
	+ " " +
	 uname + "\n Your number: " +upass 
			
			);
			*/
	
	//this is the place to add other buttons
		
		imageButton_chk_list.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Checkin_List.class);
  				startActivity(i);
  				finish();
  			} 
  		});
		
		imageButton_My_Dropped_list.setOnClickListener(new View.OnClickListener() {
         	public void onClick(View view) {
         		Intent i = new Intent(getApplicationContext(),
         				Main_Screen_sim.class);
  				startActivity(i);
  				finish();
  			} 
  		});
		
	
		imageButton_Chk.setOnClickListener(new View.OnClickListener() {
	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
	    	//fetch from db
	    	 if(pos_number.length() < 12){
	    		 pos_number.setError(Html.fromHtml("<font color='red'>Complete POS Number!</font>"));
		        }
		        else{ 
	    	ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
	         postParameters.add(new BasicNameValuePair("posnumber", pos_number.getText().toString()));
	        String response1 = null;
	        
	       
	         //the number 1
	         try {
	    response1 = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/mypos.php",postParameters); // your ip address if using localhost server
	    String result = response1.toString();  
	     //parse json data

	        try{
	               
	          JSONArray jArray = new JSONArray(result);
	            
	                jArray = new JSONArray(result);
	                JSONObject json_data=null;
	                
	                
	                for(int i=0;i<jArray.length();i++){
	                         json_data = jArray.getJSONObject(i);
	                         
	                         //fetch json objects

	                        Log.i("log_tag","POS Details: "

	                        );
	                             							//from db
	                        reg_date = json_data.getString("registration_date");
	                        name = json_data.getString("Activator_Name");
	                        phone2 = json_data.getString("altenative_number");
	                    gender = json_data.getString("gender");
	                        dob = json_data.getString("DOB");
	                        address = json_data.getString("Area");
	                    id_type = json_data.getString("id_type");
	                      business_type = json_data.getString("pos_type");
	                        id_number = json_data.getString("id_number");
	                        business_name = json_data.getString("business_name");
	                       // items = json_data.getString("items");
	                        lat = json_data.getString("lat");
	                        lon = json_data.getString("lon");
	                        //use the new from login
	                        rdo_name = json_data.getString("Manager_Name");
	                        rdo_number = json_data.getString("Manager_Number");
	                        
	                        
	                        Intent add_user = new Intent(Main_Screen_checkin.this,
	                    			Add_Update_User_checkin.class);
	                    		add_user.putExtra("called", "add");
	                    		//add_user.putExtra("go1", sub);
	                    		
	                    		get_number = pos_number.getText().toString();
	                    		//tunaendelea kubeba
	                    		 
	                    		 add_user.putExtra("pos_number", get_number);
	                    		add_user.putExtra("number", upass);
	                    		add_user.putExtra("nam", uname);
	                    		//OBTAINED
	                    		add_user.putExtra("reg_date", reg_date);
	                    		add_user.putExtra("name", name);
	                    		add_user.putExtra("phone2", phone2);
	                    		add_user.putExtra("gender", gender);
	                    		add_user.putExtra("dob", dob);
	                    		add_user.putExtra("address", address);
	                    		add_user.putExtra("id_type", id_type);
	                    		add_user.putExtra("business_type", business_type);
	                    		add_user.putExtra("id_number", id_number);
	                    		add_user.putExtra("business_name", business_name);
	                    		//add_user.putExtra("items", items);
	                    		add_user.putExtra("lat", lat);
	                    		add_user.putExtra("lon", lon);
	                    		add_user.putExtra("rdo_name", rdo_name);
	                    		add_user.putExtra("rdo_number", rdo_number);
	                    		
	                    		
	                    		
	                    		if(result == null){
	                    			Toast.makeText(getApplicationContext(), uname + ", the POS Number was not found in database!",
	                   				     Toast.LENGTH_SHORT).show();
	                    			 Intent add_user1 = new Intent(getApplicationContext(),
	             	         				Submenu.class);
	                    			 p_number = pos_number.getText().toString();
	             	                add_user1.putExtra("p_number", p_number);
	                         		add_user1.putExtra("number", upass);
	                         		add_user1.putExtra("name", uname);
	             	  				startActivity(add_user1);
	             	  				finish();
	                    			
	                    		}
	                    		else{
	                    			add_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
	                    		
	                    			| Intent.FLAG_ACTIVITY_NEW_TASK);
	                    		startActivity(add_user);
	                        	finish();
	                    		}

	                }
	        }
	        catch(JSONException e){
	        	
	                Log.e("log_tag", "Error parsing data "+e.toString());
	                Toast.makeText(getApplicationContext(), uname + ", the POS Number was not found in database!",
          				     Toast.LENGTH_SHORT).show();
           			 Intent add_user1 = new Intent(getApplicationContext(),
    	         				Submenu.class);
           			 p_number = pos_number.getText().toString();
    	                add_user1.putExtra("p_number", p_number);
                		add_user1.putExtra("number", upass);
                		add_user1.putExtra("name", uname);
    	  				startActivity(add_user1);
    	  				finish();
           			
	        }
	        
	   }
	         catch (Exception e) {
	        	
	       	//  showresult.setText("Error in Internet Connection. Please check your Internet settings");
	    Log.e("log_tag","Error in http connection!!" + e.toString()); 
	    Toast.makeText(getApplicationContext(), uname + ", there is a problem in Internet connection. Please try again!",
       	     Toast.LENGTH_SHORT).show();
	    Intent add_user = new Intent(getApplicationContext(),
 				MainActivity.class);
	    p_number = pos_number.getText().toString();
        add_user.putExtra("p_number", p_number);
		add_user.putExtra("number", upass);
		add_user.putExtra("name", uname);
			startActivity(add_user);
			finish();
	   }
	    	
	    	
	    	
		
	    }
	    }
	    
	});
		
	}
	

    }

    public void Call_My_Blog(View v) {
	Intent intent = new Intent(Main_Screen_checkin.this, My_Blog_checkin.class);
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
	cAdapter = new Contact_Adapter(Main_Screen_checkin.this, R.layout.listview_row_checkin,
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
				    Main_Screen_checkin.this.onResume();

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
