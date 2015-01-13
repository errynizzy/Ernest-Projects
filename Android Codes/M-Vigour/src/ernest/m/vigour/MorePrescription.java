package ernest.m.vigour;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class MorePrescription extends Activity{
	
	EditText pswd;
	AutoCompleteTextView clinic_name3;
	AutoCompleteTextView problem2;
	EditText symptoms2;
	Button send_request2;
	TextView showresult;
	Button get_response;
	Button btnLinkToHome;
	String response;
	Button previous;
	Button btnLinkToMore;
	
	//string for clinic name
 	String item[]={
 			  "Amar Medical Centre","Allied Medical & Physiotherapy Services","Bunawona Clinic", "Byansi Medical Clinic", 
 			  "Capital Medical Clinic", "CS3202","CS3203","Care Clinic","Crane Medical & Laboratory Services Ltd",
 			   "Dosam Medical Care Clinic", "Dr. Ganaga E.J Medical Clinic", "Dr. P.O. Aliker Clinic","Family Planning Association Of Uganda - Model Clinic",
 			   "Gwatiro Nursing Home", "Hoima Islamic Health Centre", "International Air Ambulance (IAA)", "Joda Clinic"
 			   };
 	
 	//string for common problems
 	String problemitem[]={
 			"Acid Reflux",
 			"Acne",
 			"Acne in Early Pregnancy",
 			"Age Spots",
 			"Allergies",
 			"Anemia",
 			"Anemia (during pregnancy)",
 			"Angina (causes)",
 			"Angina (signs and symptoms)",
 			"Angina (natural cure)",
 			"Anxiety",
 			"Asthma",
 			"Atherosclerosis",
 			"Atherosclerosis (causes)",
 			"Atherosclerosis (symptoms)",
 			"Atherosclerosis (reversal)",
 			"Athlete's Foot",
 			"Attention Deficit Hyperactivity Disorder (ADHD)",
 			"Back Pain",
 			"Bad Breath (Halitosis)",
 			"Blood Pressure (High)",
 			"Boils",
 			"Bronchitis",
 			"Bursitis (causes and symptoms)",
 			"Bursitis (natural treatment)",

 			"Candidiasis (Thrush, Yeast Infections)",
 			"Canker Sores",
 			"Carpal Tunnel Syndrome",
 			"Cold Sores",
 			"Colic",
 			"Common Colds",
 			"Constipation (during pregnancy)",
 			"Cough",
 			"Cradle Cap",
 			"Dandruff",
 			"Depression (symptoms)",
 			"Depression (natural treatments)",
 			"Diarrhea",
 			"Dizziness",

 			"Ear Infections (symptoms and causes)",
 			"Ear Infections (home remedies)",
 			"Edema (during pregnancy)",
 			"Eczema",
 			"Erectile Dysfunction",
 			"Fever Blisters",
 			"Fibromyalgia",
 			"Flu",
 			"Food Poisoning",

 			"Genital Herpes",
 			"Gout",
 			"Hair Loss",
 			"Halitosis (bad breath)",
 			"Heartburn (during pregnancy)",
 			"Hemorrhoids",
 			"Hiatal Hernia",
 			"Hives",
 			"Hypertension",
 			"Hypothyroidism",

 			"Influenza",
 			"Insomnia",

 			"Kidney Stones",
 			"Laryngitis",
 			"Leg Cramps (during pregnancy)",
 			"Liver Spots",

 			"Menopause",
 			"Migraines",
 			"Morning Sickness",
 			"Norwegian Scabies",

 			"Obesity and Weight Loss",
 			"Osteoporosis",
 			"Pimples",
 			"Prostate Enlargement",
 			"Prostatitis",
 			"Psoriasis",

 			"Ringworm",
 			"Rosacea",

 			"Scabies",
 			"Scabies ",
 			"Shingles",
 			"Shingles ",
 			"Sinus Infection (Sinusitis)",
 			"Sore Throat", 
 			"Sore Throat", 
 			"Strep Throat", 
 			"Strep Throat", 
 			"Stretch Marks",
 			"Tinnitus",
 			"Thrush",

 			"Urinary Tract Infections (UTI)",
 			"Vaginal Inflammation",
 			"Varicose Veins",
 			"Vertigo",
 			"Warts",

 			"Yeast Infections"

 	};
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.more_prescription);
        
     // Importing all assets like buttons, text fields 	
        clinic_name3 = (AutoCompleteTextView) findViewById(R.id.clinic_name3); 
        problem2 = (AutoCompleteTextView) findViewById(R.id.problem2); 
        symptoms2 = (EditText) findViewById(R.id.symptoms2); 
        pswd = (EditText) findViewById(R.id.pswd);
        showresult  = (TextView) findViewById(R.id.showresult);
        send_request2 = (Button) findViewById(R.id.send_request2); 
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome); 
        get_response = (Button) findViewById(R.id.get_response); 
        previous = (Button) findViewById(R.id.previous);
        btnLinkToMore = (Button) findViewById(R.id.btnLinkToMore);
        
      //for clinic names 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.clinic_name3);
	        auto.setAdapter(adapter);
	        
	        //for problems 
	        ArrayAdapter<String> adapter1 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,problemitem);
		        AutoCompleteTextView auto1 = (AutoCompleteTextView)findViewById(R.id.problem2);
		        auto1.setAdapter(adapter1);
        
        
        //assigning button click events in order
        send_request2.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View view) {
                int len1 = clinic_name3.length();
                int len2 = symptoms2.length();
                int len3 = problem2.length();
                int len4 = pswd.length();
              
                if (len1 <=0){
                	clinic_name3.setError("This Field is required!");
                }
                else if (len2 <=0){
                	symptoms2.setError("This Field is required!");
                }
                else if (len3 <=0){
                	problem2.setError("This Field is required!");
                }
                else if (len4 <=0){
                	pswd.setError("This Field is required!");
                }
             
                
                else {
            	
            	
            ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
            postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));  
            postParameters.add(new BasicNameValuePair("clinic_name3", clinic_name3.getText().toString()));
             postParameters.add(new BasicNameValuePair("problem2", problem2.getText().toString()));
             postParameters.add(new BasicNameValuePair("symptoms2", symptoms2.getText().toString()));
        try {
			response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/insert_more_prescription.php",postParameters);
			Intent i = new Intent(getApplicationContext(),
					SuccessActivity.class);
			startActivity(i);
			finish();
			
		} catch (Exception e) {
			showresult.setText("Error in Internet Connection. Your request is not sent. Please check your Internet settings and Try again!");
			e.printStackTrace();
		}  
        
        
	 } 
            }
            
});

        get_response.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						PrescriptionResponse.class);
				startActivity(i);
				finish();
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
						PrescriptionActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
       
        
    }

	
        
      
}

