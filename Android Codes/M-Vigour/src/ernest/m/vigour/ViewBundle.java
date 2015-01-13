
package ernest.m.vigour;

import android.app.Activity;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.Button;


public class ViewBundle extends Activity{
	
	
	
	
	Button previous;
	Button exit;
	Button home;
	
	
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.view_bundles);
        
     // Importing all assets like buttons, text fields 	
       
        exit = (Button) findViewById(R.id.exit); 
        previous = (Button) findViewById(R.id.previous); 
        home = (Button) findViewById(R.id.home); 
        
     
       
        
		        home.setOnClickListener(new View.OnClickListener() {
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
