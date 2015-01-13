package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;


public class MenuActivity extends Activity{
	
	ImageButton ToApntmnt;
	ImageButton ToCheckUp;
	ImageButton btnLinkToMyFile;
	ImageButton ToService;
	ImageButton ToVaccination;
	ImageButton ToTherapy;
	ImageButton ToMother;
	ImageButton ToPrescription;
	ImageButton ToHome1;
	ImageButton btnLinkToMyID;
	ImageButton Toexit;
	ImageButton search;
	ImageButton insuranceMenu;
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.menu);
        
     // Importing all assets like buttons, text fields 	
        
        ToApntmnt = (ImageButton) findViewById(R.id.ToApntmnt);
        ToCheckUp = (ImageButton) findViewById(R.id.ToCheckUp);
        ToService = (ImageButton) findViewById(R.id.ToService); //counselling services
        ToVaccination = (ImageButton) findViewById(R.id.ToVaccination);
        ToTherapy = (ImageButton) findViewById(R.id.ToTherapy);
        ToMother= (ImageButton) findViewById(R.id.ToMother);
        ToPrescription = (ImageButton) findViewById(R.id.ToPrescription);
        ToHome1 = (ImageButton) findViewById(R.id.ToHome1); 
        btnLinkToMyFile = (ImageButton) findViewById(R.id.btnLinkToMyFile); 
        btnLinkToMyID = (ImageButton) findViewById(R.id.btnLinkToMyID); 
        Toexit = (ImageButton) findViewById(R.id.Toexit);
        search = (ImageButton) findViewById(R.id.search);
        insuranceMenu = (ImageButton) findViewById(R.id.insuranceMenu);
       
        
        //assigning button click events in order
        ToHome1.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToApntmnt.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						SendApntmntActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToCheckUp.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						CheckUpActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToPrescription.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						PrescriptionActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToService.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						CounsellingActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToVaccination.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						VaccinationActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToTherapy.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						PhysiotherapyActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        ToMother.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MotherChildActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToMyFile.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MyFileActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnLinkToMyID.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MyIDActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        search.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						SearchActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        insuranceMenu.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						InsuranceMenu.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        Toexit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
        
    }


}
