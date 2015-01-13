package connekt.ernest;

import java.util.ArrayList;

import java.util.Calendar;
import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.app.AlertDialog;
import android.app.DatePickerDialog;
import android.app.Dialog;
import android.app.ProgressDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.location.Criteria;
import android.location.Location;
import android.location.LocationManager;
import android.os.Bundle;
import android.text.Editable;
import android.text.Html;
import android.text.Spanned;
import android.text.TextWatcher;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;



public class Add_Update_User_sim extends Activity {
	    ProgressDialog progressBar;
	 
	    @Override
  		public void onBackPressed() {
  		    AlertDialog.Builder builder = new AlertDialog.Builder(this);
  		    builder.setMessage("Are you sure you want to go back?")
  		           .setCancelable(false)
  		           .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
  		               public void onClick(DialogInterface dialog, int id) {
  		            	  Intent i = new Intent(getApplicationContext(),
  									MainActivity.class);
  							startActivity(i);
  							finish();
  		               }
  		           })
  		           .setNegativeButton("No", new DialogInterface.OnClickListener() {
  	        public void onClick(DialogInterface dialog, int id) {
  	             dialog.cancel();
  	        }
  	    });
  		    AlertDialog alert = builder.create();
  		    alert.show();

  		}
	
	private static final int INFO_DEVICE_INFO_INDEX = 7;
    private static final int[] info_ids= {
        R.id.serviceState_info,
        R.id.cellLocation_info,
        R.id.callState_info,
        R.id.connectionState_info,
        R.id.signalLevel, //progess bar
        R.id.signalLevelInfo,
        R.id.dataDirection,
        R.id.device_info //imageview
    };

	
    EditText add_name;
    EditText add_number;
    EditText add_reg_date;
   
    EditText add_rdo_name;
    EditText add_rdo_number;
    String response, p_number;
    
    //text view
    TextView showresult;
    
    //for lat &  long
    LocationManager lm;
    //TextView lt, ln;
    String provider;
    Location l;
   
    
    Button add_save_btn, add_view_all, update_btn, update_view_all, update_online_btn;
    ImageButton pickDate;
    ImageButton pickDate1;
    int pYear;
    int pMonth;
    int pDay;
    String cap = "";
    /** This integer will uniquely define the dialog to be used for displaying date picker.*/
    static final int DATE_DIALOG_ID = 0;
     
    /** Callback received when the user "picks" a date in the dialog */
    private DatePickerDialog.OnDateSetListener pDateSetListener =
            new DatePickerDialog.OnDateSetListener() {
 
                @Override
				public void onDateSet(DatePicker view, int year,
                                      int monthOfYear, int dayOfMonth) {
               	 pYear = year;
                    pMonth = monthOfYear;
                    pDay = dayOfMonth;
                    //displayToast();
                }
            };
     
    /** Updates the date in the TextView */
    private void updateDisplay() {
        add_reg_date.setText(
            new StringBuilder()
                    // Month is 0 based so add 1
                    .append(pMonth + 1).append("/")
                    .append(pDay).append("/")
                    .append(pYear));
    }
    
 
    
    LinearLayout add_view, update_view;
                                       
    String	valid_name = null;
    String	valid_number = null;
    String	Toast_msg = null;
    //add mine
    
    String valid_reg_date = null;
    
    
    //String capture = null;
    String next = "...";
    String net;
    
    String	valid_user_id = "";
    		int USER_ID;
    DatabaseHandler_sim dbHandler = new DatabaseHandler_sim(this);

    @Override
    protected void onCreate(Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	super.onCreate(savedInstanceState);
	setContentView(R.layout.add_update_screen_sim);
	
	net = getIntent().getStringExtra("go1");
	  p_number = getIntent().getStringExtra("p_number");

	//add_name.setText(net);

	// set screen
	Set_Add_Update_Screen();

	// set visibility of view as per calling activity
	String called_from = getIntent().getStringExtra("called");

	if (called_from.equalsIgnoreCase("add")) {
	    add_view.setVisibility(View.VISIBLE);
	    update_view.setVisibility(View.GONE);
	    add_view_all.setVisibility(View.GONE);
	    update_view_all.setVisibility(View.GONE);
	    
	   // add_rdo_name.setVisibility(View.GONE);
		//add_rdo_number.setVisibility(View.GONE);
	} else {

	    update_view.setVisibility(View.VISIBLE);
	    add_view.setVisibility(View.GONE);
	    add_view_all.setVisibility(View.GONE);
	    USER_ID = Integer.parseInt(getIntent().getStringExtra("USER_ID"));
	    update_view_all.setVisibility(View.GONE);

	    Contact_sim c = dbHandler.Get_Contact(USER_ID);

	    add_name.setText(c.getName());
	    add_number.setText(c.getNumber());
	    //ADD MY FIELDS
	      add_reg_date.setText(c.getReg_date());
	   
	    // dbHandler.close();
	}
	
	
	//<-- addd name starts -->

	add_name.addTextChangedListener(new TextWatcher() {

	    @Override
	    public void onTextChanged(CharSequence s, int start, int before,
		    int count) {
		// TODO Auto-generated method stub

	    }

	    @Override
	    public void beforeTextChanged(CharSequence s, int start, int count,
		    int after) {
		// TODO Auto-generated method stub

	    }

	    @Override
	    public void afterTextChanged(Editable s) {
		// TODO Auto-generated method stub
		Is_Valid_Person_Name(add_name);
	    }
	});
	//<-- add name ends -->
	
	//<-- addd number starts -->

		add_number.addTextChangedListener(new TextWatcher() {

		    @Override
		    public void onTextChanged(CharSequence s, int start, int before,
			    int count) {
			// TODO Auto-generated method stub

		    }

		    @Override
		    public void beforeTextChanged(CharSequence s, int start, int count,
			    int after) {
			// TODO Auto-generated method stub

		    }

		    @Override
		    public void afterTextChanged(Editable s) {
			// TODO Auto-generated method stub
			Is_Valid_Add_Number(add_number);
		    }
		});
		//<-- add name ends -->
	
	//<-- add_reg_date starts -->

	add_reg_date.addTextChangedListener(new TextWatcher() {

		    @Override
		    public void onTextChanged(CharSequence s, int start, int before,
			    int count) {
			// TODO Auto-generated method stub

		    }

		    @Override
		    public void beforeTextChanged(CharSequence s, int start, int count,
			    int after) {
			// TODO Auto-generated method stub

		    }

		    @Override
		    public void afterTextChanged(Editable s) {
			// TODO Auto-generated method stub
			Is_Valid_Reg_Date(add_reg_date);
		    }
		});
		//<-- add_reg_date ends -->
	
	
	
	
	
	
	
	
	
	add_save_btn.setOnClickListener(new View.OnClickListener() {
		

	    @Override
	    public void onClick(View v) {
	    	
	    
	    	
	    	valid_reg_date = add_reg_date.getText().toString();
	    	valid_number = add_number.getText().toString();
	    	valid_name = add_name.getText().toString();
		// check the value state is null or not
		

		    dbHandler.Add_Contact(new Contact_sim(
		    		valid_name,
		    		valid_number,
			    valid_reg_date));
		    Toast_msg = "Data saved successfully!";
		    Show_Toast(Toast_msg);
		   
		    Intent i = new Intent(getApplicationContext(),
		    		MainActivity.class);
				startActivity(i);
				finish();

		

	    }
	});

	update_btn.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub

		valid_name = add_name.getText().toString();
		valid_number = add_number.getText().toString();
		valid_reg_date = add_reg_date.getText().toString();    
	      
	    
		    dbHandler.Update_Contact(new Contact_sim(
		    		USER_ID, 
		    		valid_name,
		    		valid_number,
			    valid_reg_date ));
		    dbHandler.close();
		    Toast_msg = "Data Update successfully";
		    Show_Toast(Toast_msg);
		    Intent i = new Intent(getApplicationContext(),
		    		MainActivity.class);
				startActivity(i);
				finish();
		

	    }
	});
	
	

	
	update_view_all.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
		Intent view_user = new Intent(Add_Update_User_sim.this,
			Main_Screen_sim.class);
		view_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(view_user);
		finish();
		
	    }
	});

	add_view_all.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
		Intent view_user = new Intent(Add_Update_User_sim.this,
			Main_Screen_sim.class);
		view_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(view_user);
		finish();
	    }
	});
	
	
	//online button
	//dont mess with this button.....hahahaaaa
	update_online_btn.setOnClickListener(new View.OnClickListener(){
    	
        @Override
		public void onClick(View v) {

        	  progressBar = new ProgressDialog(v.getContext());
               progressBar.setCancelable(true);
           progressBar.setMessage("Saving...");
               progressBar.setProgressStyle(ProgressDialog.STYLE_SPINNER);
               progressBar.setProgress(0);
               progressBar.setMax(100);
               progressBar.show();
        	//Integer nameLen = 60;
                ArrayList<NameValuePair> postParameters1 = new ArrayList<NameValuePair>();
                postParameters1.add(new BasicNameValuePair("valid_name", add_name.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_number", add_number.getText().toString()));
                postParameters1.add(new BasicNameValuePair("status", "Dropped"));
             // create and display a new ProgressBarDialog
              
             
			        
            try {
            	
    			response = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/drop_sim.php",postParameters1);
    			//progressBar.dismiss();
    			Intent i = new Intent(Add_Update_User_sim.this,
    					MainActivity.class);
				startActivity(i);
				finish();
				Toast_msg = "Record Saved Successfully";
			    Show_Toast(Toast_msg);
			    
			  //sent magic
			    String sent;
				Spanned msg;
				
			    msg = Html.fromHtml("<font color='green'>&#10003;</font>");
			    valid_name = add_name.getText().toString();
				//add also here
				//muhimu sana dude
			    valid_name = add_name.getText().toString();
				valid_number = add_number.getText().toString()+ " " + msg;
				valid_reg_date = add_reg_date.getText().toString();    
			      
			    
				    dbHandler.Update_Contact(new Contact_sim(
				    		USER_ID, 
				    		valid_name,
				    		valid_number,
					    valid_reg_date ));
				    dbHandler.close();
			    
    			
    			
    		} catch (Exception e) {
    			// TODO Auto-generated catch block
    			Toast_msg = "You don't have Internet Connection. Please Try again";
    			Show_Toast(Toast_msg);
    			showresult.setText("Error in Internet Connection. Saving Failed. Please check your Internet settings and Try again");
    			e.printStackTrace();
    			
    		}
            
         
            }
  
             
});
    
	//online ends here
	

    }
    
    
   

    
    /*
     * Sets the textview contents
     * */
    private void setTextViewText(int id,String text) {
        ((TextView)findViewById(id)).setText(text);
    }	

   
	
    public void Set_Add_Update_Screen() {
    	
    	

	add_name = (EditText) findViewById(R.id.add_name);
	add_number = (EditText) findViewById(R.id.add_number);
	add_number.setText(p_number);
	
	add_name.setText(net);
	//MUHIMU SANA
	
	add_reg_date= (EditText) findViewById(R.id.add_reg_date);
    
    add_rdo_name= (EditText) findViewById(R.id.add_rdo_name);
    add_rdo_number= (EditText) findViewById(R.id.add_rdo_number);
    pickDate = (ImageButton) findViewById(R.id.pickDate); 

	add_save_btn = (Button) findViewById(R.id.add_save_btn);
	update_btn = (Button) findViewById(R.id.update_btn);
	add_view_all = (Button) findViewById(R.id.add_view_all);
	update_view_all = (Button) findViewById(R.id.update_view_all);
	//save online
	update_online_btn = (Button) findViewById(R.id.update_online_btn);
	showresult  = (TextView) findViewById(R.id.showresult);
	
	
	//button photo
	
	

	add_view = (LinearLayout) findViewById(R.id.add_view);
	update_view = (LinearLayout) findViewById(R.id.update_view);

	add_view.setVisibility(View.GONE);
	update_view_all.setVisibility(View.GONE);
	add_view_all.setVisibility(View.GONE);
	update_view.setVisibility(View.GONE);
	
	
	
	
	//for rdo number and name
	
	
	//for lat long
	//get location service
	   lm=(LocationManager)this.getSystemService(Context.LOCATION_SERVICE);
	   Criteria c=new Criteria();
	 
	   provider=lm.getBestProvider(c, false);
	   //now you have best provider
	   //get location
	   l=lm.getLastKnownLocation(provider);
	   if(l!=null)
	   {
	     //get latitude and longitude of the location
	     double lng=l.getLongitude();
	     double lat=l.getLatitude();
	     //display on text view
	    
	   }
	   else
	   {
	    
	   }
	
	  
	//assigning button click events in order
    /** Listener for click event of the button */
    pickDate.setOnClickListener(new View.OnClickListener() {
        @Override
		public void onClick(View v) {
            showDialog(DATE_DIALOG_ID);
        }
   });
    
   
	
	 /** Get the current date */
    final Calendar cal = Calendar.getInstance();
    pYear = cal.get(Calendar.YEAR);
    pMonth = cal.get(Calendar.MONTH);
    pDay = cal.get(Calendar.DAY_OF_MONTH);

    /** Display the current date in the TextView */
    updateDisplay();

    }
    /** Create a new dialog for date picker */
    @Override
    protected Dialog onCreateDialog(int id) {
        switch (id) {
        case DATE_DIALOG_ID:
            return new DatePickerDialog(this,
                        pDateSetListener,
                        pYear, pMonth, pDay);
        }
        return null;
    }

   

    //starts
    public void Is_Valid_Person_Name(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Accept Alphabets Only!</font>"));
	    valid_name = null;
	} else if (!edt.getText().toString().matches("[a-zA-Z ]+")) {
	    edt.setError(Html.fromHtml("<font color='red'>Accept Alphabets Only!</font>"));
	    valid_name = null;
	} else {
	    valid_name = edt.getText().toString();
	}

    }
    //ends
    
    //starts
    public void Is_Valid_Add_Number(EditText edt) throws NumberFormatException {
    	if (edt.getText().toString().length() <= 0) {
    	    edt.setError(Html.fromHtml("<font color='red'>Number Only!</font>"));
    	    valid_number = null;
    	}  else {
    		valid_number = edt.getText().toString();
    	}

    }
    //ends
    
  //starts //change this to date only
    public void Is_Valid_Reg_Date(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Select Date!</font>"));
	    valid_reg_date = null;
	}  else {
		valid_reg_date = edt.getText().toString();
	}

    }
    //ends
    
 
    
  
    
 
    
    

    public void Show_Toast(String msg) {
	Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
    }

  
  
    
    
    
  public void onLocationChanged(Location arg0)
    {
     double lng=l.getLongitude();
     double lat=l.getLatitude();
    }

   public void onProviderDisabled(String arg0) {
    // TODO Auto-generated method stub
   }
   public void onProviderEnabled(String arg0) {
    // TODO Auto-generated method stub
   }

   public void onStatusChanged(String arg0, int arg1, Bundle arg2) {
    // TODO Auto-generated method stub
   }
    
 
	 

}
