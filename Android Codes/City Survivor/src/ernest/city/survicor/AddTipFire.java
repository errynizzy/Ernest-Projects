package ernest.city.survicor;

import java.util.ArrayList;
import java.util.List;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;

public class AddTipFire extends Activity {
	
	Button buttonSubmit;
	Button buttonClear;
	Button buttonBack;
	Button buttonExit;
	String response;
	TextView showresult;
	
	EditText editTextID;
	EditText editTextTip;
	Spinner spinnerSelectCrop;
	String returnString;
	String bb;
	
	@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								AddTipMenuActivity.class);
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
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.add_tip_fire);
        
        buttonSubmit = (Button) findViewById(R.id.buttonSubmit);
        buttonClear = (Button) findViewById(R.id.buttonClear);
        buttonBack = (Button) findViewById(R.id.buttonBack);
        buttonExit = (Button) findViewById(R.id.buttonExit);
        showresult  = (TextView) findViewById(R.id.showresult);
        editTextID = (EditText) findViewById(R.id.editTextID);
        editTextTip = (EditText) findViewById(R.id.editTextTip);
        
        
        addItemsOnspinnerCrops();
     	addListenerOnSpinnerItemSelection1();
     	
    
        
        
        //button actions
        buttonExit.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		 finish();
                 System.exit(0);
			} 
		}); 
        
        buttonClear.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						AddTipFire.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        buttonBack.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						AddTipMenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
        
        
        
        //dont mess with this button.....hahahaaaa
        buttonSubmit.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {
            	//Integer nameLen = 60;

                int len = editTextID.length();
                int len1 = editTextTip.length();
             
                if (len<=0)
                {
                	editTextID.setError("This Field is required!");
                }
                else if (len1 <=0){
                	editTextTip.setError("This Field is required!");
                }
                
            
                else {
                  	
                    ArrayList<NameValuePair> postParameters1 = new ArrayList<NameValuePair>();
                    postParameters1.add(new BasicNameValuePair("editTextID", editTextID.getText().toString()));
                    postParameters1.add(new BasicNameValuePair("editTextTip", editTextTip.getText().toString()));
                    postParameters1.add(new BasicNameValuePair("spinnerSelectCrop", spinnerSelectCrop.getSelectedItem().toString()));
                    
                try {
        			response = CustomHttpClient.executeHttpPost("http://www.mvigour.com/cs/addtip.php",postParameters1);
        			Intent i = new Intent(getApplicationContext(),
        					SuccessAddTip.class);
    				startActivity(i);
    				finish();
        			
        			
        			
        		} catch (Exception e) {
        			// TODO Auto-generated catch block
        			
        			showresult.setText("Error in Internet Connection. Registration Failed. Please check your Internet settings and Try again");
        			e.printStackTrace();
        		}
                
          
             
                }
	 } 
                 
});
        
        
        
        
	}
	
	 // add items into spinner dynamically
	 
	  public void addItemsOnspinnerCrops() {
			 
		  spinnerSelectCrop = (Spinner) findViewById(R.id.spinnerSelectCrop);
		List<String> list1 = new ArrayList<String>();
		list1.add("Preventing Fire");
		list1.add("Fire Fighting");
		list1.add("Fire Sensors");


		
		ArrayAdapter<String> dataAdapter1 = new ArrayAdapter<String>(this,
			android.R.layout.simple_spinner_item, list1);
		dataAdapter1.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
		spinnerSelectCrop.setAdapter(dataAdapter1);

}
	  
	 
	  
	  public void addListenerOnSpinnerItemSelection1() {
		  
		  spinnerSelectCrop.setOnItemSelectedListener(new CustomOnItemSelectedListener1());
 	  }
 	 

}

