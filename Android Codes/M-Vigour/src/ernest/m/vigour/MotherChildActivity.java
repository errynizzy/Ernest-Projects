package ernest.m.vigour;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;


public class MotherChildActivity extends Activity{
	
	
	Button during_p;
	Button after_p;
	Button btnLinkToHome1;
	TextView showresult;
	String returnString;
	Button previous;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.mother_child);
        
     // Importing all assets like buttons, text fields 	
        
        during_p = (Button) findViewById(R.id.during_p);
        after_p = (Button) findViewById(R.id.after_p);
        btnLinkToHome1 = (Button) findViewById(R.id.btnLinkToHome1); 
        showresult = (TextView) findViewById(R.id.showresult);
        previous = (Button) findViewById(R.id.previous);
       
        
        //assigning button click events in order
        btnLinkToHome1.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        during_p.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/mother_child_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","During Pregnancy: "+json_data.getString("during_pregnancy")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("during_pregnancy");
                                       
                                }
                        }
                        catch(JSONException e){
                        	showresult.setText("Error in Internet Connection. Please check your Internet settings");
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
                        	 showresult.setText("Error in Internet Connection. Please check your Internet settings");
                    Log.e("log_tag","Error in http connection!!" + e.toString());     
                   }
			} 
		}); 
        
        after_p.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/mother_child_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","After Pregnancy: "+json_data.getString("after_pregnancy")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("after_pregnancy");
                                       
                                }
                        }
                        catch(JSONException e){
                        	showresult.setText("Error in Internet Connection. Please check your Internet settings");
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
                        	 showresult.setText("Error in Internet Connection. Please check your Internet settings");
                    Log.e("log_tag","Error in http connection!!" + e.toString());     
                   }
			} 
		}); 
        
        previous.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
    }
	


}




