package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;


public class InsuranceMenu extends Activity{
	
	ImageButton btnToMystatus;
	ImageButton btnToHC;
	ImageButton btnToBundles;
	ImageButton btnAdd;
	ImageButton btnView;
	ImageButton btnEdit;
	ImageButton btnDelete;
	ImageButton btnComplains;
	ImageButton exit;
	ImageButton home;
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.insurance_menu);
        
     // Importing all assets like buttons, text fields 	
        
        btnToMystatus = (ImageButton) findViewById(R.id.btnToMystatus);
        btnToHC = (ImageButton) findViewById(R.id.btnToHC);
        btnToBundles = (ImageButton) findViewById(R.id.btnToBundles); //counselling services
        btnAdd = (ImageButton) findViewById(R.id.btnAdd);
        btnView = (ImageButton) findViewById(R.id.btnView);
        btnEdit= (ImageButton) findViewById(R.id.btnEdit);
        btnDelete = (ImageButton) findViewById(R.id.btnDelete);
        btnComplains = (ImageButton) findViewById(R.id.btnComplains); 
        exit = (ImageButton) findViewById(R.id.exit); 
        home = (ImageButton) findViewById(R.id.home); 
        
       
        
        //assigning button click events in order
        home.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnToMystatus.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						InsuranceStatusActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnToHC.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						SearchHCActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnToBundles.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						ViewBundle.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnAdd.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						AddBeneficary.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnView.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						ViewBeneficiary.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnEdit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						EditBeneficiary.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnDelete.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						DeleteBeneficiary.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        btnComplains.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
				Intent i = new Intent(getApplicationContext(),
						Complain.class);
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
