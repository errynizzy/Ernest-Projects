package ernest.m.vigour;

import java.util.ArrayList;
import java.util.Calendar;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.app.DatePickerDialog;
import android.app.Dialog;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;


public class MoreCheckup extends Activity{
	
	EditText pswd;
	AutoCompleteTextView clinic_name4;
	EditText displayDate;
	AutoCompleteTextView time;
	AutoCompleteTextView issue1;
	TextView showresult;
	Button send_request2;
	Button get_response;
	Button btnLinkToHome;
	ImageButton pickDate;
	String response;
	Button previous;
	Button btnLinkToMore;
	int pYear;
    int pMonth;
    int pDay;
    
    //string for clinic name
 	String item[]={
 			  "Amar Medical Centre","Allied Medical & Physiotherapy Services","Bunawona Clinic", "Byansi Medical Clinic", 
 			  "Capital Medical Clinic", "CS3202","CS3203","Care Clinic","Crane Medical & Laboratory Services Ltd",
 			   "Dosam Medical Care Clinic", "Dr. Ganaga E.J Medical Clinic", "Dr. P.O. Aliker Clinic","Family Planning Association Of Uganda - Model Clinic",
 			   "Gwatiro Nursing Home", "Hoima Islamic Health Centre", "International Air Ambulance (IAA)", "Joda Clinic"
 			   };
 	//string for time autocomplete
 			String timeitem[]={"Morning", "Evening", "Afternoon", "Day Time", "Night Time","12.00am", "12.30am", "1.00am","1.30am", "2.00am",
 					"2.30am", "3.00am", "3.30am", "4.00am","4.30am","5.00am", "5.30am","6.00am","6.30am","7.00am","7.30am","8.00am","8.30am",
 					"9.00am","10.00am","10.30am","11.00am","11.30am","12.00pm","12.30pm","1.00pm","1.30pm", "2.00pm",
 					"2.30pm", "3.00pm", "3.30pm", "4.00pm","4.30pm","5.00pm", "5.30pm","6.00pm","6.30pm","7.00pm","7.30pm","8.00pm","8.30pm",
 					"9.00pm","10.00pm","10.30pm","11.00pm","11.30pm"
 					  
 					   };
 			
 	//string for issue autocomplete
 			String issueitem[]={
 					"General Blood Testing",
 					"Basic Blood Test (CMP+CBC+UA)",
 					"The Essential Health Screen (CMP, CBC + Lipid)",
 					"Complete Blood Count (CBC), with Differential",
 					"Metabolic Panel (14), Comprehensive",
 					"Blood Type Test (ABO Grouping and Rho Typing)",
 					"Health Check - Male Level 1",
 					"Health Check - Male Level 2",
 					"Health Check - Female Level 1 ",
 					"Health Check - Female Level 2 ",
 					"Heart & Cholesterol Blood Testing",
 					"The Essential Health Screen (CMP, CBC + Lipid)",
 					"Heart Health Screening - Level 1",
 					"Heart Health Screening - Level 2",
 					"Statin Check Up",
 					"Lipid Profile (LP) Blood Test",
 					"NMR LipoProfile Blood Test",
 					"CRP (C-Reactive Protein) Cardiac Blood Test",
 					"Homocysteine Blood Test",
 					"The VAP Cholesterol Test",
 					"B-Type Natriuretic Peptide (BNP) Blood Test",
 					"Random Microalbumin, Urine",
 					"Coenzyme Q10, Total",
 					"Erythrocyte Sedimentation Rate (ESR or sed rate)",

 					"Liver Testing",
 					"Liver Function Test",
 					"ALT (SGPT) Blood Test",
 					"Hepatitis A Antibody (Total) Blood Test",
 					"Hepatitis B Surface Antigen Blood Test ",
 					"Hepatitis C Virus (HCV) Antibody Blood Test",
 					"Amylase Blood Test ",
 					"Lipase Blood Test ",
 					"Diabetes Blood Testing",
 					"Glycohemoglobin (GHB), Total ",
 					"Glucose, Serum ",
 					"HgbA1c (Hemoglobin A1c) Blood Test ",
 					"C-Peptide, Serum ",
 					"Random Microalbumin, Urine ",
 					"Thyroid Blood Testing",
 					"Thyroid Function Test Level 1 ",
 					"Thyroid Function Test Level 2 ",
 					"Thyroid Profile (T3T4T7) Blood Test ",
 					"TSH (Thyroid-Stimulating Hormone) Blood Test ",
 					"T3 Blood Test ",
 					"T4 Blood Test ",
 					"Parathyroid Hormone (PTH), Intact Blood Test ",
 					"Thyroid Peroxidase (TPO) Antibodies Blood Test",
 					"Prostate (PSA) Testing",
 					"Prostate Check (PSA Test)",
 					"Prostate-Specific Antigen (PSA), Free: Total Ratio ",
 					"Cancer Screening",
 					"Male Cancer Screening",
 					"Female Cancer Screening",
 					"CEA (Carcinoembryonic Antigen) Blood Test",
 					"AFP (Alpha-Fetoprotein) Tumor Marker ",
 					"Cancer Antigen 125 (CA-125) Blood Test",
 					"Cancer Antigen 27.29 (CA 27.29) Blood Test",
 					"Cancer Antigen 19-9 (CA 19-9) Blood Test",
 					"Beta-HCG Tumor Marker",
 					"Erythrocyte Sedimentation Rate (ESR or sed rate)",
 					"Amylase Blood Test",
 					"Lipase Blood Test",
 					"Hormone Levels",
 					"Anti-Aging Panel:  Men Level 1",
 					"Anti-Aging Panel:  Men Level 2",
 					"Anti-Aging Panel:  Men Level 3 ",
 					"Anti-Aging:  Women Level 1 ",
 					"Anti-Aging:  Women Level 2 ",
 					"Anti-Aging:  Women Level 3 ",
 					"Dehydroepiandrosterone (DHEA) Blood Test",
 					"Dehydroepiandrosterone (DHEA) Sulfate Blood Test",
 					"Testosterone, Total - Male Hormone Blood Test",
 					"Testosterone, Free (Direct) Blood Test ",
 					"Testosterone, Free & Total Blood Test ",
 					"Human Growth Hormone (HGH) Blood Test",
 					"IGF-1 (Insulin Like Growth Factor) Blood Test",
 					"Estrogens, Total ",
 					"Estradiol Blood Test",
 					"Progesterone Blood Test",
 					"Sex Hormone Binding Globulin (SHBG) Blood Test", 
 					"Follicle Stimulating Hormone (FSH) Blood Test",
 					"Prolactin Blood Test",
 					"LH (Luteinizing Hormone) Blood Test",
 					"Cortisol Blood Test",
 					"Pregnancy",
 					"Pregnancy Test, Blood ",
 					"Pregnancy Test, Urine ",
 					"Arthritis",
 					"Antinuclear Antibodies (ANA) Blood Test ",
 					"Rheumatoid Factor (RF) Blood Test  ",
 					"STD Testing",
 					"STD Testing Peace of Mind Level I",
 					"STD Testing Peace of Mind Level II ",
 					"Early HIV Detection (DNA PCR Test) ",
 					"Recent Exposure STD Testing (Early Detection HIV)",
 					"HIV Blood Test",
 					"Chlamydia & Neisseria gonorrhoeae (NAA) (Urine Test)",
 					"Virus STD Panel",
 					"Bacterial STD Panel",
 					"Syphilis - Rapid Plasma Reagin (RPR) Blood Test",
 					"Herpes Simplex Virus (I/II, IgG)",
 					"Hepatitis A Antibody (Total) Blood Test",
 					"Hepatitis B Surface Antigen Blood Test",
 					"Hepatitis C Virus (HCV) Antibody Blood Test",
 					"Hepatitis A, B, and C Blood Test Panel",
 					"Vitamins & Nutrition",
 					"Vitamin Profile Blood Test Panel",
 					"Celiac Disease Antibody Screening",
 					"Beta Carotene Blood Test",
 					"Folate-Folic Acid-Blood Test",
 					"Iron and Total Iron Binding Capacity Test",
 					"Iron, Serum",
 					"Selenium, Serum",
 					"Vitamin A, Serum",
 					"Vitamin A, E, and Beta Carotene Profile",
 					"Vitamin B1 Blood Test",
 					"Vitamin B6 Blood Test",
 					"Vitamin B12 Blood Test",
 					"Vitamin B12 and Folates Blood Test",
 					"Vitamin C Blood Test", 
 					"Vitamin D, 1, 25 Hydroxy Blood Test",
 					"Vitamin D, 25-Hydroxy Blood Test",
 					"Vitamin E, Serum ",
 					"Vitamin K1, Serum",
 					"Zinc, Plasma",
 					"Gastrointestinal",
 					"H. pylori (Helicobacter pylori Antibodies, IgG) Blood Test",
 					"Lyme Disease Antibodies, IgM Blood Test",
 					"Hemoglobin (Hb) Solubility - Sickle Cell Anemia Blood Test"

 					
 			};
 			
 	 
 	
    
    
    /** This integer will uniquely define the dialog to be used for displaying date picker.*/
    static final int DATE_DIALOG_ID = 0;
     
    /** Callback received when the user "picks" a date in the dialog */
    private DatePickerDialog.OnDateSetListener pDateSetListener =
            new DatePickerDialog.OnDateSetListener() {
 
                public void onDateSet(DatePicker view, int year,
                                      int monthOfYear, int dayOfMonth) {
                    pYear = year;
                    pMonth = monthOfYear;
                    pDay = dayOfMonth;
                    updateDisplay();
                    displayToast();
                }
            };
     
    /** Updates the date in the TextView */
    private void updateDisplay() {
        displayDate.setText(
            new StringBuilder()
                    // Month is 0 based so add 1
                    .append(pMonth + 1).append("/")
                    .append(pDay).append("/")
                    .append(pYear).append(" "));
    }
     
    /** Displays a notification when the date is updated */
    private void displayToast() {
        Toast.makeText(this, new StringBuilder().append("Date choosen is ").append(displayDate.getText()),  Toast.LENGTH_SHORT).show();
             
    }
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.more_checkup);
        
     // Importing all assets like buttons, text fields 	
        clinic_name4 = (AutoCompleteTextView) findViewById(R.id.clinic_name4); 
        displayDate = (EditText) findViewById(R.id.displayDate); 
        time = (AutoCompleteTextView) findViewById(R.id.time); 
        issue1 = (AutoCompleteTextView) findViewById(R.id.issue1);
        showresult  = (TextView) findViewById(R.id.showresult);
        pswd = (EditText) findViewById(R.id.pswd); 
        send_request2 = (Button) findViewById(R.id.send_request2); 
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome); 
        get_response = (Button) findViewById(R.id.get_response); 
        previous = (Button) findViewById(R.id.previous);
        pickDate = (ImageButton) findViewById(R.id.pickDate);
        btnLinkToMore = (Button) findViewById(R.id.btnLinkToMore);
        
        
        //for clinic names 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.clinic_name4);
	        auto.setAdapter(adapter);
	        
	      //for time
	        ArrayAdapter<String> adapter3 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,timeitem);
	        AutoCompleteTextView auto3 = (AutoCompleteTextView)findViewById(R.id.time);
	        auto3.setAdapter(adapter3);
	        
	        //for check up test issue
	        ArrayAdapter<String> adapter2 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,issueitem);
	        AutoCompleteTextView auto2 = (AutoCompleteTextView)findViewById(R.id.issue1);
	        auto2.setAdapter(adapter2);
        
        
        
      //assigning button click events in order
        /** Listener for click event of the button */
        pickDate.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                showDialog(DATE_DIALOG_ID);
            }
        });
        
        
        //assigning button click events in order
        send_request2.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View view) {
            	int len = issue1.length();
                int len1 = clinic_name4.length();
                int len2 = displayDate.length();
                int len3 = time.length();
                int len4 = pswd.length();
                if (len<=0)
                {
                	issue1.setError("This Field is required!");
                }
                else if (len1 <=0){
                	clinic_name4.setError("This Field is required!");
                }
                else if (len2 <=0){
                	displayDate.setError("This Field is required!");
                }
                else if (len3 <=0){
                	time.setError("This Field is required!");
                }
                else if (len4 <=0){
                	pswd.setError("This Field is required!");
                }
             
                
                else {
            	
            ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
            postParameters.add(new BasicNameValuePair("pswd", pswd.getText().toString()));  
            postParameters.add(new BasicNameValuePair("clinic_name4", clinic_name4.getText().toString()));
             postParameters.add(new BasicNameValuePair("displayDate", displayDate.getText().toString()));
             postParameters.add(new BasicNameValuePair("time", time.getText().toString()));
             postParameters.add(new BasicNameValuePair("issue1", issue1.getText().toString()));
        try {
			response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/insert_more_checkup.php",postParameters);
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
						CheckUpActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
        get_response.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						ResponseCheckup.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        /** Get the current date */
        final Calendar cal = Calendar.getInstance();
        pYear = cal.get(Calendar.YEAR);
        pMonth = cal.get(Calendar.MONTH);
        pDay = cal.get(Calendar.DAY_OF_MONTH);
 
        /** Display the current date in the TextView */
        updateDisplay();
    }
     
    /** Create a new dialog for date picker */
    @Override
    protected Dialog onCreateDialog(int id) {
        switch (id) {
        case DATE_DIALOG_ID:
            return new DatePickerDialog(this,
                        pDateSetListener,
                        pYear, pMonth, pDay);
        }
        return null;
        
        
    }

	
        
      
}

