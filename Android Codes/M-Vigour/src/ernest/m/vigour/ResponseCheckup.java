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

public class ResponseCheckup extends Activity {

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
        setContentView(R.layout.checkup_response);
        
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
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_checkup.php",postParameters); // your ip address if using localhost server

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
                           json_data.getString("checkup_response")+
                           json_data.getString("lab_name")+
                           json_data.getString("check_up_date")+
                           json_data.getString("check_up_time")+
                            json_data.getString("issue")
                           
                           );


                          //Get an output to the screen
                          returnString = "CHECK UP"
                         		 +"\n" + "Full Name: \t"+ json_data.getString("names")
                         		 + " \n"+ 
                         		"Check Up Issue: \t" + json_data.getString("issue")
                         		 + " \n"+ 
                         		"Requested Time: \t" + json_data.getString("check_up_time")
                         		 + "\n"+ 
                         		 "Lab / Clinic Name: \t" + json_data.getString("lab_name")
                         		 + "\n"+ 
                         		 "Requested Date: \t" + json_data.getString("check_up_date")
 									+ "\n"+ 
 									"Response: \t" +json_data.getString("checkup_response")
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
        response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/response_checkup2.php",postParameters); // your ip address if using localhost server

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
                              
                               
                               +json_data.getString("clinic_name4")
                               +json_data.getString("checkup_date")
                               +json_data.getString("checkuptime")
                               +json_data.getString("response")
                               +json_data.getString("issue1")
                              );


                             //Get an output to the screen
                            
                            		
                             			returnString1 += "CHECK UP"+
                             					"\n" + "Full Name: \t"+ json_data.getString("names")+
                             					"\n"+ "Check Up Issue: \t" +json_data.getString("issue1")+
                             			"\n"+ "Response From: \t" +json_data.getString("clinic_name4")
                            		 + "\n"+ 
                            		 "Requested Date: \t" + json_data.getString("checkup_date")
                            		 + "\n"+ 
                            		 "Requested Time: \t" + json_data.getString("checkuptime")
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
						CheckUpActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
    }
}

