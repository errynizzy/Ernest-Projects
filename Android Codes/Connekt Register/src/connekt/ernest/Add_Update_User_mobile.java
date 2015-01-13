package connekt.ernest;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
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
import android.os.Bundle;
import android.telephony.PhoneNumberFormattingTextWatcher;
import android.text.Editable;
import android.text.Html;
import android.text.Spanned;
import android.text.TextWatcher;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.LinearLayout;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class Add_Update_User_mobile extends Activity {
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
    
    //new
    EditText add_reg_date;
    EditText add_serial_number;
    EditText add_phone2;
    EditText add_genderED;
    Spinner add_gender;
    EditText add_dob;
    EditText add_address;
    Spinner add_id_type;
    EditText add_id_typeED;
    EditText add_id_number;
    EditText add_items;
    EditText add_rdo_name;
    EditText add_rdo_number;
 String response;
    
    //text view
    TextView showresult;
    
    
   
    
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
                    updateDisplay1();
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
    
    /** Updates the date in the TextView */
    private void updateDisplay1() {
        add_dob.setText(
            new StringBuilder()
                    // Month is 0 based so add 1
                    .append(pMonth + 1).append("/")
                    .append(pDay).append("/")
                    .append(pYear));
    }
     
    /** Displays a notification when the date is updated
    private void displayToast() {
        Toast.makeText(this, new StringBuilder().append("Date choosen is ").append(add_reg_date.getText()),  Toast.LENGTH_SHORT).show();
             
    } */

    
    LinearLayout add_view, update_view;
                                       
    String valid_mob_number = " ";
    String	valid_name = null;
    String	Toast_msg = null;
    //add mine
    
    String valid_reg_date = null;
    String valid_serial_number = null;
    String valid_phone2 = null;
    String valid_gender = null;
    String valid_dob = null;
    String valid_address = null;
    String valid_id_type = null;
    String valid_id_number = null;
    String valid_business_name = null;
    String valid_business_type = null;
    String valid_items = null;
    String valid_zone = null;
    String valid_rdo_name = null;
    String valid_rdo_number = null;
    String capture = null;
    String next = "...";
    
    String	valid_user_id = "";
    		int USER_ID;
    DatabaseHandler_mobile dbHandler = new DatabaseHandler_mobile(this);

    @Override
    protected void onCreate(Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	super.onCreate(savedInstanceState);
	setContentView(R.layout.add_update_screen_static);
	
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
	    add_rdo_number.setText(number);
	    add_rdo_name.setText(name);
	   
		add_items.setVisibility(View.GONE);
		add_items.setText("...");
	} else {

	    update_view.setVisibility(View.VISIBLE);
	    add_view.setVisibility(View.GONE);
	    update_view_all.setVisibility(View.GONE);
	    add_view_all.setVisibility(View.GONE);
	    USER_ID = Integer.parseInt(getIntent().getStringExtra("USER_ID"));
	    add_id_type.setVisibility(View.GONE);
	    add_gender.setVisibility(View.GONE);
		add_id_typeED.setVisibility(View.VISIBLE);
		add_items.setVisibility(View.GONE);
		add_items.setText("...");
		add_rdo_number.setText(number);
	    add_rdo_name.setText(name);

	    Contact_mobile c = dbHandler.Get_Contact(USER_ID);

	    add_name.setText(c.getName());
	    add_mobile.setText(c.getPhoneNumber());
	    
	    //ADD MY FIELDS
	      add_reg_date.setText(c.getReg_date());
	      add_serial_number.setText(c.getSerial_number());
	      add_phone2.setText(c.getPhone2());
	      add_genderED.setText(c.getGender());
	      add_dob.setText(c.getDob());
	      add_address.setText(c.getAddress());
	      add_id_typeED.setText(c.getId_type());
	      add_id_number.setText(c.getId_number());
	      add_items.setText(c.getItems());
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
	
	
	//<-- add_serial_number starts -->

	add_serial_number.addTextChangedListener(new TextWatcher() {

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
				Is_Valid_Serial_Number(add_serial_number);
			    }
			});
			//<-- add_serial_number -->
	
	
	//<-- add_phone2 starts -->
	add_phone2.addTextChangedListener(new TextWatcher() {

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
	    	Is_Valid_Phone_2(add_phone2);
	    }
	});
				//<-- add_phone2_number -->
	
	//<-- add_gender starts -->
	add_genderED.addTextChangedListener(new TextWatcher() {

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
						Is_Valid_Add_Gender(add_genderED);
					    }
					});
					//<-- add_gender ends here -->
	
	//<-- add_dob starts -->
	add_dob.addTextChangedListener(new TextWatcher() {

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
							Is_Valid_Add_dob(add_dob);
						    }
						});
						//<-- add_dob ends here -->
	
	//<-- add_address starts -->
	add_address.addTextChangedListener(new TextWatcher() {

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
								Is_Valid_Add_address(add_address);
							    }
							});
							//<-- add_address ends here -->

	
	//<-- add_id_number starts -->
	add_id_number.addTextChangedListener(new TextWatcher() {

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
										Is_Valid_Add_Id_Number(add_id_number);
									    }
									});
									//<-- add_id_number ends here -->
	
	
	
	//<-- add_items -->
	add_items.addTextChangedListener(new TextWatcher() {

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
													Is_Valid_Add_Items(add_items);
												    }
												});
												//<-- add_items ends here -->
	
	
	
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
	
	
	final Intent intent = new Intent (this, MainActivity.class);
	
	add_save_btn.setOnClickListener(new View.OnClickListener() {
		

	    @Override
	    public void onClick(View v) {
	    	
	    	next = add_mobile.getText().toString();
	    	//int pos =0;
	    	valid_id_type = add_id_type.getSelectedItem().toString().toString();
	    	valid_gender = add_gender.getSelectedItem().toString().toString();
	    	valid_reg_date = add_reg_date.getText().toString();
	    	valid_items = add_items.getText().toString();
	    	valid_dob = add_dob.getText().toString();
	    	valid_serial_number = add_serial_number.getText().toString();
	    	valid_mob_number = add_mobile.getText().toString();
	    	valid_phone2 = add_phone2.getText().toString();
	    	valid_address = add_address.getText().toString();
	    	valid_id_number = add_id_number.getText().toString();
	    	valid_rdo_name = add_rdo_name.getText().toString();
	    	valid_rdo_number = add_rdo_number.getText().toString();
	    	valid_name = add_name.getText().toString();
	    	
	    	int len = add_mobile.length();
	    	 int len1 = add_address.length();
	    	 int len5 = add_serial_number.length();
	    	 int len6 = add_phone2.length();
	    	 int len7 = add_id_number.length();
	    	 int len9 = add_name.length();
	    	
	    	 if(len<=0){
	    		 add_mobile.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	
	    	 
	    	 else if(len1<=0){
	    		 add_address.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 else if(len5<=0){
	    		 add_serial_number.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 else if(len6<=0){
	    		 add_phone2.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	 else if(len7<=0){
	    		 add_id_number.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }
	    	
	    	 else if(len9<=0){
	    		 add_name.setError(Html.fromHtml("<font color='red'>Required!</font>"));
	    	 }else{

		    dbHandler.Add_Contact(new Contact_mobile(valid_name,
			    valid_mob_number, 
			    valid_reg_date,
			    valid_serial_number,
			    valid_phone2,
			    valid_gender,
			    valid_dob,
			    valid_address,
			    valid_id_type,
			    valid_id_number,
			    valid_items,
			    valid_rdo_name,
			    valid_rdo_number));
		    Toast_msg = "Data inserted successfully";
		    Show_Toast(Toast_msg);
		   
				
				//twende
		    	intent.putExtra("Phone", next);
		    	startActivity(intent);
		    	finish();

		}
	    	 

	    }
	});

	update_btn.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub

	    	next = add_mobile.getText().toString();
		valid_name = add_name.getText().toString();
		valid_mob_number = add_mobile.getText().toString();
		//add also here
		//muhimu sana dude
		valid_reg_date = add_reg_date.getText().toString();    
	       valid_serial_number = add_serial_number.getText().toString();    
	       valid_phone2   = add_phone2.getText().toString();  
	       valid_gender  = add_genderED.getText().toString();   
	       valid_dob  = add_dob.getText().toString();   
	       valid_address  = add_address.getText().toString();   
	       valid_id_type =  add_id_typeED.getText().toString(); //cap;    //capture = add_id_type.getSelectedItem().toString();
	       
	       valid_id_number  = add_id_number.getText().toString();  
	       
	       valid_items  = add_items.getText().toString();   
	       valid_rdo_name   = add_rdo_name.getText().toString();  
	       valid_rdo_number  = add_rdo_number.getText().toString();  
	         

		
		    dbHandler.Update_Contact(new Contact_mobile(USER_ID, valid_name,
			    valid_mob_number, 
			    valid_reg_date,     
			       valid_serial_number,     
			       valid_phone2,     
			       valid_gender,     
			       valid_dob,     
			       valid_address,     
			       valid_id_type,     
			       valid_id_number,     
			       valid_items,     
			       valid_rdo_name,     
			       valid_rdo_number ));
		    dbHandler.close();
		    Toast_msg = "Data Update successfully";
		    Show_Toast(Toast_msg);
		
		  //twende tena
	    	intent.putExtra("Phone", next);
	    	startActivity(intent);
	    	finish();

		
	    }
	});
	
	//online button
		//dont mess with this button.....hahahaaaa
		update_online_btn.setOnClickListener(new View.OnClickListener(){
	    	
	        public void onClick(View v) {
		    	next = add_mobile.getText().toString();

	        	progressBar = new ProgressDialog(v.getContext());
	                progressBar.setCancelable(true);
             progressBar.setMessage("Saving...");
	                progressBar.setProgressStyle(ProgressDialog.STYLE_SPINNER);
	                progressBar.setProgress(0);
	                progressBar.setMax(100);
	                progressBar.show();

	                ArrayList<NameValuePair> postParameters1 = new ArrayList<NameValuePair>();
	                postParameters1.add(new BasicNameValuePair("valid_mob_number", add_mobile.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_reg_date", add_reg_date.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_name", add_name.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_serial_number", add_serial_number.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_phone2", add_phone2.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_gender", add_genderED.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_dob", add_dob.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_address", add_address.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_id_type", add_id_typeED.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_id_number", add_id_number.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_items", add_items.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_rdo_name", add_rdo_name.getText().toString()));
	                postParameters1.add(new BasicNameValuePair("valid_rdo_number", add_rdo_number.getText().toString()));
	                // create and display a new ProgressBarDialog
	                
				        
	            try {
	    			response = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/add_pos_static.php",postParameters1);
	    			Intent i = new Intent(Add_Update_User_mobile.this,
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
				       valid_serial_number = add_serial_number.getText().toString();    
				       valid_phone2   = add_phone2.getText().toString();  
				       valid_gender  = add_genderED.getText().toString();   
				       valid_dob  = add_dob.getText().toString();   
				       valid_address  = add_address.getText().toString();   
				       valid_id_type =  add_id_typeED.getText().toString(); //cap;    //capture = add_id_type.getSelectedItem().toString();
				       
				       valid_id_number  = add_id_number.getText().toString();  
				      // valid_business_name  = add_business_name.getText().toString();  
				       
				      // valid_business_type  = add_business_typeED.getText().toString();   
				       valid_items  = add_items.getText().toString();   
				      // valid_lat   = add_lat.getText().toString();  
				      // valid_lon  = add_lon.getText().toString();   
				       valid_rdo_name   = add_rdo_name.getText().toString();  
				       valid_rdo_number  = add_rdo_number.getText().toString();  
				       dbHandler.Update_Contact(new Contact_mobile(USER_ID, valid_name,
							    valid_mob_number, 
							    valid_reg_date,     
							       valid_serial_number,     
							       valid_phone2,     
							       valid_gender,     
							       valid_dob,     
							       valid_address,     
							       valid_id_type,     
							       valid_id_number,     
							       valid_items,     
							       valid_rdo_name,     
							       valid_rdo_number ));
				       
				    
	    			
	    			
	    		} catch (Exception e) {
	    			// TODO Auto-generated catch block
	    			//progressBar.dismiss();
	    			Toast_msg = "You don't have Internet Connection. Please Try again";
	    			Show_Toast(Toast_msg);
	    			showresult.setText("Error in Internet Connection. Saving Failed. Please check your Internet settings and Try again");
	    			e.printStackTrace();
	    		}
	            
	      
	         
	            }
	  
	             
	});
	    
		//online ends here
	
	update_view_all.setOnClickListener(new View.OnClickListener() {

	    @Override
	    public void onClick(View v) {
		// TODO Auto-generated method stub
		Intent view_user = new Intent(Add_Update_User_mobile.this,
			Main_Screen_mobile.class);
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
		Intent view_user = new Intent(Add_Update_User_mobile.this,
			Main_Screen_mobile.class);
		view_user.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP
			| Intent.FLAG_ACTIVITY_NEW_TASK);
		startActivity(view_user);
		finish();
	    }
	});

    }
    
    
    @Override
    protected void onStop() {
    	super.onStop();
    	//Stop listening to the telephony events 
    	
    }

    
    /*
     * Sets the textview contents
     * */
    private void setTextViewText(int id,String text) {
        ((TextView)findViewById(id)).setText(text);
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

	//MUHIMU SANA
	
	add_reg_date= (EditText) findViewById(R.id.add_reg_date);
    add_serial_number= (EditText) findViewById(R.id.add_serial_number);
    add_phone2= (EditText) findViewById(R.id.add_phone2);
    add_genderED= (EditText) findViewById(R.id.add_genderED);
    add_gender= (Spinner) findViewById(R.id.add_gender);
    
    add_dob= (EditText) findViewById(R.id.add_dob);
    add_address= (EditText) findViewById(R.id.add_address);
    add_id_type= (Spinner) findViewById(R.id.add_id_type);
    
    add_id_typeED = (EditText) findViewById(R.id.add_id_typeED);
    add_id_number= (EditText) findViewById(R.id.add_id_number);
    
    add_items= (EditText) findViewById(R.id.add_items);
    
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

	add_view = (LinearLayout) findViewById(R.id.add_view);
	update_view = (LinearLayout) findViewById(R.id.update_view);

	add_view.setVisibility(View.GONE);
	update_view.setVisibility(View.GONE);
	update_view_all.setVisibility(View.GONE);
	add_view_all.setVisibility(View.GONE);
	add_id_typeED.setVisibility(View.GONE);
	add_genderED.setVisibility(View.GONE);
	add_items.setVisibility(View.GONE);
	add_items.setText("...");
	add_rdo_number.setText(number);
    add_rdo_name.setText(name);
	
	
	
	//
	 addIDType();
	   	addListenerOnSpinnerItemSelection1();
	   	
	  
	    
	    addGType();
	    addListenerOnSpinnerItemSelection1();
	    
	   
	//assigning button click events in order
    /** Listener for click event of the button */
    pickDate.setOnClickListener(new View.OnClickListener() {
        public void onClick(View v) {
            showDialog(DATE_DIALOG_ID);
        }
   });
    
    pickDate1.setOnClickListener(new View.OnClickListener() {
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
    updateDisplay1();

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
	    //edt.setError("Number Only");
	    edt.setError(Html.fromHtml("<font color='red'>Number Only!</font>"));
	    valid_mob_number = null;
	} else if (edt.getText().toString().length() < MinLen) {
	    edt.setError(Html.fromHtml("<font color='red'>Maximum length "+ MinLen + "</font>"));
	    valid_mob_number = null;

	} else if (edt.getText().toString().length() > MaxLen) {
	    edt.setError(Html.fromHtml("<font color='red'>Maximum length "+ MaxLen + "</font>"));
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
    	    edt.setError(Html.fromHtml("<font color='red'>Phone Number is Required!</font>"));
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

    
    
    
  
    
    public void addIDType() {
		 
		  add_id_type = (Spinner) findViewById(R.id.add_id_type);
		List<String> list1 = new ArrayList<String>();
		list1.add("ID Type");
		list1.add("Driving Permit");
		list1.add("Bank ID");
		list1.add("Passport");
		list1.add("Voter ID");
		list1.add("National ID");
		list1.add("School ID");
		list1.add("Work ID");
		list1.add("NSSF ID");
		list1.add("Local Government ID");

		
		
		ArrayAdapter<String> dataAdapter1 = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list1);
		dataAdapter1.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		add_id_type.setAdapter(dataAdapter1);

}
    
    
   
	  
  //another
    public void addGType() {
		 
		  add_gender = (Spinner) findViewById(R.id.add_gender);
		List<String> list1 = new ArrayList<String>();
		list1.add("Gender");
		list1.add("Male");
		list1.add("Female");
		
		
		
		ArrayAdapter<String> dataAdapter1 = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list1);
		dataAdapter1.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		add_gender.setAdapter(dataAdapter1);

}
    
  //another
    
	 
	  
	  public void addListenerOnSpinnerItemSelection1() {
		  
		  add_id_type.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
	  }
	 

	 

}
