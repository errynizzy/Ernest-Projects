package connekt.ernest;

import java.util.ArrayList;
import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Forms extends Activity {


 
 TextView tv_head;
 TextView tv;
 int pnumber, tgiven, active, returned, rejected;
 int act, ret, rej;

 
 String returnString;
 
 
 

 @Override
	public void onBackPressed() {
	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	    builder.setMessage("Do you want to go back?")
	           .setCancelable(false)
	           .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
	               public void onClick(DialogInterface dialog, int id) {
	            	  Intent i = new Intent(getApplicationContext(),
								MainActivity.class);
						startActivity(i);
						finish();
	               }
	           })
	           .setNegativeButton("No", new DialogInterface.OnClickListener() {
           public void onClick(DialogInterface dialog, int id) {
                dialog.cancel();
           }
       });
	    AlertDialog alert = builder.create();
	    alert.show();

	}


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	
    	final SharedPreferences preferences ;
    	String PREFS_NAME = "com.example.sp.LoginPrefs";
    	 preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);
         final String uname = getIntent().getExtras().getString("name");
         final String upass = getIntent().getExtras().getString("number");
         final String upos = getIntent().getExtras().getString("p_number");

        super.onCreate(savedInstanceState);
        setContentView(R.layout.forms);
        
        //import all from xml
     
        tv_head = (TextView) findViewById(R.id.tv_head);
        tv = (TextView) findViewById(R.id.tv);
      
        
       
        //put all the view links and url in here
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("p_number", upos.toString()));
          String response = null;
          String response1 = null;
          String response2 = null;
          String response3 = null;
          
         

          //the number 1 http://connektafrica.net/pos_app/sim_search.php //http://10.0.2.2/
          try {
     response = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/forms.php",postParameters); 
     response1 = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/forms1.php",postParameters); 
     response3 = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/forms3.php",postParameters); 
     response2 = CustomHttpClient.executeHttpPost("http://connektafrica.net/pos_app/forms2.php",postParameters); 
     String result = response.toString(); 
     String result1 = response1.toString();
     String result2 = response2.toString();
     String result3 = response3.toString();
      //parse json data
         try{
            //one    
           JSONArray jArray = new JSONArray(result);
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);
                         //Get an output to the screen
                          tgiven = json_data.getInt("total");
                          pnumber = json_data.getInt("pos_number");
                        		
                 }
                       
                 
                 //two		
                         JSONArray jArray1 = new JSONArray(result1);
                         jArray1 = new JSONArray(result1);
                         JSONObject json_data1=null;
                         for(int i1=0;i1<jArray1.length();i1++){
                                  json_data1 = jArray1.getJSONObject(i1);
                                  
                                  
                                  
                                  ret	= json_data1.getInt("returned");
                               
                         }
                         
                         //4		
                         JSONArray jArray3 = new JSONArray(result3);
                         jArray3 = new JSONArray(result3);
                         JSONObject json_data3=null;
                         for(int i3=0;i3<jArray3.length();i3++){
                                  json_data3 = jArray3.getJSONObject(i3);
                                  
                                  
                                  act = json_data3.getInt("active");
                               
                         }
                         
                         //three		
                         JSONArray jArray2 = new JSONArray(result2);
                         jArray2 = new JSONArray(result2);
                         JSONObject json_data2=null;
                         for(int i2=0;i2<jArray2.length();i2++){
                                  json_data2 = jArray1.getJSONObject(i2);
                                  rej = json_data2.getInt("rejected");
                                 
                         }
                                		 
                 
         }
         catch(JSONException e){
        	// tv_head.setText(uname + ", The POS number "+ upos + " was not found in database. Please verify the POS number you have entered!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
        	 tv.setText("RESULTS OF OUTLET: \t\t" + pnumber + "\n" +
            		 "Total Simcards Given: \t\t" + tgiven + "\n" +
            		 "Total Simcards Active: \t\t" + act + "\n" +
            		 "Total Forms Returned: \t\t" + ret + "\n" +
            		 "Total Forms Rejected: \t\t" + rej + "\n" +
            		 
            		 "Forms to be collected: \t\t" + (act - ret) + "\n" 
            		 
        			 );
        	 
         }
         catch(Exception e){
        	 tv_head.setText(uname + ", The POS number "+ upos + " was not found in database. Please verify the POS number you have entered!");
          Log.e("log_tag","Error in Display!" + e.toString());          
         }   
    }
          catch (Exception e) {
        	  tv_head.setText(uname + ", there is an error in Internet Connection. Please check your Internet settings!");
     Log.e("log_tag","Error in http connection!!" + e.toString());     
    }
          
          
        
        
        
    }
}

