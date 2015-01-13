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
import android.widget.TextView;

public class SearchHCActivity extends Activity {

 
 Button searchbtn;
 Button searchbtn2;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 TextView showresult;
 TextView showresult2;
 TextView showresult3;
 String returnString ="";
 String returnString2 ="";
 AutoCompleteTextView namesearch;
 AutoCompleteTextView locationsearch;
 
 //string for hearth centre name
	String item[]={
			  "Amar Medical Centre","Allied Medical & Physiotherapy Services","Bunawona Clinic", "Byansi Medical Clinic", 
			  "Capital Medical Clinic", "CS3202","CS3203","Care Clinic","Crane Medical & Laboratory Services Ltd",
			   "Dosam Medical Care Clinic", "Dr. Ganaga E.J Medical Clinic", "Dr. P.O. Aliker Clinic","Family Planning Association Of Uganda - Model Clinic",
			   "Gwatiro Nursing Home", "Hoima Islamic Health Centre", "International Air Ambulance (IAA)", "Joda Clinic"
			   };
	
	//string areas
	 	String areaitem[]={
	 			"Bwaise",
	 			"Lugala",
	 			"Mulago",
	 			"Kyebando",
	 			"Nabweru",
	 			"Kigowa",
	 			"Bukoto",
	 			"Kisaasi",
	 			"Buye",
	 			"Kawempe",
	 			"Bugolobi",
	 			"Ndeeba",
	 			"Mengo",
	 			"Namasuba",
	 			"Makindye",
	 			"Masajja",
	 			"Bunamwaya",
	 			"Katwe",
	 			"Kampala ",
	 			"Old Kampala", 
	 			"Kabalagala ",
	 			"Lira", 
	 			"Buikwe" ,
	 			"Wakiso",
	 			"Mukono",
	 			"Kansanga",
	 			"Gaba",
	 			"Bunga",
	 			"Wandegeya"

	 			   };


    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.searchhc);
        
        //import all from xml
       
        searchbtn = (Button) findViewById(R.id.searchbtn);
        searchbtn2 = (Button) findViewById(R.id.searchbtn2);
        exit = (Button) findViewById(R.id.exit);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        showresult3 = (TextView) findViewById(R.id.showresult3);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        locationsearch = (AutoCompleteTextView) findViewById(R.id.locationsearch);
        namesearch = (AutoCompleteTextView) findViewById(R.id.namesearch);
        
      //for hc 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.namesearch);
	        auto.setAdapter(adapter);
	        
	        //for areas 
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,areaitem);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.locationsearch);
		        auto1.setAdapter(adapter1);
	        
       
        //put all the view links and url in here for search
       
        searchbtn.setOnClickListener(new View.OnClickListener(){
         public void onClick(View v) {
        	 int len1 = namesearch.length();
           
             if (len1 <=0){
            	 namesearch.setError("This Field is required!");
             }
             else {
     	
        	 
        	 showresult.setText("");
          ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
          postParameters.add(new BasicNameValuePair("namesearch", namesearch.getText().toString()));
          String response = null;
         

          //the search
          try {
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchhealth1.php",postParameters); // your ip address if using localhost server
     String result = response.toString();  
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
             
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Name: "+
                        		 json_data.getString("centrename")+
                        		 json_data.getString("Location")+
                        		 json_data.getString("treatmentbase")
                         );


                         //Get an output to the screen
                         returnString += "Search Result"
                        		 +"\n" + "Health Centre Name: \t"+ json_data.getString("centrename")
                        		 + "\n"+ 
                        		 "Located at: \t" + json_data.getString("Location")
                        		 + " \n"+ 
                        		 "Services they Offer: \t" +json_data.getString("treatmentbase")
                        		 + " \n"+ 
                        		 ".................................................................................................."  
                     		+"\n" 
                        		 ;
                 }
         }
         catch(JSONException e){
          	  showresult3.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
        	 
        	 showresult.setText(returnString);
          	showresult2.setText("");
        	 
         }
         catch(Exception e){
          Log.e("log_tag","Error in Display!" + e.toString());          
         }   
    }
          catch (Exception e) {
           	  showresult.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
     Log.e("log_tag","Error in http connection!!" + e.toString());     
    }
          
          
          
         
         } 
         }
        });
        
       
             
             
          
        
        // search by location
        searchbtn2.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
            	 int len1 = locationsearch.length();
                 
                 if (len1 <=0){
                	 locationsearch.setError("This Field is required!");
                 }
                 else {
            	showresult2.setText("");
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("locationsearch", locationsearch.getText().toString()));
             String response2 = null;
            

             //the search
             try {
        response2 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchhealth2.php",postParameters); // your ip address if using localhost server
        String result2 = response2.toString();  
         //parse json data

            try{
                   
              JSONArray jArray = new JSONArray(result2);
                
                    jArray = new JSONArray(result2);
                    JSONObject json_data=null;
                    
                    
                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                             Log.i("log_tag","Name: "+
                            		 json_data.getString("centrename")+
                            		 json_data.getString("Location")+
                            		 json_data.getString("treatmentbase")
                             );


                          //Get an output to the screen
                            returnString2 += "Search Result"
                           		 +"\n" + "Health Centre Name: \t"+ json_data.getString("centrename")
                           		 + "\n"+ 
                           		 "Located at: \t" + json_data.getString("Location")
                           		 + " \n"+ 
                           		 "Services they Offer: \t" +json_data.getString("treatmentbase")
                           		 + " \n"+ 
                           		 ".................................................................................................."  
                        		+"\n" 
                           		 ;
                    }
            }
            catch(JSONException e){
             	  showresult3.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                     Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
            	showresult2.setText(returnString2);
            	showresult.setText("");
            
            }
            catch(Exception e){
             Log.e("log_tag","Error in Display!" + e.toString());          
            }   
       }
             catch (Exception e) {
              	  showresult.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
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
						SearchActivity.class);
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




