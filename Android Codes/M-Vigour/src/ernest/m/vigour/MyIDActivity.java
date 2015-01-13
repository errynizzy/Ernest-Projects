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

public class MyIDActivity extends Activity {

 EditText pswd;
 EditText mvigourID;
 Button view;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 
 TextView showresult;
 TextView showresult2;

 
 String returnString;


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.myid);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        mvigourID = (EditText) findViewById(R.id.mvigourID);
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
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myid.php",postParameters); // your ip address if using localhost server
     String result = response.toString();  
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
             
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Full Names: "+
                        		 json_data.getString("mvigourID")
                         );


                         //Get an output to the screen
                         returnString = "Hello!  " +
                        		 
                        		  json_data.getString("names")+
                        		 "\n" + "Your M-Vigour ID is: \t"+ json_data.getString("mvigourID")
                        		
                        		 + " \n"+ 
                        		 ".................................................................................................."  
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


