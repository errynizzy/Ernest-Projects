package ernest.farming.instructor;

import java.util.ArrayList;
import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MyIDActivity extends Activity {

 EditText pswd;
 Button view;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 
 TextView showresult;
 TextView showresult2;

 
 String returnString;

 @Override
	public void onBackPressed() {
	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	    builder.setMessage("What do you want to do?")
	           .setCancelable(false)
	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
	               public void onClick(DialogInterface dialog, int id) {
	            	  Intent i = new Intent(getApplicationContext(),
								Register.class);
						startActivity(i);
						finish();
	               }
	           })
	           .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
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

        super.onCreate(savedInstanceState);
        setContentView(R.layout.myid);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        view = (Button) findViewById(R.id.view);
        exit = (Button) findViewById(R.id.exit);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        
       
        //put all the view links and url in here
       
        view.setOnClickListener(new View.OnClickListener(){
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
         

          //the number 1
          try {
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/farming/myid.php",postParameters); // your ip address if using localhost server
     String result = response.toString();  
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
             
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","MFI ID: "+
                        		 json_data.getString("ID")
                         );


                         //Get an output to the screen
                         returnString = "Hello!  " +
                        		 
                        		  json_data.getString("names")+
                        		 "\n" + "Your Farming Instuctor ID is: \t"+ json_data.getString("ID")
                        		
                        		 + " \n"+ 
                        		 "............."  
     	                        		+"\n" 
                        		 ;
                 }
         }
         catch(JSONException e){
        	 showresult2.setText("Please verify the Password you have entered!");
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
						Register.class);
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



