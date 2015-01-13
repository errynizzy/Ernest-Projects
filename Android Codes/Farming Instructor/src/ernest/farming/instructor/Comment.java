package ernest.farming.instructor;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.app.AlertDialog;
import android.os.Bundle;

import android.content.DialogInterface;
import android.content.Intent;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class Comment extends Activity{
	
	AutoCompleteTextView autoCompleteTextViewCountry; 
	EditText editTextComment;
	
	
	Button submit;
	Button buttonBack;
	Button ButtonExit;
	Button buttonClear;
	TextView showresult;
	
	String send;
	
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
        setContentView(R.layout.comment);
        
     // Importing all assets like buttons, text fields 	
        editTextComment = (EditText) findViewById(R.id.editTextComment);
        autoCompleteTextViewCountry = (AutoCompleteTextView) findViewById(R.id.autoCompleteTextViewCountry);
        submit = (Button) findViewById(R.id.submit); 
        showresult  = (TextView) findViewById(R.id.showresult);
        ButtonExit = (Button) findViewById(R.id.ButtonExit); 
        buttonBack = (Button) findViewById(R.id.buttonBack); 
        buttonClear = (Button) findViewById(R.id.buttonClear); 
        
        
        //for counties COUNTRIES
        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,COUNTRIES);
        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.autoCompleteTextViewCountry);
        auto1.setAdapter(adapter1);
        
     
        //assigning button click events in order
		        submit.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {

                int len = autoCompleteTextViewCountry.length();
                int len1 = editTextComment.length();
                
                if (len<=0)
                {
                	autoCompleteTextViewCountry.setError("This Field is required!");
                }
                else if (len1 <=0){
                	editTextComment.setError("This Field is required!");
                }
               
                else {
                  	
                    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
                    postParameters.add(new BasicNameValuePair("autoCompleteTextViewCountry", autoCompleteTextViewCountry.getText().toString()));
                     postParameters.add(new BasicNameValuePair("editTextComment", editTextComment.getText().toString()));
                     
                try {
        			send = CustomHttpClient.executeHttpPost("http://10.0.2.2/farming/comment.php",postParameters);
 Intent i = new Intent(getApplicationContext(),
        				SuccessComment.class);
        		startActivity(i);
        		finish();
        			
        			
        		} catch (Exception e) {
        			showresult.setText("Error in Internet Connection. Your comment is not sent. Please check your Internet settings and Try again!");
        			e.printStackTrace();
        		}  
               
                }
	 } 
                 
});
       
        
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
								Comment.class);
						startActivity(i);
						finish();
					} 
				}); 
		        
		        ButtonExit.setOnClickListener(new View.OnClickListener() {
		        	public void onClick(View view) {
		        		 finish();
		                 System.exit(0);
					} 
				}); 
       
        
        
        
    }

	
        
      
}
