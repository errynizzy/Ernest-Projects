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


public class VaccinationActivity extends Activity{
	
	Button get_emergency_vaccn;
	Button get_infants;
	Button get_benefits;
	Button get_centres;
	Button btnLinkToHome1;
	TextView showresult;
	String returnString;
	Button previous;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.vaccination);
        
     // Importing all assets like buttons, text fields 	
        
        get_emergency_vaccn = (Button) findViewById(R.id.get_emergency_vaccn);
        get_infants = (Button) findViewById(R.id.get_infants);
        get_benefits = (Button) findViewById(R.id.get_benefits); //counselling services
        get_centres = (Button) findViewById(R.id.get_centres);
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
        
        get_emergency_vaccn.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/vaccination_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Emergency Vaccination: "+json_data.getString("emergency")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("emergency");
                                       
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
        
        get_infants.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/vaccination_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Infants Vaccination: "+json_data.getString("infants")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("infants");
                                       
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
        
        get_benefits.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/vaccination_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Benefits of Vaccination: "+json_data.getString("benefits")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("benefits");
                                       
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
        
        get_centres.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/vaccination_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Vaccination Centres: "+json_data.getString("centres")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("centres");
                                       
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


