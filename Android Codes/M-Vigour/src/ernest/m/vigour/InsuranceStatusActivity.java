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
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class InsuranceStatusActivity extends Activity {

 EditText pswd;
 EditText mvigourID;
 AutoCompleteTextView bundleid;
 Button btnMyStatus;
 Button exit;
 Button btnLinkToMenu;
 Button previous;
 
 TextView showresult;
 TextView showresult1;
 TextView showresult2;
 TextView showresult3;
 JSONObject json_data=null;
 
 String returnString = "";
 String returnString1 = "";
 String returnString2 = "";
 int a;
 
//string for insurance bundles
	String item[]={
			  "MVI001Individual", 
			  "MVI002Family",
			  "MVI003Organization",
			  "MVI004Disabled",
			  "MVI005Group",
			  "MVI006School",
			  "MVI007Office",
			  "MVI008Team",
			  "MVI009Sport",
			  "MVI010Accident",
			  "MVI011Bodaboda",
			  "MVI012Tax",
			  "MVI013Worksite",
			  "MVI014Orphan"
			   };


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.insurance_status);
        
        //import all from xml
        pswd = (EditText) findViewById(R.id.pswd);
        mvigourID = (EditText) findViewById(R.id.mvigourID);
        btnMyStatus = (Button) findViewById(R.id.btnMyStatus);
        exit = (Button) findViewById(R.id.exit);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult1 = (TextView) findViewById(R.id.showresult1);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        showresult3 = (TextView) findViewById(R.id.showresult3);
        btnLinkToMenu = (Button) findViewById(R.id.btnLinkToMenu);
        previous = (Button) findViewById(R.id.previous);
        bundleid = (AutoCompleteTextView) findViewById(R.id.bundleid);
        
      //for insurance bundles 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.bundleid);
	        auto.setAdapter(adapter);
        
       
        //put all the view links and url in here
       
        btnMyStatus.setOnClickListener(new View.OnClickListener(){
         public void onClick(View v) {
        	 //showresult1.setText(" ");
        	 int len = pswd.length();
        	 int len1 = mvigourID.length();
        	 int len2 = bundleid.length();
             
             if (len<=0)
             {
             	pswd.setError("This Field is required!");
             }
          
             else if (len1 <= 0)
             {
            	 mvigourID.setError("This Field is required!");
             }
             else if (len2 <= 0)
             {
            	 bundleid.setError("This Field is required!");
             }
             
             else {
        	 
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));
          postParameters.add(new BasicNameValuePair("mvigourID", mvigourID.getText().toString()));
          postParameters.add(new BasicNameValuePair("bundleid", bundleid.getText().toString()));
          String response = null;
         

          //the number 1
          try {
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/myinsurancests.php",postParameters); // your ip address if using localhost server
     String result = response.toString(); 
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
                 jArray = new JSONArray(result);
                 
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Full Info:"
                        		 
                         );
                        
                         
                         a = json_data.getInt("remaining_days");
                         int amnt = json_data.getInt("amount");
                         
                         String notify = null;
                         String state = null;
                         String service = null;
                        
                         
                         //for remaining days 
                         if( a >= 0)
                         {
                        	a = json_data.getInt("remaining_days");
                         }
                         else
                         {
                        	 a = 0;
                         }
                         
                         //for notifications and status
                         if (a == 0)
                         {
                        	 notify = "Your Account is Disabled";
                        	 state = "Account is DISABLED";
                         }
                         else if (a <= 183 && a > 153)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a ==153)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a <= 153 && a > 123)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a ==123)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a <= 123 && a > 93)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a ==93)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a <= 93 && a > 63)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a ==93)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a <= 63 && a > 33)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a == 33)
                         {
                        	 notify = "Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a <= 33 && a > 3)
                         {
                        	 notify = "Your Insurance bundle is about to expire. Please remember to pay for Insurance";
                        	 state = "Account is active";
                         }
                         else if (a == 3)
                         {
                        	 notify = "Your Insurance bundle is about to expire. Please remember to pay for Insurance";
                        	 state = "Account is inactive. Two days remaining.";
                         }
                         else if (a == 2)
                         {
                        	 notify = "Your Insurance bundle is about to expire. Please remember to pay for Insurance";
                        	 state = "Account is inactive. One day remain.";
                         }
                         else if (a == 1)
                         {
                        	 notify = "Your Insurance bundle is about to expire. Please remember to pay for Insurance";
                        	 state = "Account is inactive. This is the last day.";
                         }
                         else if (a < 0)
                         {
                        	 notify = "Account Disabled. Please activate your account";
                        	 state = "Disabled";
                         }
                         
                         //for services
                         if(amnt < 25000 && a > 0)
                         {
                        	 service = "The Amount you have paid is below the agreed minimum standard for accessing this service. Please add money to your Insurance. Thank you.";
                         }
                         else if(amnt == 25000)
                         {
                        	 service ="\n\t\t\t\t\t\t\t"+"Blood Test" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"Prescriptions" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"Maternity Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"Physiotherapy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"First Aid" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"Dentistry"
                        			 	;
                         }
                         else if(amnt > 25000 && amnt <= 40000 && a > 0)
                         {
                        	 service ="\n\t\t\t\t\t\t\t"+"- Blood Test" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Prescriptions" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Maternity Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Physiotherapy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- First Aid"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Minor Surgery" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Child, Youth & Family Health Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Pharmacy"
                        			 	;
                         }
                         else if(amnt > 40000 && amnt <= 80000 && a > 0)
                         {
                        	 service ="\n\t\t\t\t\t\t\t"+"- Blood Test" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Prescriptions" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Maternity Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Physiotherapy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- First Aid"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Minor Surgery" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Child, Youth & Family Health Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Pharmacy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Dentistry"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Pharmacy"
                        			 	;
                         }
                         else if(amnt > 80000 && a > 0)
                         {
                        	 service = "\n\t\t\t\t\t\t\t"+"- Blood Test" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Prescriptions" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Maternity Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Physiotherapy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- First Aid"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Minor Surgery" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Child, Youth & Family Health Services"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Pharmacy"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Dentistry"
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- Pharmacy" 
                        			 	+ "\n\t\t\t\t\t\t\t" + 
                        			 	"- General Surgery"
                        			 	;
                         }
                         else if (a <= 0)
                         {
                        	 service = "\n\t\t\t\t\t\t\t"+"Your Insurance has Expires." +
                        			 "\n\t\t\t\t\t\t\t"+"You can not access any service.";
                         }
               
                         //Get an output to the screen
                         returnString = "Insurance Status" 
                        		 + "\n" +
                        		 "-------------------------------------------------------------------------------------" 
                        		 +"\n" + "- Your ID: \t"+ json_data.getString("mvigourID")
                        		 + 
                        		 "\n" + "- Full Name: \t"+ json_data.getString("names")
                        		 + 
                        		 "\n" + "- Gender: \t"+ json_data.getString("gender")
                        		 + 
                        		 "\n" + "- Contacts: \t"+ json_data.getString("phone")
                        		 +  
                        		 "\n" + "- Residential Area: \t"+ json_data.getString("address")
                        		 + "\n" +
                        		 "...................................................................................................."  
     	                        ;		
                        		 
                         returnString1 =	 
     	                        "\n" + "- Insurance Bundle ID: \t"+ json_data.getString("insurance-bundleID")
     	                         + 
     	                        "\n" + "- Insurance Bundle Name: \t"+ json_data.getString("BandleName")
     	                        + 
     	                        "\n" + "- Amount Paid: \t"+ json_data.getInt("amount")+ ".UGX"
     	                        + 
     	                        "\n" + "- Date Paid: \t"+ json_data.getString("datePayed")
     	                        + 
     	                        "\n" + "- Total Bundle Days: \t"+ json_data.getInt("bundle_days")+ " Days"
     	                        + 
     	                        "\n" + "- Current Date: \t"+ json_data.getString("current_year_month")+"."+ json_data.getString("current_day")
     	                         + 
     	                        "\n" + "- Remaining Days: \t"+ a // use a trick here
     	                        + 
     	                        "\n" + "- Notifications: \t"+ notify
     	                       + 
    	                        "\n" + "- Account Status: \t"+ state
    	                        +"\n"+ "\n" +
    	                        "...................................................................................................."  
    	                        + "\n" 
     	                         + "- Insurance Expire Date: \t"+ json_data.getString("expire_year_month")+"."+ json_data.getString("expire_day")
     	                         + "\n" +
                       		 "...................................................................................................."  
    	                        + 
    	                        "\n" + "Services List: \t"+ service
    	                        + "\n" +
    	                          		 "...................................................................................................."  
                       		
     	     	                        ;		
     	                        		 
                         returnString2 = 
     	     	    	                        "\n" +
                        		 "-------------------------------------------------------------------------------------"  
     	                        		+"\n" +
     	                        		 "-------------------------------------------------------------------------------------"  
                        		 ;
                 }
         }
         catch(JSONException e){
        	 showresult3.setText("No record found. Please verify the Password and ID you have entered!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
        		 showresult.setText(returnString);
        		 showresult1.setText(returnString1);
        		 showresult2.setText(returnString2);
         }
         catch(Exception e){
          Log.e("log_tag","Error in Display!" + e.toString()); 

         } 
         
    }
          catch (Exception e) {
        	  showresult.setText("Error in Internet Connection. Please check your Internet settings and Try again!");
     Log.e("log_tag","Error in http connection!!" + e.toString());

    }
          
             }
         }         
        });
        
        btnLinkToMenu.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        // previous here is the insurance menu
        previous.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						InsuranceMenu.class);
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


