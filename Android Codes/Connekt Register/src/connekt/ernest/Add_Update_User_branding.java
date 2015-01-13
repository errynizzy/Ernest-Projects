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
import android.content.SharedPreferences;
import android.location.Criteria;
import android.location.Location;
import android.location.LocationManager;
import android.os.Bundle;
import android.telephony.PhoneNumberFormattingTextWatcher;
import android.telephony.PhoneStateListener;
import android.telephony.TelephonyManager;
import android.text.Editable;
import android.text.Html;
import android.text.Spanned;
import android.text.TextWatcher;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;



public class Add_Update_User_branding extends Activity {
	
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
    EditText add_mobile;
    //EditText add_email;
    
    //new
    EditText add_reg_date;
    EditText add_lat;
    EditText add_lon;
    EditText add_rdo_name;
    EditText add_rdo_number;
    String response;
    Button img_btn;
    
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
 
                public void onDateSet(DatePicker view, int year,
                                      int monthOfYear, int dayOfMonth) {
               	 pYear = year;
                    pMonth = monthOfYear;
                    pDay = dayOfMonth;
                    //updateDisplay1();
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
                                       
    String valid_mob_number = null;
    //String	valid_email = null;
    String	valid_name = null;
    String	Toast_msg = null;
    //add mine
    
    String valid_reg_date = null;
    String valid_serial_number = null;
    String valid_phone2 = "...";
    String valid_gender = null;
    String valid_dob = null;
    String valid_address = null;
    String valid_id_type = null;
    String valid_id_number = null;
    String valid_business_name = null;
    String valid_business_type = null;
    String valid_items = null;
    String valid_zone = null;
    String valid_lat = null;
    String valid_lon = null;
    String valid_rdo_name = null;
    String valid_rdo_number = null;
    String capture = null;
    String next = "...";
    
    String	valid_user_id = "";
    		int USER_ID;
    DatabaseHandler_branding dbHandler = new DatabaseHandler_branding(this);

    @Override
    protected void onCreate(Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	super.onCreate(savedInstanceState);
	setContentView(R.layout.add_update_screen_branding);
	
	 final SharedPreferences preferences ;
		String PREFS_NAME = "com.example.sp.LoginPrefs";
		 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

	     //String uname = getIntent().getExtras().getString("USERNAME");
	     final String number = getIntent().getExtras().getString("number");
	     final String name = getIntent().getExtras().getString("name");


	// set screen
	Set_Add_Update_Screen();

	// set visibility of view as per calling activity
	String called_from = getIntent().getStringExtra("called");

	if (called_from.equalsIgnoreCase("add")) {
	    add_view.setVisibility(View.VISIBLE);
	    update_view.setVisibility(View.GONE);
	    add_view_all.setVisibility(View.GONE);
	    update_view_all.setVisibility(View.GONE);
	    img_btn.setVisibility(View.GONE);
	    add_rdo_number.setText(number);
	    add_rdo_name.setText(name);
	
		
	} else {

	    update_view.setVisibility(View.VISIBLE);
	    add_view.setVisibility(View.GONE);
	    USER_ID = Integer.parseInt(getIntent().getStringExtra("USER_ID"));
	    add_view_all.setVisibility(View.GONE);
	    update_view_all.setVisibility(View.GONE);
	    img_btn.setVisibility(View.GONE);
	    add_rdo_number.setText(number);
	    add_rdo_name.setText(name);
	
		img_btn.setVisibility(View.GONE);
		

	    Contact_branding c = dbHandler.Get_Contact(USER_ID);

	    add_name.setText(c.getName());
	    add_mobile.setText(c.getPhoneNumber());
	    //add_email.setText(c.getEmail());
	    
	    //ADD MY FIELDS
	      add_reg_date.setText(c.getReg_date());
	     
	      add_lat.setText(c.getLat());
	      add_lon.setText(c.getLon());
	      add_rdo_name.setText(c.getRdo_name());
	      add_rdo_number.setText(c.getRdo_number());
	      
	    
	    
	    // dbHandler.close();
	}
	//<-- Add Mobile Starts-->
	add_mobile.addTextChangedListener(new TextWatcher() {

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
		// min lenth 10 and max lenth 12 (2 extra for - as per phone
		// matcher format)
		Is_Valid_Sign_Number_Validation(12, 16, add_mobile);
	    }
	});
	add_mobile
		.addTextChangedListener(new PhoneNumberFormattingTextWatcher());
	
	//<-- Ends Mobile -->

	
	/*/<-- add mail starts -- >
	add_email.addTextChangedListener(new TextWatcher() {

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
		Is_Valid_Email(add_email);
	    }
	});
	//<-- add mail ends -->*/
	
	
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
	
	
	
	
	
	
	
	
	//<-- add_lat -->
	add_lat.addTextChangedListener(new TextWatcher() {

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
															Is_Valid_Add_Lat(add_lat);
														    }
														});
														//<-- add_lat ends here -->
	
	//<-- add_lon -->
	add_lon.addTextChangedListener(new TextWatcher() {

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
																Is_Valid_Add_Lon(add_lon);
															    }
															});
															//<-- add_lon ends here -->
	
	//<-- add_rdo_name -->
	add_rdo_name.addTextChangedListener(new TextWatcher() {

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
																	Is_Valid_Add_Rdo_Name(add_rdo_name);
																    }
																});
																//<-- add_rdo_name ends here -->
	
	//<-- add_rdo_number -->
	add_rdo_number.addTextChangedListener(new TextWatcher() {

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
																		Is_Valid_Add_Rdo_Number(add_rdo_number);
																	    }
																	});
																	//<-- add_rdo_number ends here -->*/
	
	
	
	//final Intent intent = new Intent (this, SQLiteDemoActivity_id_brand.class);
	
	add_save_btn.setOnClickListener(new View.OnClickListener() {
	    @Override
	    public void onClick(View v) {
	    	next = add_mobile.getText().toString();
	    	//int pos =0;
	    	valid_lat = add_lat.getText().toString();
	    	valid_lon = add_lon.getText().toString();
	    	valid_reg_date = add_reg_date.getText().toString();
	    	valid_mob_number = add_mobile.getText().toString();
	    	valid_rdo_name = add_rdo_name.getText().toString();
	    	valid_rdo_number = add_rdo_number.getText().toString();
	    	valid_name = add_name.getText().toString();
	    	int len = add_mobile.length();
	    	 int len2 = add_lat.length();
	    	 int len3 = add_lon.length();
	    	 int len9 = add_name.length();
	    	
	    	 if(len<=0){
	    		 add_mobile.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 else if(len2<=0){
	    		 add_lat.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 else if(len3<=0){
	    		 add_lon.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 
	    	 
	    	 else if(len9<=0){
	    		 add_name.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 
	    	else{
		    dbHandler.Add_Contact(new Contact_branding(valid_name,
			    valid_mob_number, 
			    //valid_email,
			    valid_reg_date,
			    valid_lat,
			    valid_lon,
			    valid_rdo_name,
			    valid_rdo_number));
		    Toast_msg = "Data saved successfully!";
		    Show_Toast(Toast_msg);
		    Intent i = new Intent(getApplicationContext(),
     				MainActivity.class);
				startActivity(i);
				finish();


		}

	    }
	});

	update_btn.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
	    	
		// TODO Auto-generated method stub

		valid_name = add_name.getText().toString();
		valid_mob_number = add_mobile.getText().toString();
		//valid_email = add_email.getText().toString();
		//add also here
		//muhimu sana dude
		valid_reg_date = add_reg_date.getText().toString();    
	     
	       valid_lat   = add_lat.getText().toString();  
	       valid_lon  = add_lon.getText().toString();   
	       valid_rdo_name   = add_rdo_name.getText().toString();  
	       valid_rdo_number  = add_rdo_number.getText().toString();  
	         

		
		    dbHandler.Update_Contact(new Contact_branding(USER_ID, valid_name,
			    valid_mob_number, 
			    //valid_email,
			    valid_reg_date,     
			       valid_lat,     
			       valid_lon,     
			       valid_rdo_name,     
			       valid_rdo_number ));
		    dbHandler.close();
		    Toast_msg = "Data Update successfully";
		    Show_Toast(Toast_msg);
		    //Reset_Text();
		  //twende
	    	//intent.putExtra("Phone", next);
	    	//startActivity(intent);
	    	//finish();
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
		Intent view_user = new Intent(Add_Update_User_branding.this,
			Main_Screen_branding.class);
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
		Intent view_user = new Intent(Add_Update_User_branding.this,
			Main_Screen_branding.class);
		view_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(view_user);
		finish();
	    }
	});
	
	
	//online button
	//dont mess with this button.....hahahaaaa
	update_online_btn.setOnClickListener(new View.OnClickListener(){
    	
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
                postParameters1.add(new BasicNameValuePair("valid_mob_number", add_mobile.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_reg_date", add_reg_date.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_name", add_name.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_lat", add_lat.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_lon", add_lon.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_rdo_name", add_rdo_name.getText().toString()));
                postParameters1.add(new BasicNameValuePair("valid_rdo_number", add_rdo_number.getText().toString()));
             // create and display a new ProgressBarDialog
              
             
			        
            try {
            	
    			response = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/add_pos_branding.php",postParameters1);
    			//progressBar.dismiss();
    			Intent i = new Intent(Add_Update_User_branding.this,
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
			    valid_mob_number = add_mobile.getText().toString() + " " + msg;
				//add also here
				//muhimu sana dude
				valid_reg_date = add_reg_date.getText().toString();    
			       valid_lat   = add_lat.getText().toString();  
			       valid_lon  = add_lon.getText().toString();   
			       valid_rdo_name   = add_rdo_name.getText().toString();  
			       valid_rdo_number  = add_rdo_number.getText().toString();  
			     
			       dbHandler.Update_Contact(new Contact_branding(USER_ID, valid_name,
						    valid_mob_number, 
						    //valid_email,
						    valid_reg_date,     
						       valid_lat,     
						       valid_lon,     
						       valid_rdo_name,     
						       valid_rdo_number ));
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
    
    
    @Override
    protected void onStop() {
    	super.onStop();
    	//Stop listening to the telephony events 
    	
    }

	
    public void Set_Add_Update_Screen() {
    	 final SharedPreferences preferences ;
 		String PREFS_NAME = "com.example.sp.LoginPrefs";
 		 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);

 	     //String uname = getIntent().getExtras().getString("USERNAME");
 	     final String number = getIntent().getExtras().getString("number");
 	     final String name = getIntent().getExtras().getString("name");
    

	add_name = (EditText) findViewById(R.id.add_name);
	add_mobile = (EditText) findViewById(R.id.add_mobile);
	
	
	add_reg_date= (EditText) findViewById(R.id.add_reg_date);
    add_lat= (EditText) findViewById(R.id.add_lat);
    add_lon= (EditText) findViewById(R.id.add_lon);
    add_rdo_name= (EditText) findViewById(R.id.add_rdo_name);
    add_rdo_number= (EditText) findViewById(R.id.add_rdo_number);
    add_rdo_number.setText(number);
    add_rdo_name.setText(name);
    pickDate = (ImageButton) findViewById(R.id.pickDate); 
    pickDate1 = (ImageButton) findViewById(R.id.pickDate1);

	add_save_btn = (Button) findViewById(R.id.add_save_btn);
	update_btn = (Button) findViewById(R.id.update_btn);
	add_view_all = (Button) findViewById(R.id.add_view_all);
	update_view_all = (Button) findViewById(R.id.update_view_all);
	//save online
	update_online_btn = (Button) findViewById(R.id.update_online_btn);
	showresult  = (TextView) findViewById(R.id.showresult);
	img_btn = (Button) findViewById(R.id.img_btn);
	
	//button photo
	final Intent intent1 = new Intent (this, SQLiteDemoActivity_id_shop_brand.class);
	img_btn.setOnClickListener(new View.OnClickListener() {
      	public void onClick(View view) {
      		next = add_mobile.getText().toString();
      		
      	//twende
	    	intent1.putExtra("Phone", next);
	    	startActivity(intent1);
	    	finish();
			} 
		});
     

	add_view = (LinearLayout) findViewById(R.id.add_view);
	update_view = (LinearLayout) findViewById(R.id.update_view);

	add_view.setVisibility(View.GONE);
	update_view.setVisibility(View.GONE);
	add_view_all.setVisibility(View.GONE);
    update_view_all.setVisibility(View.GONE);
    img_btn.setVisibility(View.GONE);
	img_btn.setVisibility(View.GONE);
	 add_rdo_number.setText(number);
	    add_rdo_name.setText(name);
	
	
	//for rdo number and name
	
	
	//for lat long
	//get location service
	   lm=(LocationManager)this.getSystemService(Context.LOCATION_SERVICE);
	   Criteria c=new Criteria();
	   //criteria object will select best service based on
	   //Accuracy, power consumption, response, bearing and monetary cost
	   //set false to use best service otherwise it will select the default Sim network
	   //and give the location based on sim network 
	   //now it will first check satellite than Internet than Sim network location
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
	     add_lon.setText(""+lng);
	     add_lat.setText(""+lat);
	   }
	   else
	   {
	    add_lon.setText("");
	    add_lat.setText("");
	   }
	  
	
	
	  
	//assigning button click events in order
    /** Listener for click event of the button */
    pickDate.setOnClickListener(new View.OnClickListener() {
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

    public void Is_Valid_Sign_Number_Validation(int MinLen, int MaxLen,
	    EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Number Only!</font>"));
	    valid_mob_number = null;
	} else if (edt.getText().toString().length() < MinLen) {
	    edt.setError(Html.fromHtml("<font color='red'>Maximum length " + MinLen + "</font>"));
	    valid_mob_number = null;

	} else if (edt.getText().toString().length() > MaxLen) {
	    edt.setError(Html.fromHtml("<font color='red'>Maximum length " + MaxLen + "</font>"));
	    valid_mob_number = null;

	} else {
	    valid_mob_number = edt.getText().toString();

	}

    } // END OF Edittext validation

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
    
    
    //starts
    public void Is_Valid_Serial_Number(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Serial Number is Required!</font>"));
	    valid_serial_number = null;
	}  else {
		valid_serial_number = edt.getText().toString();
	}

    }
    //ends
    
    
    //starts
    public void Is_Valid_Phone_2(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Please Fill!</font>"));
	    valid_phone2 = null;
	}  else {
		valid_phone2 = edt.getText().toString();
	}

    }
    //ends
    
    //starts
    public void Is_Valid_Add_Gender(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_gender = null;
	}  else {
	    valid_gender = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_dob(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Date only!</font>"));

	    valid_dob = null;
	}  else {
	    valid_dob = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_address(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_address = null;
	}  else {
		valid_address  = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_Id_Type(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_id_type = null;
	} else {
		valid_id_type = edt.getText().toString();
	}

    }
    //ends
    
  //starts
    public void Is_Valid_Add_Id_Number(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_id_number = null;
	}  else {
		valid_id_number = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_Id_Business_Name(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_business_name = null;
	}  else {
		valid_business_name = edt.getText().toString();
	}

    }
    //ends
    
  //starts
    public void Is_Valid_Add_Id_Business_Type(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_business_type = null;
	}  else {
		valid_business_type = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_Items(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_items = null;
	}  else {
	    valid_items = edt.getText().toString();
	}

    }
    //ends
    
  //starts
    public void Is_Valid_Add_Zone(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_zone = null;
	}  else {
	    valid_zone = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_Lat(EditText edt) throws NumberFormatException {
	if (edt.getContext().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_lat = null;
	}  else {
	    valid_lat = edt.getContext().toString();
	}

    }
    //ends
    
  //starts
    public void Is_Valid_Add_Lon(EditText edt) throws NumberFormatException {
	if (edt.getContext().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_lon = null;
	}  else {
		valid_lon = edt.getContext().toString();
	}

    }
    //ends
    
  //starts
    public void Is_Valid_Add_Rdo_Name(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_rdo_name = null;
	}  else {
		valid_rdo_name = edt.getText().toString();
	}

    }
    //ends
    
    
  //starts
    public void Is_Valid_Add_Rdo_Number(EditText edt) throws NumberFormatException {
	if (edt.getText().toString().length() <= 0) {
	    edt.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    valid_rdo_number = null;
	}  else {
		valid_rdo_number = edt.getText().toString();
	}

    }
    //ends
    
    

    public void Show_Toast(String msg) {
	Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
    }

   /* public void Reset_Text() {

	add_name.getText().clear();
	add_mobile.getText().clear();
	//add_email.getText().clear();
	add_reg_date.getText().clear();   
    add_serial_number.getText().clear();   
    add_phone2.getText().clear();   
    add_gender.getText().clear();   
    add_dob.getText().clear();   
    add_address.getText().clear();   
    //((Editable) add_id_type.getContext()).clear(); 
    capture.getBytes();
    add_id_number.getText().clear();   
    add_business_name.getText().clear();   
    add_business_type.getText().clear();   
    add_items.getText().clear();   
    add_zone.getText().clear();   
    add_lat.getText().clear();   
    add_lon.getText().clear();   
    add_rdo_name.getText().clear();   
    add_rdo_number.getText().clear(); 
      

    }
    */
    
    
    
  public void onLocationChanged(Location arg0)
    {
     double lng=l.getLongitude();
     double lat=l.getLatitude();
     add_lon.setText(""+lng);
     add_lat.setText(""+lat);
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
