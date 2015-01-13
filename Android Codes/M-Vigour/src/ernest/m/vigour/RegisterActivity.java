package ernest.m.vigour;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.ArrayAdapter;

import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class RegisterActivity extends Activity{
	
	EditText names; 
	AutoCompleteTextView gender; 
	EditText phone; 
	AutoCompleteTextView address;
	EditText pswd;
	TextView showresult;
	Button btnSubmit;
	Button btnLinkToHome;
	String response;
	
	//string for gender
 	String item[]={
 			  "Male", "Female"
 			   };
 	
 	//string areas
 	 	String areaitem[]={
 	 			"Bwaise",
 	 			"Lugala",
 	 			"Mulago",
 	 			"Kyebando",
 	 			"Nabweru",
 	 			"Kigowa",
 	 			"Bukoto",
 	 			"Kisaasi",
 	 			"Buye",
 	 			"Kawempe",
 	 			"Bugolobi",
 	 			"Ndeeba",
 	 			"Mengo",
 	 			"Namasuba",
 	 			"Makindye",
 	 			"Masajja",
 	 			"Bunamwaya",
 	 			"Katwe",
 	 			"Kampala ",
 	 			"Old Kampala", 
 	 			"Kabalagala ",
 	 			"Lira", 
 	 			"Buikwe" ,
 	 			"Wakiso",
 	 			"Mukono",
 	 			"Kansanga",
 	 			"Gaba",
 	 			"Bunga",
 	 			"Wandegeya"

 	 			   };
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.register);
        
     // Importing all assets like buttons, text fields 	
        names = (EditText) findViewById(R.id.names);
        
        
        
        gender = (AutoCompleteTextView) findViewById(R.id.gender); 
        phone = (EditText) findViewById(R.id.phone); 
        address = (AutoCompleteTextView) findViewById(R.id.address); 
        pswd = (EditText) findViewById(R.id.pswd);
        showresult  = (TextView) findViewById(R.id.showresult );
        btnSubmit = (Button) findViewById(R.id.btnSubmit); 
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome); 
        
        //for gender 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.gender);
	        auto.setAdapter(adapter);
	        
	      //for areas 
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,areaitem);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.address);
		        auto1.setAdapter(adapter1);
       
       
        
        //assigning button click events in order
        btnSubmit.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {
            	//Integer nameLen = 60;

                int len = names.length();
                int len1 = gender.length();
                int len2 = phone.length();
                int len3 = address.length();
                int len4 = pswd.length();
                int numberlen = phone.length();
                int pswdlen = pswd.length();
                if (len<=0)
                {
                names.setError("This Field is required!");
                }
                else if (len1 <=0){
                	gender.setError("This Field is required!");
                }
                else if (len2 <=0){
                	phone.setError("This Field is required!");
                }
                else if (len3 <=0){
                	address.setError("This Field is required!");
                }
                else if (len4 <=0){
                	pswd.setError("This Field is required!");
                }
               else if (numberlen > 13) {
              phone.setError("Invalid Phone number");
                }
               else if (pswdlen < 4) {
                   pswd.setError("Too short Password");
                     }
                
                else {
                  	
                    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
                    postParameters.add(new BasicNameValuePair("names", names.getText().toString()));
                     postParameters.add(new BasicNameValuePair("gender", gender.getText().toString()));
                     postParameters.add(new BasicNameValuePair("phone", phone.getText().toString()));
                     postParameters.add(new BasicNameValuePair("address", address.getText().toString()));
                     postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));  
                try {
        			response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/jsonscript.php",postParameters);
        			 Intent i = new Intent(getApplicationContext(),
        						SuccessActivity.class);
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
       
        
        btnLinkToHome.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
       
        
        
        
    }

	
        
      
}
