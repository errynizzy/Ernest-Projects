package ernest.farming.instructor;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Register extends Activity{
	
	EditText names;
	AutoCompleteTextView gender;
	AutoCompleteTextView country;
	EditText email;
	EditText pswd;
	EditText pswd2;
	Button buttonSubmit;
	Button buttonClear;
	Button buttonBack;
	Button buttonMyId;
	Button buttonExit;
	String response;
	TextView showresult;
	

	//string for gender
	 	String item[]={
	 			  "Male", "Female"
	 			   };
	 	
	 	//for counties
	 	static final String[] COUNTRIES = new String[] {
	 		  "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra",
	 		  "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina",
	 		  "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
	 		  "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
	 		  "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
	 		  "Bosnia and Herzegovina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
	 		  "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
	 		  "Cote d'Ivoire", "Cambodia", "Cameroon", "Canada", "Cape Verde",
	 		  "Cayman Islands", "Central African Republic", "Chad", "Chile", "China",
	 		  "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo",
	 		  "Cook Islands", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic",
	 		  "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
	 		  "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
	 		  "Estonia", "Ethiopia", "Faeroe Islands", "Falkland Islands", "Fiji", "Finland",
	 		  "Former Yugoslav Republic of Macedonia", "France", "French Guiana", "French Polynesia",
	 		  "French Southern Territories", "Gabon", "Georgia", "Germany", "Ghana", "Gibraltar",
	 		  "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau",
	 		  "Guyana", "Haiti", "Heard Island and McDonald Islands", "Honduras", "Hong Kong", "Hungary",
	 		  "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica",
	 		  "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos",
	 		  "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
	 		  "Macau", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
	 		  "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova",
	 		  "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia",
	 		  "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand",
	 		  "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "North Korea", "Northern Marianas",
	 		  "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru",
	 		  "Philippines", "Pitcairn Islands", "Poland", "Portugal", "Puerto Rico", "Qatar",
	 		  "Reunion", "Romania", "Russia", "Rwanda", "Sqo Tome and Principe", "Saint Helena",
	 		  "Saint Kitts and Nevis", "Saint Lucia", "Saint Pierre and Miquelon",
	 		  "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Saudi Arabia", "Senegal",
	 		  "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
	 		  "Somalia", "South Africa","South Sudan", "South Georgia and the South Sandwich Islands", "South Korea",
	 		  "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden",
	 		  "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "The Bahamas",
	 		  "The Gambia", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
	 		  "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Virgin Islands", "Uganda",
	 		  "Ukraine", "United Arab Emirates", "United Kingdom",
	 		  "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan",
	 		  "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Wallis and Futuna", "Western Sahara",
	 		  "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"
	 		};
	

@Override
	 	public void onBackPressed() {
	 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	 	    builder.setMessage("What do you want to do?")
	 	           .setCancelable(false)
	 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
	 	               public void onClick(DialogInterface dialog, int id) {
	 	            	  Intent i = new Intent(getApplicationContext(),
	 								MainActivity.class);
	 						startActivity(i);
	 						finish();
	 	               }
	 	           })
	 	           .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
           public void onClick(DialogInterface dialog, int id) {
                dialog.cancel();
           }
       });
	 	    AlertDialog alert = builder.create();
	 	    alert.show();

	 	}
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.register);
        
        //allocating
        names = (EditText) findViewById(R.id.names);
        email = (EditText) findViewById(R.id.email);
        pswd = (EditText) findViewById(R.id.pswd);
        pswd2 = (EditText) findViewById(R.id.pswd2);
        
        buttonSubmit = (Button) findViewById(R.id.buttonSubmit);
        buttonClear = (Button) findViewById(R.id.buttonClear);
        buttonBack = (Button) findViewById(R.id.buttonBack);
        buttonMyId = (Button) findViewById(R.id.buttonMyId);
        buttonExit = (Button) findViewById(R.id.buttonExit);
        
        gender = (AutoCompleteTextView) findViewById(R.id.gender);
       country = (AutoCompleteTextView) findViewById(R.id.country);
        
        showresult  = (TextView) findViewById(R.id.showresult );
        
        //for gender 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.gender);
	        auto.setAdapter(adapter);
	        
	        //for counties COUNTRIES
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,COUNTRIES);
	        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.country);
	        auto1.setAdapter(adapter1);
	        
	        
	        //button actions
	        
	        buttonBack.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view1) {
					Intent i = new Intent(getApplicationContext(),
							MainActivity.class);
					startActivity(i);
					finish();
				} 
			}); 
	        
	        buttonClear.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view1) {
					Intent i = new Intent(getApplicationContext(),
							Register.class);
					startActivity(i);
					finish();
				} 
			}); 
	        
	        buttonMyId.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view1) {
					Intent i = new Intent(getApplicationContext(),
							MyIDActivity.class);
					startActivity(i);
					finish();
				} 
			}); 
	        
	        buttonExit.setOnClickListener(new View.OnClickListener() {
	        	public void onClick(View view) {
	        		 finish();
	                 System.exit(0);
				} 
			}); 
	        
	        
	        buttonSubmit.setOnClickListener(new View.OnClickListener(){
	        	
	            public void onClick(View v) {
	            	//Integer nameLen = 60;

	                int len = names.length();
	                int len1 = gender.length();
	                int len2 = country.length();
	                int len3 = email.length();
	                int len4 = pswd.length();
	                int len5 = pswd2.length();
	                int pswdlen = pswd.length();
	                int pswdlen2 = pswd2.length();
	                
	                String pswdC = pswd.getText().toString();
	                String pswd2C = pswd2.getText().toString();
	                
	                String female = gender.getText().toString();
	                String male = gender.getText().toString();
	                
	                
	                
	                
	                
	                if (len<=0)
	                {
	                names.setError("This Field is required!");
	                }
	                else if (len1 <=0){
	                	gender.setError("This Field is required!");
	                }
	                
	               // else if (female !="Female" || male != "Male") {
			               
		                //  gender.setError("Invalid Input");
		                   //  }
	                
	                else if (len2 <=0){
	                	country.setError("This Field is required!");
	                }
	                else if (len3 <=0){
	                	email.setError("This Field is required!");
	                }
	                else if (len4 <=0){
	                	pswd.setError("This Field is required!");
	                }
	                else if (len5 <=0){
	                	pswd2.setError("This Field is required!");
	                }
	               
	               else if (pswdlen < 4) {
	                   pswd.setError("Too short Password");
	                     }
	               else if (pswdlen2 < 4) {
	                   pswd2.setError("Too short Password");
	                     }
	                //compare password
	               else if (pswdlen2 < pswdlen) {
	                   pswd2.setError("Password Lenght don't match");
	                     }
	              else if (!pswdC.equals(pswd2C)) {
	                
	                  pswd2.setError("Password don't match");
	                     }
	                
	                else {
	                  	
	                    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
	                    postParameters.add(new BasicNameValuePair("names", names.getText().toString()));
	                     postParameters.add(new BasicNameValuePair("gender", gender.getText().toString()));
	                     postParameters.add(new BasicNameValuePair("country", country.getText().toString()));
	                     postParameters.add(new BasicNameValuePair("email", email.getText().toString()));
	                     postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
	                try {
	        			response = CustomHttpClient.executeHttpPost("http://10.0.2.2/farming/register.php",postParameters);
	        			 Intent i = new Intent(getApplicationContext(),
	        						Success.class);
	        				startActivity(i);
	        				finish();
	        			
	        			
	        		} catch (Exception e) {
	        			// TODO Auto-generated catch block
	        			
	        			showresult.setText("Error in Internet Connection. Registration Failed. Please check your Internet settings and Try again");
	        			e.printStackTrace();
	        		}  
	             
	                }
		 } 
	                 
	});
	        
	       
        
	}
	
	
}
