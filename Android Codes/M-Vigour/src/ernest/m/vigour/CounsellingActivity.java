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


public class CounsellingActivity extends Activity{
	
	Button get_mental;
	Button get_sexual;
	Button get_nutrition;
	Button family_plan;
	Button hiv;
	Button get_alcohol_drugs;
	Button btnLinkToHome1;
	TextView showresult;
	String returnString;
	Button previous;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.counselling);
        
     // Importing all assets like buttons, text fields 	
        
        get_mental = (Button) findViewById(R.id.get_mental);
        get_sexual = (Button) findViewById(R.id.get_sexual);
        get_nutrition = (Button) findViewById(R.id.get_nutrition); //counselling services
        get_alcohol_drugs = (Button) findViewById(R.id.get_alcohol_drugs);
        btnLinkToHome1 = (Button) findViewById(R.id.btnLinkToHome1); 
        showresult = (TextView) findViewById(R.id.showresult);
        hiv = (Button) findViewById(R.id.hiv);
        family_plan = (Button) findViewById(R.id.family_plan);
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
        
        get_mental.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     
                    //parse json data
                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Mental Health: "+json_data.getString("mental")
                                        		+json_data.getString("mental")
                                        );


                                        //Get an output to the screen
                                        returnString =   json_data.getString("mental") ;
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
        
        get_sexual.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Sexual Health: "+json_data.getString("sexual")
                                        		+json_data.getString("sexual")
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("sexual");
                                       
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
        
        get_nutrition.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Nutrition Health: "+json_data.getString("nutrition")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("nutrition");
                                       
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
        
        get_alcohol_drugs.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Alcohol and Drugs: "+json_data.getString("alcohol_drugs")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("alcohol_drugs");
                                       
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
        
        family_plan.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","Family Planning: "+json_data.getString("family_plan")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("family_plan");
                                       
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
        
        
        hiv.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
        		String response;
                
        		try {
                    response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/counselling_general_response.php",postParameters); // your ip address if using localhost server
                    String result = response.toString();  
                     //parse json data

                        try{
                                //returnString = "";
                          JSONArray jArray = new JSONArray(result);
                            
                                jArray = new JSONArray(result);
                                JSONObject json_data;

                                for(int i=0;i<jArray.length();i++){
                                         json_data = jArray.getJSONObject(i);

                                        Log.i("log_tag","HIV and AIDS: "+json_data.getString("hiv")
                                         
                                        );


                                        //Get an output to the screen
                                       
                                        returnString =  json_data.getString("hiv");
                                       
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

