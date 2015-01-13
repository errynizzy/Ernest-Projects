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

public class MyFileActivity extends Activity {

 EditText pswd;
 EditText mvigourID;
 Button view;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 
 TextView showresult1;
 TextView showresult2;
 TextView showresult3;
 TextView showresult4;
 TextView showresult5;
 
 String returnString1;
 String returnString2 = "";
 String returnString3 = "";
 String returnString4 = "";
 String returnString5 = "";

    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.myfile);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        mvigourID = (EditText) findViewById(R.id.mvigourID);
        view = (Button) findViewById(R.id.view);
        exit = (Button) findViewById(R.id.exit);
   
        showresult1 = (TextView) findViewById(R.id.showresult1);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        showresult3 = (TextView) findViewById(R.id.showresult3);
        showresult4 = (TextView) findViewById(R.id.showresult4);
        showresult5 = (TextView) findViewById(R.id.showresult5);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        
       
        //put all the view links and url in here
       
        view.setOnClickListener(new View.OnClickListener(){
         public void onClick(View v) {
        	 int len = pswd.length();
             int len1 = mvigourID.length();
             
             if (len<=0)
             {
             	pswd.setError("This Field is required!");
             }
             else if (len1<=0)
             {
            	 mvigourID.setError("This Field is required!");
             }
       
             
             else {
        	 
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
          postParameters.add(new BasicNameValuePair("mvigourID", mvigourID.getText().toString()));
          String response1 = null;
          String response2 = null;
          String response3 = null;
          String response4 = null;
          String response5 = null;

          //the number 1
          try {
     response1 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myfile.php",postParameters); // your ip address if using localhost server
     String result1 = response1.toString();  
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result1);
             
                 jArray = new JSONArray(result1);
                 JSONObject json_data=null;
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Full Names: "+
                        		 json_data.getString("mvigourID")+
                         json_data.getString("names")+
                         json_data.getString("address")+
                         json_data.getString("dob")+
                         json_data.getString("bloodgrp")+
                         json_data.getString("phone")+
                         json_data.getString("dateregistered")
                         );


                         //Get an output to the screen
                         returnString1 = "Personal Details"
                        		 +"\n" + "M-Vigour ID: \t"+ json_data.getString("mvigourID")
                        		 + " \n"+ 
                        		 "Full Names: \t" +json_data.getString("names")
                        		 + " \n"+ 
                        		 "Physical Address: \t" +json_data.getString("address")
                        		 + "\n"+ 
                        		 "Date of Birth: \t" + json_data.getString("dob")
                        		 + "\n"+ 
                        		 "Blood Group: \t" + json_data.getString("bloodgrp")
									+ "\n"+ 
                        		 "Phone: \t" + json_data.getString("phone")
                        		 + "\n"+
                        		 "Registered on: \t" + json_data.getString("dateregistered")
                        		 + " \n"+ 
                        		 ".................................................................................................."  
     	                        		+"\n" 
                        		 ;
                 }
         }
         catch(JSONException e){
        	 showresult1.setText("Error in Internet Connection. Please check your Internet settings");
	        	 showresult2.setText("OR");
	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
	        	showresult4.setText("OR - Please verify the combination of Password and M-Vigour ID you have entered!");
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
     Log.e("log_tag","Error in http connection!!" + e.toString());     
    }
          
          //another 2
          try {
        	     response2 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myfile.php",postParameters); // your ip address if using localhost server
        	     String result2 = response2.toString();  
        	      //parse json data

        	         try{
        	                
        	           JSONArray jArray = new JSONArray(result2);
        	             
        	                 jArray = new JSONArray(result2);
        	                 JSONObject json_data=null;
        	                 
        	                 
        	                 for(int i=0;i<jArray.length();i++){
        	                          json_data = jArray.getJSONObject(i);

        	                         Log.i("log_tag","Clinic Name: "+
        	                        		 json_data.getString("clinicnamet")+
        	                         json_data.getString("labresults")+
        	                         json_data.getString("desease")+
        	                         json_data.getString("symptoms")+
        	                         json_data.getString("treatmentdate")+
        	                         json_data.getString("prescriptiongiven")+
        	                         json_data.getString("treatmentresults")+
        	                         json_data.getString("furthertreatment")
        	                         );


        	                         //Get an output to the screen
        	                         returnString2 += "Treatment Details"
        	                        		 +"\n" + "Clinic Name: \t"+ json_data.getString("clinicnamet")
        	                        		 + "\n"+ 
        	                        		 "Symptoms: \t" + json_data.getString("symptoms")
        	                        		 + " \n"+ 
        	                        		 "Lab Results: \t" +json_data.getString("labresults")
        	                        		 + " \n"+ 
        	                        		 "Desease Found: \t" +json_data.getString("desease")
        	                        		 + "\n"+ 
        	                        		 "Date of Treatment: \t" + json_data.getString("treatmentdate")
        	                        		 + "\n"+ 
        	                        		 "Prescription Given: \t" + json_data.getString("prescriptiongiven")
        										+ "\n"+ 
        	                        		 "Treatment Results: \t" + json_data.getString("treatmentresults")
        	                        		 + "\n"+
        	                        		 "More Treatments: \t" + json_data.getString("furthertreatment")
        	                        		 + " \n"+ 
        	                        		 ".................................................................................................."  
     	                        		+"\n" 
        	                        		 ;
        	                 }
        	         }
        	         catch(JSONException e){
        	        	 showresult1.setText("Error in Internet Connection. Please check your Internet settings");
         	        	 showresult2.setText("OR");
         	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
         	        	showresult4.setText("OR - Please verify the combination of Password and M-Vigour ID you have entered!");
        	                 Log.e("log_tag", "Error parsing data "+e.toString());
        	         }
        	         try{
        	        	 showresult2.setText(returnString2);
        	        	 
        	         }
        	         catch(Exception e){
        	          Log.e("log_tag","Error in Display!" + e.toString());          
        	         }   
        	    }
        	          catch (Exception e) {
        	     Log.e("log_tag","Error in http connection!!" + e.toString());     
        	    }
          
          // another 3
          try {
     	     response3 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myfile.php",postParameters); // your ip address if using localhost server
     	     String result3 = response3.toString();  
     	      //parse json data

     	         try{
     	                
     	           JSONArray jArray = new JSONArray(result3);
     	             
     	                 jArray = new JSONArray(result3);
     	                 JSONObject json_data=null;
     	                 
     	                 
     	                 for(int i=0;i<jArray.length();i++){
     	                          json_data = jArray.getJSONObject(i);

     	                         Log.i("log_tag","Health Issues: "+
     	                        		 json_data.getString("healthissue")
     	                         );


     	                         //Get an output to the screen
     	                         returnString3 += "Health Issues"
     	                        		 +"\n" + "Issue Descripton: \t"+ json_data.getString("healthissue")
     	                        		 + " \n"+ 
     	                        		".................................................................................................."  
     	                        		+"\n" 
     	                        		 ;
     	                 }
     	         }
     	         catch(JSONException e){
     	        	 showresult1.setText("Error in Internet Connection. Please check your Internet settings");
     	        	 showresult2.setText("OR");
     	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
     	        	showresult4.setText("OR - Please verify the combination of Password and M-Vigour ID you have entered!");
     	                 Log.e("log_tag", "Error parsing data "+e.toString());
     	         }
     	         try{
     	        	 showresult3.setText(returnString3);
     	        	 
     	         }
     	         catch(Exception e){
     	          Log.e("log_tag","Error in Display!" + e.toString());          
     	         }   
     	    }
     	          catch (Exception e) {
     	     Log.e("log_tag","Error in http connection!!" + e.toString());     
     	    }
          
          //another 4
          try {
     	     response4 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myfile.php",postParameters); // your ip address if using localhost server
     	     String result4 = response4.toString();  
     	      //parse json data

     	         try{
     	                
     	           JSONArray jArray = new JSONArray(result4);
     	             
     	                 jArray = new JSONArray(result4);
     	                 JSONObject json_data=null;
     	                 
     	                 
     	                 for(int i=0;i<jArray.length();i++){
     	                          json_data = jArray.getJSONObject(i);

     	                         Log.i("log_tag","Allergic: "+
     	                        		 json_data.getString("allegictype")
     	                         );


     	                         //Get an output to the screen
     	                         returnString4 += "Allergic Details"
     	                        		 +"\n" + "Allergic Description: \t"+ json_data.getString("allegictype")
     	                        		 + " \n"+ 
     	                        		".................................................................................................."  
     	                        		+"\n" ;
     	                 }
     	         }
     	         catch(JSONException e){
     	        	 showresult1.setText("Error in Internet Connection. Please check your Internet settings");
     	        	 showresult2.setText("OR");
     	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
     	        	showresult4.setText("OR - Please verify the combination of Password and M-Vigour ID you have entered!");
     	                 Log.e("log_tag", "Error parsing data "+e.toString());
     	         }
     	         try{
     	        	 showresult4.setText(returnString4);
     	        	 
     	         }
     	         catch(Exception e){
     	          Log.e("log_tag","Error in Display!" + e.toString());          
     	         }   
     	    }
     	          catch (Exception e) {
     	     Log.e("log_tag","Error in http connection!!" + e.toString());     
     	    }
          
          //another 5
          try {
     	     response5 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myfile.php",postParameters); // your ip address if using localhost server
     	     String result5 = response5.toString();  
     	      //parse json data

     	         try{
     	                
     	           JSONArray jArray = new JSONArray(result5);
     	             
     	                 jArray = new JSONArray(result5);
     	                 JSONObject json_data=null;
     	                 
     	                 
     	                 for(int i=0;i<jArray.length();i++){
     	                          json_data = jArray.getJSONObject(i);

     	                         Log.i("log_tag","In-Born Issues: "+
     	                        		 json_data.getString("issue")
     	                         );


     	                         //Get an output to the screen
     	                         returnString5 += "In-Born Issues Details"
     	                        		 +"\n" + "Issue Description: \t"+ json_data.getString("issue")
     	                        		 + " \n"+ 
     	                        		".................................................................................................." 
     	                        		+"\n" 
     	                        		 ;
     	                 }
     	         }
     	         catch(JSONException e){
     	        	 showresult1.setText("Error in Internet Connection. Please check your Internet settings");
     	        	 showresult2.setText("OR");
     	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
     	        	showresult4.setText("OR - Please verify the combination of Password and M-Vigour ID you have entered!");
     	                 Log.e("log_tag", "Error parsing data "+e.toString());
     	         }
     	         try{
     	        	 showresult5.setText(returnString5);
     	        	 
     	         }
     	         catch(Exception e){
     	          Log.e("log_tag","Error in Display!" + e.toString());          
     	         }   
     	    }
     	          catch (Exception e) {
     	        	  showresult1.setText("Error in Internet Connection. Please check your Internet settings");
     	        	 showresult2.setText("OR");
     	        	showresult3.setText("Your Health File is not Updated in M-Vigour System. Please visit a nearby Health Centre for M-Vigour Health File registration");
     	        	showresult4.setText("OR");
     	        	showresult5.setText("Please verify the combination of Password and M-Vigour ID you have entered!");
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
						MenuActivity.class);
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
    }
}

