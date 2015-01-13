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


public class MoreAppointments extends Activity{
	
	EditText pswd;
	AutoCompleteTextView time;
	AutoCompleteTextView tomeet1;
	AutoCompleteTextView clinic_name2;
	EditText displayDate;
	TextView showresult;
	ImageButton pickDate;
	Button send_appointment;
	Button get_appo_response;
	Button btnLinkToHome;
	Button previous;
	String response;
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
	
	// string for specialist to meet
	String tomeetItem [] = { "Addiction psychiatrist",  
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
	
	 /** This integer will uniquely define the dialog to be used for displaying date picker.*/
    static final int DATE_DIALOG_ID = 0;
     
    /** Callback received when the user "picks" a date in the dialog */
    private DatePickerDialog.OnDateSetListener pDateSetListener =
            new DatePickerDialog.OnDateSetListener() {
 
                public void onDateSet(DatePicker view, int year ,
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
        setContentView(R.layout.more_appointments);
        
     // Importing all assets like buttons, text fields 	
        pswd = (EditText) findViewById(R.id.pswd); 
        displayDate = (EditText) findViewById(R.id.displayDate);  
        showresult  = (TextView) findViewById(R.id.showresult);
        time = (AutoCompleteTextView) findViewById(R.id.time); 
        tomeet1 = (AutoCompleteTextView) findViewById(R.id.tomeet1);
        clinic_name2 = (AutoCompleteTextView)findViewById(R.id.clinic_name2);      
        
	     
	    //for clinic names 
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,item);
	        AutoCompleteTextView auto = (AutoCompleteTextView)findViewById(R.id.clinic_name2);
	        auto.setAdapter(adapter);
	        
	        //for medical specialist
	        ArrayAdapter<String> adapter2 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,tomeetItem);
	        AutoCompleteTextView auto2 = (AutoCompleteTextView)findViewById(R.id.tomeet1);
	        auto2.setAdapter(adapter2);
	        
	        //for time
	        ArrayAdapter<String> adapter3 = new ArrayAdapter<String>(this,android.R.layout.simple_dropdown_item_1line,timeitem);
	        AutoCompleteTextView auto3 = (AutoCompleteTextView)findViewById(R.id.time);
	        auto3.setAdapter(adapter3);

        
        send_appointment = (Button) findViewById(R.id.send_appointment); 
        pickDate = (ImageButton) findViewById(R.id.pickDate);
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome); 
        get_appo_response = (Button) findViewById(R.id.get_appo_response); 
        previous = (Button) findViewById(R.id.previous);
        
        
      //assigning button click events in order
        /** Listener for click event of the button */
        pickDate.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                showDialog(DATE_DIALOG_ID);
            }
        });
        
        //assigning button click events in order
        send_appointment.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {

                int len = tomeet1.length();
                int len1 = clinic_name2.length();
                int len2 = displayDate.length();
                int len3 = time.length();
                int len4 = pswd.length();
                if (len<=0)
                {
                	tomeet1.setError("This Field is required!");
                }
                else if (len1 <=0){
                	clinic_name2.setError("This Field is required!");
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
            postParameters.add(new BasicNameValuePair("clinic_name2", clinic_name2.getText().toString()));
            postParameters.add(new BasicNameValuePair("displayDate", displayDate.getText().toString()));
             postParameters.add(new BasicNameValuePair("time", time.getText().toString()));
             postParameters.add(new BasicNameValuePair("tomeet1", tomeet1.getText().toString()));
            
        try {
			response = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/insert_more_appointment.php",postParameters);
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

        get_appo_response.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						ResponseAppointment.class);
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
						SendApntmntActivity.class);
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


