package connekt.ernest;

import java.util.ArrayList;


import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.text.Html;
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

public class Main_Screen_sim extends Activity {
    Button add_btn;
    ListView Contact_listview;
    ArrayList<Contact_sim> contact_data = new ArrayList<Contact_sim>();
    Contact_Adapter cAdapter;
    DatabaseHandler_sim db;
    String Toast_msg, p_number, name;
    String next = null;
    TextView tv;
    String sub = null;
    
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
	setContentView(R.layout.main_sim);
	tv = (TextView) findViewById(R.id.tv);
	 add_btn = (Button) findViewById(R.id.add_btn);
	 Contact_listview = (ListView) findViewById(R.id.list);
	 Contact_listview.setItemsCanFocus(false);
	 
	next = getIntent().getStringExtra("go");
	  p_number = getIntent().getStringExtra("p_number");
	  name = getIntent().getStringExtra("name");

	
	if(next == null){
		tv.setVisibility(View.GONE);
		add_btn.setVisibility(View.GONE);
	}
	else{
		Contact_listview.setVisibility(View.GONE);
	sub = next.substring(24, 35);
	tv.setText(name + ", you are about to drop Sim card Batch Number" 
	+ " " +
	 sub 
			+" "+ "to " + p_number + " " +
			"Please press Drop Sim Cards Button to complete the action."
			);
	
	add_btn.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
		Intent add_user = new Intent(Main_Screen_sim.this,
			Add_Update_User_sim.class);
		add_user.putExtra("called", "add");
		add_user.putExtra("go1", sub);
		add_user.putExtra("p_number", p_number);
		add_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(add_user);
		
		
    	finish();
	    }
	});
	
	}
	
	
	
	
	//final Intent intent = new Intent (this, Add_Update_User_sim.class);
	

    }

    public void Call_My_Blog(View v) {
	Intent intent = new Intent(Main_Screen_sim.this, My_Blog_sim.class);
	startActivity(intent);
	finish();

    }

    public void Set_Referash_Data() {
	contact_data.clear();
	db = new DatabaseHandler_sim(this);
	ArrayList<Contact_sim> contact_array_from_db = db.Get_Contacts();

	for (int i = 0; i < contact_array_from_db.size(); i++) {

	    int tidno = contact_array_from_db.get(i).getID();
	    String name = contact_array_from_db.get(i).getName();
	    String number = contact_array_from_db.get(i).getNumber();   
	     // String rdo_name  = contact_array_from_db.get(i).getRdo_name();
	      //String rdo_number = contact_array_from_db.get(i).getRdo_number();
	    
	    Contact_sim cnt = new Contact_sim();
	    cnt.setID(tidno);
	    cnt.setName(name);
	    cnt.setNumber(number);
	  //  cnt.setRdo_name(rdo_name);
	   // cnt.setRdo_number(rdo_number);
	    
	    contact_data.add(cnt);
	}
	db.close();
	cAdapter = new Contact_Adapter(Main_Screen_sim.this, R.layout.listview_row_sim,
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

    public class Contact_Adapter extends ArrayAdapter<Contact_sim> {
	Activity activity;
	int layoutResourceId;
	Contact_sim user;
	ArrayList<Contact_sim> data = new ArrayList<Contact_sim>();

	public Contact_Adapter(Activity act, int layoutResourceId,
		ArrayList<Contact_sim> data) {
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
		holder.name.setTextSize(10.0f);
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
	    holder.number.setText(user.getNumber());

	    holder.edit.setOnClickListener(new OnClickListener() {

		@Override
		public void onClick(View v) {
		    // TODO Auto-generated method stub
		    Log.i("Edit Button Clicked", "**********");

		    Intent update_user = new Intent(activity,
			    Add_Update_User_sim.class);
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
				    DatabaseHandler_sim dBHandler = new DatabaseHandler_sim(
					    activity.getApplicationContext());
				    dBHandler.Delete_Contact(user_id);
				    Main_Screen_sim.this.onResume();

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
	   // new text view;
	    
	    
	    
	    Button edit;
	    Button delete;
	}

    }

}
