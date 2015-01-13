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

public class ResponseAppointment extends Activity {

 EditText pswd;
 Button get_response;
 Button btnLinkToHome;
 Button previous;
 Button more_resp;
 TextView showresult;
 TextView showresult1;
 String returnString;
 String returnString1;
 String returnString2;

    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.appointment_response);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        get_response = (Button) findViewById(R.id.get_response);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult1 = (TextView) findViewById(R.id.showresult1);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        more_resp = (Button) findViewById(R.id.more_resp);
        previous = (Button) findViewById(R.id.previous);
        
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
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_appointment.php",postParameters); // your ip address if using localhost server

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
                         json_data.getString("appointment_response")+
                         json_data.getString("tomeet")+
                         json_data.getString("clinic_name")+
                         json_data.getString("appointment_time")+
                         json_data.getString("appointment_date")
                          
                         
                         );


                         //Get an output to the screen
                         returnString = "APPOINTMENT"
                        		 +"\n" + "Full Name: \t"+ json_data.getString("names")
                        		 + " \n"+ 
                        		 "To Meet: \t" +json_data.getString("tomeet")
                        		 + " \n"+ 
                        		 "Response From: \t" +json_data.getString("clinic_name")
                        		 + "\n"+ 
                        		 "Requested time: \t" + json_data.getString("appointment_time")
                        		 + "\n"+ 
                        		 "Requested Date: \t" + json_data.getString("appointment_date")
									+ "\n"+ 
                        		 "Response: \t" + json_data.getString("appointment_response")
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
        response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_appointment2.php",postParameters); // your ip address if using localhost server

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
                           		 json_data.getString("names")+
                          
                             json_data.getString("clinic_name2")
                             +json_data.getString("date")
                             +json_data.getString("time")
                             +json_data.getString("response")
                             +json_data.getString("tomeet1")
                            );


                       
                           		  
                           		
                            			returnString1 += "APPOINTMENT"+
                            					"\n" + "Full Name: \t"+ json_data.getString("names")+
                            			"\n"+ 
                            					"To Meet: \t" +json_data.getString("tomeet1")
                            					+"\n"+ 
                            					"Response From: \t" +json_data.getString("clinic_name2")
                           		 + "\n"+ 
                           		 "Requested time: \t" + json_data.getString("time")
                           		 + "\n"+ 
                           		 "Requested Date: \t" + json_data.getString("date")
                           		 + "\n"+ 
                           		 "Response: \t" + json_data.getString("response")
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
						SendApntmntActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
    }
}

