
package ernest.m.vigour;

import java.util.ArrayList;
import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class EditBeneficiary extends Activity {

 EditText pswd;
 EditText mvigourID;
 EditText mvigourID1;
 EditText fname;
 Button view;
 Button edit;
 Button exit;
 Button previous;
 Button btnLinkToHome;
 
 //for edit
	EditText fname2;
	EditText othernames;
	AutoCompleteTextView relation; 
	EditText Age; 
	AutoCompleteTextView gender;
 
 
 TextView showresult;
 TextView showresult2;
 TextView showresult3;
 TextView showresult4;
 JSONObject json_data=null;
 
 String returnString = "";
 String returnString2 = "";
 String response;
 int a;
 
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
	
 


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.edit_beneficiary);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        mvigourID = (EditText) findViewById(R.id.mvigourID);
        mvigourID1 = (EditText) findViewById(R.id.mvigourID1);
        fname = (EditText) findViewById(R.id.fname);
        fname2 = (EditText) findViewById(R.id.fname2);
        othernames = (EditText) findViewById(R.id.othernames);
        relation = (AutoCompleteTextView) findViewById(R.id.relation);
        Age = (EditText) findViewById(R.id.Age);
        gender = (AutoCompleteTextView) findViewById(R.id.gender);
        view = (Button) findViewById(R.id.view);
        exit = (Button) findViewById(R.id.exit);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        showresult3 = (TextView) findViewById(R.id.showresult3);
        showresult4 = (TextView) findViewById(R.id.showresult4);
        edit = (Button) findViewById(R.id.edit);
        previous = (Button) findViewById(R.id.previous);
        
        //for gender 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.gender);
	        auto.setAdapter(adapter);
	        
	      //for relationship 
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,relationitem);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.relation);
		        auto1.setAdapter(adapter1);
      
       
        //put all the view links and url in here
       
        view.setOnClickListener(new View.OnClickListener(){
         public void onClick(View v) {
        	 int len = pswd.length();
        	 int len1 = mvigourID.length();
             
             if (len<=0)
             {
             	pswd.setError("This Field is required!");
             }
          
             else if (len1 <= 0)
             {
            	 mvigourID.setError("This Field is required!");
             }
             
             
             else {
        	 
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
          postParameters.add(new BasicNameValuePair("mvigourID", mvigourID.getText().toString()));
          String response = null;
         

          //the number 1
          try {
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/viewbeneficiary1.php",postParameters); // your ip address if using localhost server
     String result = response.toString(); 
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
                 jArray = new JSONArray(result);
                 
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Full Info:"
                        		 
                         );
                        
                         
                        
               
                         //Get an output to the screen
                         returnString = "Beneficiary List" 
                        		 + "\n" +
                        		 "------------------------------------------------------------------------"                          		 +"\n" + "- Your ID: \t"+ json_data.getString("mvigourID")
                        		 + 
                        		 "\n" + "- Full Name: \t"+ json_data.getString("names")
                        		 + "\n" +
                        		 "------------------------------------------------------------------------"       	                        ;		
                         
                        		 
                        	
     	                        		 
                         returnString2 += "Beneficiary List:"
     	     	                        		 + 
     	     	    	                        "\n\t\t\t\t\t\t\t -" + "First Name: \t" + json_data.getString("fname")
     	     	    	                         + 
     	     	    	                        "\n\t\t\t\t\t\t\t -" + "Other Names: \t" + json_data.getString("othernames")
     	     	    	                        + 
     	     	    	                        "\n\t\t\t\t\t\t\t -" + "Relationship: \t" + json_data.getString("relation")
     	     	    	                        + 
     	     	    	                        "\n\t\t\t\t\t\t\t -" + "Age: \t" + json_data.getString("Age")
     	     	    	                        + 
     	     	    	                        "\n\t\t\t\t\t\t\t -" + "Gender: \t" + json_data.getString("gender")
     	     	    	                        + "\n" +
                        		 "------------------------------------------------------------------------"  
     	                        		+"\n" +
     	                        		"------------------------------------------------------------------------"                          		 ;
                 }
         }
         catch(JSONException e){
        	 showresult4.setText("No record found. Please verify the Password and ID you have entered and Try again!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
    		 showresult.setText(returnString);
        	 showresult2.setText(returnString2);
         }
         catch(Exception e){
          Log.e("log_tag","Error in Display!" + e.toString()); 

         } 
         
    }
          catch (Exception e) {
        	  showresult.setText("Error in Internet Connection. Please check your Internet settings and Try again!");
     Log.e("log_tag","Error in http connection!!" + e.toString());

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
        
        // previous here is the insurance menu
        previous.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						InsuranceMenu.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        exit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
        
        //for edit
        edit.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
           	 //showresult1.setText(" ");
           	 int len = fname.length();
           	int len1 = mvigourID1.length();
               
                
                if (len<=0)
                {
                	fname.setError("This Field is required!");
                }
             
                else if (len1 <= 0)
                {
                	mvigourID1.setError("This Field is required!");
                }
                
                
                else {
           	 
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("fname", fname.getText().toString()));
             postParameters.add(new BasicNameValuePair("mvigourID1", mvigourID1.getText().toString()));
             //to edit
             postParameters.add(new BasicNameValuePair("fname2", fname2.getText().toString()));
             postParameters.add(new BasicNameValuePair("othernames", othernames.getText().toString()));
             postParameters.add(new BasicNameValuePair("relation", relation.getText().toString()));
             postParameters.add(new BasicNameValuePair("gender", gender.getText().toString()));
             postParameters.add(new BasicNameValuePair("Age", Age.getText().toString()));
             
            

             //the edit
             try {
        response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/editbeneficiary.php",postParameters); // your ip address if using localhost server
        Intent i = new Intent(getApplicationContext(),
        		EditBeneficiary.class);
		startActivity(i);
            
       }
             catch (Exception e) {
            	 showresult3.setText("Error in Internet Connection. Editing Failed. Please check your Internet settings and Try again!");
        Log.e("log_tag","Error in http connection!!" + e.toString());

       }
             
                }
               
            }         
           });
        
       
        
        
    }
}


