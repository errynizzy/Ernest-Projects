package ernest.m.vigour;

import android.app.Activity;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;


public class SuccessActivity extends Activity{

	Button btnLinkToHome;
	Button previous_menu;
	
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.success);
        
     // Importing all assets like buttons, text fields 	
       
        btnLinkToHome = (Button) findViewById(R.id.btnLinkToHome); 
        previous_menu = (Button) findViewById(R.id.previous_menu);
       
        
        //assigning button click events in order
       
        
        btnLinkToHome.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
       
        Toast.makeText(this, "Successfully Sent!", Toast.LENGTH_LONG).show();  
        
        
        previous_menu.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MenuActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
    }

	
        
      
}

