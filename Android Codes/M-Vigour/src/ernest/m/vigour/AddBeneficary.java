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


public class AddBeneficary extends Activity{
	
	EditText mvigourID; 
	TextView showresult;
	EditText fname;
	EditText othernames;
	AutoCompleteTextView relation; 
	EditText Age; 
	AutoCompleteTextView gender;
	
	Button btnAdd;
	Button quit;
	Button previous;
	Button btnhome;
	
	String send;
	
	//string for gender
 	String item[]={
 			  "Male", "Female"
 			   };
 	
 	//string relation
 	 	String relationitem[]={
 	 			"Son",
 	 			"Daughter",
 	 			"Brother",
 	 			"Sister",
 	 			"Mother",
 	 			"Father",
 	 			"Friend",
 	 			"Worker",
 	 			"Employee",
 	 			"Team Member",
 	 			"My Student"
 	 		 };
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.add_beneficary);
        
     // Importing all assets like buttons, text fields 	
        mvigourID = (EditText) findViewById(R.id.mvigourID);
        fname = (EditText) findViewById(R.id.fname);
        othernames = (EditText) findViewById(R.id.othernames);
        relation = (AutoCompleteTextView) findViewById(R.id.relation); 
        Age = (EditText) findViewById(R.id.Age); 
        gender = (AutoCompleteTextView) findViewById(R.id.gender); 
       
        btnAdd = (Button) findViewById(R.id.btnAdd); 
        quit = (Button) findViewById(R.id.quit); 
        previous = (Button) findViewById(R.id.previous); 
        btnhome = (Button) findViewById(R.id.btnhome); 
        showresult = (TextView) findViewById(R.id.showresult);
        
        //for gender 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.gender);
	        auto.setAdapter(adapter);
	        
	      //for relationship 
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,relationitem);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.relation);
		        auto1.setAdapter(adapter1);
       
       
        
        //assigning button click events in order
		        btnAdd.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {
            	//Integer nameLen = 60;

                int len = mvigourID.length();
                int len1 = fname.length();
                int len2 = othernames.length();
                int len3 = relation.length();
                int len4 = Age.length();
                int len5 = gender.length();
                if (len<=0)
                {
                	mvigourID.setError("This Field is required!");
                }
                else if (len1 <=0){
                	fname.setError("This Field is required!");
                }
                else if (len2 <=0){
                	othernames.setError("This Field is required!");
                }
                else if (len3 <=0){
                	relation.setError("This Field is required!");
                }
                else if (len4 <=0){
                	Age.setError("This Field is required!");
                }
                else if (len5 <=0){
                	gender.setError("This Field is required!");
                }
            
                
                else {
                  	
                    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
                    postParameters.add(new BasicNameValuePair("mvigourID", mvigourID.getText().toString()));
                     postParameters.add(new BasicNameValuePair("fname", fname.getText().toString()));
                     postParameters.add(new BasicNameValuePair("othernames", othernames.getText().toString()));
                     postParameters.add(new BasicNameValuePair("relation", relation.getText().toString()));
                     postParameters.add(new BasicNameValuePair("Age", Age.getText().toString()));  
                     postParameters.add(new BasicNameValuePair("gender", gender.getText().toString()));
                try {
        			send = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/addbeneficiary.php",postParameters);
        			Intent i = new Intent(getApplicationContext(),
            				SuccessActivity.class);
            		startActivity(i);
            		finish();
        			
        			
        		} catch (Exception e) {
        			showresult.setText("Error in Internet Connection. Your Information is not sent. Please check your Internet settings");
        			// TODO Auto-generated catch block
        			e.printStackTrace();
        		}  
                
                }
	 } 
                 
});
       
        
		        btnhome.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
		        
		        previous.setOnClickListener(new View.OnClickListener() {
		        	public void onClick(View view1) {
						Intent i = new Intent(getApplicationContext(),
								InsuranceMenu.class);
						startActivity(i);
						finish();
					} 
				}); 
		        
		        quit.setOnClickListener(new View.OnClickListener() {
		        	public void onClick(View view) {
		        		 finish();
		                 System.exit(0);
					} 
				}); 
       
        
        
        
    }

	
        
      
}
