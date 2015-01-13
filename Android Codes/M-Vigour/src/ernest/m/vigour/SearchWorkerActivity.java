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

public class SearchWorkerActivity extends Activity {

 
 Button searchbtn;
 Button searchbtn2;
 Button searchbtn3;
 Button searchbtn4;
 Button exit;
 Button btnLinkToHome;
 Button previous;
 TextView showresult;
 TextView showresult2;
 TextView showresult3;
 TextView showresult4;
 TextView showresult5;
 String returnString ="";
 String returnString2 ="";
 String returnString3 ="";
 String returnString4 ="";
 AutoCompleteTextView namesearch;
 AutoCompleteTextView hcsearch;
 AutoCompleteTextView locationsearch;
 AutoCompleteTextView specialsearch;
 
//string for search by name
	String item[]={
			  "Dr. Anna", "Dr. Ben", "Dr. Chris", "Dr. David", "Dr. Ernest", "Dr. Irene", "Dr. Frank"
			   };

	//string by hearth centre name
		String item1[]={
				  "Amar Medical Centre","Allied Medical & Physiotherapy Services","Bunawona Clinic", "Byansi Medical Clinic", 
				  "Capital Medical Clinic", "CS3202","CS3203","Care Clinic","Crane Medical & Laboratory Services Ltd",
				   "Dosam Medical Care Clinic", "Dr. Ganaga E.J Medical Clinic", "Dr. P.O. Aliker Clinic","Family Planning Association Of Uganda - Model Clinic",
				   "Gwatiro Nursing Home", "Hoima Islamic Health Centre", "International Air Ambulance (IAA)", "Joda Clinic"
				   };
		
		//string by location
 	 	String item2[]={
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
 	 	
 	// by specialisation 
 			String item3 [] = { "Addiction psychiatrist",  
 					"Adolescent medicine specialist", 
 					"Allergist (immunologist)", 
 					"Anesthesiologist",
 					"Cardiac electrophysiologist", 
 					"Cardiologist", 
 					"Cardiovascular surgeon",
 					"Colon and rectal surgeon", 
 					"Critical care medicine specialist",
 					"Dermatologist",
 					"Developmental pediatrician",  
 					"Diagnostic radiologist", 
 					"Doctor of osteopathy (DO)", 
 					"Emergency medicine specialist", 
 					"Endocrinologist" ,
 					"Family medicine physician", 
 					"Forensic pathologist", 
 					"Gastroenterologist", 
 					"General practitioner",
 					"Geriatric medicine specialist", 
 					"Gynecologist", 
 					"Gynecologic oncologist", 
 					"Hand surgeon", 
 					"Hematologist", 
 					"Hepatologist",
 					"Hospitalist", 
 					"Hospice and palliative medicine specialist", 
 					"Hyperbaric physician", 
 					"Infectious disease specialist", 
 					"Internist", 
 					"Interventional cardiologist", 
 					"Medical examiner", 
 					"Medical geneticist ",
 					"Medical oncologist ",
 					"Neonatologist", 
 					"Nephrologist", 
 					"Neurological surgeon", 
 					"Neurologist", 
 					"Nuclear medicine specialist", 
 					"Obstetrician2",
 					"Occupational medicine specialist",
 					"Ophthalmologist", 
 					"Oral surgeon (maxillofacial surgeon)", 
 					"Orthopedic surgeon", 
 					"Otolaryngologist (ear, nose, and throat specialist)", 
 					"Pain management specialist", 
 					"Pathologist", 
 					"Pediatrician", 
 					"Perinatologist", 
 					"Physiatrist", 
 					"Plastic surgeon", 
 					"Preventive medicine specialist", 
 					"Psychiatrist", 
 					"Pulmonologist", 
 					"Radiation oncologist", 
 					"Radiologist", 
 					"Reproductive endocrinologist", 
 					"Rheumatologist", 
 					"Sleep disorders specialist", 
 					"Spinal cord injury specialist",
 					"Sports medicine specialist", 
 					"Surgeon", 
 					"Thoracic surgeon", 
 					"Urologist", 
 					"Vascular surgeon" 
 		};
	
	

    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.searchworker);
        
        //import all from xml
       
        searchbtn = (Button) findViewById(R.id.searchbtn);
        searchbtn2 = (Button) findViewById(R.id.searchbtn2);
        searchbtn3 = (Button) findViewById(R.id.searchbtn3);
        searchbtn4 = (Button) findViewById(R.id.searchbtn4);
        exit = (Button) findViewById(R.id.exit);
        showresult = (TextView) findViewById(R.id.showresult);
        showresult2 = (TextView) findViewById(R.id.showresult2);
        showresult3 = (TextView) findViewById(R.id.showresult3);
        showresult4 = (TextView) findViewById(R.id.showresult4);
        showresult5 = (TextView) findViewById(R.id.showresult5);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome);
        previous = (Button) findViewById(R.id.previous);
        locationsearch = (AutoCompleteTextView) findViewById(R.id.locationsearch);
        hcsearch = (AutoCompleteTextView) findViewById(R.id.hcsearch);
        namesearch = (AutoCompleteTextView) findViewById(R.id.namesearch);
        specialsearch = (AutoCompleteTextView) findViewById(R.id.specialsearch);
        
      //by area
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.namesearch);
	        auto.setAdapter(adapter);
        
	        //by hc
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item1);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.hcsearch);
		        auto1.setAdapter(adapter1);  
		        
		        
		        //by location
		        ArrayAdapter<String> adapter2 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item2);
			        AutoCompleteTextView auto2 = (AutoCompleteTextView)findViewById(R.id.locationsearch);
			        auto2.setAdapter(adapter2); 
			        
			        //by specialization 
			        ArrayAdapter<String> adapter3 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item3);
				        AutoCompleteTextView auto3 = (AutoCompleteTextView)findViewById(R.id.specialsearch);
				        auto3.setAdapter(adapter3); 
	      
       
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
     response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchmd.php",postParameters); // your ip address if using localhost server
     String result = response.toString();  
      //parse json data

         try{
                
           JSONArray jArray = new JSONArray(result);
             
                 jArray = new JSONArray(result);
                 JSONObject json_data=null;
                 
                 
                 for(int i=0;i<jArray.length();i++){
                          json_data = jArray.getJSONObject(i);

                         Log.i("log_tag","Full Names: "+
                        		 json_data.getString("full_names")+
                        		 json_data.getString("healthcentername")+
                        		 json_data.getString("specialization")+
                        		 json_data.getString("Location")+
                        		 json_data.getString("personalcontacts")
                         );


                         //Get an output to the screen
                         returnString += "Search Result"
                        		 +"\n" + "Full Names: \t"+ json_data.getString("full_names")
                        		 + "\n"+ 
                        		 "From: \t" + json_data.getString("healthcentername")
                        		 + " \n"+ 
                        		 "Specialize in: \t" +json_data.getString("specialization")
                        		 + " \n"+ 
                        		 "Health Centre Location: \t" +json_data.getString("Location")
                        		 + " \n"+ 
                        		 "Personal Contacts: \t" +json_data.getString("personalcontacts")
                        		 + " \n"+ 
                        		 ".................................................................................................."  
                     		+"\n" 
                        		 ;
                 }
         }
         catch(JSONException e){
          	  showresult5.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                 Log.e("log_tag", "Error parsing data "+e.toString());
         }
         try{
        	 
        	 showresult.setText(returnString);
        	 showresult4.setText("");
          	showresult2.setText("");
          	showresult3.setText("");
        	 
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
        
        //search hc
        searchbtn2.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
            	int len1 = hcsearch.length();
                
                if (len1 <=0){
               	 hcsearch.setError("This Field is required!");
                }
                else {
            	showresult2.setText("");
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("hcsearch", hcsearch.getText().toString()));
             String response2 = null;
            

             //the search
             try {
        response2 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchhc.php",postParameters); // your ip address if using localhost server
        String result2 = response2.toString();  
         //parse json data

            try{
                   
              JSONArray jArray = new JSONArray(result2);
                
                    jArray = new JSONArray(result2);
                    JSONObject json_data=null;
                    
                    
                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                            Log.i("log_tag","Full Names: "+
                           		 json_data.getString("full_names")+
                           		 json_data.getString("healthcentername")+
                           		 json_data.getString("specialization")+
                           		 json_data.getString("Location")+
                           		 json_data.getString("personalcontacts")
                            );


                            //Get an output to the screen
                            returnString2 += "Search Result"
                           		 +"\n" + "Full Names: \t"+ json_data.getString("full_names")
                           		 + "\n"+ 
                           		 "From: \t" + json_data.getString("healthcentername")
                           		 + " \n"+ 
                           		 "Specialize in: \t" +json_data.getString("specialization")
                           		 + " \n"+ 
                           		 "Health Centre Location: \t" +json_data.getString("Location")
                           		 + " \n"+ 
                           		 "Personal Contacts: \t" +json_data.getString("personalcontacts")
                           		 + " \n"+ 
                           		 ".................................................................................................."  
                        		+"\n" 
                           		 ;
                    }
            }
            catch(JSONException e){
             	  showresult5.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                    Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
            	showresult2.setText(returnString2);
            	showresult.setText("");
            	showresult4.setText("");
            	showresult3.setText("");
           	 
           	 
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
        searchbtn3.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
            	int len1 = locationsearch.length();
                
                if (len1 <=0){
               	 locationsearch.setError("This Field is required!");
                }
                else {
            	showresult3.setText("");
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("locationsearch", locationsearch.getText().toString()));
             String response3 = null;
            

             //the search
             try {
        response3 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchlocation.php",postParameters); // your ip address if using localhost server
        String result3 = response3.toString();  
         //parse json data

            try{
                   
              JSONArray jArray = new JSONArray(result3);
                
                    jArray = new JSONArray(result3);
                    JSONObject json_data=null;
                    
                    
                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                            Log.i("log_tag","Full Names: "+
                           		 json_data.getString("full_names")+
                           		 json_data.getString("healthcentername")+
                           		 json_data.getString("specialization")+
                           		 json_data.getString("Location")+
                           		 json_data.getString("personalcontacts")
                            );


                            //Get an output to the screen
                            returnString3 += "Search Result"
                           		 +"\n" + "Full Names: \t"+ json_data.getString("full_names")
                           		 + "\n"+ 
                           		 "From: \t" + json_data.getString("healthcentername")
                           		 + " \n"+ 
                           		 "Specialize in: \t" +json_data.getString("specialization")
                           		 + " \n"+ 
                           		 "Health Centre Location: \t" +json_data.getString("Location")
                           		 + " \n"+ 
                           		 "Personal Contacts: \t" +json_data.getString("personalcontacts")
                           		 + " \n"+ 
                           		 ".................................................................................................."  
                        		+"\n" 
                           		 ;
                    }
            }
            catch(JSONException e){
             	  showresult5.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                    Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
            	showresult3.setText(returnString3);
            	showresult.setText("");
            	showresult2.setText("");
            	showresult4.setText("");
           	 
           	 
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
        
        //search by area of specialization
        searchbtn4.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v) {
            	int len1 = specialsearch.length();
                
                if (len1 <=0){
                	specialsearch.setError("This Field is required!");
                }
                else {
            	showresult4.setText("");
            	
             ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
             postParameters.add(new BasicNameValuePair("specialsearch", specialsearch.getText().toString()));
             String response4 = null;
            

             //the search
             try {
        response4 = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/searchspecial.php",postParameters); // your ip address if using localhost server
        String result4 = response4.toString();  
         //parse json data

            try{
                   
              JSONArray jArray = new JSONArray(result4);
                
                    jArray = new JSONArray(result4);
                    JSONObject json_data=null;
                    
                    
                    for(int i=0;i<jArray.length();i++){
                             json_data = jArray.getJSONObject(i);

                            Log.i("log_tag","Full Names: "+
                           		 json_data.getString("full_names")+
                           		 json_data.getString("healthcentername")+
                           		 json_data.getString("specialization")+
                           		 json_data.getString("Location")+
                           		 json_data.getString("personalcontacts")
                            );


                            //Get an output to the screen
                            returnString4 += "Search Result"
                           		 +"\n" + "Full Names: \t"+ json_data.getString("full_names")
                           		 + "\n"+ 
                           		 "From: \t" + json_data.getString("healthcentername")
                           		 + " \n"+ 
                           		 "Specialize in: \t" +json_data.getString("specialization")
                           		 + " \n"+ 
                           		 "Health Centre Location: \t" +json_data.getString("Location")
                           		 + " \n"+ 
                           		 "Personal Contacts: \t" +json_data.getString("personalcontacts")
                           		 + " \n"+ 
                           		 ".................................................................................................."  
                        		+"\n" 
                           		 ;
                    }
            }
            catch(JSONException e){
             	  showresult5.setText("No match found. This can be caused by error in Internet Connection or invalid use of words. Please check your Internet settings and try again!");
                    Log.e("log_tag", "Error parsing data "+e.toString());
            }
            try{
            	showresult4.setText(returnString4);
            	showresult.setText("");
            	showresult2.setText("");
            	showresult3.setText("");
           	 
           	 
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



