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
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class PrescriptionResponse extends Activity {

 EditText pswd;
 Button get_response;
 Button btnLinkToHome;
 Button more_resp;
 Button previous;
 TextView showresult;
 TextView showresult1;
 String returnString;
 String returnString1;

 
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.prescription_response);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        get_response = (Button) findViewById(R.id.get_response);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult1 = (TextView) findViewById(R.id.showresult1);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        more_resp = (Button) findViewById(R.id.more_resp);
        
        get_response.setOnClickListener(new View.OnClickListener(){
         public void onClick(View v) {
        	 int len = pswd.length();
            
             
             if (len<=0)
             {
             	pswd.setError("This Field is required!");
             }
          
       
             
             else {
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
          String response = null;

          try {
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_prescription.php",postParameters); // your ip address if using localhost server

     String result = response.toString();  
      //parse json data

         try{
        	 returnString = "";
           JSONArray jArray = new JSONArray(result);
             
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;

                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                          Log.i("log_tag","Full Names: "+
                         		 json_data.getString("names")+
                          json_data.getString("prescription_response")+
                          json_data.getString("pharmacy_name")+
                          json_data.getString("problem")+
                          json_data.getString("symptoms")
                           
                           
                          );


                          //Get an output to the screen
                          returnString = "PRESCRIPTION"
                         		 +"\n" + "Full Name: \t"+ json_data.getString("names")
                         		 + " \n"+ 
                         		 "Prescription: \t" +json_data.getString("prescription_response")
                         		 + "\n"+ 
                         		 "Response From: \t" + json_data.getString("pharmacy_name")
                         		 + "\n"+ 
                         		 "Problem: \t" + json_data.getString("problem")
 									+ "\n"+ 
                         		 "Symptoms: \t" + json_data.getString("symptoms")
                         		 + "\n";
                         		  
                         		
                          			
                          
                 }
         }
         catch(JSONException e){
          	  showresult1.setText("No response. This can be caused by error in Internet Connection or invalid use of Password. Please check your Internet settings, verify the Password and try again!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
        	 showresult.setText(returnString);
         }
         catch(Exception e){
          Log.e("log_tag","Error in Display!" + e.toString());          
         }   
    }
          catch (Exception e) {
           	  showresult.setText("No response. This can be caused by error in Internet Connection or invalid use of Password. Please check your Internet settings, verify the Password and try again!");
     Log.e("log_tag","Error in http connection!!" + e.toString());     
    }
         } 
         }
        });
        
       
        
        more_resp.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
            	int len = pswd.length();
                
                
                if (len<=0)
                {
                	pswd.setError("This Field is required!");
                }
             
          
                
                else {
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
             String response = null;

             try {
        response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_prescription2.php",postParameters); // your ip address if using localhost server

        String result = response.toString();  
         //parse json data

            try{
           	 
                returnString1 = "";
              JSONArray jArray = new JSONArray(result);
                
                    jArray = new JSONArray(result);
                    JSONObject json_data=null;

                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                             Log.i("log_tag","Full Names: "+
                            		 json_data.getString("names")
                             
                              +json_data.getString("clinic_name3")
                              +json_data.getString("problem2")
                              +json_data.getString("symptoms2")
                              +json_data.getString("response")
                             );


                             //Get an output to the screen
                            
                            		
                             			returnString1 += "PRESCRIPTION"+
                             					"\n" + "Full Name: \t"+ json_data.getString("names")+
                             			"\n"+ "Response From: \t" +json_data.getString("clinic_name3")
                            		 + "\n"+ 
                            		 "Problem: \t" + json_data.getString("problem2")
                            		 + "\n"+ 
                            		 "Symptom: \t" + json_data.getString("symptoms2")
                            		 + "\n"+ 
                            		 "Prescription: \t" + json_data.getString("response")
                            		 + "\n"+  "\n"
                            		 ;
                             
                    }
            }
            catch(JSONException e){
             	  showresult.setText("No response. This can be caused by error in Internet Connection or invalid use of Password. Please check your Internet settings, verify the Password and try again!");
                    Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
           	
           	 showresult1.setText(returnString1);
            }
            catch(Exception e){
             Log.e("log_tag","Error in Display!" + e.toString());          
            }   
       }
             catch (Exception e) {
              	  showresult.setText("No response. This can be caused by error in Internet Connection or invalid use of Password. Please check your Internet settings, verify the Password and try again!");
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
        
        previous.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						PrescriptionActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
    }
}


