package ernest.city.survicor;


import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;


public class Success extends Activity{

	Button buttonOky;
	

@Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Main Menu", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MenuApp.class);
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
        setContentView(R.layout.success);
        
     // Importing all assets like buttons, text fields 	
       
        buttonOky = (Button) findViewById(R.id.buttonOky); 
       
        
        //assigning button click events in order
       
        
        buttonOky.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						Register.class);
				startActivity(i);
				finish();
			} 
		}); 
       
        Toast.makeText(this, "Successfully Sent!", Toast.LENGTH_LONG).show();  
        
        
        
    }

	
        
      
}


